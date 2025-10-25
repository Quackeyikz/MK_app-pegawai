@extends('layouts.master')
@section('title', 'Update Attendance')

@section('content')
<x-background-gradient2></x-background-gradient2>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(U) Update Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Update Attendance</h1>

    {{-- Aktifkan untuk debugging (error printing)--}}
    {{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif   --}}

    <form action="{{ route('attendance.update', $attendee->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="flex flex-row w-full flex-wrap gap-5">
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="karyawan_id" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Employee:</label>
                    <select name="karyawan_id" class="px-3 py-3 rounded-md bg-gray-100">
                        @if (isset($employees) && $employees->isNotEmpty())
                            <option value="" selected disabled>Please choose an employee</option>
                            @foreach ($employees as $employee)
                                <option value="{{ $employee->id }}" {{ $attendee->karyawan_id == $employee->id ? 'selected' : '' }}>{{ $employee->nama_lengkap }}</option>
                            @endforeach
                        @else
                            <option value="" selected disabled>Currently there are no employees</option>
                        @endif
                    </select>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tanggal" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Date:</label>
                    <input type="date" name="tanggal" class="px-3 py-3 rounded-md bg-gray-100" value="{{ old('tanggal', $attendee->tanggal) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="waktu_masuk" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Check-in Time:</label>
                    <input type="time" name="waktu_masuk" class="px-3 py-3 rounded-md bg-gray-100" value="{{ old('waktu_masuk', date('H:i', strtotime($attendee->waktu_masuk))) }}">
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="waktu_keluar" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Check-out Time:</label>
                    <input type="time" name="waktu_keluar" class="px-3 py-3 rounded-md bg-gray-100" value="{{ old('waktu_keluar', date('H:i', strtotime($attendee->waktu_keluar))) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="status_absensi" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Absence Status:</label>
                    <select name="status_absensi" class="px-3 py-3 rounded-md bg-gray-100">
                    @php
                        $statuses = ['Present', 'Excused', 'Sick', 'Absent'];
                        $current = old('status_absensi', $attendee->status_absensi);
                    @endphp
                    @foreach ($statuses as $s)
                        <option value="{{ $s }}" {{ $current == $s ? 'selected' : '' }}>{{ $s }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="mt-6 flex flex-row gap-3 justify-end">
                    <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                    <input type="submit" value="Update Attendance" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection