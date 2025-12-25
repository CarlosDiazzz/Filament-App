<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'Laravel') }} - Welcome</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="antialiased font-sans bg-gray-50 dark:bg-gray-900 text-gray-800 dark:text-gray-200">
    <div class="flex flex-col min-h-screen">
        <!-- Header -->
        <header class="py-6">
            <div class="container mx-auto px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <h1 class="text-2xl font-bold text-teal-600 dark:text-teal-400">
                        {{ config('app.name', 'Filament App') }}</h1>
                    @if (Route::has('login'))
                        <nav class="">
                            @auth
                                <a href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-gray-700 dark:text-gray-300 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-white/70 focus:outline-none focus-visible:ring-teal-500">
                                    Dashboard
                                </a>
                            @else
                                <a href="{{ url('dashboard/login') }}"
                                    class="rounded-md px-3 py-2 text-gray-700 dark:text-gray-300 ring-1 ring-transparent transition hover:text-black/70 dark:hover:text-white/70 focus:outline-none focus-visible:ring-teal-500">
                                    Log in
                                </a>
                            @endauth
                        </nav>
                    @endif
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-grow">
            <!-- Hero Section -->
            <section class="bg-white dark:bg-gray-800/50 py-20">
                <div class="container mx-auto px-6 lg:px-8 text-center">
                    <h2
                        class="text-4xl font-extrabold tracking-tight text-gray-900 dark:text-white sm:text-5xl md:text-6xl">
                        Modern Application, Powerful Results
                    </h2>
                    <p
                        class="mt-3 max-w-md mx-auto text-lg text-gray-500 dark:text-gray-400 sm:text-xl md:mt-5 md:max-w-3xl">
                        Leverage the power of Filament to build amazing applications. This is your new modern and
                        beautiful landing page.
                    </p>
                    <div class="mt-5 max-w-md mx-auto sm:flex sm:justify-center md:mt-8">
                        <div class="rounded-md shadow">
                            <a href="{{ url('dashboard/login') }}"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-teal-600 hover:bg-teal-700 md:py-4 md:text-lg md:px-10">
                                Get started
                            </a>
                        </div>
                        <div class="mt-3 rounded-md shadow sm:mt-0 sm:ml-3">
                            <a href="#"
                                class="w-full flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-teal-600 bg-white hover:bg-gray-50 md:py-4 md:text-lg md:px-10">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Features Section -->
            <section class="py-20">
                <div class="container mx-auto px-6 lg:px-8">
                    <div class="text-center">
                        <h3 class="text-3xl font-extrabold text-gray-900 dark:text-white">Everything You Need to Succeed
                        </h3>
                        <p class="mt-4 text-lg text-gray-500 dark:text-gray-400">A better way to build applications.</p>
                    </div>

                    <div class="mt-10 grid gap-10 md:grid-cols-2 lg:grid-cols-3">
                        <div class="bg-white dark:bg-gray-800/50 overflow-hidden shadow rounded-lg p-6">
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">Feature One</h4>
                            <p class="mt-2 text-base text-gray-500 dark:text-gray-400">
                                Describe a key feature of your application. Focus on the benefits for the user.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800/50 overflow-hidden shadow rounded-lg p-6">
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">Feature Two</h4>
                            <p class="mt-2 text-base text-gray-500 dark:text-gray-400">
                                Describe another great feature. Keep it concise and to the point.
                            </p>
                        </div>
                        <div class="bg-white dark:bg-gray-800/50 overflow-hidden shadow rounded-lg p-6">
                            <h4 class="text-xl font-bold text-gray-900 dark:text-white">Feature Three</h4>
                            <p class="mt-2 text-base text-gray-500 dark:text-gray-400">
                                Highlight a unique selling proposition or a core functionality that stands out.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <!-- Footer -->
        <footer class="bg-white dark:bg-gray-800/50">
            <div class="container mx-auto py-8 px-6 lg:px-8">
                <div class="flex justify-between items-center">
                    <p class="text-gray-500 dark:text-gray-400">
                        &copy; {{ date('Y') }} {{ config('app.name', 'Filament App') }}. All rights reserved.
                    </p>
                    <p class="text-gray-500 dark:text-gray-400">
                        Built with <a href="https://laravel.com"
                            class="text-teal-600 dark:text-teal-400 hover:underline">Laravel</a> & <a
                            href="https://filamentphp.com"
                            class="text-teal-600 dark:text-teal-400 hover:underline">Filament</a>.
                    </p>
                </div>
            </div>
        </footer>
    </div>
</body>

</html>
