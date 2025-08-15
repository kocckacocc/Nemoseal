<section class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="flex flex-col gap-12 lg:flex-row">
    <div class="relative flex-none w-64 h-32 md:h-64 bg-gradient-to-t from-primary-light to-primary-dark drop-shadow-3xl">
      <h2 class="absolute text-3xl font-semibold uppercase text-neutral bottom-4 left-4">Termékek</h2>
      <div class="absolute z-0 w-4 h-32 transform md:h-64 bg-primary skew-y-45 top-2 -right-4"></div>
      <div class="absolute z-0 w-64 h-4 transform bg-primary -right-2 skew-x-45 -bottom-4"></div>
    </div>
    <div class="relative flex-auto w-full">
      <ul role="list" class="space-y-4 lg:grid lg:grid-cols-2 lg:gap-6 lg:space-y-0 xl:grid-cols-3 xl:gap-8">

        @foreach($data['manufacturers'] ?? [] as $manufacturer)

          <li
            class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
            <a class="block px-8 py-12 xl:px-10" href="/kategoriak/{{ $data['manufacturer_slugs'][$manufacturer['id']] }}">
              <div class="space-y-6 xl:space-y-10">
                <img class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                     src="{{ url('storage/' . (empty($manufacturer['image']) ? 'no_image.png' : $manufacturer['image'])) }}" alt="{{ $manufacturer['name'] }} logó">
                <div class="space-y-4">
                  <div class="space-y-1 text-lg leading-6 text-center">
                    <h3 class="text-3xl font-semibold text-white uppercase">{{ $manufacturer['name'] }}</h3>
                  </div>
                </div>
              </div>
            </a>
          </li>

        @endforeach

      </ul>
    </div>
  </div>
</section>