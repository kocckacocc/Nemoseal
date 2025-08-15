<div class="relative w-full px-4 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="space-y-12">
    <ul role="list" class="space-y-4 lg:grid lg:grid-cols-2 lg:gap-6 lg:space-y-0 xl:grid-cols-3 xl:gap-12">

      @foreach($data['all_users'] ?? [] as $admin)

        @if($admin['type'] != 1 || $admin['visible'] != 1) @continue @endif

        <li class="px-8 py-12 space-y-10 transition-all {{-- lg:text-center --}} bg-neutral xl:px-10 xl:text-left bg-opacity-95 hover:bg-opacity-100 hover:shadow-lg">
          <div class="space-y-6 xl:space-y-10">
            {{-- <img class="w-40 h-40 rounded-full lg:mx-auto xl:w-56 xl:h-56" src="{{ url('storage/' . (empty($admin['image']) ? 'no_image.png' : $admin['image'])) }}" alt="{{ $admin['lastname'] . ' ' . $admin['firstname'] }}"> --}}
            <div class="space-y-4">
              <div class="space-y-1 text-lg leading-6">
                <h3 class="text-3xl font-semibold text-white uppercase">{{ $admin['lastname'] . ' ' . $admin['firstname'] }}</h3>
                <p class="text-lg leading-loose text-white opacity-75 font-body">{{ $admin['assignment'] }}</p>
              </div>
              <ul class="space-y-1 text-lg leading-loose text-white font-body">
                <li>
                  <a href="#" class="flex items-center group">
                    <span class="sr-only">Email cím</span>
                    <svg class="flex-none w-5 h-5 text-secondary" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-4" href="mailto:{{ $admin['email'] }}">{{ $admin['email'] }}</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="flex items-center group">
                    <span class="sr-only">Telefonszám</span>
                    <svg class="flex-none w-5 h-5 text-secondary" viewBox="0 0 20 20" fill="currentColor">
                      <path fill-rule="evenodd" d="M7 2a2 2 0 00-2 2v12a2 2 0 002 2h6a2 2 0 002-2V4a2 2 0 00-2-2H7zm3 14a1 1 0 100-2 1 1 0 000 2z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-4" href="tel:{{ $admin['phone'] }}">{{ $admin['phone'] }}</span>
                  </a>
                </li>
                {{-- <li class="flex items-center">
                  <a href="#" class="flex items-center group">
                    <span class="sr-only">{{ $admin['linkedin'] }}</span>
                    <svg class="flex-none w-5 h-5 text-secondary" fill="currentColor" viewBox="0 0 20 20" aria-hidden="true">
                      <path fill-rule="evenodd" d="M16.338 16.338H13.67V12.16c0-.995-.017-2.277-1.387-2.277-1.39 0-1.601 1.086-1.601 2.207v4.248H8.014v-8.59h2.559v1.174h.037c.356-.675 1.227-1.387 2.526-1.387 2.703 0 3.203 1.778 3.203 4.092v4.711zM5.005 6.575a1.548 1.548 0 11-.003-3.096 1.548 1.548 0 01.003 3.096zm-1.337 9.763H6.34v-8.59H3.667v8.59zM17.668 1H2.328C1.595 1 1 1.581 1 2.298v15.403C1 18.418 1.595 19 2.328 19h15.34c.734 0 1.332-.582 1.332-1.299V2.298C19 1.581 18.402 1 17.668 1z" clip-rule="evenodd"/>
                    </svg>
                    <span class="ml-4" href="{{ $admin['linkedin'] }}">{{ $admin['linkedin'] }}</span>
                  </a>
                </li> --}}
              </ul>
            </div>
          </div>
        </li>

      @endforeach

    </ul>
  </div>
</div>
