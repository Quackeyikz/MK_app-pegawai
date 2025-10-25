@extends('layouts.master')
@section('title', 'Create Salary Data')

@section('content')
<x-background-gradient2></x-background-gradient2>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(C) Create Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Create Salary Form</h1>

    <form action="{{ route('salaries.store') }}" method="POST">
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
                    <label for="bulan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Month:</label>
                    <select name="bulan" class="px-3 py-3 rounded-md bg-gray-100">
                        <option value="January" selected>January</option>
                        <option value="February">February</option>
                        <option value="March">March</option>
                        <option value="April">April</option>
                        <option value="May">May</option>
                        <option value="June">June</option>
                        <option value="July">July</option>
                        <option value="August">August</option>
                        <option value="September">September</option>
                        <option value="October">October</option>
                        <option value="November">November</option>
                        <option value="Desember">Desember</option>
                    </select>
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="gaji_pokok" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Main Salary:</label>
                    <input type="number" name="gaji_pokok" class="px-3 py-3 rounded-md bg-gray-100" placeholder="e.g 5525000.00">
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="tunjangan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Allowance:</label>
                    <input type="number" name="tunjangan" class="px-3 py-3 rounded-md bg-gray-100" placeholder="e.g 1000000.00" value="0">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="potongan" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Salary Cut:</label>
                    <input type="number" name="potongan" class="px-3 py-3 rounded-md bg-gray-100" placeholder="e.g 50000.00" value="0">
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