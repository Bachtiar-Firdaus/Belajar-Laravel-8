<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $name = 'Bachtiar Firdaus';
        $users = array(
            "name"=>"Bachtiar",
            "email"=>"id.bachtiar.firdaus@gmail.com",
            "phone"=>"+62 878 5454 4933"
        );
        return view('user',compact('name','users'));
    }
}
