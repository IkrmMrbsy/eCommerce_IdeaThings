<div x-data="{ isOpen: false }" class="relative inline-block text-left">
  <div>
      <button 
          type="button" 
          @click="isOpen = !isOpen" 
          class="inline-flex w-full justify-center gap-x-1.5 rounded-md bg-lime-800 px-3 py-2 text-sm font-semibold text-white shadow-sm ring-1 ring-inset ring-lime-800 hover:bg-lime-700" 
          id="menu-button" 
          aria-expanded="true" 
          aria-haspopup="true">
          Fashion
          <svg class="-mr-1 h-5 w-5 text-lime-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
              <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
          </svg>
      </button>
  </div>

  <div 
      x-show="isOpen"
      x-transition:enter="transition ease-out duration-100 transform"
      x-transition:enter-start="opacity-0 scale-95"
      x-transition:enter-end="opacity-100 scale-100"
      x-transition:leave="transition ease-in duration-75 transform"
      x-transition:leave-start="opacity-100 scale-100"
      x-transition:leave-end="opacity-0 scale-95"
      class="absolute left-0 z-10 mt-2 w-56 origin-top-right divide-y divide-lime-100 rounded-md bg-lime-100 shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" 
      role="menu" 
      aria-orientation="vertical" 
      aria-labelledby="menu-button" 
      tabindex="-1">
      
      <div class="py-1" role="none">
          <a href="/pakaianpria" class="{{ request()->is('/pakaianpria') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-0">Pakaian Pria</a>
          <a href="/pakaianwanita" class="{{ request()->is('/pakaianwanita') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-1">Pakaian Wanita</a>
          <a href="/taspria" class="{{ request()->is('/taspria') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-2">Tas Pria</a>
          <a href="/taswanita" class="{{ request()->is('/taswanita') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-3">Tas Wanita</a>
          <a href="/aksesoris" class="{{ request()->is('/aksesoris') ? 'bg-lime-900 text-white' : 'text-lime-700 hover:bg-lime-700 hover:text-white' }} block px-4 py-2 text-sm" role="menuitem" tabindex="-1" id="menu-item-4">Aksesoris</a> 
      </div>
  </div>
</div>
