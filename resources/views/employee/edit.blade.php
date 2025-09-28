@extends('layouts.master')
@section('title', 'Edit Data')

@section('content')
<x-background-gradient2></x-background-gradient2>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(U) Update Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Update Employees Data Form</h1>

    <form action="{{ route('employees.update', $employee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-row w-full flex-wrap gap-5">
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="nama_lengkap" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Full Name:</label>
                    <input type="text" name="nama_lengkap" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Enter your name here" value="{{ old('nama_lengkap', $employee->nama_lengkap) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="email" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Email:</label>
                    <input type="email" name="email" class="px-3 py-3 rounded-md bg-gray-100" placeholder="myEmail@example.com" value="{{ old('email', $employee->email) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="nomor_telepon" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Phone Number:</label>
                    <input type="text" name="nomor_telepon" class="px-3 py-3 rounded-md bg-gray-100" placeholder="081234567891" value="{{ old('nomor_telepon', $employee->nomor_telepon) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tanggal_lahir" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Date of Birth:</label>
                    <input type="date" name="tanggal_lahir" class="px-3 py-3 rounded-md bg-gray-100" value="{{ old('tanggal_lahir', $employee->tanggal_lahir) }}">
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="alamat" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Address:</label>
                    <textarea type="text" name="alamat" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Your address here">{{ old('alamat', $employee->alamat) }}</textarea>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tanggal_masuk" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Entry Date:</label>
                    <input type="date" name="tanggal_masuk" class="px-3 py-3 rounded-md bg-gray-100" value="{{ old('tanggal_masuk', $employee->tanggal_masuk) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="status" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Status</label>
                    <select name="status" class="px-3 py-3 rounded-md bg-gray-100">
                        <option value="aktif" {{ old('status', $employee->status) == 'aktif' ? 'selected' : '' }}>Aktif</option>
                        <option value="nonaktif" {{ old('status', $employee->status) == 'nonaktif' ? 'selected' : '' }}>Nonaktif</option>
                    </select>
                </div>
                <div class="mt-6 flex flex-row gap-3 justify-end">
                    <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                    <input type="submit" value="Update" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection