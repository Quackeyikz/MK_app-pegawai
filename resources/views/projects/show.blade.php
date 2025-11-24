@extends('layouts.master')
@section('title', "$project->project_name Details")

@section('content')
<x-background-gradient-top-left></x-background-gradient-top-left>

<div class="px-6 lg:px-8 mt-24 w-full flex flex-col justify-items-center items-center">
    <h2 class="text-center text-base/7 font-semibold text-indigo-400">(R) Read Page</h2>
    <h1 class="text-4xl text-center font-bold text-gray-800 dark:text-white mb-8">Projects Details</h1>

    <div class="relative text-center flex flex-col justify-items-center p-5 lg:p-10 gap-3 md:w-[70%] lg:w-[50%] rounded-lg shadow-lg bg-indigo-500/5 duration-300 border-1 border-indigo-500/30 text-gray-800 dark:text-white">
        @php
            $icons = ['alexa', 'activity', 'alipay', 'anthropic', 'amd', 'app-indicator', 'back', 'award', 'badge-tm', 'bank2', 'bar-chart-fill', 'bar-chart-steps', 'beaker-fill', 'behance', 'book-half', 'box-seam-fill'];
            // Arr::shuffle($icons);
            // $icon_idx = rand() % count($icons);
            $random_icon = $icons[$project->id - 1];
        @endphp
        <i class="block text-8xl bi bi-{{ $random_icon }}"></i>
        <h3 class="text-2xl font-extrabold">{{ $project->project_name }}</h3>

        <p class="mt-4 p-2 text-sm font-semibold bg-gradient-to-r from-indigo-500/0 via-indigo-500/50 to-indigo-500/0">Description</p>
        <p>{{ $project->description }}</p>

        <table class="mt-4">
            <tr>
                <th class="text-sm font-light italic opacity-60 w-[50%]">PIC Name</th>
                <th class="text-sm font-light italic opacity-60 w-[50%]">Role</tr>
            </tr>
            @foreach ($project->employees as $e)
            <tr>
                <td>{{ $e->nama_lengkap }}</td>
                <td>{{ $e->pivot->role }}</td>
            </tr>
            @endforeach
        </table>

        <div class="mt-10 py-5 flex flex-row justify-between items-center bg-gradient-to-r from-indigo-500/0 via-indigo-500/50 to-indigo-500/0">
            <p class="text-xs md:text-md lg:text-lg text-left">
                <span class="block font-semibold opacity-60">Starting Date</span>
                <span class="block mt-2"><i class="bi bi-calendar2-x"></i>&nbsp; {{ $project->start_date }}</span>
            </p>
            <p class="text-2xl font-bold">
                {{ ucwords($project->status) }}
            </p>
            <p class="text-xs md:text-md lg:text-lg text-right">
                <span class="block font-semibold opacity-60">Finish Date</span>
                <span class="block mt-2"><i class="bi bi-calendar2-check"></i>&nbsp; {{ $project->finish_date ?? 'To Be Announced' }}</span>
            </p>
        </div>

        <a href='{{ route('projects.edit', $project->id) }}' class="absolute top-[20px] right-[20px] text-xl hover:opacity-70"><i class="bi bi-pencil-square"></i></a>
        <form action="{{ route('projects.destroy', $project->id) }}" method="POST">
            @csrf
            @method('DELETE')
            <button type="submit" onclick="return confirm('Are you sure you want to delete this project?')" class="absolute top-[20px] left-[20px] lg:top-[60px] lg:right-[20px] lg:left-auto text-xl hover:opacity-70 text-red-400"><i class="bi bi-trash-fill"></i></button>
        </form>
    </div>

    <div class="mt-4 mb-12 w-full md:w[50%] lg:w-[30%] flex justify-items-center">
        <a href="{{ url('/projects') }}" class="grow text-center rounded-md bg-indigo-500 px-12 py-3 hover:bg-indigo-600 text-white duration-300">Back to Projects List</a>
    </div>
</div>
@endsection