<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto my-8"> 

        <!-- Form Pencarian -->
        <form id="search-form" class="mb-8">
            <input 
                type="text" 
                name="query" 
                id="search-input" 
                class="px-4 py-2 text-sm border border-lime-800 rounded-md focus:outline-none focus:ring-2 focus:ring-lime-600" 
                placeholder="Cari Produk..."
            />
        </form>

        <!-- Menampilkan hasil pencarian produk -->
        <div id="product-list" class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
            @foreach($product as $products) <!-- Mengubah dari $products ke $product -->
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-[400px] flex flex-col">
                    <img src="{{ $products->img }}" 
                         alt="{{ $products->produk }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-lg font-semibold text-gray-800 line-clamp-2 h-14">{{ $products->produk }}</h3>
                        <p class="text-gray-600 mt-2">Rp {{ number_format((float)$products->harga, 0, ',', '.') }}</p>
                        <div class="mt-auto">
                            <a href="/detail/{{ $products->id }}" 
                               class="block text-center bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">
                                Detail Produk
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div style="margin-top: 60px">
        <nav class="flex justify-center items-center">
            <ul class="flex space-x-4">
                <!-- Prev Button -->
                @if ($product->onFirstPage())
                    <li class="disabled">
                        <span class="px-3 py-1 text-gray-500 cursor-not-allowed">&laquo; Prev</span>
                    </li>
                @else
                    <li>
                        <a href="{{ $product->previousPageUrl() }}" 
                           class="px-3 py-1 text-gray-700 hover:text-gray-900 transition duration-300 ease-in-out">
                            &laquo; Prev
                        </a>
                    </li>
                @endif
    
                <!-- Page Numbers -->
                @foreach ($product->getUrlRange(1, $product->lastPage()) as $page => $url)
                    <li>
                        <a href="{{ $url }}" 
                           class="px-3 py-1 rounded-full {{ $page == $product->currentPage() ? 'bg-lime-600 text-white' : 'text-gray-700 hover:bg-lime-100' }} transition duration-200 ease-in-out">
                            {{ $page }}
                        </a>
                    </li>
                @endforeach
    
                <!-- Next Button -->
                @if ($product->hasMorePages())
                    <li>
                        <a href="{{ $product->nextPageUrl() }}" 
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


<!--jQuery-->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function () {
        $('#search-input').on('input', function () {
            var query = $(this).val(); 

            $.ajax({
                url: '{{ route("search") }}', 
                method: 'GET',
                data: {
                    query: query
                },
                success: function (data) {
                    $('#product-list').html(data);
                }
            });
        });
    });
</script>