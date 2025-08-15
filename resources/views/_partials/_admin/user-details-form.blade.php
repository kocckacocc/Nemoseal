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
                <label for="position" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Beosztás
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input type="text" name="position" id="position" autocomplete="position" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:max-w-xs sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="about" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Bemutatkozás
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <textarea type="text" name="about" id="about" autocomplete="about" rows="3" class="block w-full max-w-lg border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"></textarea>
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="linkedin" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  LinkedIn
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="linkedin" name="linkedin" type="text" autocomplete="linkedin" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>
              </div>

              <div class="sm:grid sm:grid-cols-3 sm:gap-4 sm:items-start sm:border-t sm:border-gray-200 sm:pt-5">
                <label for="facebook" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Facebook
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="facebook" name="facebook" type="text" autocomplete="facebook" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
                <label for="phone" class="block text-sm font-medium text-gray-700 sm:mt-px sm:pt-2">
                  Telefonszám
                </label>
                <div class="mt-1 sm:mt-0 sm:col-span-2">
                  <input id="phone" name="phone" type="tel" autocomplete="phone" class="block w-full max-w-lg border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
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
          <a href="/admin-user-index" type="button" class="text-red-600 hover:underline">
            Fiók törlése
          </a>
        </div>
        <div class="flex justify-end">
          <a href="/admin-user-index" type="button" class="px-4 py-2 text-sm font-medium text-gray-700 bg-white border border-gray-300 rounded-md shadow-sm hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Mégsem
          </a>
          <a href="/admin-user-index" type="button" class="inline-flex justify-center px-4 py-2 ml-3 text-sm font-medium text-white bg-indigo-600 border border-transparent rounded-md shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Mentés
          </a>
        </div>
      </div>
    </div>
  </form>
</div>
