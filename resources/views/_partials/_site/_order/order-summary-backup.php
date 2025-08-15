@php
$data['user']['addresses'] = $data['user']->addresses;
$data['user'] = $data['user']->toArray();
@endphp

{{-- <div class="fixed inset-0 z-20 overflow-y-auto" @keydown.window.escape="open = false" x-show="open" x-ref="dialog"
	x-cloak aria-modal="true"> --}}
	<div class="flex min-h-screen text-center sm:block sm:px-6 lg:px-8" style="font-size: 0;">

		<div
			class="sm:block sm:fixed sm:inset-0 sm:bg-neutral sm:bg-opacity-75 sm:transition-opacity backdrop-filter backdrop-blur-sm"
			x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0"
			x-transition:enter-end="opacity-100" x-transition:leave="ease-in duration-200" x-transition:leave-start="opacity-100"
			x-transition:leave-end="opacity-0" x-description="Background overlay, show/hide based on modal state."
			@click="open = false" aria-hidden="true">
		</div>
 
		<span class="sm:inline-block sm:align-middle sm:h-screen" aria-hidden="true">​</span>

		<div class="flex w-full max-w-3xl text-base text-left transition transform sm:inline-block sm:my-8 sm:align-middle"
			x-show="open" x-transition:enter="ease-out duration-300" x-transition:enter-start="opacity-0 scale-105"
			x-transition:enter-end="opacity-100 scale-100" x-transition:leave="ease-in duration-200"
			x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-105"
			x-description="Modal panel, show/hide based on modal state.">
			<form method="post" class="relative flex flex-col w-full pt-6 pb-8 overflow-hidden bg-white sm:pb-6 lg:py-8">

				@csrf

				<input name="order_products" type="hidden" value="">

				<div class="flex items-center justify-between px-4 sm:px-6 lg:px-8">
					<h2 class="text-lg font-bold uppercase text-neutral">Megrendelés, adategyeztetés</h2>
					<button class="text-neutral hover:text-secondary" type="button" @click="open = false">
						<span class="sr-only">Bezárás</span>
						<svg class="w-6 h-6" x-description="Heroicon name: outline/x" xmlns="http://www.w3.org/2000/svg"
							fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
						</svg>
					</button>
				</div>

				<section class="space-y-10 sm:px-6 lg:px-8" aria-labelledby="cart-heading">
					<h2 class="sr-only" id="cart-heading">Megrendelés, adategyeztetés</h2>

					<fieldset class="space-y-6">
						<legend class="form__legend text-neutral">Személyes adatok</legend>

						<div>
							<label for="company-name" class="form__label text-neutral">
								Cégnév
							</label>
							<div class="mt-1">
								<input class="border-opacity-25 form__control border-neutral" id="company-name" name="company-name" type="text"
									autocomplete="company-name" value="{{ $data['user']['company'] ?? '' }}" required>
							</div>
						</div>

						<div>
							<label for="tax-number" class="form__label text-neutral">
								Adószám
							</label>
							<div class="mt-1">
								<input class="border-opacity-25 form__control border-neutral" id="tax-number" name="tax-number" type="text"
									autocomplete="tax-number" value="{{ $data['user']['taxno'] ?? '' }}" required>
							</div>
						</div>

						<div>
							<label for="last-name" class="form__label text-neutral">
								Kapcsolattartó vezetékneve
							</label>
							<div class="mt-1">
								<input class="border-opacity-25 form__control border-neutral" id="last-name" name="last-name" type="text"
									autocomplete="family-name" value="{{ $data['user']['lastname'] ?? '' }}" required>
							</div>
						</div>

						<div>
							<label for="first-name" class="form__label text-neutral">
								Kapcsolattartó keresztneve
							</label>
							<div class="mt-1">
								<input class="border-opacity-25 form__control border-neutral" id="first-name" name="first-name" type="text"
									autocomplete="given-name" value="{{ $data['user']['firstname'] ?? '' }}" required>
							</div>
						</div>

						<div>
							<label for="phone-number" class="form__label text-neutral">
								Telefonszám
							</label>
							<div class="mt-1">
								<input class="border-opacity-25 form__control border-neutral" id="phone-number" name="phone-number" type="phone"
									autocomplete="phone-number" value="{{ $data['user']['phone'] ?? '' }}" required>
							</div>
						</div>
					</fieldset>

					<fieldset class="space-y-6 // address_wrap">
						<legend class="form__legend text-neutral">Szállítási cím</legend>

						<div class="py-2 // address_chooser">

							@foreach ($data['user']['addresses'] as $address_id => $address)

								<div class="flex items-center pb-2 cursor-pointer">

									<div class="flex items-center pr-4">
										<input class="address_radio" type="radio" id="shipping_address_{{ $address['id'] }}"
											name="shipping_address" value="{{ $address['id'] }}" data-address_data="{!! htmlspecialchars(json_encode($address), ENT_QUOTES, 'UTF-8') !!}"
											{{ $address_id == 0 ? 'checked' : '' }}>
									</div>

									<label for="shipping_address_{{ $address['id'] }}">
										{{ $address['zip'] . ' ' . $address['city'] . ' ' . $address['address'] }}
									</label>

								</div>

							@endforeach

						</div>

						<div class="address_data">

							<div>
								<label for="zip" class="form__label text-neutral">
									Irányítószám
								</label>
								<div class="mt-1">
									<input class="border-opacity-25 form__control border-neutral // address_zip" id="shipping_zip"
										name="shipping_zip" type="text" autocomplete="shipping_zip" required>
								</div>
							</div>

							<div>
								<label for="city" class="form__label text-neutral">
									Város
								</label>
								<div class="mt-1">
									<input class="border-opacity-25 form__control border-neutral // address_city" id="shipping_city"
										name="shipping_city" type="text" autocomplete="shipping_city" required>
								</div>
							</div>

							<div>
								<label for="address" class="form__label text-neutral">
									Utca, házszám
								</label>
								<div class="mt-1">
									<input class="border-opacity-25 form__control border-neutral // address_address" id="shipping_address"
										name="shipping_address" type="text" autocomplete="shipping_address" required>
								</div>
							</div>

						</div>

					</fieldset>

					<fieldset class="space-y-6 // address_wrap" x-data="{ open: true }">

						<legend class="form__legend text-neutral">Számlázási cím</legend>

						<div class="flex items-center">
							<input
								class="w-4 h-4 border-transparent border-opacity-25 rounded border-neutral text-secondary focus:ring-2 focus:ring-secondary"
								id="address_same" name="address_same" type="checkbox" x-on:click="open = ! open">
							<label for="address_same" class="block ml-2 text-sm">
								Megegyezik a szállítási címemmel
							</label>
						</div>

						<div class="space-y-6" x-show="open">

							<div class="py-2 // address_chooser">

								@foreach ($data['user']['addresses'] as $address_id => $address)

									<div class="flex items-center pb-2 cursor-pointer">

										<div class="flex items-center pr-4">
											<input class="address_radio" type="radio" id="payment_address_{{ $address['id'] }}"
												name="payment_address" value="{{ $address['id'] }}" data-address_data="{!! htmlspecialchars(json_encode($address), ENT_QUOTES, 'UTF-8') !!}"
												{{ $address_id == 0 ? 'checked' : '' }}>
										</div>

										<label class="cursor-pointer" for="shipping_address_{{ $address['id'] }}">
											{{ $address['zip'] . ' ' . $address['city'] . ' ' . $address['address'] }}
										</label>

									</div>

								@endforeach

							</div>

							<div class="address_data">

								<div>
									<label for="zip" class="form__label text-neutral">
										Irányítószám
									</label>
									<div class="mt-1">
										<input class="border-opacity-25 form__control border-neutral // address_zip" id="payment_zip"
											name="payment_zip" type="text" autocomplete="payment_zip" required>
									</div>
								</div>

								<div>
									<label for="city" class="form__label text-neutral">
										Város
									</label>
									<div class="mt-1">
										<input class="border-opacity-25 form__control border-neutral // address_city" id="payment_city"
											name="payment_city" type="text" autocomplete="payment_city" required>
									</div>
								</div>

								<div>
									<label for="address" class="form__label text-neutral">
										Utca, házszám
									</label>
									<div class="mt-1">
										<input class="border-opacity-25 form__control border-neutral // address_address" id="payment_address"
											name="payment_address" type="text" autocomplete="payment_address" required>
									</div>
								</div>

							</div>

						</div>

					</fieldset>

					<fieldset>
						<div>
							<label for="comment" class="block text-sm font-medium text-neutral">
								Megjegyzés
							</label>
							<div class="mt-1">
								<textarea id="comment" name="comment" rows="5"
									class="block w-full border border-opacity-25 rounded-md shadow-sm border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:text-sm"></textarea>
							</div>
							<p class="mt-2 text-sm text-neutral">Kérjük ide írni a rendeléshez kapcsolódó megjegyzéseket.</p>
						</div>

					</fieldset>

				</section>

				<div class="flex justify-end px-4 mt-8 sm:px-6 lg:px-8">
					<button class="btn" type="submit" name="send_order" value="true">Küldés</button>
				</div>

			</form>
		</div>

	</div>

{{-- </div> --}}

<script>
 $(function() {

  function set_addresses() {

   $('.address_wrap').each(function(index) {

    var
     $wrap = $(this),

     address_data = $wrap.find('.address_radio:checked').data('address_data');

    $wrap.find('.address_zip').val(address_data.zip);
    $wrap.find('.address_city').val(address_data.city);
    $wrap.find('.address_address').val(address_data.address);

   });

  }

  set_addresses();

  $('.address_wrap .address_radio').off('click.ns, change.ns').on('click.ns, change.ns', function() {
   set_addresses();
  });

 })
</script>
