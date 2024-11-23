<x-layout>
	<x-slot:title>{{ $title }}</x-slot:title>
	<div class="bg-lime-50">
		<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
			<div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-5">
				<h1 class="text-2xl font-bold text-gray-900">Koleksi Tas Pria</h1>
				<div class="mt-6 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
					@foreach($products->where('kategori', 'tas pria') as $product)
						@include('components.product-card', ['product' => $product])
					@endforeach
				</div>
			</div>
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
