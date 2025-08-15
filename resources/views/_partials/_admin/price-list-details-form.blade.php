<div class="w-full px-4 mx-auto sm:px-6 md:px-8">
  <form action="#" method="POST">
    <div class="shadow sm:rounded-md sm:overflow-hidden">
      <div class="px-4 py-5 space-y-6 bg-white sm:p-6">

        <div class="sm:col-span-4">
          <label for="username" class="block text-sm font-medium text-gray-700">
            Megnevezés
          </label>
          <div class="flex mt-1 rounded-md shadow-sm">
            <input type="text" name="username" id="username" autocomplete="username" class="flex-1 block w-full min-w-0 border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
          </div>
        </div>
        <div class="sm:col-span-6">
          <!-- This example requires Tailwind CSS v2.0+ -->
          <fieldset>
            <legend class="block text-sm font-medium text-gray-700">Válassz egy színt</legend>
            <div class="flex items-center mt-4 space-x-3">
              <!--
                Active and Checked: "ring ring-offset-1"
                Not Active and Checked: "ring-2"
              -->
              <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-pink-500">
                <input type="radio" name="color-choice" value="Pink" class="sr-only" aria-labelledby="color-choice-0-label">
                <p id="color-choice-0-label" class="sr-only">Pink</p>
                <span aria-hidden="true" class="w-8 h-8 bg-pink-500 border border-black rounded-full border-opacity-10"></span>
              </label>

              <!--
                Active and Checked: "ring ring-offset-1"
                Not Active and Checked: "ring-2"
              -->
              <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-purple-500">
                <input type="radio" name="color-choice" value="Purple" class="sr-only" aria-labelledby="color-choice-1-label">
                <p id="color-choice-1-label" class="sr-only">Purple</p>
                <span aria-hidden="true" class="w-8 h-8 bg-purple-500 border border-black rounded-full border-opacity-10"></span>
              </label>

              <!--
                Active and Checked: "ring ring-offset-1"
                Not Active and Checked: "ring-2"
              -->
              <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-blue-500">
                <input type="radio" name="color-choice" value="Blue" class="sr-only" aria-labelledby="color-choice-2-label">
                <p id="color-choice-2-label" class="sr-only">Blue</p>
                <span aria-hidden="true" class="w-8 h-8 bg-blue-500 border border-black rounded-full border-opacity-10"></span>
              </label>

              <!--
                Active and Checked: "ring ring-offset-1"
                Not Active and Checked: "ring-2"
              -->
              <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-green-500">
                <input type="radio" name="color-choice" value="Green" class="sr-only" aria-labelledby="color-choice-3-label">
                <p id="color-choice-3-label" class="sr-only">Green</p>
                <span aria-hidden="true" class="w-8 h-8 bg-green-500 border border-black rounded-full border-opacity-10"></span>
              </label>

              <!--
                Active and Checked: "ring ring-offset-1"
                Not Active and Checked: "ring-2"
              -->
              <label class="-m-0.5 relative p-0.5 rounded-full flex items-center justify-center cursor-pointer focus:outline-none ring-yellow-500">
                <input type="radio" name="color-choice" value="Yellow" class="sr-only" aria-labelledby="color-choice-4-label">
                <p id="color-choice-4-label" class="sr-only">Yellow</p>
                <span aria-hidden="true" class="w-8 h-8 bg-yellow-500 border border-black rounded-full border-opacity-10"></span>
              </label>
            </div>
          </fieldset>
        </div>

      </div>
    </div>

    @include('_partials._admin.product-list-table-modified')
  </form>
</div>
