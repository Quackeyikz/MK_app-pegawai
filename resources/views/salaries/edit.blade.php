@extends('layouts.master')
@section('title', 'Update Salary Data')

@section('content')
<x-background-gradient></x-background-gradient>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(U) Update Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Update Salary Data</h1>

    <form action="{{ route('salaries.update', $salary->id) }}" method="POST">
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
                                <option value="{{ $employee->id }}" {{ $salary->karyawan_id == $employee->id ? 'selected' : '' }}>{{ $employee->nama_lengkap }}</option>
                            @endforeach
                        @else
                            <option value="" selected disabled>Currently there are no employees</option>
                        @endif
                    </select>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="bulan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Month:</label>
                    <select name="bulan" class="px-3 py-3 rounded-md bg-gray-100">
                        @php
                            $months = ['January','February','March','April','May','June','July','August','September','October','November','December'];
                            $current = old('bulan', $salary->bulan);
                        @endphp
                        @foreach ($months as $m)
                            <option value="{{ $m }}" {{ $current == $m ? 'selected' : '' }}>{{ $m }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="gaji_pokok" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Main Salary:</label>
                    <input type="number" name="gaji_pokok" class="px-3 py-3 rounded-md bg-gray-100" placeholder="e.g 5525000.00" value="{{ old('gaji_pokok', $salary->gaji_pokok) }}">
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tunjangan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Allowance:</label>
                    <input type="number" name="tunjangan" class="px-3 py-3 rounded-md bg-gray-100" placeholder="e.g 1000000.00" value="{{ old('tunjangan', $salary->tunjangan) }}">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="potongan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Salary Cut:</label>
                    <input type="number" name="potongan" class="px-3 py-3 rounded-md bg-gray-100" placeholder="e.g 50000.00" value="{{ old('potongan', $salary->potongan) }}">
                </div>
                <div class="mt-6 flex flex-row gap-3 justify-end">
                    <input type="reset" value="Reset" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-gray-300 hover:bg-gray-500 dark:bg-gray-500 dark:hover:bg-gray-600 text-gray-700 dark:text-white duration-300">
                    <input type="submit" value="Count" class="hover:cursor-pointer grow rounded-md text-center p-5 bg-indigo-700 hover:bg-indigo-900 text-white duration-300">
                </div>
            </div>
        </div>
    </form>
</div>
@endsection