<div class="col-span-12 space-y-6 // product_list">

  @if (isset($data['request']['success']))
    <div>
      <div class="p-6 text-center text-white bg-green-600">
        <p class="font-bold text-white uppercase">Megrendelését rögzítettük, köszönjük!</p>
        <p class="pt-4">
          <a href="/order">Új rendelés leadása</a>
        </p>
      </div>
    </div>
  @endif

  <div id="tab_wrapper" class="space-y-8" x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'grid-view' }">

    <section class="flex items-center justify-between">
      <div class="flex items-center gap-4">
        <div class="flex items-center gap-0">
          <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full opacity-50"
                  :class="{ 'opacity-100 active': tab === 'grid-view' }" type="button"
                  @click.prevent="tab = 'grid-view'; window.location.hash = 'grid-view'">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"/>
            </svg>
          </button>
          <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full opacity-50"
                  :class="{ 'opacity-100 active': tab === 'list-view' }" type="button"
                  @click.prevent="tab = 'list-view'; window.location.hash = 'list-view'">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16"/>
            </svg>
          </button>
        </div>

        {{-- <div class="-mt-5">
          <label id="listbox-label" class="block text-sm font-medium text-neutral text-opacity-70">
            Rendezés
          </label>
          <div class="relative mt-1">
            <button type="button"
              class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-opacity-25 rounded-md shadow-sm cursor-default border-neutral focus:outline-none focus:ring-1 focus:ring-blue-500 focus:border-blue-500 sm:text-sm"
              aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
              <span class="flex items-center">
                <span class="block truncate">
                  Ár szerint növekvő
                </span>
              </span>
              <span class="absolute inset-y-0 right-0 flex items-center pr-2 ml-3 pointer-events-none">
                <svg class="w-5 h-5 text-neutral text-opacity-40" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                  fill="currentColor" aria-hidden="true">
                  <path fill-rule="evenodd"
                    d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                    clip-rule="evenodd" />
                </svg>
              </span>
            </button>

            <ul
              class="absolute hidden w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-56 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm"
              tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">
              <li class="relative py-2 pl-3 cursor-default select-none text-neutral text-opacity-90 pr-9" id="listbox-option-0"
                role="option">
                <span class="block ml-3 font-normal truncate">
                  Ár szerint csökkenő
                </span>
                <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                  <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                      clip-rule="evenodd" />
                  </svg>
                </span>
              </li>

            </ul>
          </div>
        </div> --}}
      </div>
    </section>

    @foreach ($data['products_grouped'] ?? [] as $category)
      @if (!isset($category['name']))
        @continue
      @endif

      <section id="{{ Str::slug($category['name']) }}" class="space-y-6 // product_group">

        <header class="flex items-center gap-2 // category_header">
          <picture class="flex-none">
            <img class="object-cover bg-white border border-opacity-25 rounded-full w-14 h-14 border-neutral"
                 src="{{ url('storage/' . $category['image']) }}" alt="{{ $category['name'] }}">
          </picture>
          <h2 class="text-2xl font-medium">
            {{ (empty($category['family']) ? '' : $category['family'] . ' - ') . $category['name'] }}</h2>
        </header>

        <div x-show="tab === 'grid-view'">
          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 md:grid-cols-3 xl:grid-cols-3 2xl:grid-cols-5">
            @foreach ($category['products'] as $product)

              @if(empty($product->price))
                @continue
              @endif

              <section
                class="relative overflow-hidden border bg-white border-neutral border-opacity-25 flex items-start w-full mx-auto // product_list_element pl_id_{{ $product->id }} manufacturer-{{ $product->manufacturer->id }} category-{{ $product->category->id }}"
                data-element_data="{!! htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') !!}">
                <div class="flex flex-col w-full h-full">

                  <div class="z-0 aspect-w-16 aspect-h-9 // product-image">
                    <picture>
                      <img class="object-contain object-center w-full h-full" src="{{ url('storage/' . $product->image) }}"
                           alt="{{ $product->name }}"/>
                    </picture>
                  </div>

                  <div class="flex items-center justify-between">
                    <div class="flex items-center flex-none px-3 mb-3 // manufacturer">
                      <picture>
                        <img
                          class="object-cover w-8 h-8 mr-2 border border-opacity-25 rounded-full border-neutral"
                          src="{{ url('storage/' . (empty($product->manufacturer->image) ? 'no_image.png' : $product->manufacturer->image)) }}"
                          alt="{{ $product->manufacturer->name }}"/>
                      </picture>
                      <div class="text-xs font-medium">{{ $product->manufacturer->name }}</div>
                    </div>
                    <div class="flex items-center px-3 mb-3 ml-auto // product-number">
                      <div class="text-xs font-bold">{{ $product->model }}</div>
                    </div>
                  </div>

                  <h2 class="px-3 text-lg font-medium // product_searchable">
                    {{ $product->name }}
                  </h2>

                  @if(!empty($product['description']))
                    <div class="px-3 mb-3 text-sm opacity-75 // product__description">
                      {!! $product['description'] !!}
                    </div>
                  @endif

                  <div class="relative flex px-3 py-3 mt-auto // prices">
                    <span
                      class="mr-1 text-2xl font-medium leading-none // number">{{ number_format(floatval($product->price), ($data['eur_price'] ? 2 : 0), ',', '.') }}</span>
                    <span class="text-lg font-medium // currency">{{ $data['currency'] }}/db</span>
                  </div>

                  <footer class="px-1 py-1 border-t border-opacity-25 border-neutral // footer">
                    <div class="flex items-center justify-between h-12">
                      <div class="flex items-center // numeric_wrap">
                        <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full // decrement-button"
                                type="button" tabindex="-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                               stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                          </svg>
                        </button>
                        <div class="flex items-center">
                          <label class="sr-only" for="product-{{ $product->id }}"></label>
                          <div class="relative rounded-md shadow-sm">
                            <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                              <span class="text-neutral sm:text-sm">db</span>
                            </div>
                            <input id="product-{{ $product->id }}"
                                   class="block w-full pr-16 border-opacity-25 rounded-md border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:pr-14 sm:text-sm // product_quantity in_grid"
                                   type="number" min="0" name="product-{{ $product->id }}" placeholder="0">
                          </div>
                        </div>
                        <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full // increment-button"
                                type="button" tabindex="-1">
                          <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                               stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                          </svg>
                        </button>
                      </div>
                    </div>
                  </footer>

                </div>
              </section>
            @endforeach
          </div>
        </div>

        <div x-show="tab === 'list-view'">
          <ul class="-mx-5 border-t border-b divide-y border-opacity-10 divide-neutral divide-opacity-10 border-neutral"
              role="list" {{-- x-show="expanded" --}} x-cloak>
            @foreach ($category['products'] as $product)
              <li
                class="flex py-3 text-sm transition-all px-6 sm:items-center hover:bg-neutral hover:bg-opacity-5 // product_list_element pl_id_{{ $product->id }}"
                data-element_data="{!! htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') !!}">
                <div class="flex flex-col items-center flex-auto md:flex-row gap-y-3 gap-x-5">
                  <div class="flex items-center justify-start flex-1 w-full">
                    <img class="flex-none w-10 h-10 mr-6 border border-opacity-25 rounded-full border-neutral"
                         src="{{ url('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="flex-auto row-end-1 sm:pr-6">
                      <h3 class="text-base font-medium text-neutral // product_searchable">{{ $product->name }}</h3>
                      @if(!empty($product['description']))
                        <div class="mb-2 text-sm opacity-75 // product__description">
                          {!! $product['description'] !!}
                        </div>
                      @endif
                      <p class="mt-0 text-xs text-neutral">{{ $product->model }}</p>
                      <p class="hidden mt-0 text-xs text-neutral">{{ $product->manufacturer->name }}</p>
                    </div>
                  </div>
                  <div class="flex items-center justify-between flex-1 w-full gap-3 md:justify-end">
                    <div class="flex flex-row items-center w-56 // numeric_wrap">
                      <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full // decrement-button"
                              type="button" tabindex="-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 12H4"/>
                        </svg>
                      </button>
                      <div class="flex items-center">
                        <label class="sr-only" for="product-{{ $product->id }}"></label>
                        <div class="relative rounded-md shadow-sm">
                          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <span class="text-neutral sm:text-sm">db</span>
                          </div>
                          <input id="product-{{ $product->id }}"
                                 class="block w-full pr-16 border-opacity-25 rounded-md border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:pr-14 sm:text-sm // product_quantity in_list"
                                 type="number" min="0" name="product-{{ $product->id }}" placeholder="0">
                        </div>
                      </div>
                      <button class="flex items-center justify-center flex-none w-10 h-10 rounded-full // increment-button"
                              type="button" tabindex="-1">
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                             stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/>
                        </svg>
                      </button>
                    </div>
                    <p class="flex justify-end w-24 text-base font-medium text-neutral">
                      <span>{{ number_format(floatval($product->price), ($data['eur_price'] ? 2 : 0), ',', '.') }}</span>
                    </p>
                  </div>
                </div>
              </li>
            @endforeach
          </ul>
        </div>

      </section>
    @endforeach
  </div>

