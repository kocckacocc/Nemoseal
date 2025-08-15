<div class="relative w-full px-4 py-24 mx-auto max-w-screen-2xl sm:px-6 lg:px-8">
  <div class="sm:mx-auto sm:w-full sm:max-w-md">
    <div class="px-8 py-12 space-y-10 bg-neutral xl:px-10 bg-opacity-95 hover:bg-opacity-100 hover:shadow-xl">

      @if(isset($data['sucessfull_registration']))

        <h3 class="text-3xl font-semibold text-white uppercase">Sikeres regisztráció!</h3>
        <p class="mt-10 text-base leading-loose text-white xl:leading-loose xl:text-lg font-body">
          A regisztrációt követően az adminisztrátorok jóváhagyása szükséges, ennek megtörténtéről e-mail értesítést küldünk Önnek.
        </p>

      @else

        <form class="form_registration" action="/registration" method="POST">

          @csrf

          <fieldset class="mb-6 space-y-6">
            <legend class="form__legend">Személyes adatok</legend>

            <div>
              <label for="company-name" class="form__label">
                Cégnév
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['company-name'] ?? '' }}" class="form__control" id="company-name" name="company-name" type="text" autocomplete="company-name" required>
              </div>
            </div>

            <div>
              <label for="tax-number" class="form__label">
                Adószám
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['tax-number'] ?? '' }}" class="form__control" id="tax-number" name="tax-number" type="text" autocomplete="tax-number" required>
              </div>
            </div>

            <div>
              <label for="last-name" class="form__label">
                Kapcsolattartó vezetékneve
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['last-name'] ?? '' }}" class="form__control" id="last-name" name="last-name" type="text" autocomplete="family-name" required>
              </div>
            </div>

            <div>
              <label for="first-name" class="form__label">
                Kapcsolattartó keresztneve
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['first-name'] ?? '' }}" class="form__control" id="first-name" name="first-name" type="text" autocomplete="given-name" required>
              </div>
            </div>

            <div>
              <label for="phone-number" class="form__label">
                Telefonszám
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['phone-number'] ?? '' }}" class="form__control" id="phone-number" name="phone-number" type="phone" autocomplete="phone-number" required>
              </div>
            </div>
          </fieldset>

          <fieldset class="mb-6 space-y-6">
            <legend class="form__legend">Cím adatok</legend>

            <div>
              <label for="zip" class="form__label">
                Irányítószám
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['zip'] ?? '' }}" class="form__control" id="zip" name="zip" type="text" autocomplete="given-name">
              </div>
            </div>

            <div>
              <label for="city" class="form__label">
                Város
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['city'] ?? '' }}" class="form__control" id="city" name="city" type="text" autocomplete="given-name">
              </div>
            </div>

            <div>
              <label for="address" class="form__label">
                Utca, házszám
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['address'] ?? '' }}" class="form__control" id="address" name="address" type="text" autocomplete="given-name">
              </div>
            </div>

            <div>
              <label for="business_type" class="form__label">
                Üzlet jellege
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['business_type'] ?? '' }}" class="form__control" id="business_type" name="business_type" type="text" autocomplete="given-name">
              </div>
            </div>

            <div>
              <label for="address" class="form__label">
                Nyitvatartás
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['open_times'] ?? '' }}" class="form__control" id="open_times" name="open_times" type="text" autocomplete="given-name">
              </div>
            </div>

          </fieldset>

          <fieldset class="mb-6 space-y-6">
            <legend class="form__legend">Fiók adatok</legend>

            <div>
              <label for="username" class="form__label">
                Felhasználónév
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['username'] ?? '' }}" class="form__control" id="username" name="username" type="text" required>
              </div>
            </div>

            @if(isset($data['error']['registration']))

              <div class="p-4 my-2 text-sm font-semibold text-red-600 bg-white">
                {{ $data['error']['registration'] }}
              </div>

            @endif

            <div>
              <label for="email-address" class="form__label">
                Email cím
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['email-address'] ?? '' }}" class="form__control" id="email-address" name="email-address" type="email" autocomplete="email-address" required>
              </div>
            </div>

            <div class="hidden p-4 my-4 text-sm font-semibold text-red-600 bg-white // password_error">
              Nem egyezik a két jelszó mező!
            </div>

            <div>
              <label for="password" class="form__label">
                Jelszó
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['password'] ?? '' }}" class="form__control" id="password" name="password" type="password" autocomplete="current-password" required>
              </div>
            </div>

            <div>
              <label for="password-repeat" class="form__label">
                Jelszó mégegyszer
              </label>
              <div class="mt-1">
                <input value="{{ $data['request']['password-repeat'] ?? '' }}" class="form__control" id="password-repeat" name="password-repeat" type="password" autocomplete="current-password" required>
              </div>
            </div>
          </fieldset>

          <fieldset class="space-y-6">

            <div class="hidden p-4 my-4 text-sm font-semibold text-red-600 bg-white // aszf_error">
              El kell fogadnia az ÁSZF-et!
            </div>

            <div class="flex items-center">
              <div class="flex items-center">
                <input id="chk_aszf" name="chk_aszf" type="checkbox" class="w-4 h-4 border-transparent rounded text-secondary focus:ring-2 focus:ring-secondary">
                <label for="chk_aszf" class="block ml-2 text-sm text-white">
                  A regisztrációval elfogadom az
                  <a class="font-medium text-secondary hover:text-secondary-light" href="#">ÁSZF</a>-et
                </label>
              </div>
            </div>

            <div class="flex items-center">
              <div class="flex items-center">
                <input id="remember-me" name="remember-me" type="checkbox" class="w-4 h-4 border-transparent rounded text-secondary focus:ring-2 focus:ring-secondary">
                <label for="remember-me" class="block ml-2 text-sm text-white">
                  Maradjak bejelentkezve
                </label>
              </div>
            </div>

            <div>
              <button type="submit" class="btn" name="do_registration" value="true">
                Regisztráció
              </button>
            </div>
          </fieldset>
        </form>

      @endif

    </div>
  </div>
</div>

<script>
	$(function () {

		$('#chk_aszf')
      .off('click.ns, change.ns')
			.on('click.ns, change.ns', function () {

				console.log($('#chk_aszf').is(':checked'));

				if (!$('#chk_aszf').is(':checked')) {
					$('.aszf_error').removeClass('hidden');
				} else {
					$('.aszf_error').addClass('hidden');
				}
      });

		function check_passord_error() {

			console.log([
				$('#password').val(),
				$('#password-repeat').val()
      ])
			
			if ($('#password').val() != $('#password-repeat').val()) {
				$('.password_error').removeClass('hidden');
			} else {
				$('.password_error').addClass('hidden');
			}
    }

		check_passord_error();

		$('#password, #password-repeat')
			.off('keyup.ns, change.ns')
			.on('keyup.ns, change.ns', function () {
				if ($('#password').val() != $('#password-repeat').val()) {
					$('.password_error').removeClass('hidden');
				} else {
					$('.password_error').addClass('hidden');
				}
			});

		$('.form_registration').submit(function (e) {

			var
				error = false;

			if (!$('#chk_aszf').is(':checked')) {
				$('.aszf_error').removeClass('hidden');
				error = true;
			} else {
				$('.aszf_error').addClass('hidden');
				error = false;
			}

			if ($('#password').val() != $('#password-repeat').val()) {
				$('.password_error').removeClass('hidden');
				error = true;
			} else {
				$('.password_error').addClass('hidden');
				if (!error)
					error = false;
			}

			if (error)
				e.preventDefault();

		});

	})
</script>
