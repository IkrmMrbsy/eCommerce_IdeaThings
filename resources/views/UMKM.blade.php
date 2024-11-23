<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <div class="container mx-auto px-4 py-8">
        <h1 class="text-3xl font-bold mb-8">Produk UMKM</h1>
        
        <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($products as $product)
                <x-product-card :product="$product" />
            @endforeach
        </div>
    </div>

    <div style="margin-top: 60px">
        <nav class="flex justify-center items-center">
            <ul class="flex space-x-4">
                <!-- Prev Button -->
                @if ($products->onFirstPage())
                    <li class="disabled">
                        <span class="px-3 py-1 text-gray-500 cursor-not-allowed">&laquo; Prev</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $products->previousPageUrl() }}" 
                           class="px-3 py-1 text-gray-700 hover:text-gray-900 transition duration-300 ease-in-out">
                            &laquo; Prev
                        </a>
                    </li>
                @endif
    
                <!-- Page Numbers -->
                @foreach ($products->getUrlRange(1, $products->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}" 
                           class="px-3 py-1 rounded-full {{ $page == $products->currentPage() ? 'bg-lime-600 text-white' : 'text-gray-700 hover:bg-lime-100' }} transition duration-200 ease-in-out">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
    
                <!-- Next Button -->
                @if ($products->hasMorePages())
                    <li>
                        <a href="{{ $products->nextPageUrl() }}" 
                           class="px-3 py-1 text-gray-700 hover:text-gray-900 transition duration-300 ease-in-out">
                            Next &raquo;
                        </a>
                    </li>
                @else
                    <li class="disabled">
                        <span class="px-3 py-1 text-gray-500 cursor-not-allowed">Next &raquo;</span>
                    </li>
                @endif
            </ul>
        </nav>
    </div>
</x-layout>