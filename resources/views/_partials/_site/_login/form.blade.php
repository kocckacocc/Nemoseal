<div class="relative w-full px-4 py-24 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-8 py-12 space-y-10 bg-neutral xl:px-10 bg-opacity-95">
      <form action="" method="POST">

        @csrf

        @if(isset($data['error']['login']))

          <div class="bg-white text-red-600 text-sm font-semibold p-4 mb-4">
            {{ $data['error']['login'] }}
          </div>

        @endif

        <div class="mb-6">
          <label for="email" class="form__label">
            Email cím
          </label>
          <div class="mt-1">
            <input
              id="email"
              name="email"
              type="email"
              autocomplete="email"
              required class="form__control"
              value="{{ $data['error']['email'] ?? '' }}"
            >
          </div>
        </div>

        <div class="mb-6">
          <label for="password" class="form__label">
            Jelszó
          </label>
          <div class="mt-1">
            <input id="password" name="password" type="password" autocomplete="current-password" required class="form__control">
          </div>
        </div>

        <div class="flex items-center justify-between mb-6">
          <div class="flex items-center">
            <input class="w-4 h-4 border-transparent rounded text-secondary focus:ring-2 focus:ring-secondary" id="remember-me" name="remember-me" type="checkbox">
            <label for="remember-me" class="block ml-2 text-sm text-white">
              Maradjak bejelentkezve
            </label>
          </div>

          <div class="text-sm">
            <a href="{{ url('nova/password/reset') }}" class="font-medium text-secondary hover:text-secondary-light">
              Elfelejtette jelszavát?
            </a>
          </div>
        </div>

        <div>
          <button type="submit" class="btn" name="do_login" value="true">
            Bejelentkezés
          </button>
        </div>
      </form>

    </div>
  </div>
</div>
