@extends('layouts.admin')

@section('title', 'Product Coupons')

@section('content')
<div class="mb-6 flex justify-between items-end">
    <div>
        <h1 class="text-2xl font-bold text-gray-900">Product Coupons</h1>
        <p class="text-sm text-gray-500 mt-1">Create and manage discount coupons for specific products</p>
    </div>
    <a href="{{ route('admin.discounts.create') }}" class="bg-teal-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-teal-800 transition-colors flex items-center gap-2">
        <i class="fas fa-plus"></i> Create Coupon
    </a>
</div>

<div class="card bg-white rounded-lg border border-gray-200 shadow-sm mb-6">
    <!-- Filter Bar -->
    <div class="p-4 border-b border-gray-200 bg-gray-50 flex items-center gap-4">
        <label class="text-sm font-semibold text-gray-700">Filter by Status:</label>
        <select class="border border-gray-300 rounded text-sm py-1.5 px-3 focus:ring-teal-500 focus:border-teal-500 bg-white shadow-sm">
            <option>Active</option>
            <option>Expired</option>
            <option>Inactive</option>
        </select>
        <span class="bg-gray-600 text-white text-xs px-2 py-1 rounded-full font-medium">2 coupons</span>
    </div>

    <!-- Table -->
    <div class="overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-gray-50 text-xs uppercase font-bold text-gray-700 border-b border-gray-200">
                <tr>
                    <th class="px-6 py-4">Product</th>
                    <th class="px-6 py-4">Coupon Code</th>
                    <th class="px-6 py-4">Discount</th>
                    <th class="px-6 py-4">Valid Period</th>
                    <th class="px-6 py-4">Status</th>
                    <th class="px-6 py-4 text-right">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <!-- Row 1 -->
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <p class="font-bold text-gray-900">Midnight Oud 50ml</p>
                        <p class="text-xs text-gray-400">ID: 8385986134195</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-pink-500 font-medium bg-pink-50 px-2 py-1 rounded border border-pink-100">SY2QA0ZM</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-teal-700 text-white text-xs font-bold px-2 py-1 rounded">5.00% off</span>
                    </td>
                    <td class="px-6 py-4 text-xs text-gray-500">
                        <p>Dec 20, 2025</p>
                        <p>to</p>
                        <p>Dec 31, 2025</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-teal-700 text-white text-xs font-bold px-3 py-1 rounded-full">Active</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="text-blue-500 hover:text-blue-700 border border-blue-200 hover:border-blue-400 px-3 py-1 rounded bg-white transition-colors flex items-center gap-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="text-red-500 hover:text-red-700 border border-red-200 hover:border-red-400 px-3 py-1 rounded bg-white transition-colors flex items-center gap-1">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>
                <!-- Row 2 -->
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4">
                        <p class="font-bold text-gray-900">Rose & Amber Set</p>
                        <p class="text-xs text-gray-400">ID: 8385993834675</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="text-pink-500 font-medium bg-pink-50 px-2 py-1 rounded border border-pink-100">HT00XAL8</span>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-teal-700 text-white text-xs font-bold px-2 py-1 rounded">10.00% off</span>
                    </td>
                    <td class="px-6 py-4 text-xs text-gray-500">
                        <p>Dec 11, 2025</p>
                        <p>to</p>
                        <p>Jan 02, 2026</p>
                    </td>
                    <td class="px-6 py-4">
                        <span class="bg-teal-700 text-white text-xs font-bold px-3 py-1 rounded-full">Active</span>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex items-center justify-end gap-2">
                            <button class="text-blue-500 hover:text-blue-700 border border-blue-200 hover:border-blue-400 px-3 py-1 rounded bg-white transition-colors flex items-center gap-1">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <button class="text-red-500 hover:text-red-700 border border-red-200 hover:border-red-400 px-3 py-1 rounded bg-white transition-colors flex items-center gap-1">
                                <i class="fas fa-trash-alt"></i> Delete
                            </button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Footer Stats -->
<div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6">
    <div class="grid grid-cols-4 divide-x divide-gray-200 text-center">
        <div>
            <div class="text-2xl font-bold text-gray-800">2</div>
            <div class="text-sm text-gray-500">Total Coupons</div>
        </div>
        <div>
            <div class="text-2xl font-bold text-teal-600">2</div>
            <div class="text-sm text-gray-500">Active</div>
        </div>
        <div>
            <div class="text-2xl font-bold text-red-600">0</div>
            <div class="text-sm text-gray-500">Expired</div>
        </div>
        <div>
            <div class="text-2xl font-bold text-gray-400">0</div>
            <div class="text-sm text-gray-500">Inactive</div>
        </div>
    </div>
</div>
@endsection
