<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function home() {
        //return 'Hello, World';
        $nombres = ["sebastian", "federico", "carmen"];
        return view('home')
            ->with('nombres', $nombres);
    }
}
