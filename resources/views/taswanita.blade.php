<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>
	
	<div class="container my-5">
		<h2 class="text-center mb-4">Koleksi Tas Wanita</h2>
		
		<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
			@forelse ($products as $product)
				@if($product->kategori === 'tas wanita')
					<div class="col">
						<div class="card h-100 shadow-sm">
							<img src="{{ $product->img }}" class="card-img-top" alt="{{ $product->produk }}">
							<div class="card-body">
								<h5 class="card-title">{{ $product->produk }}</h5>
								<p class="card-text text-truncate">{{ $product->description }}</p>
								<p class="card-text">
									<small class="text-body-secondary">Stok: {{ $product->jumlah }}</small>
								</p>
								<p class="card-text fw-bold">{{ $product->harga }}</p>
								<a href="{{ $product->link }}" class="btn btn-primary" target="_blank">
									Beli Sekarang
								</a>
							</div>
						</div>
					</div>
				@endif
			@empty
				<div class="col-12 text-center">
					<p>Tidak ada produk tas wanita yang tersedia.</p>
				</div>
			@endforelse
		</div>
	</div>

</x-layout>