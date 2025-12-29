@extends('layouts.admin')

@section('title', 'Add New Slide')

@section('content')
<div class="max-w-4xl mx-auto">
    <!-- Header -->
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.settings.slider') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-2xl font-bold text-gray-800">Add New Slide</h1>
    </div>

    <form class="space-y-6">
        <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-6">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Desktop Image -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Desktop Image (1920x600 recommended)</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center text-center hover:bg-gray-50 cursor-pointer transition-colors" onclick="document.getElementById('desktop_image').click()">
                        <i class="fas fa-desktop text-3xl text-gray-400 mb-3"></i>
                        <p class="text-sm text-gray-500">Click to upload desktop image</p>
                        <input type="file" id="desktop_image" class="hidden" accept="image/*">
                    </div>
                </div>

                <!-- Mobile Image -->
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-2">Mobile Image (800x1200 recommended)</label>
                    <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 flex flex-col items-center justify-center text-center hover:bg-gray-50 cursor-pointer transition-colors" onclick="document.getElementById('mobile_image').click()">
                        <i class="fas fa-mobile-alt text-3xl text-gray-400 mb-3"></i>
                        <p class="text-sm text-gray-500">Click to upload mobile image</p>
                        <input type="file" id="mobile_image" class="hidden" accept="image/*">
                    </div>
                </div>
            </div>

            <div class="mt-6 space-y-4">
                <div>
                    <label class="block text-sm font-medium text-gray-700 mb-1">Slide Title / Alt Text</label>
                    <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="e.g. Summer Sale Banner">
                </div>
                
                <div>
                     <label class="flex items-center gap-2 cursor-pointer">
                        <input type="checkbox" checked class="rounded border-gray-300 text-green-600 focus:ring-green-500 w-4 h-4">
                        <span class="text-sm text-gray-700 font-medium">Active</span>
                     </label>
                </div>
            </div>
        </div>

        <div class="flex justify-end gap-3">
             <a href="{{ route('admin.settings.slider') }}" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Cancel</a>
            <button type="button" class="bg-green-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-green-800 transition-colors">Save Slide</button>
        </div>
    </form>
</div>
@endsection
