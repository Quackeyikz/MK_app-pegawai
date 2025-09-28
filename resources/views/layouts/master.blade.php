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
                <x-nav-link href="/" :onPage="request()->is('/')">Home</x-nav-link>
                <x-nav-link href="/employees" :onPage="request()->is('employees')">Employee List</x-nav-link>
                <x-nav-link href="/sandwich" :onPage="request()->is('sandwich')">Sandwich</x-nav-link>
                {{-- <a href="/" class="{{ request()->is('/') ? 'text-indigo-600 dark:text-indigo-400 underline underline-offset-4' : 'text-gray-700 dark:text-white' }} text-sm/6 font-semibold">Home</a>
                <a href="/employees" class="text-sm/6 font-semibold {{ request()->is('employees') ? 'text-indigo-600 dark:text-indigo-400 underline underline-offset-4' : 'text-gray-700 dark:text-white' }}">Employee List</a>
                <a href="/sandwich" class="text-sm/6 font-semibold {{ request()->is('sandwich') ? 'text-indigo-600 dark:text-indigo-400 underline underline-offset-4' : 'text-gray-700 dark:text-white' }}">Sandwich</a> --}}
            </div>
            <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                <x-nav-link href="/employees/create" :onPage="request()->is('employees/create')">
                    Create Data <span aria-hidden="true">&rarr;</span>
                </x-nav-link>
                {{-- <a href="/employees/create" class="text-sm/6 font-semibold {{ request()->is('employees/create') ? 'invisible' : 'text-gray-700 dark:text-white' }}">Create Data 
                    <span aria-hidden="true">&rarr;</span>
                </a> --}}
            </div>
        </nav>
        <el-dialog>
            <dialog id="mobile-menu" class="backdrop:bg-transparent lg:hidden">
                <div tabindex="0" class="fixed inset-0 focus:outline-none">
                    <el-dialog-panel class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-gray-900 p-6 sm:max-w-sm sm:ring-1 sm:ring-gray-100/10">
                        <div class="flex items-center justify-between">
                            <a href="/" class="-m-1.5 p-1.5">
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
                                <div class="space-y-2 py-6">
                                    <x-nav-link href="/" :onPage="request()->is('/')">Home</x-nav-link>
                                    <x-nav-link href="/employees" :onPage="request()->is('employees')">Employee List</x-nav-link>
                                    <x-nav-link href="/sandwich" :onPage="request()->is('sandwich')">Sandwich</x-nav-link>
                                    {{-- <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-700 dark:text-white hover:bg-white/5">Home</a>
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-700 dark:text-white hover:bg-white/5">Employee List</a>
                                    <a href="#" class="-mx-3 block rounded-lg px-3 py-2 text-base/7 font-semibold text-gray-700 dark:text-white hover:bg-white/5">Sandwich</a> --}}
                                </div>
                                <div class="py-6">
                                    <x-nav-link href="/employees/create" :onPage="request()->is('employees/create')">
                                        Create Data <span aria-hidden="true">&rarr;</span>
                                    </x-nav-link>
                                    {{-- <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-700 dark:text-white hover:bg-white/5">Create Data </a> --}}
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
</body>
</html>
