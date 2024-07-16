<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ $title ?? 'Page title' }}</title>

        @vite(['resources/css/app.css', 'resources/css/solid/style.css'])

        <!-- Styles Injection -->
        @stack('styles')
        @livewireStyles
    </head>

    <body>
        
        @yield('content', $slot ?? '')

        @livewire('livewire-ui-modal')
        @livewireScripts
        <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <!-- Scripts Injection -->
        @stack('scripts')

    </body>
</html>
