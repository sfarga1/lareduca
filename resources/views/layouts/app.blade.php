<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- Styles -->
        @livewireStyles
    </head>
    <body class="font-sans antialiased">
        <x-banner />

        <div class="flex min-h-screen">
            <!-- Sidebar Navigation -->
            <div class="bg-white w-1/4 p-4">
                @livewire('navigation-menu')
                <!-- Navigation Links -->
                <div class="bg-white flex flex-col pt-6">
                    {{-- <x-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link> --}}
                    <!-- Courses -->
                    <x-nav-link href="{{ route('courses') }}" :active="request()->routeIs('courses')">
                        {{ __('Courses') }}
                    </x-nav-link>
                    <!-- Assignments -->
                    <x-nav-link href="{{ route('assignments') }}" :active="request()->routeIs('assignments')">
                        {{ __('Assignments') }}
                    </x-nav-link>
                    <!-- Users -->
                    @if(Auth::user()->role === 'admin')
                    <x-nav-link href="{{ route('users') }}" :active="request()->routeIs('users')">
                        {{ __('Users') }}
                    </x-nav-link>
                    @endif
                    <!-- Assignment Submissions -->
                    @if(Auth::user()->role === 'admin' || Auth::user()->role === 'teacher')
                    <x-nav-link href="{{ route('assignment.submissions', ['assignmentId' => 1]) }}" :active="request()->routeIs('assignment.submissions') ">
                        {{ __('Assignment Submissions') }}
                    </x-nav-link>
                    
                    <x-nav-link href="{{ route('enrollments') }}" :active="request()->routeIs('enrollments') ">
                        {{ __('Course Enrollments') }}
                    </x-nav-link>
                    @elseif(Auth::user()->role === 'student')
                    <x-nav-link href="{{ route('enrollments') }}" :active="request()->routeIs('enrollments') ">
                        {{ __('Course Enrollments') }}
                    </x-nav-link>
                    <x-nav-link href="{{ route('games') }}" :active="request()->routeIs('games') ">
                        {{ __('Games') }}
                    </x-nav-link>
                    @endif
                </div>
            </div>

            <!-- Main Content -->
            <div class="flex-1 p-4">
                <!-- Page Heading -->
                @if (isset($header))
                    <header class="bg-white shadow">
                        <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                            {{ $header }}
                        </div>
                    </header>
                @endif

                <!-- Page Content -->
                <main>
                    {{ $slot }}
                </main>
            </div>
        </div>

        @stack('modals')

        @livewireScripts
    </body>
</html>
