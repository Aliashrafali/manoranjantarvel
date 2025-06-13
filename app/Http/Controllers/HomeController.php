<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function Index(){
        $name = "Manoranjan";
        return view('index', compact('name'));
    }
}
