<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full font-sans antialiased">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=1280">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>{{ \Laravel\Nova\Nova::name() }}</title>

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Styles -->
  <link rel="stylesheet" href="{{ mix('app.css', 'vendor/nova') }}">

  <!-- Tool Styles -->
  @foreach(\Laravel\Nova\Nova::availableStyles(request()) as $name => $path)
    <link rel="stylesheet" href="/nova-api/styles/{{ $name }}">
  @endforeach

  <!-- Custom Meta Data -->
  @include('nova::partials.meta')

  <!-- Theme Styles -->
  @foreach(\Laravel\Nova\Nova::themeStyles() as $publicPath)
    <link rel="stylesheet" href="{{ $publicPath }}">
  @endforeach
  <link rel="stylesheet" href="/nemoseal/nemoseal-theme/theme.css">
  <style>
    .font-sans {
      font-family: "Montserrat", system-ui, BlinkMacSystemFont, -apple-system, sans-serif
    }
  </style>
</head>
<body class="min-h-full font-medium min-w-site bg-40 text-90">
<div id="nova">
  <div v-cloak class="flex min-h-screen">
    <!-- Sidebar -->
    <div class="flex-none min-h-screen px-6 pt-header w-sidebar bg-grad-sidebar">
      <a href="{{ \Laravel\Nova\Nova::path() }}">
        <div class="absolute flex items-center px-6 text-white pin-t pin-l pin-r bg-logo w-sidebar h-header">
          @include('nova::partials.logo')
        </div>
      </a>

      @foreach (\Laravel\Nova\Nova::availableTools(request()) as $tool)
        {!! $tool->renderNavigation() !!}
      @endforeach
    </div>

    <!-- Content -->
    <div class="content">
      <div class="relative z-20 flex items-center bg-white shadow h-header px-view">
        {{-- <a v-if="@json(\Laravel\Nova\Nova::name() !== null)" href="{{ \Illuminate\Support\Facades\Config::get('nova.url') }}" class="mr-6 font-bold no-underline dim text-90">
          {{ \Laravel\Nova\Nova::name() }}
        </a> --}}

        {{-- @if (count(\Laravel\Nova\Nova::globallySearchableResources(request())) > 0)
          <global-search dusk="global-search-component"></global-search>
        @endif --}}

        <dropdown class="flex items-center flex-none ml-auto mr-4 h-9 justify-self-end dropdown-right">
          @include('nova::partials.user')
        </dropdown>
      </div>

      <div data-testid="content" class="mx-auto px-view py-view">
        @yield('content')

        @include('nova::partials.footer')
      </div>
    </div>
  </div>
</div>

<script>
	window.config = @json(\Laravel\Nova\Nova::jsonVariables(request()));
</script>

<!-- Scripts -->
<script src="{{ mix('manifest.js', 'vendor/nova') }}"></script>
<script src="{{ mix('vendor.js', 'vendor/nova') }}"></script>
<script src="{{ mix('app.js', 'vendor/nova') }}"></script>

<!-- Responsive Scripts -->
<script src="/nemoseal/nemoseal-theme/theme.js"></script>

<!-- Build Nova Instance -->
<script>
	window.Nova = new CreateNova(config)
</script>

<!-- Tool Scripts -->
@foreach (\Laravel\Nova\Nova::availableScripts(request()) as $name => $path)
  @if (\Illuminate\Support\Str::startsWith($path, ['http://', 'https://']))
    <script src="{!! $path !!}"></script>
  @else
    <script src="/nova-api/scripts/{{ $name }}"></script>
  @endif
@endforeach

<!-- Start Nova -->
<script>
	Nova.liftOff()
</script>
</body>
</html>