<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SonController extends Controller
{
    public function index()
    {
        return view('home',['name' =>'Xin chao']);
    }
}
