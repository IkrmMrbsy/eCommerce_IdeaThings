<nav class="bg-white/90 backdrop-blur-sm border-b border-gray-200 shadow-sm fixed w-full top-0 z-10" x-data="{ isOpen: false }">
	<div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
		<div class="flex h-16 items-center justify-between">
			<div class="flex items-center">
				<div class="flex-shrink-0">
					<img class="h-10 w-auto" src="/img/logo.png" alt="iDeaThings">
				</div>
				<div class="ml-3 text-gray-800 font-bold text-lg">iDeaThings</div>
				<div class="hidden md:block">
					<div class="ml-10 flex items-baseline space-x-6">
						<a href="/" class="{{ request()->is('/') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 text-sm font-medium transition-all duration-200">
							Home
						</a>
						<a href="/UMKM" class="{{ request()->is('/UMKM') ? 'text-blue-600 font-semibold' : 'text-gray-600 hover:text-gray-900' }} px-3 py-2 text-sm font-medium transition-all duration-200">
							UMKM
						</a>
						<x-nav-fashion></x-nav-fashion>
					</div>
				</div>
			</div>

			<div class="hidden md:block">
				<div class="ml-4 flex items-center md:ml-6">
					<!-- Your profile dropdown code here -->
				</div>
			</div>

			<div class="-mr-2 flex md:hidden">
				<button type="button" @click="isOpen = !isOpen" class="inline-flex items-center justify-center rounded-md p-2 text-gray-600 hover:text-gray-900 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-200">
					<span class="sr-only">Open main menu</span>
					<svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
					</svg>
					<svg :class="{'hidden': !isOpen, 'block': isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
					</svg>
				</button>
			</div>
		</div>
	</div>

	<!-- Mobile menu -->
	<div x-show="isOpen" class="md:hidden">
		<div class="space-y-1 px-2 pb-3 pt-2">
			<a href="/" class="{{ request()->is('/') ? 'bg-gray-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} block rounded-md px-3 py-2 text-base font-medium transition-all duration-200">
				Home
			</a>
			<a href="/UMKM" class="{{ request()->is('/UMKM') ? 'bg-gray-50 text-blue-600' : 'text-gray-600 hover:bg-gray-50 hover:text-gray-900' }} block rounded-md px-3 py-2 text-base font-medium transition-all duration-200">
				UMKM
			</a>
			<x-nav-fashion></x-nav-fashion>
		</div>
	</div>
</nav>
