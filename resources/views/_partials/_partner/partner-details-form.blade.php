<div class="w-full px-4 mx-auto sm:px-6 md:px-8">
  <form class="space-y-6">

    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
        <div class="space-y-8 divide-y divide-neutral sm:divide-opacity-30 sm:space-y-5">
          <div>
            <div>
              <h3 class="text-lg font-medium leading-6 text-neutral">
                Profil beállítások
              </h3>
            </div>

            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">

              <div class="sm:border-opacity-30 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-center sm:border-t sm:border-neutral sm:pt-5">
                <label for="photo" class="block text-sm font-medium text-neutral">
                  Profilkép
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <div class="flex items-center">
                    <span class="w-12 h-12 overflow-hidden bg-gray-100 rounded-full">
                      <svg class="w-full h-full text-gray-300" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 20.993V24H0v-2.996A14.977 14.977 0 0112.004 15c4.904 0 9.26 2.354 11.996 5.993zM16.002 8.999a4 4 0 11-8 0 4 4 0 018 0z" />
                      </svg>
                    </span>
                    <button type="button" class="px-3 py-2 ml-5 text-sm font-medium leading-4 bg-white border rounded-md shadow-sm border-neutral border-opacity-30 text-neutral hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-secondary">
                      Szerkesztés
                    </button>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
        <div class="space-y-8 divide-y divide-neutral sm:divide-opacity-30 sm:space-y-5">
          <div>
            <div>
              <h3 class="text-lg font-medium leading-6 text-neutral">
                Személyes adatok
              </h3>
            </div>
            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">
              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="company-name" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Cégnév
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="company-name" id="company-name" autocomplete="company-name" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="tax-number" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Adószám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="tax-number" id="tax-number" autocomplete="tax-number" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="last-name" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Kapcsolattartó vezetékneve
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="last-name" id="last-name" autocomplete="family-name" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="first-name" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Kapcsolattartó keresztneve
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="first-name" id="first-name" autocomplete="given-name" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="phone-number" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Telefonszám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="phone-number" id="phone-number" autocomplete="phone-number" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="email" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Email cím
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="email" name="email" type="email" autocomplete="email" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
        <div class="space-y-8 divide-y divide-neutral sm:divide-opacity-30 sm:space-y-5">
          <div>
            <div>
              <h3 class="text-lg font-medium leading-6 text-neutral">
                Szállítási cím
              </h3>
            </div>
            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="zip-code" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Irányítószám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="zip-code" name="zip-code" type="text" autocomplete="zip-code" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="city" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Város
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="city" name="city" type="text" autocomplete="city" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="street" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Utca
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="street" name="street" type="text" autocomplete="street" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="house-number" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Házszám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="house-number" name="house-number" type="text" autocomplete="house-number" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="business-type" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Üzlet jellege
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="business-type" name="business-type" type="text" autocomplete="business-type" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="opening-hours" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Nyitvatartás
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="opening-hours" name="opening-hours" type="text" autocomplete="opening-hours" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">
        <div class="space-y-8 divide-y divide-neutral sm:divide-opacity-30 sm:space-y-5">
          <div>
            <div>
              <h3 class="text-lg font-medium leading-6 text-neutral">
                Számlázási cím
              </h3>
            </div>
            <div class="mt-6 space-y-6 sm:mt-5 sm:space-y-5">

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="zip-code" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Irányítószám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="zip-code" name="zip-code" type="text" autocomplete="zip-code" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="city" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Város
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="city" name="city" type="text" autocomplete="city" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="street" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Utca
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="street" name="street" type="text" autocomplete="street" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="house-number" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Házszám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="house-number" name="house-number" type="text" autocomplete="house-number" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="business-type" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Üzlet jellege
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="business-type" name="business-type" type="text" autocomplete="business-type" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="border-opacity-10 sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-opacity-30 sm:border-neutral sm:pt-5">
                <label for="opening-hours" class="block text-sm font-medium text-neutral sm:mt-px sm:pt-2">
                  Nyitvatartás
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="opening-hours" name="opening-hours" type="text" autocomplete="opening-hours" class="block w-full max-w-lg rounded-md shadow-sm border-neutral border-opacity-30 focus:ring-2 focus:ring-secondary focus:border-secondary sm:max-w-xs sm:text-sm">
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div>
      <div class="flex justify-between">
        <div>
          <a href="/admin-partner-index" type="button" class="text-red-600 hover:underline">
            Fiók törlése
          </a>
        </div>
        <div class="flex justify-end space-x-4">
          <a href="/admin-partner-index" type="button" class="bg-transparent btn">
            Mégsem
          </a>
          <a href="/admin-partner-index" type="button" class="btn bg-primary hover:bg-primary-light">
            Mentés
          </a>
        </div>
      </div>
    </div>
  </form>
</div>
