		<div class="xl:hidden" id="mobile-menu" x-show="open" x-cloak>

		  <div class="pt-4 pb-4 space-y-4">
		    <a class="transition duration-200 ease-in-out block py-2 pl-3 pr-4 text-base font-medium text-white uppercase border-l-4 border-transparent sm:pl-5 sm:pr-6 // {{ $page->selected('') }}" href="/">Főoldal</a>
		    <a class="transition duration-200 ease-in-out block py-2 pl-3 pr-4 text-base font-medium text-white uppercase border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // {{ $page->selected('about-us') }}" href="{{ $page->baseUrl }}/rolunk">Rólunk</a>
		    <a class="transition duration-200 ease-in-out block py-2 pl-3 pr-4 text-base font-medium text-white uppercase border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // {{ $page->selected('manufacturer-list') }}" href="{{ $page->baseUrl }}/gyartok">Termékeink</a>
		    <a class="transition duration-200 ease-in-out block py-2 pl-3 pr-4 text-base font-medium text-white uppercase border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // {{ $page->selected('downloadable-content') }}" href="{{ $page->baseUrl }}/letoltesek">Letöltések</a>
		    <a class="transition duration-200 ease-in-out block py-2 pl-3 pr-4 text-base font-medium text-white uppercase border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // {{ $page->selected('contact-us') }}" href="{{ $page->baseUrl }}/kapcsolat">Kapcsolat</a>
		  </div>

		</div>
