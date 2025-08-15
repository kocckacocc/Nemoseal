<div class="fixed inset-0 z-30 hidden w-full h-full bg-black // overlay"
     :class="{'block opacity-50':openLeft === true, 'hidden ease-out opacity-0': openLeft === false}"
     @click="openLeft = false"></div>

<aside class="fixed inset-y-0 left-0 z-30 mt-16 transform bg-white border-r border-opacity-25 xl:transform-none xl:opacity-100 w-80 border-neutral // sidebar filter-sidebar" :class="{'translate-x-0 opacity-100':openLeft === true, '-translate-x-full ease-out opacity-0': openLeft === false}" x-cloak>
  <div class="h-full overflow-y-scroll // _scrollbar">

    <div class="flex justify-between pt-3">
      <span class="px-4 py-2 text-base font-bold uppercase sm:text-lg">Termékszűrő</span>
      <button class="p-2 mr-4 rounded-md focus:outline-none focus:bg-secondary hover:bg-secondary xl:hidden" @click="openLeft = false">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
        </svg>
      </button>
    </div>

    <ul class="pb-2 // nav-sidebar-list">
      <li class="flex items-center h-12 px-4 // nav-sidebar-list-item">
        <h2 class="text-sm opacity-75">Gyártó</h2>
      </li>

      @foreach($data['manufacturers'] as $manufacturer)

        <li class="flex items-center hover:bg-neutral hover:bg-opacity-20 focus:bg-neutral focus:bg-opacity-20 // nav-sidebar-list-item">
          <label class="flex items-center flex-grow px-4 cursor-pointer h-14" for="manufacturer-{{ $manufacturer->id }}">
            <picture class="flex-none">
              <img
                class="object-cover w-10 h-10 bg-white border rounded-full border-neutral border-opacity-20"
                src="{{ url('storage/' . (empty($manufacturer->image) ? 'no_image.png' : $manufacturer->image)) }}"
                alt="">
            </picture>
            <span class="ml-4 leading-tight line-clamp-2">{{ $manufacturer->name }}</span>
            <span class="flex items-center justify-center flex-none w-10 h-10 ml-auto">
              <input class="w-5 h-5 border-2 rounded-sm outline-none cursor-pointer border-neutral border-opacity-30 justify-self-end ring-0 ring-offset-0 focus:outline-none focus:ring-0 focus:ring-offset-0 text-secondary" type="checkbox" id="manufacturer-{{ $manufacturer->id }}" name="manufacturer-{{ $manufacturer->id }}">
            </span>
          </label>
        </li>

      @endforeach

    </ul>

    <ul class="pb-2 // nav-sidebar-list">
      <li class="flex items-center h-12 px-4 // nav-sidebar-list-item">
        <h2 class="text-sm opacity-75">Kategória</h2>
      </li>

      @foreach($data['all_categories'] as $category)

        <li class="flex items-center hover:bg-neutral hover:bg-opacity-20 focus:bg-neutral focus:bg-opacity-20 // nav-sidebar-list-item">
          <label class="flex items-center flex-grow px-4 cursor-pointer h-14" for="category-{{ $category->id }}">
            <picture class="flex-none">
              <img
                class="object-cover w-10 h-10 bg-white border rounded-full border-neutral border-opacity-20"
                src="{{ url('storage/' . (empty($category->image) ? 'no_image.png' : $category->image)) }}"
                alt="">
            </picture>
            <span class="ml-4 leading-tight line-clamp-2">{{ (empty($category->family) ? '' : ($category->family . ' - ')) . $category->name }}</span>
            <span class="flex items-center justify-center flex-none w-10 h-10 ml-auto">
              <input class="w-5 h-5 border-2 rounded-sm outline-none cursor-pointer border-neutral border-opacity-30 justify-self-end ring-0 ring-offset-0 focus:outline-none focus:ring-0 focus:ring-offset-0 text-secondary" type="checkbox" id="category-{{ $category->id }}" name="category-{{ $category->id }}">
            </span>
          </label>
        </li>

      @endforeach

    </ul>

    <div class="w-full h-px my-4 bg-black opacity-10 // separator"></div>

    <ul class="pb-2 // nav-sidebar-list">
      {{-- <li class="flex items-center h-8 px-4 // nav-sidebar-list-item">
        <a class="text-sm opacity-75" href="#">Kapcsolat</a>
      </li>
      <li class="flex items-center h-8 px-4 // nav-sidebar-list-item">
        <a class="text-sm opacity-75" href="#">Adatvédelmi irányelvek</a>
      </li>
      <li class="flex items-center h-8 px-4 // nav-sidebar-list-item">
        <a class="text-sm opacity-75" href="#">Általános szerződési feltételek</a>
      </li> --}}
      <li class="flex items-center h-8 px-4 // nav-sidebar-list-item">
        <p class="text-sm opacity-50">© 2021 NÉMO Seal Kft.</p>
      </li>
    </ul>
  </div>
</aside>