<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="container mx-auto my-8"> 
        <h1 class="text-3xl font-bold mb-8">Semua Produk</h1>

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
            @foreach($products as $product)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden h-[400px] flex flex-col">
                    <img src="{{ $product->img }}" 
                         alt="{{ $product->produk }}" 
                         class="w-full h-48 object-cover">
                    <div class="p-4 flex flex-col flex-grow">
                        <h3 class="text-lg font-semibold text-gray-800 line-clamp-2 h-14">{{ $product->produk }}</h3>
                        <p class="text-gray-600 mt-2">Rp {{ number_format((float)$product->harga, 0, ',', '.') }}</p>
                        <div class="mt-auto">
                            <a href="/detail/{{ $product->id }}" 
                               class="block text-center bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">
                                Detail Produk
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
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
