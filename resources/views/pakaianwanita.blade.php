<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>
	<div class="bg-lime-50">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-5">
				<h1 class="text-2xl font-bold text-gray-900">Koleksi</h1>
				<div class="mt-6 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
					@foreach ($products as $product)
						<x-product-card :product="$product" />
					@endforeach
				</div>
			</div>
		</div>
	</div>
</x-layout>
