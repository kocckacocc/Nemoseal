@extends('_layouts.main')

@section('body')
@include('_partials._site._navbar.navbar')
<!-- This example requires Tailwind CSS v2.0+ -->
<div class="w-full px-4 py-12 mx-auto sm:px-6 lg:px-8 lg:py-24">
  <div class="bg-gray-50">
    <div class="px-4 pt-16 pb-24 mx-auto _max-w-2xl sm:px-6 _lg:max-w-7xl lg:px-8">
      <h2 class="sr-only">Checkout</h2>

      <form class="lg:grid lg:grid-cols-3 lg:gap-x-12 xl:gap-x-16">
        <div class="hidden">
          <div>
            <h2 class="text-lg font-medium text-gray-900">Contact information</h2>

            <div class="mt-4">
              <label for="email-address" class="block text-sm font-medium text-gray-700">Email address</label>
              <div class="mt-1">
                <input type="email" id="email-address" name="email-address" autocomplete="email" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              </div>
            </div>
          </div>

          <div class="pt-10 mt-10 border-t border-gray-200">
            <h2 class="text-lg font-medium text-gray-900">Shipping information</h2>

            <div class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
              <div>
                <label for="first-name" class="block text-sm font-medium text-gray-700">First name</label>
                <div class="mt-1">
                  <input type="text" id="first-name" name="first-name" autocomplete="given-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="last-name" class="block text-sm font-medium text-gray-700">Last name</label>
                <div class="mt-1">
                  <input type="text" id="last-name" name="last-name" autocomplete="family-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="company" class="block text-sm font-medium text-gray-700">Company</label>
                <div class="mt-1">
                  <input type="text" name="company" id="company" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                <div class="mt-1">
                  <input type="text" name="address" id="address" autocomplete="street-address" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="apartment" class="block text-sm font-medium text-gray-700">Apartment, suite, etc.</label>
                <div class="mt-1">
                  <input type="text" name="apartment" id="apartment" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="city" class="block text-sm font-medium text-gray-700">City</label>
                <div class="mt-1">
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="country" class="block text-sm font-medium text-gray-700">Country</label>
                <div class="mt-1">
                  <select id="country" name="country" autocomplete="country-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
              </div>

              <div>
                <label for="region" class="block text-sm font-medium text-gray-700">State / Province</label>
                <div class="mt-1">
                  <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="postal-code" class="block text-sm font-medium text-gray-700">Postal code</label>
                <div class="mt-1">
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:col-span-2">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <div class="mt-1">
                  <input type="text" name="phone" id="phone" autocomplete="tel" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>
            </div>
          </div>

          <div class="pt-10 mt-10 border-t border-gray-200">
            <fieldset>
              <legend class="text-lg font-medium text-gray-900">
                Delivery method
              </legend>

              <div class="grid grid-cols-1 mt-4 gap-y-6 sm:grid-cols-2 sm:gap-x-4">
                <!--
                    Checked: "border-transparent", Not Checked: "border-gray-300"
                    Active: "ring-2 ring-indigo-500"
                  -->
                <label class="relative flex p-4 bg-white border rounded-lg shadow-sm cursor-pointer focus:outline-none">
                  <input type="radio" name="delivery-method" value="Standard" class="sr-only" aria-labelledby="delivery-method-0-label" aria-describedby="delivery-method-0-description-0 delivery-method-0-description-1">
                  <div class="flex flex-1">
                    <div class="flex flex-col">
                      <span id="delivery-method-0-label" class="block text-sm font-medium text-gray-900">
                        Standard
                      </span>
                      <span id="delivery-method-0-description-0" class="flex items-center mt-1 text-sm text-gray-500">
                        4–10 business days
                      </span>
                      <span id="delivery-method-0-description-1" class="mt-6 text-sm font-medium text-gray-900">
                        $5.00
                      </span>
                    </div>
                  </div>
                  <!--
                      Not Checked: "hidden"

                      Heroicon name: solid/check-circle
                    -->
                  <svg class="w-5 h-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                  <div class="absolute border-2 rounded-lg pointer-events-none -inset-px" aria-hidden="true"></div>
                </label>

                <!--
                    Checked: "border-transparent", Not Checked: "border-gray-300"
                    Active: "ring-2 ring-indigo-500"
                  -->
                <label class="relative flex p-4 bg-white border rounded-lg shadow-sm cursor-pointer focus:outline-none">
                  <input type="radio" name="delivery-method" value="Express" class="sr-only" aria-labelledby="delivery-method-1-label" aria-describedby="delivery-method-1-description-0 delivery-method-1-description-1">
                  <div class="flex flex-1">
                    <div class="flex flex-col">
                      <span id="delivery-method-1-label" class="block text-sm font-medium text-gray-900">
                        Express
                      </span>
                      <span id="delivery-method-1-description-0" class="flex items-center mt-1 text-sm text-gray-500">
                        2–5 business days
                      </span>
                      <span id="delivery-method-1-description-1" class="mt-6 text-sm font-medium text-gray-900">
                        $16.00
                      </span>
                    </div>
                  </div>
                  <!--
                      Not Checked: "hidden"

                      Heroicon name: solid/check-circle
                    -->
                  <svg class="w-5 h-5 text-indigo-600" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                  </svg>
                  <!--
                      Active: "border", Not Active: "border-2"
                      Checked: "border-indigo-500", Not Checked: "border-transparent"
                    -->
                  <div class="absolute border-2 rounded-lg pointer-events-none -inset-px" aria-hidden="true"></div>
                </label>
              </div>
            </fieldset>
          </div>

          <!-- Payment -->
          <div class="pt-10 mt-10 border-t border-gray-200">
            <h2 class="text-lg font-medium text-gray-900">Payment</h2>

            <fieldset class="mt-4">
              <legend class="sr-only">Payment type</legend>
              <div class="space-y-4 sm:flex sm:items-center sm:space-y-0 sm:space-x-10">
                <div class="flex items-center">
                  <input id="credit-card" name="payment-type" type="radio" checked class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                  <label for="credit-card" class="block ml-3 text-sm font-medium text-gray-700">
                    Credit card
                  </label>
                </div>

                <div class="flex items-center">
                  <input id="paypal" name="payment-type" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                  <label for="paypal" class="block ml-3 text-sm font-medium text-gray-700">
                    PayPal
                  </label>
                </div>

                <div class="flex items-center">
                  <input id="etransfer" name="payment-type" type="radio" class="w-4 h-4 text-indigo-600 border-gray-300 focus:ring-indigo-500">
                  <label for="etransfer" class="block ml-3 text-sm font-medium text-gray-700">
                    eTransfer
                  </label>
                </div>
              </div>
            </fieldset>

            <div class="grid grid-cols-4 mt-6 gap-y-6 gap-x-4">
              <div class="col-span-4">
                <label for="card-number" class="block text-sm font-medium text-gray-700">Card number</label>
                <div class="mt-1">
                  <input type="text" id="card-number" name="card-number" autocomplete="cc-number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="col-span-4">
                <label for="name-on-card" class="block text-sm font-medium text-gray-700">Name on card</label>
                <div class="mt-1">
                  <input type="text" id="name-on-card" name="name-on-card" autocomplete="cc-name" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="col-span-3">
                <label for="expiration-date" class="block text-sm font-medium text-gray-700">Expiration date (MM/YY)</label>
                <div class="mt-1">
                  <input type="text" name="expiration-date" id="expiration-date" autocomplete="cc-exp" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div>
                <label for="cvc" class="block text-sm font-medium text-gray-700">CVC</label>
                <div class="mt-1">
                  <input type="text" name="cvc" id="cvc" autocomplete="csc" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- category-list -->
        <div class="flex flex-col col-span-2">
          <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
              <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
                <table class="min-w-full divide-y divide-gray-200">
                  <thead class="bg-gray-50">
                    <tr>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Name
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Title
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Status
                      </th>
                      <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                        Role
                      </th>
                      <th scope="col" class="relative px-6 py-3">
                        <span class="sr-only">Edit</span>
                      </th>
                    </tr>
                  </thead>
                  <tbody class="bg-white divide-y divide-gray-200">
                    <tr>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="flex items-center">
                          <div class="flex-shrink-0 w-10 h-10">
                            <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                          </div>
                          <div class="ml-4">
                            <div class="text-sm font-medium text-gray-900">
                              Jane Cooper
                            </div>
                            <div class="text-sm text-gray-500">
                              jane.cooper@example.com
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <div class="text-sm text-gray-900">Regional Paradigm Technician</div>
                        <div class="text-sm text-gray-500">Optimization</div>
                      </td>
                      <td class="px-6 py-4 whitespace-nowrap">
                        <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                          Active
                        </span>
                      </td>
                      <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                        Admin
                      </td>
                      <td class="px-6 py-4 text-sm font-medium text-right whitespace-nowrap">
                        <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                      </td>
                    </tr>

                    <!-- More people... -->
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>

        <!-- Order summary -->
        <div class="col-span-1 mt-10 lg:mt-0">
          <h2 class="text-lg font-medium text-gray-900">Order summary</h2>

          <div class="mt-4 bg-white border border-gray-200 rounded-lg shadow-sm">
            <h3 class="sr-only">Items in your cart</h3>
            <ul role="list" class="divide-y divide-gray-200">
              <li class="flex px-4 py-6 sm:px-6">
                <div class="flex-shrink-0">
                  <img src="https://tailwindui.com/img/ecommerce-images/checkout-page-02-product-01.jpg" alt="Front of men&#039;s Basic Tee in black." class="w-20 rounded-md">
                </div>

                <div class="flex flex-col flex-1 ml-6">
                  <div class="flex">
                    <div class="flex-1 min-w-0">
                      <h4 class="text-sm">
                        <a href="#" class="font-medium text-gray-700 hover:text-gray-800">
                          Basic Tee
                        </a>
                      </h4>
                      <p class="mt-1 text-sm text-gray-500">
                        Black
                      </p>
                      <p class="mt-1 text-sm text-gray-500">
                        Large
                      </p>
                    </div>

                    <div class="flex-shrink-0 flow-root ml-4">
                      <button type="button" class="-m-2.5 bg-white p-2.5 flex items-center justify-center text-gray-400 hover:text-gray-500">
                        <span class="sr-only">Remove</span>
                        <!-- Heroicon name: solid/trash -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z" clip-rule="evenodd" />
                        </svg>
                      </button>
                    </div>
                  </div>

                  <div class="flex items-end justify-between flex-1 pt-2">
                    <p class="mt-1 text-sm font-medium text-gray-900">$32.00</p>

                    <div class="ml-4">
                      <label for="quantity" class="sr-only">Quantity</label>
                      <select id="quantity" name="quantity" class="text-base font-medium text-left text-gray-700 border border-gray-300 rounded-md shadow-sm focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                        <option value="8">8</option>
                      </select>
                    </div>
                  </div>
                </div>
              </li>

              <!-- More products... -->
            </ul>
            <dl class="px-4 py-6 space-y-6 border-t border-gray-200 sm:px-6">
              <div class="flex items-center justify-between">
                <dt class="text-sm">
                  Subtotal
                </dt>
                <dd class="text-sm font-medium text-gray-900">
                  $64.00
                </dd>
              </div>
              <div class="flex items-center justify-between">
                <dt class="text-sm">
                  Shipping
                </dt>
                <dd class="text-sm font-medium text-gray-900">
                  $5.00
                </dd>
              </div>
              <div class="flex items-center justify-between">
                <dt class="text-sm">
                  Taxes
                </dt>
                <dd class="text-sm font-medium text-gray-900">
                  $5.52
                </dd>
              </div>
              <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                <dt class="text-base font-medium">
                  Total
                </dt>
                <dd class="text-base font-medium text-gray-900">
                  $75.52
                </dd>
              </div>
            </dl>

            <div class="px-4 py-6 border-t border-gray-200 sm:px-6">
              <button type="submit" class="w-full px-4 py-3 text-base font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-gray-50 focus:ring-indigo-500">Confirm order</button>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
@include('_partials._site.footer')
@endsection
