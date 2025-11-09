<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @extends('layouts/head')
    <title>@yield('title', 'Title')</title>
    @yield('style')
</head>

<body class="bg-white dark:bg-gray-900">
    <header class="absolute inset-x-0 top-0 z-50">
        <nav aria-label="Global" class="flex items-center justify-between p-6 lg:px-8">
            <div class="flex lg:flex-1">
                <a href="/" class="-m-1.5 p-1.5">
                    <span class="sr-only">App Pegawai</span>
                    <img src="{{ asset('img/sandwich-icon.png') }}" alt="" class="h-8 w-auto" />
                </a>
            </div>
            <div class="flex lg:hidden">
                <button type="button" command="show-modal" commandfor="mobile-menu"
                    class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-200">
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="hidden lg:flex lg:gap-x-12">
                {{-- Mengirim ke komponen navLink dengan attribute, onPage (variabel sendiri), dan slot (inside element) --}}
                <x-nav-link href="{{ url('/') }}" :onPage="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="{{ url('/employees') }}" :onPage="request()->is('employees')">Employee List</x-nav-link>
                <x-nav-link href="{{ url('/departments') }}" :onPage="request()->is('departments')">Departments</x-nav-link>
                <x-nav-link href="{{ url('/positions') }}" :onPage="request()->is('positions')">Positions</x-nav-link>
                <x-nav-link href="{{ url('/salaries') }}" :onPage="request()->is('salaries')">Salaries</x-nav-link>
                <x-nav-link href="{{ url('/attendance') }}" :onPage="request()->is('attendance')">Attendance</x-nav-link>
                <x-nav-link href="{{ url('/sandwich') }}" :onPage="request()->is('sandwich')">Sandwich</x-nav-link>
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                @if (request()->is('departments*'))
                    <x-nav-link href="{{ url('/departments/create') }}" :onPage="request()->is('departments/create')">Create Department <span aria-hidden="true">&rarr;</span></x-nav-link>
                @elseif (request()->is('positions*'))
                    <x-nav-link href="{{ url('/positions/create') }}" :onPage="request()->is('positions/create')">Create Position <span aria-hidden="true">&rarr;</span></x-nav-link>
                @elseif (request()->is('salaries*'))
                    <x-nav-link href="{{ url('/salaries/create') }}" :onPage="request()->is('salaries/create')">Create Salaries <span aria-hidden="true">&rarr;</span></x-nav-link>
                @elseif (request()->is('attendance*'))
                    <x-nav-link href="{{ url('/attendance/create') }}" :onPage="request()->is('attendance/create')">Create Attendance <span aria-hidden="true">&rarr;</span></x-nav-link>
                @else
                    <x-nav-link href="{{ url('/employees/create') }}" :onPage="request()->is('employees/create')">Create Employee <span aria-hidden="true">&rarr;</span></x-nav-link>
                @endif
            </div>
        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
                        <div class="flex items-center justify-between">
                            <a href="{{ url('/') }}" class="-m-1.5 p-1.5">
                                <span class="sr-only">App Pegawai</span>
                                <img src="{{ asset('img/sandwich-icon.png') }}" alt="" class="h-8 w-auto" />
                            </a>
                            <button type="button" command="close" commandfor="mobile-menu" class="-m-2.5 rounded-md p-2.5 text-gray-200">
                                <span class="sr-only">Close menu</span>
                                <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6"><path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" /> </svg>
                            </button>
                        </div>
                        <div class="mt-6 flow-root">
                            <div class="-my-6 divide-y divide-white/10">
                                <div class="space-y-2 py-6 flex flex-col items-baseline gap-4">
                                    <x-nav-link href="{{ url('/') }}" :onPage="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link href="{{ url('/employees') }}" :onPage="request()->is('employees')">Employee List</x-nav-link>
                                    <x-nav-link href="{{ url('/departments') }}" :onPage="request()->is('departments')">Departments</x-nav-link>
                                    <x-nav-link href="{{ url('/positions') }}" :onPage="request()->is('positions')">Positions</x-nav-link>
                                    <x-nav-link href="{{ url('/salaries') }}" :onPage="request()->is('salaries')">Salaries</x-nav-link>
                                    <x-nav-link href="{{ url('/attendance') }}" :onPage="request()->is('attendance')">Attendance</x-nav-link>
                                    <x-nav-link href="{{ url('/sandwich') }}" :onPage="request()->is('sandwich')">Sandwich</x-nav-link>
                                </div>
                                <div class="py-6">
                                    @if (request()->is('departments*'))
                                        <x-nav-link href="{{ url('/departments/create') }}" :onPage="request()->is('departments/create')">Create Department <span aria-hidden="true">&rarr;</span></x-nav-link>
                                    @elseif (request()->is('positions*'))
                                        <x-nav-link href="{{ url('/positions/create') }}" :onPage="request()->is('positions/create')">Create Position <span aria-hidden="true">&rarr;</span></x-nav-link>
                                    @elseif (request()->is('salaries*'))
                                        <x-nav-link href="{{ url('/salaries/create') }}" :onPage="request()->is('salaries/create')">Create Salaries <span aria-hidden="true">&rarr;</span></x-nav-link>
                                    @elseif (request()->is('attendance*'))
                                        <x-nav-link href="{{ url('/attendance/create') }}" :onPage="request()->is('attendance/create')">Create Attendance <span aria-hidden="true">&rarr;</span></x-nav-link>
                                    @else
                                        <x-nav-link href="{{ url('/employees/create') }}" :onPage="request()->is('employees/create')">Create Employee <span aria-hidden="true">&rarr;</span></x-nav-link>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </el-dialog-panel>
                </div>
            </dialog>
        </el-dialog>
    </header>

    <main>
        @yield('content')
    </main>

    {{-- <div id="overlay-loading" class="transition duration-300 ease-in-out fixed top-0 left-0 flex justify-center items-center w-full h-full bg-white dark:bg-gray-900 z-50" style="opacity: 1;">
        <x-background-gradient></x-background-gradient>
        <img class="m-auto w-[70%] md:w-[80%] lg:w-[10%] transition duration-300 ease-in-out animate-pulse" src="{{ asset('img/calstone-light-o.gif') }}" alt="Loading Icon">
    </div> --}}

    {{-- <script>
        document.addEventListener('DOMContentLoaded', function() {
            // document.body.style.visibility = 'visible';
            // document.body.style.opacity = 1;

            const overlay = document.getElementById('overlay-loading');

            overlay.style.opacity = '1';
            overlay.style.transition = 'opacity 600ms ease-in-out';

            requestAnimationFrame(() => {
                overlay.style.opacity = '0';
            });

            const removeOverlay = () => {
                if (overlay && overlay.style) {
                    overlay.style.display = 'none';
                }
                overlay.removeEventListener('transitionend', removeOverlay);
            };

            overlay.addEventListener('transitionend', removeOverlay);
            setTimeout(removeOverlay, 800);
        });
    </script> --}}
</body>
</html>
