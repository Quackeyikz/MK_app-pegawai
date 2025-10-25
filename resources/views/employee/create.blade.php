@extends('layouts.master')
@section('title', 'Create Data')

@section('content')
<x-background-gradient2></x-background-gradient2>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(C) Create Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Employee Form</h1>

    <form action="{{ route('employees.store') }}" method="POST">
        @csrf
        <div class="flex flex-row w-full flex-wrap gap-5">
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="nama_lengkap" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Full Name:</label>
                    <input type="text" name="nama_lengkap" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Enter your name here">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="email" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Email:</label>
                    <input type="email" name="email" class="px-3 py-3 rounded-md bg-gray-100" placeholder="myEmail@example.com">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="nomor_telepon" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Phone Number:</label>
                    <input type="text" name="nomor_telepon" class="px-3 py-3 rounded-md bg-gray-100" placeholder="081234567891">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tanggal_lahir" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Date of Birth:</label>
                    <input type="date" name="tanggal_lahir" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="jabatan_id" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Position:</label>
                    <select type="number" name="jabatan_id" class="px-3 py-3 rounded-md bg-gray-100">
                        @if (isset($positions) && $positions->isNotEmpty())
                            <option value="" selected disabled>Please select positions</option>
                            @foreach ($positions as $position)
                                <option value="{{ $position->id }}">{{ $position->nama_jabatan }}</option>
                            @endforeach
                        @else
                            <option value="" selected disabled>No positions are available</option>
                        @endif
                    </select>
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="departemen_id" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Department:</label>
                    <select type="number" name="departemen_id" class="px-3 py-3 rounded-md bg-gray-100">
                        @if (isset($departments) && $departments->isNotEmpty())
                            <option value="" selected disabled>Please select department</option>
                            @foreach ($departments as $department)
                                <option value="{{ $department->id }}">{{ $department->nama_departemen }}</option>
                            @endforeach
                        @else
                            <option value="" selected disabled>No departments are available</option>
                        @endif
                    </select>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="alamat" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Address:</label>
                    <textarea type="text" name="alamat" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Your address here"></textarea>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tanggal_masuk" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Entry Date:</label>
                    <input type="date" name="tanggal_masuk" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="status" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Status</label>
                    <select name="status" class="px-3 py-3 rounded-md bg-gray-100">
                        <option value="Active" selected>Active</option>
                        <option value="Inactive">Inactive</option>
                    </select>
                </div>
                <div class="mt-6 flex flex-row gap-3 justify-end">
                    <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                    <input type="submit" value="Submit" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection