@extends('_layouts.home')

@section('body')
  @include('_partials._site._navbar.navbar')
  <main class="relative flex-1 overflow-hidden">
    @include('_partials._site.background')
    <div class="flex-1 space-y-16 md:space-y-24">

      @if($slug ?? false)

        @include('_partials._site._index.page', ['data' => $data])

      @else

        @include('_partials._site._index.hero')
        @include('_partials._site._index.about-us')
        @include('_partials._site._index.products')
        @include('_partials._site._index.contact-us')

      @endif

      <div>{{-- sentinel div --}}</div>
    </div>
  </main>
  @include('_partials._site.footer')
@endsection
