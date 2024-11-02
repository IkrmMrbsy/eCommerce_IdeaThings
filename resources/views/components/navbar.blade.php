<nav class="bg-gradient-to-r from-lime-700 via-green-800 to-green-700 shadow-lg fixed w-full top-0 z-10" x-data="{ isOpen: false }">
  <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
      <div class="flex h-16 items-center justify-between">
        <div class="flex items-center">
          <div class="flex-shrink-0">
              <img class="h-12 w-12" src="/img/logo.png" alt="Your Company">
          </div>
          <div class="ml-3 text-lime-300 font-bold text-lg">IdeaThings</div> <!-- Added text here -->
          <div class="hidden md:block">
              <div class="ml-10 flex items-baseline space-x-4">
                  <!-- Links -->
                  <a href="/" class="{{ request()->is('/') ? 'bg-lime-800 text-white' : 'text-lime-300 hover:bg-lime-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">Home</a>
                  <a href="/UMKM" class="{{ request()->is('/UMKM') ? 'bg-lime-800 text-white' : 'text-lime-300 hover:bg-lime-600 hover:text-white' }} px-3 py-2 rounded-md text-sm font-medium transition duration-200 ease-in-out">UMKM</a>
                  <x-nav-fashion></x-nav-fashion>
              </div>
          </div>
      </div>
      
          <div class="hidden md:block">
              <div class="ml-4 flex items-center md:ml-6">
                  <!-- Profile dropdown -->
                  <div class="relative ml-3">
                      <button type="button" @click="isOpen = !isOpen" class="relative flex max-w-xs items-center rounded-full bg-gray-800 text-sm focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" id="user-menu-button" aria-expanded="false" aria-haspopup="true">
                          <span class="sr-only">Open user menu</span>
                          <img class="h-8 w-8 rounded-full" src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="">
                      </button>

                      <div x-show="isOpen"
                           x-transition:enter="transition ease-out duration-100 transform"
                           x-transition:enter-start="opacity-0 scale-95"
                           x-transition:enter-end="opacity-100 scale-100"
                           x-transition:leave="transition ease-in duration-75 transform"
                           x-transition:leave-start="opacity-100 scale-100"
                           x-transition:leave-end="opacity-0 scale-95"
                           class="absolute right-0 z-10 mt-2 w-48 origin-top-right rounded-lg bg-white py-1 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-lime-100 rounded-md">Your Profile</a>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-lime-100 rounded-md">Settings</a>
                          <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-lime-100 rounded-md">Sign out</a>
                      </div>
                  </div>
              </div>
          </div>
          <div class="-mr-2 flex md:hidden">
              <!-- Mobile menu button -->
              <button type="button" @click="isOpen = !isOpen" class="relative inline-flex items-center justify-center rounded-md bg-lime-800 p-2 text-lime-400 hover:bg-lime-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-lime-800">
                  <span class="sr-only">Open main menu</span>
                  <svg :class="{'hidden': isOpen, 'block': !isOpen }" class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                  </svg>
                  <svg :class="{'hidden': !isOpen, 'block': isOpen }" class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                  </svg>
              </button>
          </div>
      </div>
  </div>

  <!-- Mobile menu -->
  <div x-show="isOpen" class="md:hidden">
      <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
          <a href="/" class="{{ request()->is('/') ? 'bg-lime-800 text-white' : 'text-lime-300 hover:bg-lime-600 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium transition duration-200 ease-in-out">Home</a>
          <a href="/UMKM" class="{{ request()->is('/UMKM') ? 'bg-lime-800 text-white' : 'text-lime-300 hover:bg-lime-600 hover:text-white' }} block rounded-md px-3 py-2 text-base font-medium transition duration-200 ease-in-out">UMKM</a>
          <x-nav-fashion></x-nav-fashion>
      </div>
  </div>
</nav>
