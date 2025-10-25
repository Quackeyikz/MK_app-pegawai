@extends('layouts.master')
@section('title', 'Create Attendance')

@section('content')
<x-background-gradient2></x-background-gradient2>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(C) Create Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Create Attendance</h1>

    <form action="{{ route('attendance.store') }}" method="POST">
        @csrf
        <div class="flex flex-row w-full flex-wrap gap-5">
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="karyawan_id" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Employee:</label>
                    <select name="karyawan_id" class="px-3 py-3 rounded-md bg-gray-100">
                        @if (isset($employees) && $employees->isNotEmpty())
                            <option value="" selected disabled>Please choose an employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                            @endforeach
                        @else
                            <option value="" selected disabled>Currently there are no employees</option>
                        @endif
                    </select>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tanggal" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Date:</label>
                    <input type="date" name="tanggal" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="waktu_masuk" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Check-in Time:</label>
                    <input type="time" name="waktu_masuk" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="waktu_keluar" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Check-out Time:</label>
                    <input type="time" name="waktu_keluar" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="status_absensi" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Absence Status:</label>
                    <select name="status_absensi" class="px-3 py-3 rounded-md bg-gray-100">
                        <option value="Present" selected>Present</option>
                        <option value="Excused">Excused</option>
                        <option value="Sick">Sick</option>
                        <option value="Absent">Absent</option>
                    </select>
                </div>
                <div class="mt-6 flex flex-row gap-3 justify-end">
                    <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                    <input type="submit" value="Create Attendance" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection