@extends('layouts.admin')

@section('title', 'Products')

@section('content')
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-6">
    <h1 class="text-xl font-semibold text-gray-800">Products</h1>
    <a href="{{ route('admin.products.create') }}" class="bg-green-700 text-white px-4 py-2 rounded-md text-sm font-medium hover:bg-green-800 transition-colors shadow-sm w-fit">Add product</a>
</div>

<div class="card bg-white rounded-lg border border-gray-200 shadow-sm">
    <div class="p-4 border-b border-gray-200 flex gap-4 bg-gray-50">
        <div class="flex-1">
             <div class="flex items-center gap-4 bg-white border border-gray-300 rounded-md px-3 py-2 text-sm shadow-sm">
                 <i class="fas fa-search text-gray-400"></i>
                 <input type="text" placeholder="Filter products" class="flex-1 outline-none text-gray-700">
             </div>
        </div>
        <button class="px-3 py-2 border border-gray-300 bg-white rounded-md text-sm font-medium text-gray-700 shadow-sm hover:bg-gray-50">
            <i class="fas fa-sort mr-2"></i> Sort
        </button>
    </div>

    <div class="p-0 overflow-x-auto">
        <table class="w-full text-left text-sm text-gray-600">
            <thead class="bg-gray-50 text-xs uppercase font-medium text-gray-500 border-b border-gray-200">
                 <tr>
                    <th class="px-6 py-3 w-16"><input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500"></th>
                    <th class="px-6 py-3">Product</th>
                    <th class="px-6 py-3">Status</th>
                    <th class="px-6 py-3">Inventory</th>
                    <th class="px-6 py-3">Type</th>
                    <th class="px-6 py-3">Vendor</th>
                    <th class="px-6 py-3 w-20"></th>
                 </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
                <tr class="hover:bg-gray-50 transition-colors cursor-pointer group" onclick="window.location='{{ route('admin.products.edit', 1) }}'">
                    <td class="px-6 py-4" onclick="event.stopPropagation()"><input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500"></td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-800 hover:underline">Midnight Oud 50ml</span>
                        </div>
                    </td>
                    <td class="px-6 py-4"><span class="px-2 py-1 rounded bg-green-100 text-green-800 text-xs font-semibold">Active</span></td>
                    <td class="px-6 py-4 text-gray-500">25 in stock</td>
                    <td class="px-6 py-4">Perfume</td>
                    <td class="px-6 py-4">Nurah</td>
                    <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2" onclick="event.stopPropagation()">
                            <a href="{{ route('admin.products.edit', 1) }}" class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></a>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
                 <tr class="hover:bg-gray-50 transition-colors cursor-pointer group" onclick="window.location='{{ route('admin.products.edit', 2) }}'">
                    <td class="px-6 py-4" onclick="event.stopPropagation()"><input type="checkbox" class="rounded border-gray-300 text-green-600 focus:ring-green-500"></td>
                    <td class="px-6 py-4">
                        <div class="flex items-center gap-3">
                            <div class="h-10 w-10 bg-gray-100 rounded border border-gray-200 flex items-center justify-center">
                                <i class="fas fa-image text-gray-400"></i>
                            </div>
                            <span class="font-medium text-gray-800 hover:underline">Rose & Amber Gift Set</span>
                        </div>
                    </td>
                    <td class="px-6 py-4"><span class="px-2 py-1 rounded bg-gray-200 text-gray-800 text-xs font-semibold">Draft</span></td>
                    <td class="px-6 py-4 text-gray-500">0 in stock</td>
                    <td class="px-6 py-4">Gift Set</td>
                    <td class="px-6 py-4">Nurah</td>
                     <td class="px-6 py-4 text-right">
                        <div class="flex justify-end gap-2" onclick="event.stopPropagation()">
                            <a href="{{ route('admin.products.edit', 2) }}" class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-blue-600 transition-colors shadow-sm"><i class="fas fa-edit"></i></a>
                            <button class="p-1.5 hover:bg-white rounded text-gray-400 hover:text-red-600 transition-colors shadow-sm"><i class="fas fa-trash"></i></button>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
