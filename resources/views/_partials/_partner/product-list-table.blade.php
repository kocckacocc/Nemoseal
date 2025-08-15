<!-- This example requires Tailwind CSS v2.0+ -->
<div class="w-full px-4 mx-auto sm:px-6 md:px-8">
  <div class="flex flex-col">
    <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
        <div class="overflow-hidden border-b border-gray-200 shadow sm:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
              <tr>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Termék
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Márka
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Nettó ár
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Bruttó ár
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Készletállapot
                </th>
                <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                  Mennyiség
                </th>
                <th scope="col" class="relative px-6 py-3">
                  <span class="sr-only">Művelet</span>
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
                        Terméknév
                      </div>
                      <div class="text-sm text-gray-500">
                        cikkszám
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Márka</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">1.000 Ft</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">1.270 Ft</div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                    Elérhető
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div>
                    <label for="amount" class="sr-only">Darabszám</label>
                    <div class="relative rounded-md shadow-sm">
                      <input type="number" name="amount" id="amount" autocomplete="amount" class="flex-1 block w-full min-w-0 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                          db
                        </span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 space-x-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href="#" class="text-red-600 hover:text-red-900">Törlés</a>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Kosárba</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-10 h-10">
                      <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        Terméknév
                      </div>
                      <div class="text-sm text-gray-500">
                        cikkszám
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Márka</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">1.000 Ft</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">1.270 Ft</div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                    Elérhető
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div>
                    <label for="amount" class="sr-only">Darabszám</label>
                    <div class="relative rounded-md shadow-sm">
                      <input type="number" name="amount" id="amount" autocomplete="amount" class="flex-1 block w-full min-w-0 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                          db
                        </span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 space-x-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href="#" class="text-red-600 hover:text-red-900">Törlés</a>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Kosárba</a>
                </td>
              </tr>
              <tr>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-10 h-10">
                      <img class="w-10 h-10 rounded-full" src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=4&w=256&h=256&q=60" alt="">
                    </div>
                    <div class="ml-4">
                      <div class="text-sm font-medium text-gray-900">
                        Terméknév
                      </div>
                      <div class="text-sm text-gray-500">
                        cikkszám
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">Márka</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">1.000 Ft</div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div class="text-sm text-gray-900">1.270 Ft</div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                  <span class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                    Elérhető
                  </span>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">
                  <div>
                    <label for="amount" class="sr-only">Darabszám</label>
                    <div class="relative rounded-md shadow-sm">
                      <input type="number" name="amount" id="amount" autocomplete="amount" class="flex-1 block w-full min-w-0 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                      <div class="absolute inset-y-0 right-0 flex items-center pr-3 pointer-events-none">
                        <span class="text-gray-500 sm:text-sm" id="price-currency">
                          db
                        </span>
                      </div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-4 space-x-4 text-sm font-medium text-right whitespace-nowrap">
                  <a href="#" class="text-red-600 hover:text-red-900">Törlés</a>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900">Kosárba</a>
                </td>
              </tr>

              <!-- More people... -->
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
