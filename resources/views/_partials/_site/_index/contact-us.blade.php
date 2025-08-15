<section class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="grid grid-flow-row gap-12 md:grid-flow-col">

    <div class="relative w-64 h-32 md:h-64 bg-gradient-to-t from-primary-light to-primary-dark drop-shadow-3xl">
      <h2 class="absolute text-2xl font-semibold uppercase text-neutral bottom-4 left-4 sm:text-3xl">Kapcsolat</h2>
      <div class="absolute z-0 w-4 h-32 transform md:h-64 bg-primary skew-y-45 top-2 -right-4"></div>
      <div class="absolute z-0 w-64 h-4 transform bg-primary -right-2 skew-x-45 -bottom-4"></div>
    </div>

    <div class="grid grid-flow-row grid-cols-1 gap-12 xl:grid-cols-2 xl:grid-flow-col">

      <article class="px-8 py-12 space-y-10 transition-all shadow-lg bg-opacity-95 bg-neutral hover:bg-opacity-100 hover:shadow-xl">
        <div class="text-base leading-loose text-white xl:leading-loose xl:text-lg font-body">{!! $data['settings']['kapcsolat tartalom'] ?? '' !!} </div>
        <ul class="space-y-2 text-base leading-loose text-white xl:leading-loose xl:text-lg font-body">
          <li class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
            </svg>
            <span>{!! $data['settings']['kapcsolat cím'] ?? '' !!}</span>
          </li>
          <li class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
            </svg>
            <a href="mailto:info@nemoseal.hu">{!! strip_tags($data['settings']['kapcsolat email'] ?? '') !!}</a>
          </li>
          <li class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" viewBox="0 0 20 20" fill="currentColor">
              <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd" />
            </svg>
            <a href="tel:{!! strip_tags($data['settings']['kapcsolat telefonszám'] ?? '') !!}">{!! strip_tags($data['settings']['kapcsolat telefonszám'] ?? '') !!}</a>
          </li>
          <li class="flex items-center space-x-4">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
            </svg>
            <span>Nyitvatartás:</span>
          </li>
          <li class="ml-9">{!! $data['settings']['kapcsolat nyitvatartás'] ?? '' !!}</li>
        </ul>
        <a class="text-2xl btn-link" href="{{ $page->baseUrl }}/kapcsolat">
          <span>Kapcsolat</span>
          <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all" fill="none" viewBox="0 0 24 24" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
          </svg>
        </a>
      </article>

      <div class="aspect-w-1 aspect-h-1 sm:aspect-w-4 sm:aspect-h-3">
        <iframe class="w-full h-full" src="{!! strip_tags($data['settings']['kapcsolat google maps kód'] ?? '') !!}" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>

  </div>
</section>
