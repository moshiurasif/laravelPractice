<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function __invoke()
    {
        $data = ['Bangladesh', 'USA', 'Germany', 'Canada', 'Australia'];
        $isLoggedIn = false;
        return view('Front', ['dataKey' => $data, 'loggedInKey' => $isLoggedIn]);
    }
}
