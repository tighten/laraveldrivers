<?php

namespace App\Http\Controllers;

use App\Models\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('types.show', [Type::orderBy('name')->first()->name]);
    }
}
