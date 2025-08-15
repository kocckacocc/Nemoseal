<nav class="fixed top-0 left-0 z-40 flex items-center justify-between w-full h-16 bg-white border-opacity-25 shadow-md"
  aria-label="Navigation">

    <div class="flex items-center flex-none w-auto px-3 xl:w-80">
      <a href="/"><img class="block h-10 md:hidden" src="{{ url('assets') }}/images/nemoseal-logo-mark-alt.svg" alt="Logó" /></a>
      <a href="/"><img class="hidden h-10 md:block" src="{{ url('assets') }}/images/nemoseal-logo-alt.svg" alt="Logó" /></a>
    </div>

  <div class="relative flex items-center flex-1 mx-5">
    <i class="absolute left-0 flex items-center pl-4">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
      </svg>
    </i>
    <input class="block w-full h-10 pr-16 border border-opacity-25 rounded-full border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:pr-14 sm:text-sm pl-14 bg-neutral bg-opacity-10 // product_search" type="text" placeholder="Kereső" />
  </div> 

  <div class="flex items-center justify-end flex-none w-auto px-3 xl:w-80">
    <a class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-neutral hover:bg-secondary-light focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary md:hidden" href="{{ \Laravel\Nova\Nova::path() }}">
      <span class="sr-only">Vezérlőpult</span>
      <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
      </svg>
    </a>
    <a class="hidden md:block btn" href="{{ \Laravel\Nova\Nova::path() }}">Vezérlőpult</a>
    {{-- <button type="button" class="rounded active:outline-none active:shadow-outline focus:outline-none focus:shadow-outline">
      <div class="flex items-center cursor-pointer select-none dropdown-trigger h-dropdown-trigger h-9">

        <img src="{{ url('storage/' . (empty($data['user']->image) ? 'no_image.png' : $data['user']->image)) }}" class="w-8 h-8 mr-3 rounded-full">

        <span class="text-90">{{ $data['user']->name }}</span>
        <svg xmlns="http://www.w3.org/2000/svg" width="10" height="6" viewBox="0 0 10 6" class="ml-2"><path fill="var(--90)" d="M8.292893.292893c.390525-.390524 1.023689-.390524 1.414214 0 .390524.390525.390524 1.023689 0 1.414214l-4 4c-.390525.390524-1.023689.390524-1.414214 0l-4-4c-.390524-.390525-.390524-1.023689 0-1.414214.390525-.390524 1.023689-.390524 1.414214 0L5 3.585786 8.292893.292893z"></path></svg>
      </div> 
    </button> --}}
  </div>
</nav>