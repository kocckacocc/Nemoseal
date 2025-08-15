<div class="w-full px-4 mx-auto sm:px-6 md:px-8">
  <form>
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
        <div class="space-y-8 divide-y divide-gray-200 sm:space-y-5">
          <div>
            <div>
              <h3 class="text-lg font-medium leading-6 text-gray-900">
                Profil
              </h3>
            </div>

            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="photo" class="block text-sm font-medium text-gray-700">
                  Profilkép
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <div class="flex items-center">
                    <span class="w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                      <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                      </svg>
                    </span>
                    <button type="button" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                      Change
                    </button>
                  </div>
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Árlista
                </label>
                <div class="relative mt-1">
                  <button type="button" class="relative w-full py-2 pl-3 pr-10 text-left bg-white border border-gray-300 rounded-md shadow-sm cursor-default focus:outline-none focus:ring-1 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" aria-haspopup="listbox" aria-expanded="true" aria-labelledby="listbox-label">
                    <span class="flex items-center">
                      <div class="flex-shrink-0 w-6 h-6">
                        <div class="w-6 h-6 bg-blue-600 rounded-full"></div>
                      </div>
                      <span class="block ml-3 truncate">
                        Árlista neve
                      </span>
                    </span>
                    <span class="absolute inset-y-0 right-0 flex items-center pr-2 ml-3 pointer-events-none">
                      <!-- Heroicon name: solid/selector -->
                      <svg class="w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                        <path fill-rule="evenodd" d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z" clip-rule="evenodd" />
                      </svg>
                    </span>
                  </button>

                  {{-- <ul class="absolute z-10 w-full py-1 mt-1 overflow-auto text-base bg-white rounded-md shadow-lg max-h-56 ring-1 ring-black ring-opacity-5 focus:outline-none sm:text-sm" tabindex="-1" role="listbox" aria-labelledby="listbox-label" aria-activedescendant="listbox-option-3">

                    <li class="relative py-2 pl-3 text-gray-900 cursor-default select-none pr-9" id="listbox-option-0" role="option">
                      <div class="flex items-center">
                        <img src="https://images.unsplash.com/photo-1491528323818-fdd1faba62cc?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="flex-shrink-0 w-6 h-6 rounded-full">
                        <!-- Selected: "font-semibold", Not Selected: "font-normal" -->
                        <span class="block ml-3 font-normal truncate">
                          Wade Cooper
                        </span>
                      </div>


                      <span class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                        <!-- Heroicon name: solid/check -->
                        <svg class="w-5 h-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                          <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                        </svg>
                      </span>
                    </li>

                    <!-- More items... -->
                  </ul> --}}
                </div>
              </div>

            </div>
          </div>

          <div class="pt-8 space-y-6 sm:pt-10 sm:space-y-5">
            <div>
              <h3 class="text-lg font-medium leading-6 text-gray-900">
                Személyes információk
              </h3>
            </div>
            <div class="space-y-6 sm:space-y-5">
              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="first-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Vezetéknév
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="last-name" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Keresztnév
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="email" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Email cím
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="country" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Ország
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <select id="country" name="country" autocomplete="country-name" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                    <option>United States</option>
                    <option>Canada</option>
                    <option>Mexico</option>
                  </select>
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="street-address" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Utca
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="street-address" id="street-address" autocomplete="street-address" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="city" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Város
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="city" id="city" autocomplete="address-level2" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="region" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Megye
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="region" id="region" autocomplete="address-level1" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="postal-code" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Irányítószám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="postal-code" id="postal-code" autocomplete="postal-code" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </div>
    <div class="pt-5">
      <div class="flex justify-between">
        <div>
          <a href="/admin-partner-index" type="button" class="text-red-600 hover:underline">
            Fiók törlése
          </a>
        </div>
        <div class="flex justify-end">
          <a href="/admin-partner-index" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Mégsem
          </a>
          <a href="/admin-partner-index" type="button" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Mentés
          </a>
        </div>
      </div>
    </div>
  </form>
</div>
