<div class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="space-y-12">
    <ul role="list" class="space-y-4 lg:grid lg:grid-cols-2 lg:gap-6 lg:space-y-0 xl:grid-cols-3 xl:gap-12">

      @foreach($data['manufacturers'] ?? [] as $manufacturer)

        <li class="space-y-10 transition-all lg:text-center bg-neutral xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">
          <a
            class="block px-8 py-12 xl:px-10"
            href="/kategoriak/{{ $data['manufacturer_slugs'][$manufacturer['id']] }}">

            <div class="space-y-6 xl:space-y-10">
              <img
                class="w-40 h-40 mx-auto rounded-full xl:w-56 xl:h-56"
                src="{{ url('storage/' . (empty($manufacturer['image']) ? 'no_image.png' : $manufacturer['image'])) }}"
                alt="{{ $manufacturer['name'] }} logó"
              >
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
