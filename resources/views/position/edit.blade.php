@extends('layouts.master')
@section('title', 'Update Positions')

@section('content')
<x-background-gradient></x-background-gradient>

<div class="px-6 lg:px-8 my-24 flex flex-col justify-center items-center">
    <h2 class="text-base/7 font-semibold text-indigo-400">(U) Update Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Update Existing Position</h1>

    <form action="{{ route('positions.update', $position->id) }}" method="POST" class="w-full md:w-[90%] lg:w-[70%]">
        @csrf
        @method('PUT')
        <div class="flex flex-col flex-wrap gap-5">
            <div class="grow">
                <label for="nama_jabatan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Position Name:</label>
                <input type="text" name="nama_jabatan" class="px-3 py-3 mt-3 rounded-md bg-gray-100 w-full" placeholder="Enter new position name" value="{{ old('nama_jabatan', $position->nama_jabatan) }}">
            </div>
            <div class="grow">
                <label for="gaji_pokok" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Main Salary:</label>
                <input type="number" name="gaji_pokok" class="px-3 py-3 mt-3 rounded-md bg-gray-100 w-full" placeholder="Enter salary amount here" value="{{ old('gaji_pokok', $position->gaji_pokok) }}">
            </div>
            <div class="mt-6 grow flex flex-row gap-3 justify-end">
                <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                <input type="submit" value="Submit" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
            </div>
        </div>
    </form>
</div>
@endsection