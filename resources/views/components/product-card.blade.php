<div class="bg-white rounded-lg shadow-lg overflow-hidden h-[400px] flex flex-col">
	<img src="{{ $product->img }}" 
		 alt="{{ $product->produk }}" 
		 class="w-full h-48 object-cover">
	<div class="p-4 flex flex-col flex-grow">
		<h3 class="text-lg font-semibold text-gray-800 line-clamp-2 h-14">{{ $product->produk }}</h3>
		<p class="text-gray-600 mt-2">
			Rp {{ number_format($product->harga, 0, ',', '.') }}
		</p>
		<div class="mt-auto">
			<a href="/detail/{{ $product->id }}" 
			   class="block text-center bg-lime-600 text-white px-4 py-2 rounded hover:bg-lime-700">
				Detail Produk
			</a>
		</div>
	</div>
</div>