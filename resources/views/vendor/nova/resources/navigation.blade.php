<?php

$settings = \App\Models\Setting::all()->pluck('value', 'key')->toArray();

$mainteance_mode = trim(strtolower(strip_tags($settings['Karbantartó mód'] ?? ''))) == 'igen';

?>

@if (count(\Laravel\Nova\Nova::resourcesForNavigation(request())))

  @if(Auth::user()->type == 0 && (Auth::user()->state == 1 && count(Auth::user()->addresses->toArray()) > 0) && !$mainteance_mode)
    <a class="flex w-full no-underline" href="/order">
      <h3 class="flex items-center w-full mb-4 text-base font-normal text-white no-underline cursor-pointer dim">
        <svg class="sidebar-icon color-primary w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="var(--sidebar-icon)" stroke-width="2">
          <path stroke-linecap="round" stroke-linejoin="round" d="M16 11V7a4 4 0 00-8 0v4M5 9h14l1 12H4L5 9z" />
        </svg>
        <span class="sidebar-label">Rendelés</span>
      </h3>
    </a>
  @endif

  <h3 class="flex items-center mb-4 text-base font-normal text-white no-underline">
    <svg class="sidebar-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
      <path fill="var(--sidebar-icon)" d="M3 1h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2H3c-1.1045695 0-2-.8954305-2-2V3c0-1.1045695.8954305-2 2-2zm0 2v4h4V3H3zm10-2h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2h-4c-1.1045695 0-2-.8954305-2-2V3c0-1.1045695.8954305-2 2-2zm0 2v4h4V3h-4zM3 11h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2H3c-1.1045695 0-2-.8954305-2-2v-4c0-1.1045695.8954305-2 2-2zm0 2v4h4v-4H3zm10-2h4c1.1045695 0 2 .8954305 2 2v4c0 1.1045695-.8954305 2-2 2h-4c-1.1045695 0-2-.8954305-2-2v-4c0-1.1045695.8954305-2 2-2zm0 2v4h4v-4h-4z"
      />
    </svg>
    <span class="sidebar-label">{{ __('Resources') }}</span>
  </h3>

  @foreach($navigation as $group => $resources)

    @if (count($groups) > 1)
      <h4 class="ml-8 mb-4 text-xs text-white-50% uppercase tracking-wide">{{ $group }}</h4>
    @endif

    <ul class="mb-8 list-reset">

      @if(Auth::user()->type == 0)

        <li class="mb-4 ml-8 text-sm leading-tight">
          <router-link :to="{
                        name: 'detail',
                        params: {
                          resourceName: 'users',
                          resourceId: '{{ Auth::user()->id }}',
                        },
                    }" class="text-justify text-white no-underline dim">
            Profilom
          </router-link>
        </li>

      @endif

      @foreach($resources as $resource)

        <li class="mb-4 ml-8 text-sm leading-tight">
          <router-link :to="{
                        name: 'index',
                        params: {
                            resourceName: '{{ $resource::uriKey() }}'
                        }
                    }" class="text-justify text-white no-underline dim">
            {{ $resource::label() }}
          </router-link>
        </li>

      @endforeach

    </ul>

  @endforeach
@endif
