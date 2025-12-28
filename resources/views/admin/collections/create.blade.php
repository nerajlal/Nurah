@extends('layouts.admin')

@section('title', 'Create Collection')

@section('content')
<div class="max-w-5xl mx-auto pb-10">
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.collections') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-xl font-bold text-gray-900">Create collection</h1>
    </div>

    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Basic Info -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="e.g. Summer Collection">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                    </div>
                </div>
            </div>

            <!-- Collection Image -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Collection Image</h2>
                <div class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:bg-gray-50 transition-colors cursor-pointer" onclick="document.getElementById('collection_image').click()">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-image text-gray-400 text-2xl mb-2"></i>
                        <span class="text-gray-600 text-sm font-medium mb-1">Add image</span>
                        <p class="text-xs text-gray-500">1200 x 1200px recommended</p>
                    </div>
                    <input type="file" id="collection_image" class="hidden" accept="image/*">
                </div>
            </div>
            

        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            <!-- Publishing -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Publishing</h2>
                <div class="flex items-start">
                     <div class="flex items-center h-5">
                         <input id="online_store" name="channels[]" type="checkbox" checked class="focus:ring-green-500 h-4 w-4 text-green-600 border-gray-300 rounded">
                     </div>
                     <div class="ml-3 text-sm">
                         <label for="online_store" class="font-medium text-gray-700">Online Store</label>
                         <p class="text-xs text-gray-500">Will be included in search results.</p>
                     </div>
                 </div>
            </div>
        </div>
        
        <div class="lg:col-span-3 flex justify-end gap-3 mt-4 border-t border-gray-200 pt-4">
            <button type="button" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Discard</button>
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-green-800 transition-colors">Save</button>
        </div>
    </form>
</div>
@endsection
