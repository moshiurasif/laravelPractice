<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($first, $middle, $last)
    {
        return view('DemoView', ['firstKey' => $first, 'middleKey' => $middle, 'lastKey' => $last]);
    }
}
