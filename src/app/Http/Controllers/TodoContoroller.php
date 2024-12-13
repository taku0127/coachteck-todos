<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TodoContoroller extends Controller
{
    //
    function index(){
        return view('index');
    }
}
