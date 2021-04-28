<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //Basic Controller
    // public function index($name)
    // {
    //     return 'Hi from HomeController, Name:' . $name;
    // }
    
    public function index($name = null)
    {
        return 'Hi from HomeController, Name:' . $name;
    }
}
