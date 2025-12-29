@extends('layouts.admin')

@section('title', 'Edit Post')

@section('content')
<div class="max-w-5xl mx-auto pb-10">
    <div class="flex items-center gap-4 mb-6">
        <a href="{{ route('admin.blog') }}" class="text-gray-500 hover:text-gray-700">
            <i class="fas fa-arrow-left"></i>
        </a>
        <h1 class="text-xl font-bold text-gray-900">Edit Post</h1>
        <span class="px-2 py-1 rounded bg-green-100 text-green-800 text-xs font-semibold uppercase tracking-wide">Published</span>
    </div>

    <form action="#" method="POST" class="grid grid-cols-1 lg:grid-cols-3 gap-6">
        <!-- Left Column -->
        <div class="lg:col-span-2 space-y-6">
            
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="space-y-4">
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Title</label>
                        <input type="text" value="The Art of Layering Scents" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Content</label>
                        <textarea rows="15" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm font-mono">
Layering scents, or mixing fragrances, is an ancient art that allows you to create a truly unique signature scent. It's not just about spraying two perfumes on top of each other; it's about finding complementary notes that enhance one another.

## Why Layer?
Layering allows you to:
* **Personalize your scent:** Create something that no one else is wearing.
* **Enhance longevity:** Using a lotion base or a heavier wood oil can make lighter citrus notes last longer.
* **Transition day to night:** Add a spicy or musk note to your fresh day scent for the evening.

## How to Start
1. **Start Simple:** Combine a single-note scent (like vanilla or rose) with a complex perfume.
2. **Heavy First:** Apply the heavier, stronger scent first (Oud, Musk, Amber) and let it settle.
3. **Light Top:** Spray the lighter scent (Citrus, Floral) on top.

**Pro Tip:** Don't rub your wrists together! It breaks down the fragrance molecules.
                        </textarea>
                        <p class="text-xs text-gray-500 mt-1">Markdown is supported.</p>
                    </div>
                </div>
            </div>

             <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <div class="space-y-4">
                    <h2 class="font-semibold text-gray-700 text-sm mb-2">SEO Preview</h2>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Meta Title</label>
                        <input type="text" value="The Art of Layering Scents | Nurah Perfumes" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                    <div>
                         <label class="block text-sm font-medium text-gray-700 mb-1">Meta Description</label>
                        <textarea rows="3" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">Learn the secrets of fragrance layering to create your own unique signature scent. Discover tips on combining woody, floral, and citrus notes.</textarea>
                    </div>
                </div>
            </div>

        </div>

        <!-- Right Column -->
        <div class="space-y-6">
            
            <!-- Status -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Publishing</h2>
                <div class="space-y-3">
                     <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Status</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="draft">Draft</option>
                            <option value="published" selected>Published</option>
                        </select>
                    </div>
                     <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Author</label>
                        <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="1">John Doe</option>
                            <option value="2" selected>Neraj Lal</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Featured Image -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Featured Image</h2>
                 <div class="aspect-video bg-gray-100 rounded border border-gray-200 relative group overflow-hidden mb-3">
                    <img src="https://images.unsplash.com/photo-1615634260167-c8cdede054de?w=600&q=80" class="w-full h-full object-cover">
                     <button type="button" class="absolute top-2 right-2 bg-white rounded-full p-1.5 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity hover:text-red-600">
                        <i class="fas fa-trash text-xs"></i>
                    </button>
                </div>
                <div class="text-center">
                    <button type="button" class="text-xs text-blue-600 hover:underline">Replace image</button>
                </div>
            </div>

             <!-- Tags -->
            <div class="card bg-white rounded-lg border border-gray-200 shadow-sm p-4">
                <h2 class="font-semibold text-gray-700 text-sm mb-4">Organization</h2>
                 <div class="space-y-3">
                     <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Category</label>
                         <select class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                            <option value="">Select Category</option>
                            <option value="tips" selected>Tips & Tricks</option>
                            <option value="news">News</option>
                            <option value="education">Fragrance Education</option>
                        </select>
                    </div>
                    <div>
                        <label class="block text-sm font-medium text-gray-700 mb-1">Tags</label>
                        <input type="text" value="layering, education, tips" class="w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-green-500 focus:border-green-500 sm:text-sm">
                    </div>
                </div>
            </div>

        </div>
        
        <div class="lg:col-span-3 flex justify-end gap-3 mt-4 border-t border-gray-200 pt-4">
             <button type="button" class="bg-red-50 text-red-600 border border-transparent px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-red-100 transition-colors mr-auto">Delete post</button>
            <button type="button" class="bg-white border border-gray-300 text-gray-700 px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-gray-50">Discard</button>
            <button type="submit" class="bg-green-700 text-white px-4 py-2 rounded shadow-sm text-sm font-medium hover:bg-green-800 transition-colors">Update Post</button>
        </div>
    </form>
</div>
@endsection
