<div class="fixed inset-0 z-30 hidden w-full h-full bg-black // overlay"
     :class="{ 'block ease-in opacity-50': openRight === true, 'hidden opacity-0': openRight === false }"
     @click="openRight = false"></div>

<aside
  class="fixed inset-y-0 right-0 z-30 mt-16 transform bg-white border-l border-opacity-25 xl:transform-none xl:opacity-100 w-80 border-neutral // sidebar cart-sidebar"
  :class="{ 'translate-x-0 ease-in opacity-100': openRight === true, 'translate-x-full opacity-0': openRight === false }"
  x-cloak>
  <div class="flex flex-col h-full overflow-y-scroll // _scrollbar">

    <div class="flex justify-between pt-3">
      <span class="px-4 py-2 text-base font-bold uppercase sm:text-lg">Kosár</span>
      <button class="p-2 mr-4 rounded-md focus:outline-none focus:bg-secondary hover:bg-secondary xl:hidden"
              @click="openRight = false">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
        </svg>
      </button>
    </div>

    <div class="hidden // templates">
      <div class="pt-2 pb-2 space-y-2 // template_product">

        <div class="px-3 // cart_element_wrap">
          <div class="flex items-center h-14">
            <div
              class="relative flex items-center justify-center flex-none w-10 h-10 bg-white border rounded-full border-neutral border-opacity-20 // list-item-avatar">
              <a href="#"
                 class="absolute inset-0 flex items-center justify-center w-10 h-10 bg-white rounded-full opacity-0 hover:opacity-90">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M13.828 10.172a4 4 0 00-5.656 0l-4 4a4 4 0 105.656 5.656l1.102-1.101m-.758-4.899a4 4 0 005.656 0l4-4a4 4 0 00-5.656-5.656l-1.1 1.1"/>
                </svg>
              </a>
              <img class="w-3/4 // template_product_image" src="{{ url('storage/no_image.png') }}" alt="">
            </div>
            <div class="flex-grow ml-4 overflow-hidden">
              <h3 class="text-base font-medium truncate // template_product_name"></h3>
              <div class="flex items-center justify-between gap-2">
                <div class="text-sm font-medium truncate opacity-75 // template_product_model">Cikkszám</div>
                <div class="flex items-center gap-1 ml-auto text-sm font-medium opacity-75">
                  <span class="template_product_quantity_text">Mennyiség</span>
                  <span class="text-xl opacity-70">×</span>
                  <span class="template_product_price"></span>{{ $data['currency'] }}
                </div>
              </div>
            </div>
          </div>

          <div
            class="relative flex items-center justify-between bg-white opacity-0 h-14 -mt-14 ml-14 hover:opacity-100 // cart-actions">
            <div class="flex items-center // numeric_wrap">
              <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full // decrement-button"
                      type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"></path>
                </svg>
              </button>
              <input
                class="w-16 mx-2 text-center border rounded-lg border-neutral border-opacity-30 // template_product_quantity"
                type="text" name="quantity" data-minimum="1" value="1">
              <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full // increment-button"
                      type="button">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                     stroke="currentColor">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
                </svg>
              </button>
            </div>
            <button
              class="flex items-center justify-center w-10 h-10 rounded-full opacity-75 hover:opacity-100 // delete_cart_item"
              type="button">
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                      d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>

    <div class="py-3 space-y-3 // cart_products"></div>

    <div class="px-4 // the_cart_empty">
      <p class="text-base">A kosár jelenleg üres. Helyezzen terméket a kosárba.</p>
    </div>

    <footer class="bottom-0 hidden mt-auto bg-white border-t border-neutral border-opacity-30 // the_cart_not_empty">

      <h2 id="summary-heading" class="sr-only">Rendelés összesítő</h2>

      <div class="flow-root">
        <dl class="text-sm divide-y divide-neutral divide-opacity-10">
          <div class="flex items-center justify-between px-3 py-2">
            <dt class="opacity-75 ">
              Összesen nettó
            </dt>
            <dd class="font-medium">
              <span class="price_sum_net"></span>
              {{ $data['currency'] }}
            </dd>
          </div>

          @if(!$data['eur_price'])

            <div class="flex items-center justify-between px-3 py-2 // transport_cost_wrap">
              <dt class="opacity-75">
                Szállítási költség
              </dt>
              <dd class="font-medium">
                <span class="price_transport_cost">
                  {{ number_format($data['config']['transport_cost'], ($data['eur_price'] ? 2 : 0), ',', '.') }}
                </span>
                {{ $data['currency'] }}
              </dd>
            </div>

            <div class="flex items-center justify-between px-3 py-2">
              <dt class="opacity-75 ">
                Rendelés össz. (nettó)
              </dt>
              <dd class="font-medium">
                <span class="price_sum_order_net"></span>
                {{ $data['currency'] }}
              </dd>
            </div>

            <div class="flex items-center justify-between px-3 py-2">
              <dt class="opacity-75">
                ÁFA
              </dt>
              <dd class="font-medium">
                <span class="price_tax"></span>
                {{ $data['currency'] }}
              </dd>
            </div>

            @if((int)($data['config']['price_ratio'] ?? 0) != 0)

              <div class="flex items-center justify-between px-3 py-2">
                <dt class="opacity-75">
                  Kedvezmény {{ $data['config']['price_ratio'] }}%
                </dt>
                <dd class="font-medium">
                  <span class="price_discount_net"></span>
                  {{ $data['currency'] }}
                </dd>
              </div>

            @endif

            <div class="flex items-center justify-between hidden px-3 py-2 // transport_free_wrap">
              <dt class="opacity-75">
                Ingyenes szállítás
              </dt>
            </div>

          @endif

          <div>
            <div class="flex items-center justify-between px-3 py-2">

              @if(!$data['eur_price'])

                <dt class="text-base font-medium">
                  Összesen (bruttó)
                </dt>
                <dd class="text-base font-medium">
                  <span class="price_sum_order"></span>
                  {{ $data['currency'] }}
                </dd>

              @else

                <dt class="text-base font-medium">
                  Összesen
                </dt>
                <dd class="text-base font-medium">
                  <span class="price_sum_order_net"></span>
                  {{ $data['currency'] }}
                </dd>

              @endif

            </div>
          </div>
          <div class="py-7"></div>
        </dl>
      </div>

    </footer>
  </div>
  <div class="fixed bottom-0 right-0 justify-end hidden px-3 pb-2 // order_button">
    <button class="btn" x-on:click="openSummary = true" type="button">Megrendelés</button>
  </div>
</aside>
