@extends('layouts.master')
@section('title', 'Available Positions')

@section('style')
<style>
    table {
        border-collapse:separate;
    }

    table th {
        padding: 10px 10px;
        text-align: left;
    }

    tbody tr td {
        padding: 10px;
    }

    tbody tr{
        transition: 0.3s;
    }
</style>
@endsection

@section('content')
    <x-background-gradient></x-background-gradient>

    <div class="px-6 lg:px-8 mt-24">
        <h2 class="text-center text-base/7 font-semibold text-indigo-400">(R) Read Page</h2>
        <h1 class="text-4xl text-center font-bold text-gray-800 dark:text-white mb-8">Available Positions</h1>

        <div class="w-full flex flex-row flex-wrap justify-center items-center overflow-auto rounded-lg bg-clip-border">
            <table class="table-auto w-full md:w-[75%] lg:w-[50%] text-gray-700 dark:text-gray-200 border border-gray-200 dark:border-gray-500 shadow-md">
                <thead>
                    <tr class="bg-white/50 dark:bg-white/20">
                        <th>ID</th>
                        <th>Position Name</th>
                        <th>Main Salary</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($positions as $position)
                        <tr class="hover:bg-indigo-300/20 dark:hover:bg-indigo-400/50">
                            <td>{{ $position->id }}</td>
                            <td>{{ $position->nama_jabatan }}</td>
                            <td>${{ $position->gaji_pokok }},-</td>
                            <td class="flex flex-row flex-nowrap gap-2">
                                <a href="{{ route('positions.edit', $position->id) }}" class="py-1 px-2 rounded-sm bg-indigo-500 hover:bg-indigo-600 text-white"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('positions.destroy', $position->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Are you sure you want to delete this position?')" class="py-1 px-2 rounded-sm hover:cursor-pointer bg-red-500 hover:bg-red-600 text-white"><i class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection