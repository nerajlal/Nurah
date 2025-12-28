@extends('layouts.admin')

@section('title', 'Best Sellers')

@section('content')
<div class="max-w-5xl mx-auto pb-10">
    <!-- Header -->
    <div class="flex items-center justify-between mb-6">
        <div class="flex items-center gap-4">
             <a href="{{ route('admin.collections') }}" class="text-gray-500 hover:text-gray-700">
                <i class="fas fa-arrow-left"></i>
            </a>
            <h1 class="text-xl font-bold text-gray-900">Best Sellers</h1>
        </div>
        <a href="{{ route('admin.products') }}" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Browse products</a>
    </div>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Products List -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm overflow-hidden">
                <div class="p-4 border-b border-gray-200 flex justify-between items-center bg-gray-50">
                    <h2 class="font-semibold text-gray-700 text-sm">Products</h2>
                    <div class="flex gap-2">
                        <span class="text-xs text-gray-500 bg-white border border-gray-200 px-2 py-1 rounded">Sorted by: Best Selling</span>
                    </div>
                </div>
                
                <div class="divide-y divide-gray-100">
                    <!-- Product 1 -->
                    <div class="p-4 flex gap-4 items-center hover:bg-gray-50 transition-colors">
                        <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-gray-400"></i>
                        </div>
                        <div class="flex-1">
                            <a href="#" class="text-sm font-medium text-gray-900 hover:underline">Midnight Oud 50ml</a>
                            <p class="text-xs text-gray-500">Active • 25 in stock</p>
                        </div>
                         <button class="text-gray-400 hover:text-red-500">
                             <i class="fas fa-times"></i>
                         </button>
                    </div>
                    <!-- Product 2 -->
                    <div class="p-4 flex gap-4 items-center hover:bg-gray-50 transition-colors">
                        <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-gray-400"></i>
                        </div>
                        <div class="flex-1">
                            <a href="#" class="text-sm font-medium text-gray-900 hover:underline">Rose & Amber Gift Set</a>
                            <p class="text-xs text-gray-500">Draft • 0 in stock</p>
                        </div>
                        <button class="text-gray-400 hover:text-red-500">
                             <i class="fas fa-times"></i>
                         </button>
                    </div>
                     <!-- Product 3 -->
                    <div class="p-4 flex gap-4 items-center hover:bg-gray-50 transition-colors">
                        <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                            <i class="fas fa-image text-gray-400"></i>
                        </div>
                        <div class="flex-1">
                            <a href="#" class="text-sm font-medium text-gray-900 hover:underline">Jasmine Musk Oil</a>
                            <p class="text-xs text-gray-500">Active • 10 in stock</p>
                        </div>
                        <button class="text-gray-400 hover:text-red-500">
                             <i class="fas fa-times"></i>
                         </button>
                    </div>
                </div>
                
                 <div class="p-4 border-t border-gray-100 bg-gray-50">
                     <p class="text-xs text-center text-gray-500">Showing 3 of 12 products</p>
                 </div>
            </div>

        </div>

        <div class="space-y-6">
            <!-- Image Card -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Collection Image</h2>
                <div class="aspect-square bg-gray-100 rounded border border-gray-200 flex items-center justify-center mb-4">
                    <i class="fas fa-image text-gray-400 text-4xl"></i>
                </div>
                <button class="text-sm text-blue-600 hover:underline w-full text-center">Change image</button>
            </div>
            
        </div>
    </div>
</div>
@endsection
