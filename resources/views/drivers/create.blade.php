@extends('layouts.app')

@section('body')
    <div class="container px-4 mx-auto">
        <h2>Suggest a driver</h2>

        <form action="{{ route('drivers.store') }}" method="post" class="mt-4">
            @csrf

            <label for="" class="">Name</label><br>
            <input type="text" name="name" class="border p-2" autofocus required><br><br>

            <label for="" class="">URL</label><br>
            <input type="text" name="url" class="border p-2" required><br><br>

            <label for="" class="">Type</label><br>
            <select name="type_id" class="border p-2" required>
                <option></option>
                @foreach ($types as $type)
                    <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>

            <br><br>

            <input type="submit" class="bg-grey-lighter hover:bg-grey-light cursor-pointer border p-3 px-4 rounded" value="Suggest driver">
        </form>
    </div>
@endsection
