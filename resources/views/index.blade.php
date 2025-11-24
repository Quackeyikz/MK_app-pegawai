@extends('layouts/master')
@section('title', 'App Pegawai')

@section('content')
    <x-background-gradient-top-left></x-background-gradient-top-left>
    <x-background-gradient2></x-background-gradient2>
    <x-background-gradient2></x-background-gradient2>

    <div class="relative isolate px-6 lg:px-8">

        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
            <div class="hidden sm:mb-8 sm:flex sm:justify-center">
                <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-400 ring-1 ring-gray-400/70 hover:ring-gray-400/90 dark:ring-white/10 dark:hover:ring-white/20">
                    Don't Forget to Read The Documentation!
                    <a href="https://github.com/Quackeyikz/MK_app-pegawai" target="_blank"
                        class="font-semibold text-indigo-400"><span aria-hidden="true" class="absolute inset-0"></span>Read
                        here <span aria-hidden="true">&rarr;</span></a>
                </div>
            </div>
            <div class="text-center">
                <h1 class="text-5xl font-semibold tracking-tight text-balance text-gray-900 dark:text-white  sm:text-7xl">
                    Let's Learn <span class="text-indigo-500 dark:text-indigo-300">Laravel Framework!</span> </h1>
                <p class="mt-8 text-lg font-medium text-pretty text-gray-400 sm:text-xl/8">
                    Laravel-based basic CRUD App to get a better understanding of this popular framework. (Now with MySQL!).
                    Please read the provided Doc.</p>
                <div class="mt-10 flex items-center justify-center gap-x-6">
                    <a href="/employees"
                        class="rounded-md bg-indigo-500 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-400 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        Display Data</a>
                    <a href="/employees/create" class="text-sm/6 font-semibold text-gray-700 dark:text-white">Create Data
                        <span aria-hidden="true">→</span></a>
                </div>
            </div>
        </div>   
    </div>

    <main class="px-6 md:px-9 lg:px-12 mb-12">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8 text-gray-950 dark:text-white">
            <h2 class="text-center text-base/7 font-semibold text-indigo-500">
                What's The Development Process?</h2>
            <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 dark:text-white sm:text-5xl">
                General Workflow</p>

            <div class="flex flex-row flex-wrap gap-1 mt-6 justify-between relative">
                <div class="relative bg-indigo-500/5 hover:bg-indigo-500/15 duration-300 border-1 border-indigo-500/30 rounded-md p-5 grow">
                    <h3 class="text-xl font-bold">Migration & Model</h3>
                    <p class="dark:text-indigo-300 text-sm">Preparing database tables and model for query.</p>
                    <div class="absolute top-[80%] right-[10px] lg:top-[30%] lg:right-[-15px] py-2 px-3 bg-indigo-500 border-1 border-indigo-500/30 rounded-full z-10">
                        <i class="bi bi-caret-down-fill lg:hidden"></i>
                        <i class="bi bi-caret-right-fill hidden lg:inline text-white"></i>
                    </div>
                </div>
                <div class="relative bg-indigo-500/5 hover:bg-indigo-500/15 duration-300 border-1 border-indigo-500/30 rounded-md p-5 grow">
                    <h3 class="text-xl font-bold">Blade Template Setup</h3>
                    <p class="dark:text-indigo-300 text-sm">Setting up comfortable view templates for routes.</p>
                    <div class="absolute top-[80%] right-[10px] lg:top-[30%] lg:right-[-15px] py-2 px-3 bg-indigo-500 border-1 border-indigo-500/30 rounded-full z-10">
                        <i class="bi bi-caret-down-fill lg:hidden"></i>
                        <i class="bi bi-caret-right-fill hidden lg:inline text-white"></i>
                    </div>
                </div>
                <div class="relative bg-indigo-500/5 hover:bg-indigo-500/15 duration-300 border-1 border-indigo-500/30 rounded-md p-5 grow">
                    <h3 class="text-xl font-bold">Routing & Requests</h3>
                    <p class="dark:text-indigo-300 text-sm">Making routes throughout the web and requests.</p>
                </div>
            </div>
        </div>
{{--         
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8 mt-12 text-gray-950 dark:text-white">
            <h2 class="text-left text-base/7 font-semibold text-indigo-500">
                Where to Start?</h2>
            <p class="text-left mx-auto mt-2 text-4xl font-semibold tracking-tight text-balance text-gray-950 dark:text-white sm:text-5xl">
                Installation</p>
            
            <div class="flex flex-row flex-wrap gap-5 mt-6">
                <div class="relative bg-indigo-500/5 hover:bg-indigo-500/15 duration-300 border-1 border-indigo-500/30 rounded-md p-5 grow">
                    hai vro
                </div>
                <div></div>
            </div>
        </div>
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8 mt-12 text-gray-950 dark:text-white">
            <h2 class="text-center text-base/7 font-semibold text-indigo-500">
                Basic of Laravel</h2>
            <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 dark:text-white sm:text-5xl">
                What I Have Learned</p>
        </div> --}}
    </main>

    <div class="px-6 lg:px-12 mb-12">
        <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
            <h2 class="text-center text-base/7 font-semibold text-indigo-500">Basic of Laravel</h2>
            <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 dark:text-white sm:text-5xl">
                What I Have Learned</p>
                
            <div class="mt-10 grid gap-4 sm:mt-16 lg:grid-cols-3 lg:grid-rows-2">
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-gray-50 dark:bg-gray-800 lg:rounded-l-4xl"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] lg:rounded-l-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                Routing
                            </p>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                To make "routing" in the website, e.g /employees, add the route in the web.php file.
                            </p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                Route::get('/employees', function () { <br>
                                <span class="text-red-500">return view('index');</span><br>}); 
                            </div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                Route::resource('employees', EmployeeController::class);
                            </div>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                Routing could be handled by a controller's functions using ::resource option. In order to create a controller, execute this command below:
                            </p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:controller 
                                <span class="text-red-500">myController</span>
                            </div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:controller 
                                <span class="text-red-500">myController --resource</span>
                            </div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:controller 
                                <span class="text-red-500">myController --model=Employee</span>
                            </div>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                To access a database table, Eloquent or ORM is required to specify which data are retreivable.
                            </p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:model 
                                <span class="text-red-500">Employee</span>
                            </div>
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 dark:outline-white/30 lg:rounded-l-4xl"></div>
                </div>
                
                <div class="relative max-lg:row-start-1">
                    <div class="absolute inset-px rounded-lg bg-gray-50 dark:bg-gray-800 max-lg:rounded-t-4xl"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-t-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                Installation</p>
                            <p class="mt-2 mb-5 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                To install Laravel with its depedencies, use <a href="https://getcomposer.org/" class="underline text-indigo-500">Composer</a>.</p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                composer <span class="text-red-500">--version</span></div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                composer create-project laravel/laravel:^11.0 <span class="text-red-500">namaProject</span></div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                cd <span class="text-red-500">namaProject</span></div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan <span class="text-red-500">serve</span></div>
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 dark:outline-white/30 max-lg:rounded-t-4xl"></div>
                </div>

                <div class="relative max-lg:row-start-3 lg:col-start-2 lg:row-start-2">
                    <div class="absolute inset-px rounded-lg bg-gray-50 dark:bg-gray-800"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)]">
                        <div class="px-8 pt-8 pb-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                Components</p>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                Making a custom html tag with custom attribute, innerHTML, and passing value through the tag.</p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:component 
                                <span class="text-red-500">myComponent</span>
                            </div>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                If the component purpose is just for display or view, use the --view tag to create the component without a class.</p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:component 
                                <span class="text-red-500">myComponent --view</span>
                            </div>
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 dark:outline-white/30"></div>
                </div>
                <div class="relative lg:row-span-2">
                    <div class="absolute inset-px rounded-lg bg-gray-50 dark:bg-gray-800 max-lg:rounded-b-4xl lg:rounded-r-4xl"></div>
                    <div class="relative flex h-full flex-col overflow-hidden rounded-[calc(var(--radius-lg)+1px)] max-lg:rounded-b-[calc(2rem+1px)] lg:rounded-r-[calc(2rem+1px)]">
                        <div class="px-8 pt-8 pb-8 sm:px-10 sm:pt-10">
                            <p class="mt-2 text-lg font-medium tracking-tight text-gray-950 dark:text-gray-50 max-lg:text-center">
                                Migrations
                            </p>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                Ever wondered how Laravel devs in the same team work together despite having different databases? Migration is a feature to manage (create, change, delete) tables in a database specified from the .env file.
                            </p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan make:migration 
                                <span class="text-red-500">create_employees_table</span>
                            </div>
                            <p class="mt-2 mb-2 max-w-lg text-sm/6 text-gray-600 dark:text-gray-300 max-lg:text-center">
                                It will create a new file in the database/migrations folder, the file will have a up() and down() functions. Which is to create (or edit) and delete a table (or relation). If mistakes were happen, use the following command to do a rollbak. Add a 'fresh' to start from the very beginning (data will be erased).
                            </p>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan migrate
                            </div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan migrate:rollback
                            </div>
                            <div class="p-2 mt-3 text-sm bg-gray-200 text-gray-800 dark:bg-gray-700 dark:text-gray-300 rounded-md">
                                php artisan migrate:fresh
                            </div>
                        </div>
                    </div>
                    <div class="pointer-events-none absolute inset-px rounded-lg shadow-sm outline outline-black/5 dark:outline-white/30 max-lg:rounded-b-4xl lg:rounded-r-4xl"></div>
                </div>
            </div>
        </div>
    </div>

@endsection
