<div class="w-full px-4 mx-auto sm:px-6 md:px-8">
  <form action="#" method="POST">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
        <div class="sm:col-span-6">
          <label for="featured-image" class="block text-sm font-medium text-gray-700">
            Kiemelt kép
          </label>
          <div class="flex items-center mt-1">
            <span class="w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
              <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
              </svg>
            </span>
            <button type="button" class="px-3 py-2 ml-5 text-sm font-medium leading-4 text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
              Tallózás
            </button>
          </div>
        </div>
        
        <div class="sm:col-span-4">
          <label for="product-title" class="block text-sm font-medium text-gray-700">
            Megnevezés
          </label>
          <div class="mt-1">
            <input type="text" name="product-title" id="product-title" autocomplete="product-title" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="product-url" class="block text-sm font-medium text-gray-700">
            URL
          </label>
          <div class="flex mt-1 rounded-md shadow-sm">
            <span class="inline-flex items-center px-3 text-gray-500 border border-r-0 border-gray-300 rounded-l-md bg-gray-50 sm:text-sm">
              nemoseal.hu/
            </span>
            <input type="text" name="product-url" id="product-url" autocomplete="product-url" class="flex-1 block w-full min-w-0 border-gray-300 rounded-none focus:ring-indigo-500 focus:border-indigo-500 rounded-r-md sm:text-sm">
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="product-number" class="block text-sm font-medium text-gray-700">
            Cikkszám
          </label>
          <div class="mt-1">
            <input type="text" name="product-number" id="product-number" autocomplete="product-number" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="product-category" class="block text-sm font-medium text-gray-700">
            Kategória
          </label>
          <div class="mt-1">
            <select id="product-category" name="product-category" autocomplete="product-category" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>Csőtoldó acél merevítőpánttal</option>
              <option>Csőtoldó egyenes</option>
              <option>Csőtoldó szűkítő</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="product-manufacturer" class="block text-sm font-medium text-gray-700">
            Gyártó
          </label>
          <div class="mt-1">
            <select id="product-manufacturer" name="product-manufacturer" autocomplete="product-manufacturer" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>VIPseal</option>
              <option>Crassus</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-4">
          <label for="product-state" class="block text-sm font-medium text-gray-700">
            Státusz
          </label>
          <div class="mt-1">
            <select id="product-state" name="product-state" autocomplete="product-state" class="block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
              <option>Elérhető</option>
              <option>Rendelésre</option>
              <option>Tiltva</option>
            </select>
          </div>
        </div>

        <div class="sm:col-span-6">
          <label for="product-description" class="block text-sm font-medium text-gray-700">
            Termékleírás
          </label>
          <div class="mt-1">
            <textarea id="product-description" name="product-description" rows="5" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
          </div>
        </div>

        <div class="sm:col-span-6">
          <label for="product-attributes" class="block text-sm font-medium text-gray-700">
            Tulajdonságok
          </label>
          <div class="mt-1">
            <textarea id="product-attributes" name="product-attributes" rows="5" class="block w-full border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
          </div>
        </div>

      </div>
    </div>
    <div class="pt-5">
      <div class="flex justify-between">
        <div>
          <a href="/admin-product-index" type="button" class="text-red-600 hover:underline">
            Termék törlése
          </a>
        </div>
        <div class="flex justify-end">
          <a href="/admin-product-index" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Mégsem
          </a>
          <a href="/admin-product-index" type="button" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Mentés
          </a>
        </div>
      </div>
    </div>
  </form>
</div>
