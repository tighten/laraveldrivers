<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function index()
    {
        return redirect()->route('types.show', [Type::orderBy('name')->first()->name]);
    }

    public function show(Type $type)
    {
        return view('welcome', [
            'type' => $type,
            'types' => Type::orderBy('name')->get(),
        ]);
    }
}
