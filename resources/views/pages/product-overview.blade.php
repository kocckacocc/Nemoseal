@extends('_layouts.main')

@section('body')
@include('_partials._site._navbar.navbar')
<!--
    This example requires Tailwind CSS v2.0+ 
    
    This example requires some changes to your config:
    
    ```
    // tailwind.config.js
    module.exports = {
      // ...
      plugins: [
        // ...
        require('@tailwindcss/typography'),
        require('@tailwindcss/aspect-ratio'),
      ],
    }
    ```
  -->
<div class="bg-white">
  <div class="max-w-2xl px-4 py-16 mx-auto sm:py-24 sm:px-6 lg:max-w-7xl lg:px-8">
    <div class="lg:grid lg:grid-cols-2 lg:gap-x-8 lg:items-start">
      <!-- Image gallery -->
      <div class="flex flex-col-reverse">
        <!-- Image selector -->
        {{-- <div class="hidden w-full max-w-2xl mx-auto mt-6 sm:block lg:max-w-none">
            <div class="grid grid-cols-4 gap-6" aria-orientation="horizontal" role="tablist">
              <button id="tabs-1-tab-1" class="relative flex items-center justify-center h-24 text-sm font-medium text-gray-900 uppercase bg-white rounded-md cursor-pointer hover:bg-gray-50 focus:outline-none focus:ring focus:ring-offset-4 focus:ring-opacity-50" aria-controls="tabs-1-panel-1" role="tab" type="button">
                <span class="sr-only">
                  Angled view
                </span>
                <span class="absolute inset-0 overflow-hidden rounded-md">
                  <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="" class="object-cover object-center w-full h-full">
                </span>
                <!-- Selected: "ring-indigo-500", Not Selected: "ring-transparent" -->
                <span class="absolute inset-0 rounded-md pointer-events-none ring-transparent ring-2 ring-offset-2" aria-hidden="true"></span>
              </button>

              <!-- More images... -->
            </div>
          </div> --}}

        <div class="w-full aspect-w-1 aspect-h-1">
          <!-- Tab panel, show/hide based on tab state. -->
          <div id="tabs-1-panel-1" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
            <img src="https://tailwindui.com/img/ecommerce-images/product-page-03-product-01.jpg" alt="Angled front view with bag zipped and handles upright." class="object-cover object-center w-full h-full sm:rounded-lg">
          </div>

          <!-- More images... -->
        </div>
      </div>

      <!-- Product info -->
      <div class="px-4 mt-10 sm:px-0 sm:mt-16 lg:mt-0">
        <h1 class="text-3xl font-extrabold tracking-tight text-gray-900">Zip Tote Basket</h1>

        <div class="mt-3">
          <h2 class="sr-only">Product information</h2>
          <p class="text-3xl text-gray-900">$140</p>
        </div>

        <!-- Reviews -->
        <div class="mt-3">
          <h3 class="sr-only">Reviews</h3>
          <div class="flex items-center">
            <div class="flex items-center">
              <!--
                  Heroicon name: solid/star

                  Active: "text-indigo-500", Inactive: "text-gray-300"
                -->
              <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="flex-shrink-0 w-5 h-5 text-indigo-500" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>

              <!-- Heroicon name: solid/star -->
              <svg class="flex-shrink-0 w-5 h-5 text-gray-300" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
              </svg>
            </div>
            <p class="sr-only">4 out of 5 stars</p>
          </div>
        </div>

        <div class="mt-6">
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6 text-base text-gray-700">
            <p>The Zip Tote Basket is the perfect midpoint between shopping tote and comfy backpack. With convertible straps, you can hand carry, should sling, or backpack this convenient and spacious bag. The zip top and durable canvas construction keeps your goods protected for all-day use.</p>
          </div>
        </div>

        <form class="mt-6">
          <!-- Colors -->
          <div>
            <h3 class="text-sm text-gray-600">Color</h3>

            <fieldset class="mt-2">
              <legend class="sr-only">
                Choose a color
              </legend>
              <div class="flex items-center space-x-3">
                <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                  -->
                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-700">
                  <input type="radio" name="color-choice" value="Washed Black" class="sr-only" aria-labelledby="color-choice-0-label">
                  <p id="color-choice-0-label" class="sr-only">
                    Washed Black
                  </p>
                  <span aria-hidden="true" class="w-8 h-8 bg-gray-700 border border-black rounded-full border-opacity-10"></span>
                </label>

                <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                  -->
                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-400">
                  <input type="radio" name="color-choice" value="White" class="sr-only" aria-labelledby="color-choice-1-label">
                  <p id="color-choice-1-label" class="sr-only">
                    White
                  </p>
                  <span aria-hidden="true" class="w-8 h-8 bg-white border border-black rounded-full border-opacity-10"></span>
                </label>

                <!--
                    Active and Checked: "ring ring-offset-1"
                    Not Active and Checked: "ring-2"
                  -->
                <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-gray-500">
                  <input type="radio" name="color-choice" value="Washed Gray" class="sr-only" aria-labelledby="color-choice-2-label">
                  <p id="color-choice-2-label" class="sr-only">
                    Washed Gray
                  </p>
                  <span aria-hidden="true" class="w-8 h-8 bg-gray-500 border border-black rounded-full border-opacity-10"></span>
                </label>
              </div>
            </fieldset>
          </div>

          <div class="flex mt-10 sm:flex-col1">
            <button type="submit" class="flex items-center justify-center flex-1 max-w-xs px-8 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500 sm:w-full">Add to bag</button>

            <button type="button" class="flex items-center justify-center px-3 py-3 ml-4 text-gray-400 rounded-md hover:bg-gray-100 hover:text-gray-500">
              <!-- Heroicon name: outline/heart -->
              <svg class="flex-shrink-0 w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
              </svg>
              <span class="sr-only">Add to favorites</span>
            </button>
          </div>
        </form>

        <section aria-labelledby="details-heading" class="mt-12">
          <h2 id="details-heading" class="sr-only">Additional details</h2>

          <div class="border-t divide-y divide-gray-200">
            <div>
              <h3>
                <!-- Expand/collapse question button -->
                <button type="button" class="relative flex items-center justify-between w-full py-6 text-left group" aria-controls="disclosure-1" aria-expanded="false">
                  <!-- Open: "text-indigo-600", Closed: "text-gray-900" -->
                  <span class="text-sm font-medium text-gray-900">
                    Features
                  </span>
                  <span class="flex items-center ml-6">
                    <!--
                        Heroicon name: outline/plus-sm

                        Open: "hidden", Closed: "block"
                      -->
                    <svg class="block w-6 h-6 text-gray-400 group-hover:text-gray-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                    </svg>
                    <!--
                        Heroicon name: outline/minus-sm

                        Open: "block", Closed: "hidden"
                      -->
                    <svg class="hidden w-6 h-6 text-indigo-400 group-hover:text-indigo-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 12H6" />
                    </svg>
                  </span>
                </button>
              </h3>
              <div class="pb-6 prose-sm prose" id="disclosure-1">
                <ul role="list">
                  <li>Multiple strap configurations</li>

                  <li>Spacious interior with top zip</li>

                  <li>Leather handle and tabs</li>

                  <li>Interior dividers</li>

                  <li>Stainless strap loops</li>

                  <li>Double stitched construction</li>

                  <li>Water-resistant</li>
                </ul>
              </div>
            </div>

            <!-- More sections... -->
          </div>
        </section>
      </div>
    </div>
  </div>
</div>
@include('_partials._site.footer')
@endsection
