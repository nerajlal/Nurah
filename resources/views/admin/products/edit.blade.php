@extends('layouts.admin')

@section('title', 'Edit Product')

@section('content')
<div class="max-w-5xl mx-auto pb-10">
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.products') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-xl font-bold text-gray-900">Midnight Oud 50ml</h1>
        <span class="px-2 py-1 rounded bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wide">Active</span>
    </div>

    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Basic Info -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input type="text" value="Midnight Oud 50ml" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">Experience the deep, rich aroma of Midnight Oud. Top notes of saffron and rose.</textarea>
                    </div>
                </div>
            </div>

            <!-- Media -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Media</h2>
                <div class="grid grid-cols-4 gap-4 mb-4">
                     <div class="aspect-square bg-gray-100 rounded border border-gray-200 flex items-center justify-center relative group">
                         <i class="fas fa-image text-gray-400 text-2xl"></i>
                         <button type="button" class="absolute top-1 right-1 bg-white rounded-full p-1 shadow-sm opacity-0 group-hover:opacity-100"><i class="fas fa-trash text-red-500 text-xs"></i></button>
                     </div>
                     <div class="aspect-square bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                         <i class="fas fa-image text-gray-400 text-2xl"></i>
                     </div>
                </div>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-4 text-center hover:bg-gray-50 transition-colors cursor-pointer">
                    <span class="text-blue-600 text-sm">Add from URL</span>
                    <span class="text-gray-400 text-sm mx-2">|</span>
                    <span class="text-blue-600 text-sm">Add files</span>
                </div>
            </div>

            <!-- Pricing -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Pricing</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Price</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">₹</span>
                            </div>
                            <input type="text" value="4200.00" class="w-full pl-7 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Compare-at price</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">₹</span>
                            </div>
                            <input type="text" value="5500.00" class="w-full pl-7 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            
            <!-- Status -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Product Status</h2>
                <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    <option value="active" selected>Active</option>
                    <option value="draft">Draft</option>
                </select>
            </div>

            <!-- Organization -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Product Organization</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Product type</label>
                        <input type="text" value="Perfume" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Vendor</label>
                        <input type="text" value="Nurah" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Collections</label>
                        <input type="text" value="Best Sellers, New Arrivals" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                        <input type="text" value="Oud, Night, Luxury" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                </div>
            </div>

        </div>
        
        <div class="lg:col-span-3 flex justify-end gap-3 mt-4 border-t border-gray-200 pt-4">
            <button type="button" class="bg-red-50 text-red-600 border border-transparent px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-red-100 transition-colors mr-auto">Delete product</button>
            <button type="button" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Discard</button>
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-green-800 transition-colors">Save</button>
        </div>
    </form>
</div>
@endsection
