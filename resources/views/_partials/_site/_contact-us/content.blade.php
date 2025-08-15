<section class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">

  <div class="grid grid-flow-row grid-cols-1 gap-12">

    <ul class="space-y-4 text-lg text-white lg:grid lg:grid-cols-2 lg:gap-6 lg:space-y-0 xl:grid-cols-3 xl:gap-12 lg:text-xl">
      <li class="flex flex-col items-start px-8 py-12 space-y-10 transition-all bg-opacity-95 bg-neutral hover:bg-opacity-100 hover:shadow-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-secondary" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"/>
        </svg>
        <span>{!! $data['settings']['kapcsolat cím'] ?? '' !!}</span>
      </li>
      <li class="flex flex-col items-start px-8 py-12 space-y-10 transition-all bg-opacity-95 bg-neutral hover:bg-opacity-100 hover:shadow-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-secondary" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd"/>
        </svg>
        <a href="mailto:info@nemoseal.hu">{!! strip_tags($data['settings']['kapcsolat email'] ?? '') !!}</a>
      </li>
      <li class="flex flex-col items-start px-8 py-12 space-y-10 transition-all bg-opacity-95 bg-neutral hover:bg-opacity-100 hover:shadow-xl">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-secondary" viewBox="0 0 20 20" fill="currentColor">
          <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"/>
        </svg>
        <a href="tel:{!! strip_tags($data['settings']['kapcsolat telefonszám'] ?? '') !!}">{!! strip_tags($data['settings']['kapcsolat telefonszám'] ?? '') !!}</a>
      </li>
    </ul>

    <div class="flex flex-col items-start px-8 py-12 space-y-10 transition-all bg-opacity-95 bg-neutral hover:bg-opacity-100 hover:shadow-xl text-white lg:text-xl">
      <svg xmlns="http://www.w3.org/2000/svg" class="w-12 h-12 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
      </svg>
      <ul class="space-y-2">
        <li>Nyitvatartás:</li>
        <li>
          {!! $data['settings']['kapcsolat nyitvatartás'] ?? '' !!}
        </li>
      </ul>
    </div>

    <div class="aspect-w-1 aspect-h-1 sm:aspect-w-16 sm:aspect-h-6">
      <iframe class="w-full h-full" src="{!! strip_tags($data['settings']['kapcsolat google maps kód'] ?? '') !!}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
  </div>

</section>
