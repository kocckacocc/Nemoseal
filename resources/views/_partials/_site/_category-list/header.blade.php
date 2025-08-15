<header class="page-header">
  <div class="absolute inset-0">
    <img class="object-cover object-top w-full h-full" src="/assets/images/hero-image.jfif" alt="Fejléckép" loading="lazy">
    <div class="absolute inset-0 bg-opacity-95 bg-neutral mix-blend-multiply" aria-hidden="true"></div>
  </div>
  <div class="relative px-4 py-24 pb-12 mx-auto space-y-4 pt-28 max-w-screen-2xl md:pt-40 md:pb-14 sm:px-6 lg:px-8">

    <nav class="flex" aria-label="Breadcrumb">
      <ol role="list" class="flex items-center space-x-4">
        <li>
          <div class="flex items-center">
            <svg class="flex-shrink-0 w-5 h-5 text-white opacity-50" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"/>
            </svg>
            <a href="/gyartok" class="ml-4 text-sm font-medium text-white opacity-50 hover:opacity-100 hover:text-secondary-light">Termékeink</a>
          </div>
        </li>

      </ol>
    </nav>

    <h1 class="page-header__title">
      {{ $data['manufacturer']['name'] }}
    </h1>

  </div>
</header>
