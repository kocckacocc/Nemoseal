<div class="fixed bottom-0 left-0 z-30 w-full bg-white">
	<div class="lg:border-t lg:border-b lg:border-neutral border-opacity-20">
		<nav class="mx-auto">
			<ol role="list"
				class="overflow-hidden rounded-md lg:flex lg:border-l lg:border-r lg:border-neutral border-opacity-20 lg:rounded-none">

				<li class="relative overflow-hidden lg:flex-1">
					<div class="overflow-hidden border border-b-0 border-neutral border-opacity-20 rounded-t-md lg:border-0">

						<a href="#" class="group" {{-- :class="{ 'active': tab === 'product' }"
							@click.prevent="tab = 'product'; window.location.hash = 'product'" --}}>
							<span
								class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-secondary lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
								{{-- :class="{ 'bg-secondary': tab === 'product' }" --}} aria-hidden="true"></span>
							<span class="flex items-start px-6 py-5 text-sm font-medium ">
								<span class="flex-shrink-0">
                  <span class="flex items-center justify-center w-10 h-10 rounded-full bg-secondary">
                    <svg class="w-6 h-6 text-white" x-description="Heroicon name: solid/check" xmlns="http://www.w3.org/2000/svg"
                      viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                      <path fill-rule="evenodd"
                        d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                        clip-rule="evenodd"></path>
                    </svg>
                  </span>
                </span>
								<span class="mt-0.5 ml-4 min-w-0 flex flex-col">
									<span class="text-xs font-semibold tracking-wide uppercase"
										{{-- :class="{ 'text-secondary': tab === 'product' } --}}">Termékszűrő</span>
								</span>
							</span>
						</a>

					</div>
				</li> 

				<li class="relative overflow-hidden lg:flex-1">
					<div class="overflow-hidden border border-neutral border-opacity-20 lg:border-0">

						<button class="group" {{-- :class="{ 'active': tab === 'cart' }"
							@click.prevent="tab = 'cart'; window.location.hash = 'cart'" --}}
							@click="openCart = true">
							<span
								class="absolute top-0 left-0 w-1 h-full bg-transparent group-hover:bg-secondary lg:w-full lg:h-1 lg:bottom-0 lg:top-auto"
								{{-- :class="{ 'bg-secondary': tab === 'cart' }" --}} aria-hidden="true"></span>
							<span class="flex items-start px-6 py-5 text-sm font-medium lg:pl-9">
								<span class="flex-shrink-0">
									<span class="flex items-center justify-center w-10 h-10 border-2 rounded-full border-neutral border-opacity-30"
										{{-- :class="{ 'border-secondary border-opacity-100': tab === 'cart' }" --}}>
										<span class="text-neutral opacity-70">02</span>
									</span>
								</span>
								<span class="mt-0.5 ml-4 min-w-0 flex flex-col">
									<span class="text-xs font-semibold tracking-wide uppercase text-secondary"
										{{-- :class="{ 'text-secondary': tab === 'cart' }" --}}>Kosár</span>
									<span class="text-sm font-medium text-neutral opacity-70"><span class="cart_info">Nincs</span> termék a kosárban</span>
								</span>
							</span>
						</button>
					</div>
				</li>

			</ol>
		</nav>
	</div>
</div>