</div>

<script>
	$(function () {

		number_format = function (x) {
			x = parseFloat(x).toFixed({{ ($data['eur_price'] ? 2 : 0) }});

      @if($data['eur_price'])
				x = x.replace('.', ',');
      @endif

				return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ',');
		}

		function increment(_this) {

			var
				$wrap = _this.closest('.numeric_wrap');

			if ($wrap.find('input').val() == '')
				$wrap.find('input').val(0)

			var
				newval = parseFloat($wrap.find('input').val()) + 1;

			$wrap.find('input')
				.val(newval)
				.trigger('change');

			var
				$element_wrap = _this.closest('.product_list_element');
			if (!$element_wrap.length)
				return;
			var
				element_id = $element_wrap.data('element_data').id;
			var
				the_class = $wrap.find('input').hasClass('in_grid') ? 'in_list' : 'in_grid';
			$('.product_list').find('.pl_id_' + element_id + ' input.' + the_class).val(newval);

			render_cart();

		}

		function decrement(_this) {

			var
				$wrap = _this.closest('.numeric_wrap');

			if ($wrap.find('input').val() == 0)
				return;

			var
				newval = parseFloat($wrap.find('input').val()) - 1;

			$wrap.find('input')
				.val(newval)
				.trigger('change');

			var
				$element_wrap = _this.closest('.product_list_element');
			if (!$element_wrap.length)
				return;
			var
				element_id = $element_wrap.data('element_data').id;
			var
				the_class = $wrap.find('input').hasClass('in_grid') ? 'in_list' : 'in_grid';
			$('.product_list').find('.pl_id_' + element_id + ' input.' + the_class).val(newval);

			render_cart();

		}

		function render_cart() {

			var
				cart_items = [],
				total_quantity = 0;

			$('.product_list_element').each(function (index) {

				var
					$element = $(this),

					element_data = $element.data('element_data'),
					quantity = $element.find('.product_quantity').val();

				if (quantity == 0 || quantity == '') {

					$element.removeClass('bg-secondary bg-opacity-50');

					return;

				} else {

					$element.addClass('bg-secondary bg-opacity-50');

				}

				$.each(cart_items, function (index, value) {

					if (typeof value !== 'undefined') {

						if (element_data['model'] == value['model']) {

							cart_items.splice(index, 1);

						}

					}

				});

				element_data['quantity'] = quantity;

				cart_items.push(element_data);

			});

			if (cart_items.length) {

				$('.the_cart_not_empty').removeClass('hidden');
				$('.order_button').removeClass('hidden');
				$('.the_cart_not_empty').addClass('sticky');
				$('.the_cart_empty').addClass('hidden');

				var
					price_sum_net = 0,
					price_discount_net = 0,
					price_tax = 0,
					price_sum_order = 0,

					$product_template =
						$(
							$('.templates .template_product').html()
						),

					exists = [];

				$('.cart_products').html('');

				$.each(cart_items, function (index, value) {

					var
						$product_template =
							$(
								$('.templates .template_product').html()
							);

          @if(!$data['eur_price'])

						price_sum_net += parseFloat(value.price) * parseFloat(value.quantity) * ((100 - {{ $data['config']['price_ratio'] }}) / 100);
					  price_discount_net += parseFloat(value.price) * parseFloat(value.quantity) * ({{ $data['config']['price_ratio'] }} / 100);

          @else

						price_sum_net += parseFloat(value.price) * parseFloat(value.quantity);

          @endif

						total_quantity += parseFloat(value.quantity);

					$product_template.find('.template_product_image').attr('src',
						'{{ url('storage') }}/' + value.image);
					$product_template.find('.template_product_name').text(value.name);
					$product_template.find('.template_product_category').text(value.category.name);
					$product_template.find('.template_product_model').text(value.model);

					$product_template.find('.template_product_quantity').val(parseFloat(value.quantity));

					$product_template.find('.template_product_price').text(
						number_format(
							parseFloat(value.price)
						)
					);

					$product_template.removeClass(function (index, className) {
						return (className.match(/(^|\s)element_id_\S+/g) || []).join(' ');
					});

					$product_template.addClass('element_id_' + value.id);

					$product_template.data('element_id', value.id);

					if ($('.cart_products .element_id_' + value.id).length) {
						$('.cart_products .element_id_' + value.id).find('input').val(
							parseFloat(value.quantity)
						);

						return;
					}

					$('.cart_products').append($product_template);

				});

				$('.cart_products').find('.delete_cart_item').off('click.ns').on('click.ns', function () {

					var
						$element_wrap = $(this).closest('.cart_element_wrap'),
						element_id = $element_wrap.data('element_id');

					$('.product_list').find('.pl_id_' + element_id + ' input').val(0);
					$element_wrap.remove();

					render_cart();

				});

				$('.cart_products').find('.template_product_quantity').off('change.ns').on('change.ns',
					function () {

						var
							$element_wrap = $(this).closest('.cart_element_wrap'),
							element_id = $element_wrap.data('element_id');

						if ($(this).val() == '' || parseFloat($(this).val()) == 0) {

							$(this).val($('.product_list').find('.pl_id_' + element_id + ' input').val());

							return;
						}

						$('.product_list').find('.pl_id_' + element_id + ' input').val($(this).val());

						render_cart();

					});

				$('.price_sum_net').text(
					number_format(
						parseFloat(
							price_sum_net
						)
					)
				);

				$('.price_discount_net').text(
					number_format(
						parseFloat(
							price_discount_net
						)
					)
				);

				var
					transport_cost = {{ $data['config']['transport_cost'] }},
					sum_total_taxed = price_sum_net * 1.27

				if (parseFloat(price_sum_net) >= parseFloat({{ $data['config']['free_transport'] }})) {

					transport_cost = 0;

					$('.transport_cost_wrap').addClass('hidden');
					$('.transport_free_wrap').removeClass('hidden');

				} else {

					transport_cost = {{ $data['config']['transport_cost'] }};

					$('.transport_cost_wrap').removeClass('hidden');
					$('.transport_free_wrap').addClass('hidden');

				}

				price_tax = parseFloat(
					(price_sum_net + transport_cost) * 0.27
				);

				$('.price_tax').text(
					number_format(
						price_tax
					)
				);

				$('.price_sum_order_net').text(
					number_format(
						parseFloat(
							(price_sum_net + transport_cost)
						)
					)
				);

				$('.price_sum_order').text(
					number_format(
						parseFloat(
							(price_sum_net + transport_cost) + price_tax
						)
					)
				);

			} else {

				$('.the_cart_not_empty').addClass('hidden');
				$('.order_button').addClass('hidden');
				$('.the_cart_empty').removeClass('hidden');

				$('.cart_products').html('');

			}

			$('.cart_info').text(total_quantity == 0 ? 'Nincs' : total_quantity)

			$('input[name="order_products"]').val(JSON.stringify(cart_items));

			$('.cart_element_wrap').each(function (index) {

				var
					$wrap = $(this).find('.numeric_wrap');

				$wrap.find('.increment-button').off('click.ns').on('click.ns', function () {
					if ($wrap.find('input').val() == '')
						$wrap.find('input').val(0)

					var
						newval = parseFloat($wrap.find('input').val()) + 1;

					$wrap.find('input')
						.val(newval)
						.trigger('change');

					$wrap.closest('.cart_element_wrap').find('.template_product_quantity_text')
						.text(
							newval
						);

				});

				$wrap.find('.decrement-button').off('click.ns').on('click.ns', function () {
					if ($wrap.find('input').val() == 0)
						return;

					var
						newval = parseFloat($wrap.find('input').val()) - 1;

					$wrap.find('input')
						.val(newval)
						.trigger('change');

					$wrap.closest('.cart_element_wrap').find('.template_product_quantity_text')
						.text(
							newval
						);

				});

				$(this).find('.template_product_quantity_text').text(
					$(this).find('.template_product_quantity').val()
				);

			});

		}

		$('.product_list').find('.product_quantity').off('keyup.ns, change.ns').on('keyup.ns, change.ns',
			function () {
				render_cart();
			});

		$('.product_search').off('keyup.ns, change.ns').on('keyup.ns, change.ns', function () {

			var
				term = $(this).val();

			if (term == '') {

				$('.product_list_element').removeClass('hidden');

				$('.product_group').removeClass('hidden');

				return;
			}

			$('.product_list_element').each(function (index) {

				var
					$element = $(this),
					element_data = $element.data('element_data'),

					searchable = element_data.name + ' ' + element_data.model + ' ' + element_data
						.category.name;

				term = term.toLowerCase();
				searchable = searchable.toLowerCase();

				if (searchable.includes(term)) {

					$element.removeClass('hidden');

				} else {

					$element.addClass('hidden');

				}

			});

			$('.product_group').removeClass('hidden');

			$('.product_group').each(function (index) {

				var
					visible = $(this).find('.product_list_element:visible').length;

				if (visible == 0) {

					$(this).addClass('hidden');

				} else {

					$(this).removeClass('hidden');

				}

			});

		});

		$('.nav-sidebar-list input').off('change.ns').on('change.ns', function () {

			var
				checked = $('.nav-sidebar-list input:checked');

			if (checked.length == 0) {

				$('.product_list_element').removeClass('hidden');

				$('.product_group').removeClass('hidden');

			} else {

				$('.product_list_element').addClass('hidden');

				$('.nav-sidebar-list input:checked').each(function (index) {

					$('.product_list_element.' + $(this).attr('name')).removeClass('hidden');

				});

				$('.product_group').removeClass('hidden');

				$('.product_group').each(function (index) {

					var
						visible = $(this).find('.product_list_element:visible').length;

					if (visible == 0) {

						$(this).addClass('hidden');

					} else {

						$(this).removeClass('hidden');

					}

				});

			}

		});

		$('.product_list_element .numeric_wrap .increment-button').off('click.ns').on('click.ns', function () {
			increment($(this));
		});

		$('.product_list_element .numeric_wrap .decrement-button').off('click.ns').on('click.ns', function () {
			decrement($(this));
		});

	});
</script>
