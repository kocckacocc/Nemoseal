<div class="hidden // templates">
	<ul class="template_product">
		<li class="py-4 text-sm sm:items-center">
			<a class="flex flex-grow" href="">
				<img src="{{ url('storage/no_image.png') }}" alt=""
					class="flex-none w-10 h-10 border border-opacity-25 rounded-full border-neutral // template_product_image">
				<div
					class="grid items-start flex-auto grid-cols-1 grid-rows-1 ml-4 gap-y-3 gap-x-5 sm:ml-6 sm:flex sm:gap-0 sm:items-center">
					<div class="flex-auto row-end-1 sm:pr-6">
						<h3 class="text-sm font-medium text-white // template_product_name"></h3>
						<p class="mt-1 text-xs text-white opacity-70 // template_product_category"></p>
					</div>
					<p class="row-span-2 row-end-2 font-medium text-white sm:ml-6 sm:order-1 sm:flex-none sm:w-1/3 sm:text-right">
						<span class="template_product_quantity"></span>
						×
						<span class="template_product_price"></span>
						Ft
					</p>
				</div>
			</a>
		</li>
	</ul>
</div> 

<div class="col-span-4">
	<form class="relative flex flex-col w-full py-8 overflow-hidden bg-opacity-95 bg-neutral">
		<div class="flex items-center justify-between px-6 sm:px-6 lg:px-8">
			<h2 class="text-lg font-bold text-white uppercase">Kosár tartalma</h2>
		</div>

		<section aria-labelledby="cart-heading">

			<h2 id="cart-heading" class="sr-only">Kosár tartalma</h2>

			<ul role="list" class="px-6 divide-y divide-white divide-opacity-25 sm:px-6 lg:px-8 // cart_products">
			</ul>

		</section>

		<div class="hidden the_cart_not_empty">

			<section aria-labelledby="summary-heading">
				<div class="p-6 bg-gray-50 lg:p-8 sm:rounded-lg">
					<h2 id="summary-heading" class="sr-only">Rendelés összesítő</h2>

					<div class="flow-root">
						<dl class="-my-4 text-sm divide-y divide-white divide-opacity-25">
							<div class="flex items-center justify-between py-4">
								<dt class="text-white opacity-75">
									Összesen nettó
								</dt>
								<dd class="font-medium text-white">
									<span class="price_sum_net">
									</span>
									Ft
								</dd>
							</div>

							<div class="flex items-center justify-between py-4">
								<dt class="text-white opacity-75">
									Szállítási költség
								</dt>
								<dd class="font-medium text-white">
									<span class="price_transport_cost">
										{{ $data['config']['transport_cost'] }}
									</span>
									Ft
								</dd>
							</div>

							<div class="flex items-center justify-between py-4">
								<dt class="text-white opacity-75">
									Rendelés összesen (nettó)
								</dt>
								<dd class="font-medium text-white">
									<span class="price_sum_order_net">
									</span>
									Ft
								</dd>
							</div>

							<div class="flex items-center justify-between py-4">
								<dt class="text-white opacity-75">
									ÁFA
								</dt>
								<dd class="font-medium text-white">
									<span class="price_tax">
									</span>
									Ft
								</dd>
							</div>

							<div class="flex items-center justify-between py-4">
								<dt class="text-base font-medium text-white">
									Rendelés összesen (bruttó)
								</dt>
								<dd class="text-base font-medium text-white">
									<span class="price_sum_order">
									</span>
									Ft
								</dd>
							</div>

						</dl>
					</div>
				</div>
			</section>

			<div class="flex justify-end px-6 mt-8 sm:px-6 lg:px-8">
				<button class="btn" type="button" @click="open = true">Megrendelés</button>
			</div>

		</div>

		<div class="px-6 pt-6 lg:px-8 // the_cart_empty">

			<div class="text-sm text-white">A kosár jelenleg üres.</div>

		</div>

	</form>
</div>
