<nav class="bg-white/95 backdrop-blur-lg border-b border-gray-200/50 shadow-2xl fixed w-full top-0 z-50 transition-all duration-300" x-data="{ isOpen: false }">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <!-- Logo and text with modern styling -->
            <div class="flex-shrink-0 flex items-center space-x-3 transform transition-transform hover:scale-105">
                <a href="/" class="flex items-center">
                    <img class="h-12 w-auto rounded-full shadow-md" src="/img/logo.png" alt="iDeaThings">
                    <div class="ml-3 text-gray-900 font-extrabold text-xl tracking-tight bg-clip-text text-transparent bg-gradient-to-r from-lime-600 to-lime-600">
                        iDeaThings
                    </div>
                </a>
            </div>

            <!-- Centered navigation with modern hover effects -->
            <div class="hidden md:flex flex-1 justify-center">
                <div class="flex items-baseline space-x-6">
                    <a href="/" class="group relative {{ request()->is('/') ? 'text-lime-600 font-bold' : 'text-gray-600' }} px-3 py-2 text-sm font-medium transition-all duration-300 hover:text-lime-600">
                        Home
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-lime-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                    </a>
                    <a href="/UMKM" class="group relative {{ request()->is('UMKM') ? 'text-lime-600 font-bold' : 'text-gray-600' }} px-3 py-2 text-sm font-medium transition-all duration-300 hover:text-lime-600">
                        UMKM
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-lime-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                    </a>
                    <x-nav-fashion class="group relative text-gray-600 hover:text-lime-600 px-3 py-2 text-sm font-medium transition-all duration-300">
                        <span class="absolute bottom-0 left-0 w-full h-0.5 bg-lime-600 scale-x-0 group-hover:scale-x-100 transition-transform origin-left"></span>
                    </x-nav-fashion>
                </div>
            </div>

            <!-- Cart and Action Buttons -->
			<div class="hidden md:flex items-center space-x-4">
				<a href="https://ideathings.id/" class="flex items-center space-x-2 px-4 py-2 rounded-full bg-gradient-to-r from-lime-500 to-lime-600 text-white font-medium transition-all duration-300 hover:shadow-lg hover:scale-105 group">
					<svg class="h-5 w-5 transition-transform group-hover:rotate-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
						<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
					</svg>
					<span>iDeaThings</span>
				</a>
			</div>

            <!-- Mobile Menu Toggle -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" @click="isOpen = !isOpen" class="inline-flex items-center justify-center rounded-full p-2 text-gray-600 hover:text-lime-600 hover:bg-blue-50 focus:outline-none focus:ring-2 focus:ring-blue-500 transition-all duration-300">
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

    <!-- Mobile menu with enhanced styling -->
    <div x-show="isOpen" x-transition:enter="transition ease-out duration-300" x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-300" x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90" class="md:hidden bg-white/95 backdrop-blur-lg shadow-lg">
        <div class="space-y-2 px-3 pb-4 pt-3">
            <a href="/" class="{{ request()->is('/') ? 'bg-blue-50 text-lime-600 font-bold' : 'text-gray-600 hover:bg-blue-50 hover:text-lime-600' }} block rounded-lg px-4 py-3 text-base font-medium transition-all duration-300 transform hover:translate-x-2">
                Home
            </a>
            <a href="/UMKM" class="{{ request()->is('/UMKM') ? 'bg-blue-50 text-lime-600 font-bold' : 'text-gray-600 hover:bg-blue-50 hover:text-lime-600' }} block rounded-lg px-4 py-3 text-base font-medium transition-all duration-300 transform hover:translate-x-2">
                UMKM
            </a>
            <x-nav-fashion class="{{ request()->is('/Fashion') ? 'bg-blue-50 text-lime-600 font-bold' : 'text-gray-600 hover:bg-blue-50 hover:text-lime-600' }} block rounded-lg px-4 py-3 text-base font-medium transition-all duration-300 transform hover:translate-x-2"></x-nav-fashion>
        </div>
    </div>
</nav>