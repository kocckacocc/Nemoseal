<div x-show="openSummary" x-on:keydown.escape.prevent.stop="openSummary = false" role="dialog" aria-modal="true" x-id="['modal-title']" :aria-labelledby="$id('modal-title')" class="fixed inset-0 z-50 overflow-y-auto" x-cloak>
  <!-- Overlay -->
  <div x-show="openSummary" x-transition.opacity class="fixed inset-0 bg-black bg-opacity-50"></div>

  @php
  $data['user']['addresses'] = $data['user']->addresses;
  $data['user'] = $data['user']->toArray();
  @endphp

  <!-- Panel -->
  <div x-show="openSummary" x-transition x-on:click="openSummary = false" class="relative flex items-center justify-center min-h-screen p-4">

    <div x-on:click.stop x-trap.noscroll.inert="openSummary" class="relative w-full max-w-2xl overflow-y-auto bg-white border border-black">

      <form method="post" class="flex flex-col w-full overflow-hidden bg-white relative">

        @csrf

        <input name="order_products" type="hidden" value="">

        <div class="flex items-center justify-between w-full px-6 py-2 space-x-6 text-sm font-medium text-white border-t border-b border-neutral bg-neutral">
          <div class="flex items-center space-x-6">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
            </svg>
            <h2 class="text-lg font-medium text-left">Megrendelés, adategyeztetés</h2>
          </div>
        </div>

        <section class="px-6 space-y-10" aria-labelledby="cart-heading">
          <h2 class="sr-only" id="cart-heading">Megrendelés, adategyeztetés</h2>

          <fieldset class="space-y-4">
            <legend class="form__legend text-neutral">Személyes adatok</legend>

            <div>
              <label for="company-name" class="form__label text-neutral">
                Cégnév
              </label>
              <div class="mt-1">
                <input class="border-opacity-25 form__control border-neutral" id="company-name" name="company-name" type="text" autocomplete="company-name" value="{{ $data['user']['company'] ?? '' }}" required>
              </div>
            </div>

            <div>
              <label for="tax-number" class="form__label text-neutral">
                Adószám
              </label>
              <div class="mt-1">
                <input class="border-opacity-25 form__control border-neutral" id="tax-number" name="tax-number" type="text" autocomplete="tax-number" value="{{ $data['user']['taxno'] ?? '' }}" required>
              </div>
            </div>

            <div>
              <label for="last-name" class="form__label text-neutral">
                Kapcsolattartó vezetékneve
              </label>
              <div class="mt-1">
                <input class="border-opacity-25 form__control border-neutral" id="last-name" name="last-name" type="text" autocomplete="family-name" value="{{ $data['user']['lastname'] ?? '' }}" required>
              </div>
            </div>

            <div>
              <label for="first-name" class="form__label text-neutral">
                Kapcsolattartó keresztneve
              </label>
              <div class="mt-1">
                <input class="border-opacity-25 form__control border-neutral" id="first-name" name="first-name" type="text" autocomplete="given-name" value="{{ $data['user']['firstname'] ?? '' }}" required>
              </div>
            </div>

            <div>
              <label for="phone-number" class="form__label text-neutral">
                Telefonszám
              </label>
              <div class="mt-1">
                <input class="border-opacity-25 form__control border-neutral" id="phone-number" name="phone-number" type="phone" autocomplete="phone-number" value="{{ $data['user']['phone'] ?? '' }}" required>
              </div>
            </div>
          </fieldset>

          <fieldset class="space-y-4 // address_wrap">
            <legend class="form__legend text-neutral">Szállítási cím</legend>

            <div class="py-2 // address_chooser">

              @foreach ($data['user']['addresses'] as $address_id => $address)

              <div class="flex items-center pb-2 cursor-pointer">

                <div class="flex items-center pr-4">
                  <input class="w-4 h-4 border-transparent border-opacity-25 rounded-full border-neutral text-secondary focus:ring-2 focus:ring-secondary // address_radio" type="radio" id="shipping_address_{{ $address['id'] }}" name="shipping_address" value="{{ $address['id'] }}" data-address_data="{!! htmlspecialchars(json_encode($address), ENT_QUOTES, 'UTF-8') !!}" {{ $address_id == 0 ? 'checked' : '' }}>
                </div>

                <label for="shipping_address_{{ $address['id'] }}">
                  {{ $address['zip'] . ' ' . $address['city'] . ' ' . $address['address'] }}
                </label>

              </div>

              @endforeach

            </div>

            <div class="space-y-4 // address_data">

              <div>
                <label for="zip" class="form__label text-neutral">
                  Irányítószám
                </label>
                <div class="mt-1">
                  <input class="border-opacity-25 form__control border-neutral // address_zip" id="shipping_zip" name="shipping_zip" type="text" autocomplete="shipping_zip" required>
                </div>
              </div>

              <div>
                <label for="city" class="form__label text-neutral">
                  Város
                </label>
                <div class="mt-1">
                  <input class="border-opacity-25 form__control border-neutral // address_city" id="shipping_city" name="shipping_city" type="text" autocomplete="shipping_city" required>
                </div>
              </div>

              <div>
                <label for="address" class="form__label text-neutral">
                  Utca, házszám
                </label>
                <div class="mt-1">
                  <input class="border-opacity-25 form__control border-neutral // address_address" id="shipping_address" name="shipping_address" type="text" autocomplete="shipping_address" required>
                </div>
              </div>

            </div>

          </fieldset>

          <fieldset class="space-y-4 // address_wrap" x-data="{ open: true }">

            <legend class="form__legend text-neutral">Számlázási cím</legend>

            <div class="flex items-center">
              <input class="w-4 h-4 border-transparent border-opacity-25 rounded border-neutral text-secondary focus:ring-2 focus:ring-secondary" id="address_same" name="address_same" type="checkbox" x-on:click="open = ! open">
              <label for="address_same" class="block ml-2 text-sm">
                Megegyezik a szállítási címemmel
              </label>
            </div>

            <div class="space-y-4" x-show="open">

              <div class="py-2 // address_chooser">

                @foreach ($data['user']['addresses'] as $address_id => $address)

                <div class="flex items-center pb-2 cursor-pointer">

                  <div class="flex items-center pr-4">
                    <input class="w-4 h-4 border-transparent border-opacity-25 rounded-full border-neutral text-secondary focus:ring-2 focus:ring-secondary // address_radio" type="radio" id="payment_address_{{ $address['id'] }}" name="payment_address" value="{{ $address['id'] }}" data-address_data="{!! htmlspecialchars(json_encode($address), ENT_QUOTES, 'UTF-8') !!}" {{ $address_id == 0 ? 'checked' : '' }}>
                  </div>

                  <label class="cursor-pointer" for="payment_address_{{ $address['id'] }}">
                    {{ $address['zip'] . ' ' . $address['city'] . ' ' . $address['address'] }}
                  </label>

                </div>

                @endforeach

              </div>

              <div class="space-y-4 // address_data">

                <div>
                  <label for="zip" class="form__label text-neutral">
                    Irányítószám
                  </label>
                  <div class="mt-1">
                    <input class="border-opacity-25 form__control border-neutral // address_zip" id="payment_zip" name="payment_zip" type="text" autocomplete="payment_zip" required>
                  </div>
                </div>

                <div>
                  <label for="city" class="form__label text-neutral">
                    Város
                  </label>
                  <div class="mt-1">
                    <input class="border-opacity-25 form__control border-neutral // address_city" id="payment_city" name="payment_city" type="text" autocomplete="payment_city" required>
                  </div>
                </div>

                <div>
                  <label for="address" class="form__label text-neutral">
                    Utca, házszám
                  </label>
                  <div class="mt-1">
                    <input class="border-opacity-25 form__control border-neutral // address_address" id="payment_address" name="payment_address" type="text" autocomplete="payment_address" required>
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
                <textarea id="comment" name="comment" rows="5" class="block w-full border border-opacity-25 rounded-md shadow-sm border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:text-sm"></textarea>
              </div>
              <p class="mt-2 text-sm text-neutral">Kérjük ide írni a rendeléshez kapcsolódó megjegyzéseket.</p>
            </div>
          </fieldset>

        </section>

        <div class="flex justify-end px-6 my-6">
          <button class="btn" type="submit" name="send_order" value="true">Küldés</button>
        </div>

      </form>

    </div>
  </div>
</div>

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
