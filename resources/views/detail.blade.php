<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    
    <!-- resources/views/detail.blade.php -->
    <div class="container mx-auto px-4 py-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
            <!-- Product Image Section -->
            <div class="rounded-lg overflow-hidden shadow-lg border bg-white">
                <div class="flex justify-center items-center p-4">
                    <img src="{{ $product->img ? asset($product->img) : asset('img/product1.jpg') }}" 
                         alt="{{ $product->produk }}" 
                         class="w-full h-auto max-w-lg object-contain"
                         onerror="this.src='{{ asset('img/product1.jpg') }}'">
                </div>
            </div>

            <!-- Product Details Section -->
            <div class="space-y-6 bg-white rounded-lg shadow-lg p-6 border">
                <!-- Product Title -->
                <h1 class="text-4xl font-extrabold text-black-600">{{ $product->produk }}</h1>
                
                <!-- Price -->
                <div class="text-3xl font-semibold text-gray-500">
                    Rp {{ number_format((float)$product->harga, 0, ',', '.') }}
                </div>

                <!-- Product Description -->
                <div class="text-gray-600">
                    <p>{{ $product->description }}</p>
                </div>

                <!-- Stock & Category -->
                <div class="border-t border-b py-4 flex justify-between items-center">
                    <p class="text-lg font-semibold">Stok: 
                        <span class="text-{{ $product->jumlah > 0 ? 'green-500' : 'red-500' }}">
                            {{ $product->jumlah > 0 ? 'Tersedia' : 'Habis' }}
                        </span>
                    </p>
                    <div>
                        <span class="px-3 py-1 bg-blue-100 text-black-600 rounded-lg text-sm">
                            {{ $product->kategori }}
                        </span>
                    </div>
                </div>

                <!-- Tokopedia Button -->
                <div class="mt-6">
                    <a href="{{ $product->link }}" target="_blank"
                       class="block w-full text-center bg-[#3eb640] text-white px-6 py-3 rounded-lg hover:bg-[#37a537] transition duration-300">
                        Tokopedia
                    </a>
                </div>

                <!-- Back Button -->
                <div class="mt-4">
                    <a href="/" class="block text-center bg-gray-300 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-400 transition duration-300">
                        Kembali
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-layout>
