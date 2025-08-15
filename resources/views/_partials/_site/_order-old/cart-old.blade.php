<div class="hidden // templates">
  <ul class="template_product">
    <li class="flex py-3 sm:px-6 sm:items-center hover:bg-neutral hover:bg-opacity-5 // cart_element_wrap">

      <div class="grid items-start flex-auto grid-cols-1 grid-rows-1 gap-y-3 gap-x-5 sm:flex sm:gap-0 sm:items-center">
        <img class="flex-none mr-6 border border-opacity-25 rounded-full w-14 h-14 border-neutral // template_product_image" src="{{ url('storage/no_image.png') }}" alt="">
        <div class="flex-auto row-end-1 sm:pr-6">
          <h3 class="text-base font-medium text-neutral // template_product_name"></h3>
          <p class="mt-0 text-xs text-neutral // template_product_category"></p>
        </div>
        <p class="flex items-center justify-between w-24 row-span-2 row-end-2 text-base font-medium text-neutral sm:ml-8 sm:order-1 sm:flex-none sm:text-right">
          <span class="text-xl opacity-70">×</span>
          <span class="template_product_price"></span>
          Ft
        </p>

        <div class="mr-4 cursor-pointer // delete_cart_item">Törlés</div>

        <div class="flex items-center w-32 sm:flex-none sm:block sm:text-center">

          <input class="block w-full pr-16 border-opacity-25 rounded-md border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:pr-14 sm:text-sm // template_product_quantity" type="number" min="1" >

        </div>
      </div>

    </li>
  </ul>
</div>

<div class="col-span-4">
  <form class="relative flex flex-col w-full overflow-hidden bg-white">

    <div class="flex items-center justify-between w-full px-6 py-2 space-x-6 text-sm font-medium text-white border-t border-b border-neutral bg-neutral">
      <div class="flex items-center space-x-6">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-14 h-14" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
          </path>
        </svg>
        <h2 class="text-lg font-medium text-left">Kosár tartalma</h2>
      </div>
    </div>

    <section aria-labelledby="cart-heading">

      <ul role="list" class="divide-y divide-neutral divide-opacity-10 // cart_products">
      </ul>

    </section>

    <div class="hidden pt-3 border-t // the_cart_not_empty">

      <section aria-labelledby="summary-heading">
        <div class="sm:rounded-lg">
          <h2 id="summary-heading" class="sr-only">Rendelés összesítő</h2>

          <div class="flow-root">
            <dl class="text-sm divide-y divide-neutral divide-opacity-10">
              <div class="flex items-center justify-between px-6 py-4">
                <dt class="opacity-75 ">
                  Összesen nettó
                </dt>
                <dd class="font-medium">
                  <span class="price_sum_net">
                  </span>
                  Ft
                </dd>
              </div>

              <div class="flex items-center justify-between px-6 py-4">
                <dt class="opacity-75 ">
                  Szállítási költség
                </dt>
                <dd class="font-medium">
                  <span class="price_transport_cost">
                    {{ $data['config']['transport_cost'] }}
                  </span>
                  Ft
                </dd>
              </div>

              <div class="flex items-center justify-between px-6 py-4">
                <dt class="opacity-75 ">
                  Rendelés összesen (nettó)
                </dt>
                <dd class="font-medium">
                  <span class="price_sum_order_net">
                  </span>
                  Ft
                </dd>
              </div>

              <div class="flex items-center justify-between px-6 py-4">
                <dt class="opacity-75">
                  ÁFA
                </dt>
                <dd class="font-medium">
                  <span class="price_tax">
                  </span>
                  Ft
                </dd>
              </div>

              <div class="flex items-center justify-between px-6 py-4">
                <dt class="text-base font-medium">
                  Rendelés összesen (bruttó)
                </dt>
                <dd class="text-base font-medium">
                  <span class="price_sum_order">
                  </span>
                  Ft
                </dd>
              </div>

            </dl>
          </div>
        </div>
      </section>

      <div class="flex justify-end px-6 mb-6">
        <button class="btn" type="button" :class="{ 'active': tab === 'summary' }" @click.prevent="tab = 'summary'; window.location.hash = 'summary'">Megrendelés</button>
      </div>

    </div>

    <div class="p-6 space-y-4 text-center // the_cart_empty">

      <p class="text-base">A kosár jelenleg üres. Helyezzen terméket a kosárba.</p>
      <button class="btn" type="button" :class="{ 'active': tab === 'product' }" @click.prevent="tab = 'product'; window.location.hash = 'product'">Termékek</button>

    </div>

  </form>
</div>
