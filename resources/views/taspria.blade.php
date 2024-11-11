<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-lime-50">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-5">
                <h1 class="text-2xl font-bold text-gray-900">Koleksi</h1>
                <div class="mt-6 grid grid-cols-1 gap-y-12 sm:grid-cols-2 lg:grid-cols-3 lg:gap-x-6 lg:gap-y-12">
                    
                  
                  @foreach ($products as $product)
                  <div class="group relative transition-transform transform hover:scale-105">
                      <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white shadow-lg transition-shadow duration-300 ease-in-out group-hover:shadow-xl">
                          <img src={{ $product->img }} class="h-full w-full object-cover object-center transition-transform duration-300 ease-in-out group-hover:scale-110">
                      </div>
                      <h3 class="mt-6 text-sm text-gray-500">
                          <span class="absolute inset-0"></span>
                              {{ $product->produk }}
                         
                      </h3>
                      <p class="text-base font-semibold text-gray-900">{{ $product->harga }}</p>
                      <div class="mt-4">
                          <!-- Remove 'group' class to prevent hover effects from affecting the button -->
                          <a href="#" target="_blank" class="block bg-lime-800 text-white text-center px-4 py-2 rounded-md hover:bg-lime-700 transition duration-200">Beli Sekarang</a>
                      </div>
                  </div>
                  @endforeach
                    
                </div>
            </div>
        </div>
    </div>
  </x-layout>
  