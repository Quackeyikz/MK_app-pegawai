@extends('layouts.master')
@section('title', 'Employee Details')

@section('content')
<x-background-gradient></x-background-gradient>

<div class="px-6 lg:px-8 mt-24 w-full flex flex-col justify-items-center items-center">
    <h2 class="text-center text-base/7 font-semibold text-indigo-400">(R) Read Page 2</h2>
    <h1 class="text-4xl text-center font-bold text-gray-800 dark:text-white mb-8">Employee Details</h1>

    <table class="text-gray-700 dark:text-gray-100">
        <tbody>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Full Name</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">{{ $employee->nama_lengkap }}</td>
            </tr>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Email</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">{{ $employee->email }}</td>
            </tr>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Phone Number</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">{{ $employee->nomor_telepon }}</td>
            </tr>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Date of Birth</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">{{ $employee->tanggal_lahir }}</td>
            </tr>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Address</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">{{ $employee->alamat }}</td>
            </tr>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Entry Date</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">{{ $employee->tanggal_masuk }}</td>
            </tr>
            <tr>
                <td class="px-12 py-3 border border-white/50 text-center bg-white/30 font-bold">Status</td>
                <td class="ps-5 pe-24 py-3 border border-white/50 text-left">
                    {!! $employee->status == 'aktif' ? '<i class="bi bi-square-fill text-green-500"></i>' : '<i class="bi bi-square-fill text-green-500"></i>' !!} {{ $employee->status }}
                </td>
            </tr>
        </tbody>
    </table>

    <div class="mt-4 w-full md:w[50%] lg:w-[30%] flex justify-items-center">
        <a href="/employees" class="grow text-center rounded-md bg-indigo-500 px-12 py-3 hover:bg-indigo-600 text-white duration-300">Back to Employee List</a>
    </div>
</div>
@endsection