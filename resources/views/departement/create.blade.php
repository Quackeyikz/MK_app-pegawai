@extends('layouts.master')
@section('title', 'Create Department')

@section('content')
<x-background-gradient></x-background-gradient>

<div class="px-6 lg:px-8 my-24 flex flex-col justify-center items-center">
    <h2 class="text-base/7 font-semibold text-indigo-400">(C) Create Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Create Department</h1>

    <form action="{{ route('departments.store') }}" method="POST" class="w-full md:w-[90%] lg:w-[70%]">
        @csrf
        <div class="flex flex-col flex-wrap gap-5">
            <div class="grow">
                <label for="nama_departemen" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Department Name:</label>
                <input type="text" name="nama_departemen" class="px-3 py-3 mt-3 rounded-md bg-gray-100 w-full" placeholder="Enter new department name here">
            </div>
            <div class="mt-6 grow flex flex-row gap-3 justify-end">
                <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                <input type="submit" value="Submit" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
            </div>
        </div>
    </form>
</div>
@endsection