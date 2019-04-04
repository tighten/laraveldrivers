@extends('layouts.app')

@section('body')
    <div class="flex items-center justify-center">
        <h1 class="font-sans py-4 text-5xl">Laravel Drivers</h1>
    </div>
    <div class="container mx-auto">
        @foreach ($types as $type => $drivers)
            <h2 class="text-3xl">{{ $type }} Drivers</h2>

            <ul>
            @forelse ($drivers as $driver)
                <li><a href="{{ $driver->url }}">{{ $driver->name }}</a></li>
            @empty
                <li>No drivers yet.</li>
            @endforelse
            </ul>
        @endforeach
    </div>
@endsection
