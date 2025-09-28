@extends('layouts.master')
@section('title', 'Employee')

{{-- CSS Styling --}}
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
        <h1 class="text-4xl text-center font-bold text-gray-800 dark:text-white mb-8">Employee List</h1>

        <div class="w-full overflow-auto rounded-lg bg-clip-border">
            <table class="table-auto w-full text-gray-700 dark:text-gray-200 border border-gray-200 dark:border-gray-500 shadow-md">
                <thead>
                    <tr class="bg-white/50 dark:bg-white/20">
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone Number</th>
                        <th>Date of Birth</th>
                        <th>Address</th>
                        <th>Entry Date</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($employees as $employee)
                        <tr class="hover:bg-indigo-300/20 dark:hover:bg-indigo-400/50">
                            <td>{{ $employee->nama_lengkap }}</td>
                            <td>{{ $employee->email }}</td>
                            <td>{{ $employee->nomor_telepon }}</td>
                            <td>{{ $employee->tanggal_lahir }}</td>
                            <td>{{ $employee->alamat }}</td>
                            <td>{{ $employee->tanggal_masuk }}</td>
                            <td>{!! $employee->status == 'aktif' ? '<i class="bi bi-square-fill text-green-500"></i>' : '<i class="bi bi-square-fill text-red-500"></i>' !!} {{ $employee->status }}</td>
                            <td class="flex flex-row flex-nowrap gap-2">
                                <a href="{{ route('employees.show', $employee->id) }}" class="py-1 px-2 rounded-sm bg-amber-400 hover:bg-amber-500 text-gray-700"><i class="bi bi-info-circle"></i></a>
                                <a href="{{ route('employees.edit', $employee->id) }}" class="py-1 px-2 rounded-sm bg-indigo-500 hover:bg-indigo-600 text-white"><i class="bi bi-pencil-square"></i></a>
                                <form action="{{ route('employees.destroy', $employee->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')" class="py-1 px-2 rounded-sm hover:cursor-pointer bg-red-500 hover:bg-red-600 text-white"><i class="bi bi-trash3"></i></button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection