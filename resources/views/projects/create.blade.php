@extends('layouts.master')
@section('title', 'Create Project')

@section('content')
<x-background-gradient></x-background-gradient>

<div class="px-6 lg:px-8 my-24">
    <h2 class="text-base/7 font-semibold text-indigo-400">(C) Create Data</h2>
    <h1 class="text-4xl font-bold text-gray-800 dark:text-white mb-8">Create a new Project</h1>

    <form action="{{ route('projects.store') }}" method="POST">
        @csrf
        {{-- project_name, description, start_date, finish_date, status, employee_id --}}
        <div class="flex flex-row w-full flex-wrap gap-5">
            <div class="grow" id="first-half">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="project_name" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Project Name:</label>
                    <input type="text" name="project_name" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Enter project name here">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="description" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Description:</label>
                    <textarea type="text" name="description" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Enter project description here (optional)"></textarea>
                </div>
                <div class="mt-4 flex flex-col md:flex-row flex-wrap gap-4">
                    <div class="flex flex-col gap-1 grow">
                        <label for="employee_id" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Initial Employee:</label>
                        <select type="number" name="employee_id" class="px-3 py-3 rounded-md bg-gray-100">
                            @if (isset($employees) && $employees->isNotEmpty())
                                <option value="" selected disabled>Please select employees</option>
                                @foreach ($employees as $employee)
                                    <option value="{{ $employee->id }}">{{ $employee->nama_lengkap }}</option>
                                @endforeach
                            @else
                                <option value="" selected disabled>No employees are available</option>
                            @endif
                        </select>
                    </div>
                    <div class="flex flex-col gap-1 grow">
                        <label for="role" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Initial Employee Role:</label>
                        <input type="text" name="role" class="px-3 py-3 rounded-md bg-gray-100" placeholder="Enter initial role here">
                    </div>
                </div>
            </div>
            <div class="grow">
                <div class="mt-4 flex flex-col gap-1">
                    <label for="start_date" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Start Date:</label>
                    <input type="date" name="start_date" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="finish_date" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Finish Date (optional):</label>
                    <input type="date" name="finish_date" class="px-3 py-3 rounded-md bg-gray-100">
                </div>
                <div class="mt-4 flex flex-col gap-1">
                    <label for="status" class="font-semibold text-lg text-gray-700 dark:text-gray-100">Status</label>
                    <select name="status" class="px-3 py-3 rounded-md bg-gray-100">
                        <option value="planned" selected><i class="bi bi-calendar-week text-indigo-600"></i>&nbsp; Planned</option>
                        <option value="ongoing"><i class="bi bi-clock-history text-indigo-600"></i>&nbsp; Ongoing</option>
                        <option value="finished"><i class="bi bi-check2-circle text-indigo-600"></i>&nbsp; Finished</option>
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
