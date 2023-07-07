<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    function MyName($first, $middle, $last)
    {
        return "First Name: " . $first . "<br>Middle Name: " . $middle . "<br>Last Name: " . $last;
    }
}
