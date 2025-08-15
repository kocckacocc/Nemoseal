<!DOCTYPE html>
<html lang="hu">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" type="image/png" href="http://nemoseal.hu/assets/images/favicon-32x32.png ">
  <link rel="apple-touch-icon" sizes="57x57" href="/assets/images/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/assets/images/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/assets/images/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/assets/images/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/assets/images/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/assets/images/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/assets/images/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/assets/images/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="/assets/images/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/assets/images/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon-16x16.png">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/assets/images/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <title>Némo Seal Kft. - A rugalmas csőtoldó elemek importőre</title>
  <link rel="stylesheet" href="/css/app.css">
  <script defer src="/js/app.js"></script>
</head>
<body class="flex flex-col min-h-screen antialiased font-display" x-data="{navOpen: false, scrolledFromTop: false}"
      x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
      @scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
      cz-shortcut-listen="true">
<nav class="fixed top-0 z-20 w-full bg-opacity-70 bg-neutral backdrop-filter backdrop-blur-xl"
     x-data="{ open: false }">
  <div class="mx-auto lg:static">
    <div class="flex h-16 transition-all md:h-24"
         :class="{'h-16 md:h-24': !scrolledFromTop, 'h-16 md:h-16': scrolledFromTop}">
      <div class="relative flex flex-none w-32 px-4 bg-white md:w-auto">
        <div class="flex items-center xl:hidden">
          <button
            class="inline-flex items-center justify-center p-2 text-gray-400 rounded-md hover:text-neutral hover:bg-secondary-light focus:outline-none focus:ring-2 focus:ring-inset focus:ring-secondary"
            type="button" aria-controls="mobile-menu" aria-expanded="false" @click="open = !open">
            <span class="sr-only">Főmenü megnyitása</span>
            <svg class="block w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16">
              </path>
            </svg>
            <svg class="hidden w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor" aria-hidden="true">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
            </svg>
          </button>
        </div>
        <div class="relative z-0 flex items-center flex-shrink-0">
          <a href="/"><img class="relative z-10 block w-auto h-12 md:hidden"
                           src="/assets/images/nemoseal-logo-mark-alt.svg" alt="Némo Seal logó"></a>
          <a href="/"><img class="relative z-10 hidden w-auto transition-all md:h-16 md:block"
                           :class="{'md:h-16': !scrolledFromTop, 'md:h-12': scrolledFromTop}"
                           src="/assets/images/nemoseal-logo-alt.svg" alt="Némo Seal logó"></a>
        </div>
        <div class="absolute w-16 h-16 transition-all bg-white -right-16 md:w-24 md:h-24 md:-right-24"
             style="clip-path: polygon(0 0, 0% 100%, 100% 100%);"
             :class="{'md:w-24 md:h-24 md:-right-24': !scrolledFromTop, 'md:w-16 md:h-16 md:-right-16': scrolledFromTop}">
        </div>
      </div>
      <div class="relative z-10 hidden mr-8 xl:ml-auto xl:flex xl:space-x-8">
        <a class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase transition duration-200 ease-in-out border-transparent xl:border-b-2 hover:border-secondary hover:text-opacity-75 //"
           href="/">
          Főoldal
        </a>
        <a class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase transition duration-200 ease-in-out border-transparent xl:border-b-2 hover:border-secondary hover:text-opacity-75 //"
           href="/rolunk.html">
          Rólunk
        </a>
        <a class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase transition duration-200 ease-in-out border-transparent xl:border-b-2 hover:border-secondary hover:text-opacity-75 //"
           href="/termekeink.html">
          Termékeink
        </a>
        <a class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase transition duration-200 ease-in-out border-transparent xl:border-b-2 hover:border-secondary hover:text-opacity-75 //"
           href="/letoltesek.html">
          Letöltések
        </a>
        <a class="inline-flex items-center px-1 pt-1 text-sm font-medium text-white uppercase transition duration-200 ease-in-out border-transparent xl:border-b-2 hover:border-secondary hover:text-opacity-75 //"
           href="/kapcsolat.html">
          Kapcsolat
        </a>
      </div>
    </div>
  </div>
  <div class="xl:hidden" id="mobile-menu" x-show="open" style="display: none;">
    <div class="pt-4 pb-4 space-y-4">
      <a class="block py-2 pl-3 pr-4 text-base font-medium text-white uppercase transition duration-200 ease-in-out border-l-4 border-transparent sm:pl-5 sm:pr-6 // "
         href="/">Főoldal</a>
      <a class="block py-2 pl-3 pr-4 text-base font-medium text-white uppercase transition duration-200 ease-in-out border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // "
         href="/rolunk.html">Rólunk</a>
      <a class="block py-2 pl-3 pr-4 text-base font-medium text-white uppercase transition duration-200 ease-in-out border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // "
         href="/termekeink.html">Termékeink</a>
      <a class="block py-2 pl-3 pr-4 text-base font-medium text-white uppercase transition duration-200 ease-in-out border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // "
         href="/letoltesek.html">Letöltések</a>
      <a class="block py-2 pl-3 pr-4 text-base font-medium text-white uppercase transition duration-200 ease-in-out border-l-4 border-transparent hover:border-secondary hover:text-opacity-75 sm:pl-5 sm:pr-6 // "
         href="/kapcsolat.html">Kapcsolat</a>
    </div>
  </div>
