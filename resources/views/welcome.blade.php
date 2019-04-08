@extends('layouts.app')

@section('body')
    <div class="border-b flex items-center justify-center mb-8">
        <h1 class="font-sans py-4 text-5xl">Laravel Drivers</h1>
    </div>
    <div class="container mx-auto">
        <ul class="border-b flex list-reset">
            @php
                $activeType = Request::segments(0)[0];
            @endphp
            @foreach ($types as $eachtype)
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block px-4 py-2{{ $activeType == $eachtype->name ? ' border-l border-r border-t font-semibold rounded-t text-blue-dark' : ' border-b' }}" href="/{{ $eachtype->name }}">{{ ucwords($eachtype->name) }}</a>
            </li>
            @endforeach
        </ul>

        <h2 class="mt-4 text-3xl">{{ ucwords($type->name) }} Drivers</h2>

        <ul>
        @forelse ($type->drivers as $driver)
            <li><a href="{{ $driver->url }}">{{ $driver->name }}</a></li>
        @empty
            <li>No drivers yet.</li>
        @endforelse
        </ul>
    </div>
@endsection
