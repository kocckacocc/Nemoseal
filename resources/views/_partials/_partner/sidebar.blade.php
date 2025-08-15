<div class="hidden overflow-y-auto w-28 md:block bg-opacity-95 bg-neutral backdrop-filter backdrop-blur-xl">
  <div class="flex flex-col items-center w-full py-6">
    <div class="flex items-center flex-shrink-0">
      <img class="w-auto h-8" src="/assets/images/nemoseal-logo-mark.svg" alt="Némo Seal logó">
    </div>
    <div class="flex-1 w-full mt-6 space-y-1">
      <!-- Current: "bg-indigo-800 text-white", Default: "text-indigo-100 hover:bg-indigo-800 hover:text-white" -->
      <a href="{{ $page->baseUrl }}/partner-dashboard" class="flex flex-col items-center w-full p-3 text-xs font-medium text-white hover:opacity-75 group border-r-2 border-transparent hover:border-secondary // {{ $page->selected('partner-dashboard') }}" aria-current="page">
        <!--
            Heroicon name: outline/home

            Current: "text-white", Default: "text-indigo-300 group-hover:text-white"
          -->
        <svg class="w-6 h-6 text-white group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
        </svg>
        <span class="mt-2 text-center">Vezérlőpult</span>
      </a>

      <a href="{{ $page->baseUrl }}/partner-product-index" class="flex flex-col items-center w-full p-3 text-xs font-medium text-white hover:opacity-75 group border-r-2 border-transparent hover:border-secondary // {{ $page->selected('partner-product-index') }}">
        <!-- Heroicon name: outline/view-grid -->
        <svg class="w-6 h-6 text-indigo-300 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
        </svg>
        <span class="mt-2 text-center">Renedlés leadása</span>
      </a>

      {{-- <a href="{{ $page->baseUrl }}/partner-order-index" class="flex flex-col items-center w-full p-3 text-xs font-medium text-white hover:opacity-75 group border-r-2 border-transparent hover:border-secondary // {{ $page->selected('partner-order-index') }}">
      <!-- Heroicon name: outline/photograph -->
      <svg class="w-6 h-6 text-indigo-300" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
      </svg>
      <span class="mt-2 text-center">Korábbi rendelések</span>
      </a> --}}

      <a href="{{ $page->baseUrl }}/partner-setting-index" class="flex flex-col items-center w-full p-3 text-xs font-medium text-white hover:opacity-75 group border-r-2 border-transparent hover:border-secondary // {{ $page->selected('partner-setting-index') }}">
        <!-- Heroicon name: outline/cog -->
        <svg class="w-6 h-6 text-indigo-300 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
        </svg>
        <span class="mt-2 text-center">Beállítások</span>
      </a>

      <a href="/" class="flex flex-col items-center w-full p-3 text-xs font-medium text-white border-r-2 border-transparent hover:opacity-75 group hover:border-secondary">
        <!-- Heroicon name: outline/cog -->
        <svg class="w-6 h-6 text-indigo-300 group-hover:text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
        </svg>
        <span class="mt-2 text-center">Kijelentkezés</span>
      </a>
    </div>
  </div>
</div>
