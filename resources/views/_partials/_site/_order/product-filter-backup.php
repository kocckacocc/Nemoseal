<div class="relative w-full space-y-6" x-data="{ open: false }">
	<button class="space-x-1 btn" x-on:click="open = ! open">
		<span>Szűrő</span>
		<svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
			<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
		</svg>
	</button>

	<div class="absolute z-10 w-full shadow-lg top-9" x-show="open" x-cloak>
		<section class="px-6 bg-white">
			<h2 class="sr-only">Szűrők</h2>

			<button type="button" x-description="Mobile filter dialog toggle, controls the 'mobileFilterDialogOpen' state."
				class="inline-flex items-center lg:hidden" @click="open = true">
				<span class="text-sm font-medium text-gray-700">Szűrők</span>
				<svg class="flex-shrink-0 w-5 h-5 ml-1 text-gray-400" x-description="Heroicon name: solid/plus-sm"
					xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
					<path fill-rule="evenodd"
						d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd">
					</path>
				</svg> 
			</button>

			<div class="block">
				<form class="divide-y divide-neutral divide-opacity-20">

					<div class="py-6">
						<fieldset>
							<legend class="text-lg font-medium text-left">
								Kategória
							</legend>
							<div class="pt-6 space-y-3">

								@foreach ($data['products_grouped'] ?? [] as $category)
									<div class="flex items-center">
										<input id="{{ Str::slug($category['name']) }}-filter" name="category[{{ $category['name'] }}]"
											value="white" type="checkbox"
											class="w-4 h-4 border-transparent border-opacity-25 rounded border-neutral text-secondary focus:ring-2 focus:ring-secondary">
										<label for="{{ Str::slug($category['name']) }}-filter" class="ml-3 text-sm text-gray-600">
											{{ $category['name'] }}
										</label>
									</div>
								@endforeach

							</div>
						</fieldset>
					</div>

					{{-- <div class="py-6">
						<fieldset>
							<legend class="text-lg font-medium text-left">
								Márka
							</legend>
							<div class="pt-6 space-y-3">

								@foreach ($category['products'] as $product)
									<div class="flex items-center">
										<input id="manufacturer-0" name="manufacturer[]" value="new-arrivals" type="checkbox"
											class="w-4 h-4 border-transparent border-opacity-25 rounded border-neutral text-secondary focus:ring-2 focus:ring-secondary">
										<label for="manufacturer-0" class="ml-3 text-sm text-gray-600">
											{{ $product->manufacturer->name }}
										</label>
									</div>
								@endforeach

							</div>
						</fieldset>
					</div> --}}

				</form>
			</div>
		</section>
	</div>
</div>