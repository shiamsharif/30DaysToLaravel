<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionControler extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        dd(request()->all());
    }
}
