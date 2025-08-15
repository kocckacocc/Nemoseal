<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full font-sans antialiased">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ \Laravel\Nova\Nova::name() }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('app.css', 'vendor/nova') }}">

    <!-- Alpine.js -->
    <script src="//unpkg.com/alpinejs" defer></script>

    <!-- Tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
      tailwind.config = {
        theme: {
          fontFamily: {
            'display': ['Montserrat', 'sans-serif'],
            'body': ['Montserrat', 'sans-serif'],
          },
          extend: {
            colors: {
              neutral: {
                  light: '#0B0E11',
                  DEFAULT: '#0B0E11',
                  dark: '#0B0E11',
              },
              primary: {
                  light: '#86DBBE',
                  DEFAULT: '#58A088',
                  dark: '#245C49',
              },
              secondary: {
                  light: '#F2B158',
                  DEFAULT: '#BF8746',
                  dark: '#5C3824',
              },
            },
            boxShadow: {
              '3xl': '-50px -50px 100px rgba(11, 14, 17, 1)',
            },
            dropShadow: {
              '3xl': '0 60px 60px rgba(11, 14, 17, 0.20)',
            },
            scale: {
              '60': '.60',
              '129': '1.29',
            },
            width: {
              '128': '32rem',
              '280': '70rem',
            },
            height: {
              '128': '32rem',
              '640': '160rem',
            },
            skew: {
              '45': '45deg',
              '-45': '-45deg',
            },
          }
        },
        important: true,
      }
    </script>
    <style type="text/tailwindcss">
  
      ::selection {
        background: #58a088;
        color: #0b0e11;
      }
      ::-moz-selection {
        background: #58a088;
        color: #0b0e11;
      }
  
      @layer components {
        .page-header {
          @apply relative z-0 bg-neutral;
        }
        .page-header__title {
          @apply max-w-5xl text-2xl font-extrabold tracking-tight text-white uppercase xl:leading-tight md:text-4xl xl:text-5xl font-display;
        }
        .background__shape {
          @apply absolute inset-x-0 inset-y-0 z-0 mx-auto transform w-280 h-640 opacity-10 shadow-3xl bg-gradient-to-l from-neutral skew-x-45;
        }
        .btn {
          @apply relative inline-flex items-center px-4 py-2 text-sm font-bold uppercase border border-transparent rounded-md shadow-sm text-neutral bg-secondary hover:bg-secondary-light focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-white;
        }
        .btn-link {
          @apply inline-flex items-center space-x-6 font-medium text-secondary hover:text-secondary-light font-display group;
        }
        .form__legend {
          @apply text-lg font-medium leading-6 text-white;
        }
        .form__label {
          @apply block text-sm font-medium text-white;
        }
        .form__control {
          @apply block w-full px-3 py-2 border border-transparent rounded-md shadow-sm appearance-none placeholder-neutral-light focus:outline-none focus:ring-2 focus:ring-secondary focus:border-secondary sm:text-sm;
        }
      }
    </style>

    <!-- Custom Meta Data -->
    @include('nova::partials.meta')

    <!-- Theme Styles -->
    @foreach(\Laravel\Nova\Nova::themeStyles() as $publicPath)
        <link rel="stylesheet" href="{{ $publicPath }}">
    @endforeach
</head>
<body class="flex flex-col min-h-screen antialiased font-display" x-data="{navOpen: false, scrolledFromTop: false}"
	x-init="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false"
	@scroll.window="window.pageYOffset >= 50 ? scrolledFromTop = true : scrolledFromTop = false">
  <main class="relative flex-1 overflow-hidden">
    @include('nova::partials.background')
    @include('nova::partials._navbar.navbar')
    @include('nova::partials._login.header')
    @yield('content')
  </main>
  @include('nova::partials._login.footer')
</body>
</html>
