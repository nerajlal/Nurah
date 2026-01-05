<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Bundle;
use App\Models\Cart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display the shopping cart.
     */
    public function index()
    {
        if (Auth::check()) {
            self::syncSession(Auth::id());
            $cart = $this->getCartFromDb();
        } else {
            $cart = session()->get('cart', []);
        }

        $total = 0;
        foreach($cart as $id => $details) {
            $total += $details['price'] * $details['quantity'];
        }
        
        return view('nurah.cart', compact('cart', 'total'));
    }

    /**
     * Add an item to the cart.
     */
    public function add(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity ?? 1;
        $size = $request->size;
        
        $product = Product::find($id);
        
        if(!$product) {
            return response()->json(['success' => false, 'message' => 'Product not found!'], 404);
        }

        // Price Logic
        $price = $product->starting_price;
        if($size) {
            $variant = $product->variants()->where('size', $size)->first();
            if($variant) $price = $variant->price;
        }

        // Cart Key for Session
        $cartKey = $id . ($size ? '-' . $size : '');

        if (Auth::check()) {
            // DB Logic
            $cartItem = Cart::where('user_id', Auth::id())
                ->where('product_id', $id)
                ->where('size', $size)
                ->first();

            if ($cartItem) {
                $cartItem->quantity += $quantity;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => Auth::id(),
                    'product_id' => $id,
                    'quantity' => $quantity,
                    'size' => $size
                ]);
            }
            
            // Re-fetch full cart for count/consistency
            $cart = $this->getCartFromDb();
            
        } else {
            // Session Logic
            $cart = session()->get('cart', []);
            
            if(isset($cart[$cartKey])) {
                $cart[$cartKey]['quantity'] += $quantity;
            } else {
                $cart[$cartKey] = [
                    "product_id" => $product->id,
                    "name" => $product->title,
                    "quantity" => $quantity,
                    "price" => $price,
                    "image" => $product->main_image_url,
                    "size" => $size
                ];
            }
            session()->put('cart', $cart);
        }
        
        // Calculate count
        $count = 0;
        foreach($cart as $item) $count += $item['quantity'];
        
        return response()->json([
            'success' => true, 
            'message' => 'Product added to cart!',
            'cartCount' => $count
        ]);
    }

    /**
     * Update cart item quantity.
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity) {
            if (Auth::check()) {
                // DB Logic - ID here is tricky. 
                // Session uses complex key "ID-SIZE". DB uses Primary Key ID.
                // But wait, the frontend sends the Session Key as "id". 
                // We need to parse it OR fetch by attributes.
                // Assuming "id" passed from frontend is the Session Key (productID-Size).
                
                // PARSING LOGIC:
                $parts = explode('-', $request->id);
                $productId = $parts[0];
                $size = isset($parts[1]) ? $parts[1] : null;

                $cartItem = Cart::where('user_id', Auth::id())
                    ->where('product_id', $productId)
                    ->where('size', $size)
                    ->first();
                
                if ($cartItem) {
                    $cartItem->quantity = $request->quantity;
                    $cartItem->save();
                }
                
                $cart = $this->getCartFromDb();

            } else {
                // Session Logic
                $cart = session()->get('cart');
                $cartKey = $request->id;
                
                if(isset($cart[$cartKey])) {
                    $cart[$cartKey]['quantity'] = $request->quantity;
                    session()->put('cart', $cart);
                }
            }
            
            // Recalculate
            // Note: need to find specific item total for response
            $itemTotal = 0;
            // The request->id matches the array key in both Auth and Session-mapped-array methods
            if(isset($cart[$request->id])) {
                $itemTotal = $cart[$request->id]['price'] * $cart[$request->id]['quantity'];
            }

            $cartTotal = 0;
            $count = 0;
            foreach($cart as $item) {
                $cartTotal += $item['price'] * $item['quantity'];
                $count += $item['quantity'];
            }
            
            return response()->json([
                'success' => true, 
                'itemTotal' => $itemTotal,
                'cartTotal' => $cartTotal,
                'cartCount' => $count
            ]);
        }
        
        return response()->json(['success' => false], 400);
    }

    /**
     * Remove item from cart.
     */
    public function remove(Request $request)
    {
        if($request->id) {
            
            if (Auth::check()) {
                // Parsing logic again
                $parts = explode('-', $request->id);
                $productId = $parts[0];
                $size = isset($parts[1]) ? $parts[1] : null;

                Cart::where('user_id', Auth::id())
                    ->where('product_id', $productId)
                    ->where('size', $size)
                    ->delete();
                    
                $cart = $this->getCartFromDb();

            } else {
                $cart = session()->get('cart');
                if(isset($cart[$request->id])) {
                    unset($cart[$request->id]);
                    session()->put('cart', $cart);
                }
            }
            
            // Recalculate
            $cartTotal = 0;
            $count = 0;
            if($cart) {
                foreach($cart as $item) {
                    $cartTotal += $item['price'] * $item['quantity'];
                    $count += $item['quantity'];
                }
            }

            return response()->json([
                'success' => true,
                'cartTotal' => $cartTotal,
                'cartCount' => $count,
                'isEmpty' => empty($cart)
            ]);
        }
        
        return response()->json(['success' => false], 400);
    }
    
    /**
     * Helper: Sync Session Cart to Database
     */
    public static function syncSession($userId)
    {
        $sessionCart = session()->get('cart', []);
        
        if (empty($sessionCart)) return;
        
        foreach ($sessionCart as $key => $details) {
            $productId = $details['product_id'];
            $size = $details['size'];
            $quantity = $details['quantity'];
            
            $cartItem = Cart::where('user_id', $userId)
                ->where('product_id', $productId)
                ->where('size', $size)
                ->first();
                
            if ($cartItem) {
                // Strategy: Add session qty to DB qty? Or overwrite? 
                // Usually Adding is safer/expected.
                $cartItem->quantity += $quantity;
                $cartItem->save();
            } else {
                Cart::create([
                    'user_id' => $userId,
                    'product_id' => $productId,
                    'quantity' => $quantity,
                    'size' => $size
                ]);
            }
        }
        
        // Clear session after sync
        session()->forget('cart');
    }
    
    /**
     * Helper: Fetch Cart from DB and format like Session Array
     */
    private function getCartFromDb()
    {
        $dbItems = Cart::where('user_id', Auth::id())->with('product.variants')->get();
        $cart = [];
        
        foreach ($dbItems as $item) {
            if (!$item->product) continue;
            
            $key = $item->product_id . ($item->size ? '-' . $item->size : '');
            
            // Calculate Price
            $price = $item->product->starting_price;
            if ($item->size) {
                $variant = $item->product->variants->where('size', $item->size)->first();
                if ($variant) $price = $variant->price;
            }
            
            $cart[$key] = [
                "product_id" => $item->product_id,
                "name" => $item->product->title,
                "quantity" => $item->quantity,
                "price" => $price,
                "image" => $item->product->main_image_url,
                "size" => $item->size
            ];
        }
        
        return $cart;
    }
}
