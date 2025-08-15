@extends('_layouts.main')

@section('body')
@include('_partials._site._navbar.navbar')
<main class="relative flex-1 overflow-hidden">
  @include('_partials._site.background')
  <div class="flex-1 space-y-16 md:space-y-24">
    @include('_partials._site._about-us.header')
    @include('_partials._site._about-us.content')
    @include('_partials._site._about-us.team')
    <div>{{-- sentinel div --}}</div>
  </div>
</main>
@include('_partials._site.footer')
@endsection
