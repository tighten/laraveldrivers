<?php

namespace App\Http\Controllers;

use App\Type;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return redirect()->route('types.show', [Type::orderBy('name')->first()->name]);
    }
}
