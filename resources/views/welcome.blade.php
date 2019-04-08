@extends('layouts.app')

@section('body')
    <div class="border-b flex items-center justify-center mb-8">
        <h1 class="font-sans py-4 text-5xl">Laravel Drivers</h1>
    </div>
    <div class="container mx-auto">
        <ul class="list-reset flex border-b">
            @php
                $activeType = Request::segments(0)[0];
            @endphp
            @foreach ($types as $eachtype)
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block py-2 px-4{{ $activeType == $eachtype->name ? ' text-blue-dark border-l border-t border-r rounded-t font-semibold' : ' border-b' }}" href="/{{ $eachtype->name }}">{{ ucwords($eachtype->name) }}</a>
            </li>
            @endforeach
        </ul>

        <h2 class="mt-4 text-3xl">{{ $type->name }} Drivers</h2>

        <ul>
        @forelse ($type->drivers as $driver)
            <li><a href="{{ $driver->url }}">{{ $driver->name }}</a></li>
        @empty
            <li>No drivers yet.</li>
        @endforelse
        </ul>
    </div>
@endsection
