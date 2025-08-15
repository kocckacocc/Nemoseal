<div class="col-span-12 space-y-6 shadow-xl // product_list">

  @if (isset($data['order_success']))

    <div>
      <div class="p-6 text-center text-white bg-green-600">
        <p class="font-bold text-white uppercase">Megrendelését rögzítettük, köszönjük!</p>
      </div>
    </div>

  @endif

  <div x-data="{ tab: window.location.hash ? window.location.hash.substring(1) : 'product' }" id="tab_wrapper">

    @include('_partials._site._order.order-stepper')

    <div x-show="tab === 'product'">

      <div>
				<label for="email" class="sr-only">Email</label>
				<div class="relative rounded-none">
					<div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
						<svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
							<path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
						</svg>
					</div>
        	<input class="w-full pl-10 -mt-px border rounded-none focus:outline-none border-neutral h-14 focus:ring-0 focus:ring-secondary focus:border-secondary // product_search" placeholder="Keresés"/>
				</div>
      </div>

      @foreach ($data['products_grouped'] ?? [] as $category)

        <div class="bg-white // product_group" id="{{ Str::slug($category['name']) }}">
          <div class="relative">

            <div class="flex items-center justify-between w-full px-6 py-2 space-x-6 text-sm font-medium text-white border-t border-b border-neutral bg-neutral // category_header" {{-- :aria-expanded="expanded" @click="expanded = !expanded" --}}>
              <div class="flex items-center space-x-6">
                <img class="flex-none bg-white border border-opacity-25 rounded-full w-14 h-14 border-neutral" src="{{ url('storage/' . $category['image']) }}" alt="{{ $category['name'] }}">
                <h2 class="text-lg font-medium text-left">{{ $category['name'] }}</h2>
              </div>
            </div>

            <ul class="divide-y divide-neutral divide-opacity-10" role="list" {{-- x-show="expanded" x-cloak --}}>
              @foreach ($category['products'] as $product)
                <li class="flex py-3 text-sm transition-all sm:px-6 sm:items-center hover:bg-neutral hover:bg-opacity-5 // product_list_element pl_id_{{ $product->id }}" data-element_data="{!! htmlspecialchars(json_encode($product), ENT_QUOTES, 'UTF-8') !!}">
                  <div class="grid items-start flex-auto grid-cols-1 grid-rows-1 gap-y-3 gap-x-5 sm:flex sm:gap-0 sm:items-center">
                    <img class="flex-none mr-6 border border-opacity-25 rounded-full w-14 h-14 border-neutral" src="{{ url('storage/' . $product->image) }}" alt="{{ $product->name }}">
                    <div class="flex-auto row-end-1 sm:pr-6">
                      <h3 class="text-base font-medium text-neutral // product_searchable">{{ $product->name }}</h3>
                      <p class="mt-0 text-xs text-neutral">{{ $product->model }}</p>
                      <p class="mt-0 text-xs text-neutral">{{ $product->manufacturer->name }}</p>
                    </div>
                    <p class="flex items-center justify-between w-24 row-span-2 row-end-2 text-base font-medium text-neutral sm:ml-8 sm:order-1 sm:flex-none sm:text-right">
                      <span class="text-xl opacity-70">×</span>
                      <span>{{ number_format($product->price, 0, '', '.') }} Ft</span>
                    </p>
                    <div class="flex items-center w-32 sm:flex-none sm:block sm:text-center">
                      <div>
                        <label class="block text-sm font-medium text-neutral" for="product-{{ $product->id }}"></label>
                        <div class="relative rounded-md shadow-sm">
                          <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                            <span class="text-neutral sm:text-sm">db</span>
                          </div>
                          <input class="block w-full pr-16 border-opacity-25 rounded-md border-neutral focus:ring-2 focus:ring-secondary focus:border-secondary sm:pr-14 sm:text-sm // product_quantity" type="number" min="0" name="product-{{ $product->id }}" id="product-{{ $product->id }}" placeholder="0">
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              @endforeach
            </ul>

          </div>
        </div>

      @endforeach
    </div>

    <div x-show="tab === 'cart'">
      @include('_partials._site._order.cart')
    </div>

    <div x-show="tab === 'summary'">
      @include('_partials._site._order.order-summary')
    </div>

  </div>
