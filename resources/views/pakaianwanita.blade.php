<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-lime-50">
        <div class="container mx-auto px-4 py-8">
            <h1 class="text-3xl font-bold text-gray-900 mb-8">Koleksi Pakaian Wanita</h1>
            
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($products->where('kategori', 'pakaian wanita') as $product)
                    <x-product-card :product="$product" />
                @endforeach
            </div>
        </div>
    </div>
</x-layout>