</nav>
<main class="relative flex-1 overflow-hidden">
  <div class="background__shape"></div>
  <div class="flex-1 space-y-16 md:space-y-24">
    <section class="page-header">
      <div class="absolute inset-0">
        <img class="object-cover object-top w-full h-full" src="/assets/images/hero-image.jfif" alt="Fejléckép"
             loading="lazy">
        <div class="absolute inset-0 bg-opacity-95 bg-neutral mix-blend-multiply" aria-hidden="true"></div>
      </div>
      <div
        class="relative grid grid-cols-1 px-4 pb-12 mx-auto pt-28 lg:grid-cols-2 md:pt-40 md:pb-20 max-w-screen-2xl xl:pt-52 xl:pb-28 sm:px-6 lg:px-8">
        <div class="space-y-8">
          <h1
            class="max-w-3xl text-3xl font-extrabold leading-tight tracking-tight text-white uppercase md:leading-tight xl:leading-tight md:text-5xl xl:text-7xl">
            A rugalmas csőkötő elemek importőre</h1>
          <a class="text-lg md:text-xl xl:text-2xl btn-link" href="/termekeink.html">
            <span>Forgalmazott termékeink</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
              </path>
            </svg>
          </a>
        </div>
        <img
          class="absolute right-0 hidden h-full origin-right transform -translate-x-8 lg:block -bottom-px scale-129 filter"
          src="/assets/images/hero-combined-shape-alt.svg" alt="N">
      </div>
    </section>
    <section class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
      <div class="grid grid-flow-row gap-12 xl:gap-24 md:grid-flow-col">
        <div class="relative w-64 h-32 xl:w-128 xl:h-128">
          <div class="hidden xl:block">
            <div
              class="absolute top-0 left-0 z-0 w-full h-full bg-gradient-to-t from-secondary-light to-secondary-dark"
              style="clip-path: polygon(0 60%, 60% 60%, 60% 0, 100% 0, 100% 100%, 0 100%);">
              <img class="absolute inset-0 object-cover object-top w-full h-full opacity-10"
                   src="/assets/images/hero-image.jfif" alt="Rólunk" loading="lazy">
            </div>
            <div class="absolute z-0 w-4 transform h-128 bg-secondary skew-y-45 top-2 -right-4"></div>
            <div class="absolute z-0 h-4 transform w-128 bg-secondary -right-2 skew-x-45 -bottom-4"></div>
          </div>
          <div class="absolute w-64 h-32 md:h-64 bg-gradient-to-t from-primary-light to-primary-dark">
            <h2 class="absolute text-3xl font-semibold uppercase text-neutral bottom-4 left-4">Rólunk</h2>
            <div class="absolute z-0 w-4 h-32 transform md:h-64 bg-primary skew-y-45 top-2 -right-4"></div>
            <div class="absolute z-0 w-64 h-4 transform bg-primary -right-2 skew-x-45 -bottom-4"></div>
          </div>
        </div>
        <article class="space-y-10 place-self-center">
          <h3 class="text-3xl font-bold tracking-tight md:leading-tight xl:leading-tight md:text-3xl xl:text-5xl">
            Cégünk, a Némo Seal Kft. 2016 óta foglalkozik rugalmas csőkötő elemek importjával</h3>
          <p class="text-base leading-loose xl:leading-loose xl:text-lg font-body">Jelenleg az angol <strong>VIP
              Polymers LTD</strong> és a német <strong>Crassus GmbH &amp; Co. KG</strong> kizárólagos magyarországi
            képviseletét látjuk el. Az általunk forgalmazott termékeket viszonteladó partnereinknél az ország egész
            területén megtalálhatják.</p>
          <a class="text-lg md:text-xl xl:text-2xl btn-link group" href="/rolunk.html">
            <span>Rólunk</span>
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all" fill="none" viewBox="0 0 24 24"
                 stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
              </path>
            </svg>
          </a>
        </article>
      </div>
    </section>
    <section class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
      <div class="flex flex-col gap-12 lg:flex-row">
        <div class="relative flex-none w-64 h-32 md:h-64 bg-gradient-to-t from-primary-light to-primary-dark drop-shadow-3xl">
          <h2 class="absolute text-3xl font-semibold uppercase text-neutral bottom-4 left-4">Termékek</h2>
          <div class="absolute z-0 w-4 h-32 transform md:h-64 bg-primary skew-y-45 top-2 -right-4"></div>
          <div class="absolute z-0 w-64 h-4 transform bg-primary -right-2 skew-x-45 -bottom-4"></div>
        </div>
        <div class="relative flex-auto w-full">
          <ul role="list" class="space-y-4 lg:grid lg:grid-cols-2 lg:gap-6 lg:space-y-0 xl:grid-cols-3 xl:gap-8">
            <li
              class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
              <a class="block px-8 py-12 xl:px-10" href="/vip-seal.html">
                <div class="space-y-6 xl:space-y-10">
                  <img class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                       src="assets/images/storage/vip-seal-logo.png" alt="VIPSeal logó">
                  <div class="space-y-4">
                    <div class="space-y-1 text-lg leading-6 text-center">
                      <h3 class="text-3xl font-semibold text-white uppercase">VIPSeal</h3>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li
              class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
              <a class="block px-8 py-12 xl:px-10" href="/crassus.html">
                <div class="space-y-6 xl:space-y-10">
                  <img class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                       src="assets/images/storage/crassus-logo.png" alt="Crassus logó">
                  <div class="space-y-4">
                    <div class="space-y-1 text-lg leading-6 text-center">
                      <h3 class="text-3xl font-semibold text-white uppercase">Crassus</h3>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li
              class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
              <a class="block px-8 py-12 xl:px-10" href="/gufero.html">
                <div class="space-y-6 xl:space-y-10">
                  <img class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                       src="assets/images/storage/gufero-logo.png" alt="Gufero logó">
                  <div class="space-y-4">
                    <div class="space-y-1 text-lg leading-6 text-center">
                      <h3 class="text-3xl font-semibold text-white uppercase">Gufero</h3>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li
              class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
              <a class="block px-8 py-12 xl:px-10" href="/festa.html">
                <div class="space-y-6 xl:space-y-10">
                  <img class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                       src="assets/images/storage/festa-logo.png" alt="Festa logó">
                  <div class="space-y-4">
                    <div class="space-y-1 text-lg leading-6 text-center">
                      <h3 class="text-3xl font-semibold text-white uppercase">Festa</h3>
                    </div>
                  </div>
                </div>
              </a>
            </li>
            <li
              class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
              <a class="block px-8 py-12 xl:px-10" href="/tridon.html">
                <div class="space-y-6 xl:space-y-10">
                  <img class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                       src="assets/images/storage/tridon-logo.png" alt="Tridon logó">
                  <div class="space-y-4">
                    <div class="space-y-1 text-lg leading-6 text-center">
                      <h3 class="text-3xl font-semibold text-white uppercase">Tridon</h3>
                    </div>
                  </div>
                </div>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>
    <section class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
      <div class="grid grid-flow-row gap-12 md:grid-flow-col">
        <div class="relative w-64 h-32 md:h-64 bg-gradient-to-t from-primary-light to-primary-dark drop-shadow-3xl">
          <h2 class="absolute text-2xl font-semibold uppercase text-neutral bottom-4 left-4 sm:text-3xl">Kapcsolat
          </h2>
          <div class="absolute z-0 w-4 h-32 transform md:h-64 bg-primary skew-y-45 top-2 -right-4"></div>
          <div class="absolute z-0 w-64 h-4 transform bg-primary -right-2 skew-x-45 -bottom-4"></div>
        </div>
        <div class="grid grid-flow-row grid-cols-1 gap-8 xl:grid-cols-2 xl:grid-flow-col">
          <article
            class="px-8 py-12 space-y-10 transition-all shadow-lg bg-opacity-95 bg-neutral hover:bg-opacity-100 hover:shadow-xl">
            <p class="text-base leading-loose text-white xl:leading-loose xl:text-lg font-body">Magánszemélyként
              keressen minket és segítünk megtalálni szükséges terméket Önhöz legközelebb!</p>
            <ul class="space-y-2 text-base leading-loose text-white xl:leading-loose xl:text-lg font-body">
              <li class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" viewBox="0 0 20 20"
                     fill="currentColor">
                  <path fill-rule="evenodd"
                        d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z"
                        clip-rule="evenodd"></path>
                </svg>
                <span>1222 Budapest, Nagytétényi út 106.</span>
              </li>
              <li class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" viewBox="0 0 20 20"
                     fill="currentColor">
                  <path fill-rule="evenodd"
                        d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z"
                        clip-rule="evenodd"></path>
                </svg>
                <a href="mailto:info@nemoseal.hu">info@nemoseal.hu</a>
              </li>
              <li class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" viewBox="0 0 20 20"
                     fill="currentColor">
                  <path fill-rule="evenodd"
                        d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z"
                        clip-rule="evenodd"></path>
                </svg>
                <a href="tel:+36704232202">+3670 423 2202</a>
              </li>
              <li class="flex items-center space-x-4">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-secondary" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                </svg>
                <span>Nyitvatartás:</span>
              </li>
              <li class="ml-9">Hétfő - Csütörtök: 8:00–15:30</li>
              <li class="ml-9">Péntek: 8:00–14:30</li>
            </ul>
            <a class="text-2xl btn-link" href="/kapcsolat.html">
              <span>Kapcsolat</span>
              <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6 transition-all" fill="none" viewBox="0 0 24 24"
                   stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3">
                </path>
              </svg>
            </a>
          </article>
          <div class="aspect-w-1 aspect-h-1 sm:aspect-w-4 sm:aspect-h-3">
            <iframe class="w-full h-full"
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2699.9945853558384!2d19.026197615623712!3d47.41204677917217!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741e7a5fcff8881%3A0x296efbd18fd769b6!2zQnVkYXBlc3QsIE5hZ3l0w6l0w6lueWkgw7p0IDEwNiwgMTIyMg!5e0!3m2!1shu!2shu!4v1637440276621!5m2!1shu!2shu"
                    width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          </div>
        </div>
      </div>
    </section>
    <div></div>
  </div>
</main>
<footer class="mt-auto bg-neutral">
  <div
    class="flex flex-col px-4 py-8 mx-auto lg:space-x-4 lg:flex-row max-w-screen-2xl sm:px-6 lg:items-center lg:justify-between lg:px-8">
    <div class="flex justify-center order-3 w-full mt-6 lg:order-1 lg:justify-start lg:mt-0">
      <p class="text-base text-left text-white">
        © Minden jog fenntartva © NÉMO Seal Kft.
      </p>
    </div>
    <div class="flex justify-center order-2 mx-auto mt-6 w-14 lg:mt-0">
      <img class="z-10 block w-8 h-8" src="/assets/images/nemoseal-logo-mark.svg" alt="Némo Seal logó">
    </div>
    <div class="flex justify-center w-full space-x-6 lg:order-3 lg:justify-end">
      <a href="/aszf.html" class="text-base text-white hover:underline">
        ÁSZF
      </a>
    </div>
  </div>
</footer>
</body>
</html>