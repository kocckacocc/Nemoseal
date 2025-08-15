@extends('_layouts.order')

@section('body')
@include('_partials._site._order.navbar')
<main class="relative flex flex-col flex-1 h-screen overflow-hidden text-neutral text-opacity-80 xl:pl-80 xl:pr-80">
  <div x-data="{ openSummary: false }">
    @include('_partials._site._order.content')
    @include('_partials._site._order.order-summary')
  </div>
  <div></div>
</main>
@endsection
