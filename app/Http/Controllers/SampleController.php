<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    public function index(){
        return 'Hello from Controller!';
    }

    public function show(){
        return view('demo.show', ['message'=>'Hello from Controller!']);
    }
}
