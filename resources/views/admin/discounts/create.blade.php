@extends('layouts.admin')

@section('title', 'Create Coupon')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h1 class="text-2xl font-bold text-gray-900">Create Coupon</h1>
    <div class="text-sm text-gray-500">Shop: variant-test-123457.myshopify.com</div>
</div>

<div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
    <!-- Main Form -->
    <div class="lg:col-span-2">
        <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6">
            <form action="#" method="POST" class="space-y-6">
                
                <!-- Product Search -->
                <div>
                    <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Search Product from Your Store <span class="text-red-500">*</span>
                    </label>
                    <input type="text" 
                           class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 text-sm" 
                           placeholder="Start typing product name (e.g., snowboard)...">
                    <p class="text-xs text-red-500 mt-1">Type at least 2 characters to search</p>
                </div>

                <!-- Coupon Code -->
                <div>
                     <label class="block text-sm font-semibold text-gray-700 mb-1">
                        Coupon Code <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-2">
                        <input type="text" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 text-sm uppercase font-medium" 
                               placeholder="E.G., SAVE10">
                        <button type="button" class="px-3 border border-gray-300 rounded-md bg-gray-50 hover:bg-gray-100 text-gray-600">
                             <i class="fas fa-sync-alt"></i>
                        </button>
                    </div>
                    <p class="text-gray-400 text-xs mt-1">Example: SAVE10, WELCOME20, FREESHIP</p>
                </div>

                <!-- Discount Type & Value -->
                <div class="grid grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Discount Type <span class="text-red-500">*</span>
                        </label>
                        <select class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 text-sm bg-white">
                            <option>Percentage (%)</option>
                            <option>Fixed Amount</option>
                        </select>
                    </div>
                    <div>
                         <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Discount Value <span class="text-red-500">*</span>
                        </label>
                        <input type="number" 
                               class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 text-sm" 
                               value="10">
                    </div>
                </div>

                <!-- Validity Dates -->
                <div class="grid grid-cols-2 gap-6">
                     <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Valid From (Optional)
                        </label>
                        <div class="relative">
                            <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 text-sm">
                        </div>
                    </div>
                     <div>
                        <label class="block text-sm font-semibold text-gray-700 mb-1">
                            Valid Until (Optional)
                        </label>
                        <div class="relative">
                             <input type="date" class="w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-teal-500 focus:border-teal-500 text-sm">
                        </div>
                    </div>
                </div>

                <!-- Active Toggle -->
                <div class="flex items-center gap-2 pt-2">
                    <div class="relative inline-block w-10 mr-2 align-middle select-none transition duration-200 ease-in">
                        <input type="checkbox" name="toggle" id="toggle" class="toggle-checkbox absolute block w-5 h-5 rounded-full bg-white border-4 appearance-none cursor-pointer border-blue-600 translate-x-5"/>
                        <label for="toggle" class="toggle-label block overflow-hidden h-5 rounded-full bg-blue-600 cursor-pointer"></label>
                    </div>
                    <label for="toggle" class="text-sm font-semibold text-gray-800">Active <span class="font-normal text-gray-500">- Coupon will be displayed on product page</span></label>
                    
                    <style>
                        .toggle-checkbox:checked {
                            right: 0;
                            border-color: #10b981; /* teal-500/emerald-500 */
                            transform: translateX(100%);
                        }
                        .toggle-checkbox:checked + .toggle-label {
                            background-color: #10b981;
                        }
                        /* Reset for standard checkbox if needed, but here we custom styling */
                    </style>
                </div>

                <!-- Action Buttons -->
                <div class="flex gap-4 pt-4">
                    <button type="submit" class="bg-teal-700 text-white px-6 py-2.5 rounded shadow-sm text-sm font-medium hover:bg-teal-800 transition-colors flex items-center gap-2">
                         <i class="fas fa-check"></i> Create Coupon
                    </button>
                    <button type="button" class="bg-white border border-gray-300 text-gray-700 px-6 py-2.5 rounded shadow-sm text-sm font-medium hover:bg-gray-50 transition-colors">
                        Cancel
                    </button>
                </div>

            </form>
        </div>
    </div>

    <!-- Sidebar Info -->
    <div>
        <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6 sticky top-6">
            <h3 class="font-bold text-gray-900 text-sm mb-4 flex items-center gap-2">
                <i class="far fa-question-circle text-gray-400"></i> How It Works
            </h3>
            <p class="text-sm text-gray-600 mb-3">This coupon will be displayed on the selected product page, showing:</p>
            <ul class="list-disc list-inside text-sm text-gray-600 space-y-1 mb-4 pl-1">
                <li>The coupon code</li>
                <li>Discount amount</li>
                <li>Validity period (if set)</li>
            </ul>
            <p class="text-sm text-gray-600">Customers can copy the code and use it during checkout.</p>
        </div>
    </div>
</div>
@endsection
