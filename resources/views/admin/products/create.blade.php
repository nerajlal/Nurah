@extends('layouts.admin')

@section('title', 'Add Product')

@section('content')
<div class="max-w-5xl mx-auto pb-10">
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.products') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-xl font-bold text-gray-900">Add product</h1>
    </div>

    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-6">
            
            <!-- Basic Info -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="Jasmine Perfume">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Description</label>
                        <textarea rows="6" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm"></textarea>
                    </div>
                </div>
            </div>

            <!-- Media -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="flex justify-between items-center mb-4">
                    <h2 class="font-semibold text-gray-700 text-sm">Media</h2>
                    <!-- <button type="button" class="text-xs text-blue-600 hover:underline" onclick="document.getElementById('media_upload').click()">Add from URL</button> -->
                </div>
                
                <input type="file" id="media_upload" name="media[]" multiple accept="image/*,video/*" class="hidden" onchange="handleFileSelect(event)">
                
                <!-- Preview Grid -->
                <div id="media_preview_grid" class="grid grid-cols-4 gap-4 mb-4 hidden"></div>

                <div id="media_dropzone" class="border-2 border-dashed border-gray-300 rounded-lg p-8 text-center hover:bg-gray-50 transition-colors cursor-pointer" onclick="document.getElementById('media_upload').click()">
                    <div class="flex flex-col items-center">
                        <i class="fas fa-cloud-upload-alt text-gray-400 text-2xl mb-2"></i>
                        <span class="text-gray-600 text-sm font-medium mb-1">Add files</span>
                        <p class="text-xs text-gray-500">Accepts images, videos, or 3D models</p>
                    </div>
                </div>
            </div>

            <script>
                function handleFileSelect(event) {
                    const files = event.target.files;
                    const previewGrid = document.getElementById('media_preview_grid');
                    
                    if (files.length > 0) {
                         previewGrid.classList.remove('hidden');
                    }

                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];
                        
                        if (!file.type.startsWith('image/')) continue;

                        const reader = new FileReader();
                        reader.onload = function(e) {
                            const div = document.createElement('div');
                            div.className = 'aspect-square bg-gray-100 rounded border border-gray-200 relative group overflow-hidden';
                            div.innerHTML = `
                                <img src="${e.target.result}" class="w-full h-full object-cover">
                                <button type="button" class="absolute top-1 right-1 bg-white rounded-full p-1 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity hover:text-red-600">
                                    <i class="fas fa-trash text-xs"></i>
                                </button>
                            `;
                            previewGrid.appendChild(div);
                        };
                        reader.readAsDataURL(file);
                    }
                }
            </script>

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
                            <input type="text" class="w-full pl-7 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="0.00">
                        </div>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Compare-at price</label>
                        <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                <span class="text-gray-500 sm:text-sm">₹</span>
                            </div>
                            <input type="text" class="w-full pl-7 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm" placeholder="0.00">
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Variants -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Product Variants (Sizes)</h2>
                <div class="space-y-3">
                    <div class="flex items-center gap-3 border border-gray-200 rounded p-3 hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="variants[]" value="30ml" id="var_30ml" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                        <label for="var_30ml" class="text-sm text-gray-700 font-medium cursor-pointer flex-1">30ml</label>
                    </div>
                    <div class="flex items-center gap-3 border border-gray-200 rounded p-3 hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="variants[]" value="50ml" id="var_50ml" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                        <label for="var_50ml" class="text-sm text-gray-700 font-medium cursor-pointer flex-1">50ml</label>
                    </div>
                    <div class="flex items-center gap-3 border border-gray-200 rounded p-3 hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="variants[]" value="100ml" id="var_100ml" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                        <label for="var_100ml" class="text-sm text-gray-700 font-medium cursor-pointer flex-1">100ml</label>
                    </div>
                    <div class="flex items-center gap-3 border border-gray-200 rounded p-3 hover:bg-gray-50 cursor-pointer">
                        <input type="checkbox" name="variants[]" value="tester" id="var_tester" class="h-4 w-4 rounded border-gray-300 text-green-600 focus:ring-green-500">
                        <label for="var_tester" class="text-sm text-gray-700 font-medium cursor-pointer flex-1">Sample / Tester (2ml)</label>
                    </div>
                    
                    <div class="pt-2">
                        <button type="button" class="text-sm text-blue-600 hover:text-blue-800 font-medium flex items-center gap-1">
                            <i class="fas fa-plus"></i> Add custom variant
                        </button>
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
                    <option value="active">Active</option>
                    <option value="draft">Draft</option>
                </select>
            </div>

            <!-- Organization -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Product Organization</h2>
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Product type</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Vendor</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Collections</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                     <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                        <input type="text" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
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
