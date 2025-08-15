@extends('_layouts.dashboard')

<div class="flex h-full">
  <!-- Narrow sidebar -->
  @section('body')
  @include('_partials._partner.sidebar')
  @include('_partials._partner.mobile-menu')

  <!-- Content area -->
  <div class="flex flex-col flex-1 overflow-hidden">
    @include('_partials._partner.page-header')
    <!-- Main content -->
    <div class="flex items-stretch flex-1 overflow-hidden">
      <main class="flex-1 overflow-y-auto">
        <!-- Primary column -->
        <section aria-labelledby="primary-heading" class="flex flex-col flex-1 h-full min-w-0 lg:order-last">
          <h1 id="primary-heading" class="sr-only">Photos</h1>
          <!-- Your content -->
          <div class="w-full px-4 py-6 mx-auto sm:px-6 md:px-8 md:flex md:items-center md:justify-between">
            <div class="flex-1 min-w-0">
              <h2 class="text-2xl font-semibold text-gray-900">
                <a class="text-indigo-700 hover:text-indigo-300" href="/partner-order-index">Rendelések</a>
                <span class="font-medium text-indigo-300">/</span>
                Rendelés összesítő
              </h2>
            </div>
          </div>
          {{-- @include('_partials._partner.page-heading-details') --}}
          @include('_partials._partner.order-summary')
        </section>
      </main>

      <!-- Secondary column (hidden on smaller screens) -->
      @include('_partials._partner.order-summary-sidebar')
    </div>
  </div>
</div>
@endsection
