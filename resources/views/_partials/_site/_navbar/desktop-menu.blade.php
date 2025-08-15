@if($data['mainteance_mode'] ?? false)

  <div class="bg-red-800 text-white p-4 text-center">
    {!! $data['mainteance_text'] !!}
  </div>

@endif

<div class="mx-auto lg:static">
  <div class="flex h-16 transition-all md:h-24" :class="{'h-16 md:h-24': !scrolledFromTop, 'h-16 md:h-16': scrolledFromTop}">

    <div class="relative flex flex-none w-32 px-4 bg-white md:w-auto">

      <div class="flex items-center xl:hidden">
        <button class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-neutral hover:bg-secondary-light focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary" type="button" aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
          <span class="sr-only">Főmenü megnyitása</span>
          <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
          </svg>
          <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
          </svg>
        </button>
      </div>

      <div class="relative z-0 flex items-center flex-shrink-0">
        <a href="/"><img class="relative z-10 block w-auto h-12 md:hidden" src="/assets/images/nemoseal-logo-mark-alt.svg" alt="Némo Seal logó"></a>
        <a href="/"><img class="relative z-10 hidden w-auto transition-all md:h-16 md:block" :class="{'md:h-16': !scrolledFromTop, 'md:h-12': scrolledFromTop}" src="/assets/images/nemoseal-logo-alt.svg" alt="Némo Seal logó"></a>
      </div>
      <div class="absolute w-16 h-16 transition-all bg-white -right-16 md:w-24 md:h-24 md:-right-24" style="clip-path: polygon(0 0, 0% 100%, 100% 100%);" :class="{'md:w-24 md:h-24 md:-right-24': !scrolledFromTop, 'md:w-16 md:h-16 md:-right-16': scrolledFromTop}"></div>

    </div>

    <div class="relative z-10 hidden mr-8 xl:ml-auto xl:flex xl:space-x-8">
      <a class=" transition duration-200 ease-in-out inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase xl:border-b-2 border-transparent hover:border-secondary hover:text-opacity-75 // {{ $page->selected('') }}" href="/">
        Főoldal
      </a>
      <a class=" transition duration-200 ease-in-out inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase xl:border-b-2 border-transparent hover:border-secondary hover:text-opacity-75 // {{ $page->selected('about-us') }}" href="{{ $page->baseUrl }}/rolunk">
        Rólunk
      </a>
      <a class=" transition duration-200 ease-in-out inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase xl:border-b-2 border-transparent hover:border-secondary hover:text-opacity-75 // {{ $page->selected('manufacturer-list') }}" href="{{ $page->baseUrl }}/gyartok">
        Termékeink
      </a>
      <a class=" transition duration-200 ease-in-out inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase xl:border-b-2 border-transparent hover:border-secondary hover:text-opacity-75 // {{ $page->selected('downloadable-content') }}" href="{{ $page->baseUrl }}/letoltesek">
        Letöltések
      </a>
      <a class=" transition duration-200 ease-in-out inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase xl:border-b-2 border-transparent hover:border-secondary hover:text-opacity-75 // {{ $page->selected('contact-us') }}" href="{{ $page->baseUrl }}/kapcsolat">
        Kapcsolat
      </a>
      @if(($data['user'] ?? false) && !empty($data['user']->addresses->toArray() ?? []) && !($data['mainteance_mode'] ?? false))
        <a class=" transition duration-200 ease-in-out inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase xl:border-b-2 border-transparent hover:border-secondary hover:text-opacity-75 // {{ $page->selected('order') }}" href="{{ $page->baseUrl }}/order">
          Rendelés
        </a>
      @endif
    </div>

    <div class="flex items-center px-4 ml-auto xl:ml-4">
      <div class="flex-shrink-0">
        <a class="btn" href="/admin-dashboard" type="button">
          <span>Partnerportál</span>
        </a>
      </div>
      {{--
      <div class="flex items-center flex-shrink-0 ml-4">
				<a class="btn" href="/admin-dashboard" type="button">
					<span>Admin</span>
				</a>
			</div>
			 --}}
    </div>

  </div>
</div>
