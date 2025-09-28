{{--
 Minimal by Laravel.
@extends('errors::minimal')

@section('title', __('Not Found'))
@section('code', '404')
@section('message', __('Not Found')) 

To Generate: php artisan vendor:publish --tag=laravel-errors
~ Erik wuz here!
--}}

<!--
  This example requires updating your template:

  ```
  <html class="h-full">
  <body class="h-full">
  ```
-->
<html class="h-full">
<head>
    @extends('layouts/head')
    @section('title', '404 NOT FOUND')
</head>
<body class="h-full">
    <x-background-gradient></x-background-gradient>
    <main class="grid min-h-full place-items-center px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
        <p class="text-base font-semibold text-indigo-600">404</p>
        <h1 class="mt-4 text-5xl font-semibold tracking-tight text-balance text-gray-900 sm:text-7xl">Page not found</h1>
        <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Nyari apa bang? Gak nemu kah? Cek typo di URL!</p>
        
        <div class="mt-10 flex items-center justify-center gap-x-6">
            <a href="/" class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Kembali ke Beranda</a>
        </div>
    </div>
    </main> 
</body>
</html>