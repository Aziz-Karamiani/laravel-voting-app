<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans antialiased bg-gray-100">
        <header class="px-4 py-2">
            <div class="flex justify-between items-center">
                <div class="">
                    <a href="#">
                        <img src="{{ asset('images/logo.svg') }}" alt="logo">
                    </a>
                </div>
                <div class="flex items-center">
                    @if (Route::has('login'))
                        <div class="px-6 py-4">
                            @auth
                                <div class="">
                                    <!-- Authentication -->
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                            {{ __('Log Out') }}
                                        </a>
                                    </form>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                                @if (Route::has('register'))
                                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                                @endif
                            @endauth
                        </div>
                    @endif
                    <a href="#">
                        <img class="w-10 h-10" style="border-radius: 50%;" src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp"  alt=""/>
                    </a>
                </div>
            </div>
        </header>
        <div class="container mx-auto flex w-custom">
            <div class="w-70 mr-5 mt-8">
                <div class="bg-white rounded w-100" style="height: 400px;">

                </div>
            </div>
            <div class="w-175">
                <nav class="flex justify-between items-center text-xs">
                    <ul class="flex uppercase font-semibold border-b border-secondary pb-3 space-x-10">
                        <li><a href="#" class="border-b border-danger pb-3" style="border-bottom: 5px solid rgba(58,58,217,0.75);">All Ideas (87)</a></li>
                        <li><a href="#" class="pb-3 text-gray-500">CONSIDERATION (8)</a></li>
                        <li><a href="#" class="pb-3 text-gray-500">IN PROGRESS (3)</a></li>
                    </ul>
                    <ul class="flex uppercase font-semibold border-b border-secondary pb-3 space-x-10">
                        <li><a href="#" class="pb-3 text-gray-500">Implemented (10)</a></li>
                        <li><a href="#" class="pb-3 text-gray-500">Closed (8)</a></li>
                    </ul>
                </nav>
                <div class="mt-8">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </body>
</html>
