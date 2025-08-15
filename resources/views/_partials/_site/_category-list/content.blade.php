<div class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="space-y-12">

    <article class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:items-center md:space-x-8 // manufacturer">
      @if(!empty($data['manufacturer']['image']))
        <img
          class="self-start flex-none w-24 h-24 rounded-full sm:w-32 sm:h-32 md:w-40 md:h-40 lg:w-56 lg:h-56 // manufacturer__image"
          src="{{ url('storage/' . (empty($data['manufacturer']['image']) ? 'no_image.png' : $data['manufacturer']['image'])) }}"
          alt="{{ $data['manufacturer']['name'] }}"
        >
      @endif
      <div class="space-y-8">
        <div class="space-y-1 text-lg leading-6">
          <h3 class="text-2xl font-bold uppercase md:text-3xl xl:text-5xl // manufacturer__name">{{ $data['manufacturer']['name'] }}</h3>
        </div>
        @if(!empty($data['manufacturer']['description']))
          <div class="text-lg leading-loose font-weight font-body // manufacturer__description">
            {!! $data['manufacturer']['description'] !!}
          </div>
        @endif
      </div>
    </article>

    <ul role="list" class="grid grid-cols-1 gap-6 // category-list">

      @foreach($data['categories'] ?? [] as $category)

        <li class="space-y-10 transition-all bg-neutral bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl // category-list__item">
          <a
            class="block px-8 py-8 xl:px-10 // category-list__url"
            href="/termekek/{{ $data['manufacturer_slugs'][$data['request']['manufacturer_id']] . '/' . $data['category_slugs'][$category['id']] }}">
            <div class="flex flex-col space-y-4 md:flex-row md:space-y-0 md:items-center md:space-x-8">
              <img
                class="flex-none w-16 h-16 bg-white rounded-full md:w-24 md:h-24 // category-list__image"
                src="{{ url('storage/' . (empty($category['image']) ? 'no_image.png' : $category['image'])) }}"
                alt="{{ $category['name'] }}"
              >
              <div class="space-y-4">
                <div class="space-y-1 text-lg leading-6">
                  <h3 class="text-xl font-semibold text-white uppercase // category-list__category-name">{{ $category['name'] }}</h3>
                  <p class="text-lg leading-loose text-white uppercase opacity-75 font-body // category-list__manufacturer-name" data-name="{{ $category['name'] }}">{{ $category['family'] ?? '' }}</p>
                </div>
              </div>
            </div>
          </a>
        </li>

      @endforeach

    </ul>
  </div>
</div>
