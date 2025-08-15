@include('_partials._site._order.product-filter')
@include('_partials._site._order.cart')
<div class="flex-1 flex-grow h-screen px-5 py-4 mx-auto mt-16 overflow-auto max-w-7xl">
	@include('_partials._site._order.header')
	@include('_partials._site._order.product-table')
</div>

{{-- @include('_partials._site._order.mobile-nav') --}}