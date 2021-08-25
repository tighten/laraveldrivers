<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\Type;
use Illuminate\Http\Request;

class DriverController extends Controller
{
    public function create()
    {
        return view('drivers.create', [
            'types' => Type::orderBy('name')->get(),
        ]);
    }

    public function store()
    {
        Driver::create(array_merge(
            ['is_approved' => false],
            request()->only([
                'name',
                'url',
                'type_id',
            ])
        ));

        return redirect()->route('types.index');
    }
}
