@extends('layouts.admin')

@section('title', 'Hero Slider')

@section('content')
<div class="space-y-6">

    <!-- Header -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
        <div>
            <h1 class="text-2xl font-bold text-gray-800">Hero Slider</h1>
            <p class="text-sm text-gray-500 mt-1">Manage home page hero banner slides for desktop and mobile.</p>
        </div>
        <a href="{{ route('admin.settings.slider.create') }}" class="bg-green-700 text-white px-4 py-2 rounded-lg shadow-sm hover:bg-green-800 transition-colors flex items-center gap-2">
            <i class="fas fa-plus"></i> Add New Slide
        </a>
    </div>

    <!-- Slides List -->
    <div class="grid gap-6">
        <!-- Mock Slide 1 -->
        <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4 flex flex-col md:flex-row gap-6 items-start">
            <div class="flex-1 w-full grid grid-cols-2 gap-4">
                <div>
                    <span class="text-xs font-bold text-gray-500 uppercase block mb-2">Desktop Image</span>
                    <div class="aspect-[16/6] bg-gray-100 rounded border border-gray-200 overflow-hidden relative">
                        <img src="https://myop.in/cdn/shop/files/b2g1_6e47992a-e85f-4019-89d5-179ac74e931d.webp?v=1740730153&width=5760" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <span class="text-xs font-bold text-gray-500 uppercase block mb-2">Mobile Image</span>
                    <div class="aspect-[9/12] bg-gray-100 rounded border border-gray-200 overflow-hidden relative w-1/2">
                        <img src="https://myop.in/cdn/shop/files/b2g1_phone.webp?v=1740730153&width=1000" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 space-y-3">
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase">Title / Alt Text</label>
                    <p class="text-sm font-medium text-gray-800">Buy 2 Get 1</p>
                </div>
                 <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase">Status</label>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </div>
                <div class="pt-2 flex gap-2">
                     <button class="text-sm text-red-600 hover:text-red-800 font-medium"><i class="fas fa-trash"></i> Delete</button>
                </div>
            </div>
        </div>

         <!-- Mock Slide 2 -->
        <div class="bg-white rounded-lg border border-gray-200 shadow-sm p-4 flex flex-col md:flex-row gap-6 items-start">
            <div class="flex-1 w-full grid grid-cols-2 gap-4">
                <div>
                    <span class="text-xs font-bold text-gray-500 uppercase block mb-2">Desktop Image</span>
                    <div class="aspect-[16/6] bg-gray-100 rounded border border-gray-200 overflow-hidden relative">
                        <img src="https://myop.in/cdn/shop/files/banner_elante_chandigarh_copy.webp?v=1764662226&width=5760" class="w-full h-full object-cover">
                    </div>
                </div>
                <div>
                    <span class="text-xs font-bold text-gray-500 uppercase block mb-2">Mobile Image</span>
                    <div class="aspect-[9/12] bg-gray-100 rounded border border-gray-200 overflow-hidden relative w-1/2">
                        <img src="https://myop.in/cdn/shop/files/Banner_elante_chandigarh_phone_copy_1.webp?v=1764662226&width=1000" class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
            <div class="w-full md:w-1/3 space-y-3">
                <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase">Title / Alt Text</label>
                    <p class="text-sm font-medium text-gray-800">New Store - Chandigarh</p>
                </div>
                 <div>
                    <label class="block text-xs font-bold text-gray-500 uppercase">Status</label>
                    <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800">Active</span>
                </div>
                <div class="pt-2 flex gap-2">
                     <button class="text-sm text-red-600 hover:text-red-800 font-medium"><i class="fas fa-trash"></i> Delete</button>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