</div>

<script>
	$(function () {

		number_format = function (x) {
			x = Math.round(x);
			return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
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

				element_data['quantity'] = quantity;
				cart_items.push(element_data);

			});

			if (cart_items.length) {

				$('.the_cart_not_empty').removeClass('hidden');
				$('.the_cart_empty').addClass('hidden');

				var
					price_sum_net = 0,
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

					price_sum_net += parseInt(value.price) * parseInt(value.quantity);
					total_quantity += parseInt(value.quantity);

					$product_template.find('.template_product_image').attr('src', '{{ url('storage') }}/' + value.image);
					$product_template.find('.template_product_name').text(value.name);
					$product_template.find('.template_product_category').text(value.category.name);
					$product_template.find('.template_product_quantity').val(parseInt(value.quantity));

					$product_template.find('.template_product_price').text(
						number_format(
							parseInt(value.price)
						)
					);

					$product_template.removeClass(function (index, className) {
						return (className.match(/(^|\s)element_id_\S+/g) || []).join(' ');
					});

					$product_template.addClass('element_id_' + value.id);

					$product_template.data('element_id', value.id);

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

				$('.cart_products').find('.template_product_quantity').off('change.ns').on('change.ns', function () {

					var
						$element_wrap = $(this).closest('.cart_element_wrap'),
						element_id = $element_wrap.data('element_id');

					if($(this).val() == '' || parseInt($(this).val()) == 0) {

						$(this).val($('.product_list').find('.pl_id_' + element_id + ' input').val());

            return;
					}

					$('.product_list').find('.pl_id_' + element_id + ' input').val($(this).val());

					render_cart();

				});

				$('.price_sum_net').text(
					number_format(
						parseInt(
							price_sum_net
						)
					)
				);

				price_tax = parseInt(
					(price_sum_net + {{ $data['config']['transport_cost'] }}) * 0.27
				);

				$('.price_tax').text(
					number_format(
						price_tax
					)
				);

				$('.price_sum_order_net').text(
					number_format(
						parseInt(
							(price_sum_net + {{ $data['config']['transport_cost'] }})
						)
					)
				);

				$('.price_sum_order').text(
					number_format(
						parseInt(
							(price_sum_net + {{ $data['config']['transport_cost'] }}) + price_tax
						)
					)
				);

			} else {

				$('.the_cart_not_empty').addClass('hidden');
				$('.the_cart_empty').removeClass('hidden');

				$('.cart_products').html('');

			}

			$('.cart_info').text(total_quantity == 0 ? 'Nincs' : total_quantity)

			$('input[name="order_products"]').val(JSON.stringify(cart_items));

		}

		$('.product_list').find('.product_quantity').off('keyup.ns, change.ns').on('keyup.ns, change.ns', function () {

			render_cart();

		});

	  $('.product_search').off('keyup.ns, change.ns').on('keyup.ns, change.ns', function () {

			$('.product_group .category_header').removeClass('hidden');

			var
        term = $(this).val();

			$('.product_group').each(function (index) {

				var
          visible = $(this).find('.product_list_element:visible').length;

				if(visible == 0) {

					$(this).find('.category_header').addClass('hidden');

        } else {

					$(this).find('.category_header').removeClass('hidden');

        }

			});

			if(term == '') {

				$('.product_list_element').removeClass('hidden');

				return;
      }

			$('.product_list_element').each(function (index) {

				var
					$element = $(this),
					element_data = $element.data('element_data'),

          searchable = element_data.name + ' ' + element_data.model + ' ' + element_data.category.name;

				if(searchable.includes(term)) {

					$element.removeClass('hidden');

        } else {

					$element.addClass('hidden');

        }

			});


		});

	});
</script>