<div class="bg-white rounded-lg shadow-lg overflow-hidden">
    <img src="{{ $product->img }}" alt="{{ $product->produk }}" class="w-full h-48 object-cover">
    <div class="p-4">
        <h3 class="text-lg font-semibold text-gray-800">{{ $product->produk }}</h3>
        <p class="text-gray-600 mt-2">Rp {{ number_format($product->harga, 0, ',', '.') }}</p>
        <div class="mt-4">
            <a href="/detail/{{ $product->id }}" 
               class="block text-center bg-lime-600 text-white px-4 py-2 rounded hover:bg-blue-600">
                Detail Produk
            </a>
        </div>
    </div>
</div>