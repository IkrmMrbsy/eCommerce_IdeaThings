<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>
    <div class="bg-lime-50">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="mx-auto max-w-2xl py-16 sm:py-24 lg:max-w-none lg:py-5">
        <h1 class="text-2xl font-bold text-gray-900">Koleksi</h1>
        <div class="mt-6 space-y-12 lg:grid lg:grid-cols-3 lg:gap-x-6 lg:space-y-0">
          
          @foreach ($fashionmales as $fashionmale)
          <div class="group relative">
            <div class="relative h-80 w-full overflow-hidden rounded-lg bg-white sm:aspect-h-1 sm:aspect-w-2 lg:aspect-h-1 lg:aspect-w-1 group-hover:opacity-75 sm:h-64">
              <img src={{ $fashionmale['img'] }} class="h-full w-full object-cover object-center">
            </div>
            <h3 class="mt-6 text-sm text-gray-500">
              <a href="#">
                <span class="absolute inset-0"></span>
                {{ $fashionmale ['produk'] }}
              </a>
            </h3>
            <p class="text-base font-semibold text-gray-900">{{ $fashionmale ['harga'] }}</p>
          </div>
          @endforeach
          
        </div>
      </div>
    </div>
    </div>
  

  </x-layout>