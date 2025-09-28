@extends('layouts.master')
@section('title', 'Sandwich')

@section('content')
    <x-background-gradient></x-background-gradient>
    
    <div class="relative isolate px-6 py-24 sm:py-32 lg:px-8">
        <x-background-gradient></x-background-gradient>
        <div class="mx-auto max-w-4xl text-center">
            <h2 class="text-base/7 font-semibold text-indigo-500">Note: {{ $note }}</h2>
            <p class="mt-2 text-5xl font-semibold tracking-tight text-balance text-gray-900 dark:text-white sm:text-6xl">
                Making a sandwitch for ya...
            </p>
        </div>
        <p class="mx-auto mt-6 max-w-2xl text-center text-lg font-medium text-pretty text-gray-600 dark:text-gray-300 sm:text-xl/8">
            While you're waiting for your sandwitch, why don't you do something productive. Like making another sandwitch yourself!
        </p>
        <div class="mx-auto mt-16 max-w-lg items-center sm:mt-20 sm:gap-y-0 lg:max-w-4xl lg:grid-cols-2">
            <div class="rounded-3xl bg-white/60 p-8 ring-1 ring-gray-900/10 dark:bg-white/10 sm:p-10 lg:mx-0">
                <img class="mx-auto" src="{{ 'img/sandwich-conveyor.gif' }}" alt="">
            </div>
        </div>
    </div>
@endsection