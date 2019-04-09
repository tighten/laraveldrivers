@extends('layouts.app')

@section('body')
    <div class="border-b flex items-center justify-center mb-8">
        <h1 class="font-sans py-4 text-5xl">Laravel Drivers</h1>
    </div>
    <div class="container px-4 mx-auto">
        @php
            $activeType = Request::segments(0)[0];
        @endphp
        <ul class="border-b hidden list-reset md:flex">
            @foreach ($types as $eachtype)
            <li class="-mb-px mr-1">
                <a class="bg-white inline-block px-4 py-2 hover:text-blue-darker{{ $activeType == $eachtype->name ? ' border-l border-r border-t font-semibold no-underline rounded-t text-blue-dark' : ' border-b text-blue' }}" href="/types/{{ $eachtype->name }}">{{ ucwords($eachtype->name) }}</a>
            </li>
            @endforeach
        </ul>
        <span class="font-semibold md:hidden">Types</span>
        <ul class="md:hidden">
            @foreach ($types as $eachtype)
            <li class="-mb-px mr-1">
                <a class="hover:text-blue-darker{{ $activeType == $eachtype->name ? ' font-semibold text-blue-dark' : ' text-blue' }}" href="/types/{{ $eachtype->name }}">{{ ucwords($eachtype->name) }}</a>
            </li>
            @endforeach
        </ul>

        <h2 class="mb-2 mt-4 text-3xl">{{ ucwords($type->name) }} Drivers</h2>

        <ul>
        @forelse ($type->drivers as $driver)
            <li><a href="{{ $driver->url }}">{{ $driver->name }}</a></li>
        @empty
            <li>No drivers yet.</li>
        @endforelse
        </ul>
    </div>
@endsection
