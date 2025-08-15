@extends('_layouts.main')

@section('body')
<main class="relative flex-1 overflow-hidden">
  @include('_partials._site.background')
  @include('_partials._site._navbar.navbar')
  @include('_partials._site._registration.header')
  @include('_partials._site._registration.form', $data)
</main>
@include('_partials._site.footer')
@endsection
