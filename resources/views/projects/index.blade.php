@extends('layouts.master')
@section('title', 'Projects')

@section('content')
    <x-background-gradient></x-background-gradient>

    <div class="px-6 lg:px-8 mt-24">
        <h2 class="text-center text-base/7 font-semibold text-indigo-400">(R) Read Page</h2>
        <h1 class="text-4xl text-center font-bold text-gray-800 dark:text-white mb-8">Projects</h1>

        <div class="flex flex-col lg:flex-row flex-wrap justify-items-center mt-12 gap-4 lg:gap-8">
            @foreach ($projects as $project)
            @php
                $icons = ['alexa', 'activity', 'alipay', 'anthropic', 'amd', 'app-indicator', 'back', 'award', 'badge-tm', 'bank2', 'bar-chart-fill', 'bar-chart-steps', 'beaker-fill', 'behance', 'book-half', 'box-seam-fill'];
                // $icon_idx = $loop->index % count($icons);
                $random_icon = $icons[$project->id - 1];
            @endphp
            <a href="{{ route('projects.show', $project->id) }}" class="lg:w-[30%] grow flex flex-col md:flex-row justify-center items-center text-center md:text-left p-5 gap-4 lg:gap-6 rounded-lg shadow-lg bg-indigo-500/5 hover:bg-indigo-500/15 duration-300 border-1 border-indigo-500/30">
                <p><i class="bi bi-{{ $random_icon }} text-indigo-700 dark:text-white text-6xl"></i></p>
                <div class="grow text-gray-800 dark:text-white">
                    <h3 class="font-bold text-2xl">{{ $project->project_name }}</h3>
                    <p class="font-italic mt-4 lg:mt-3">{{ $project->description }}</p>
                    <p class="mt-4 text-gray-500 dark:text-stone-300 flex flex-row flex-wrap gap-4 justify-items-center">
                        @forelse ($project->employees as $employee)
                            <small class="block grow">{{ $employee->nama_lengkap }}</small>
                        @empty
                            <small class="block grow">No assigned employees.</small>
                        @endforelse
                    </p>
                </div>
            </a>
            @endforeach
        </div>
    </div>
@endsection