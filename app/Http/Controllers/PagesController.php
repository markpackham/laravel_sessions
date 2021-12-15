<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class PagesController extends Controller
{
    public function index()
    {

        Session::put('name', ['Bill']);
        Session::put('age', [30, 35, 40]);

        Session::forget('name');

        dd(Session::all());

        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
