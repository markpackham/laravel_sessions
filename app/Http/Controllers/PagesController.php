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

        Session::regenerate();

        /*
  Out put looks like this
  array:5 [▼
  "_token" => "UQ5eYxLG3ilZ34jflc51aDtlvrj9HiG2qoIQaQcy"
  "name" => array:1 [▶]
  "_previous" => array:1 [▶]
  "_flash" => array:2 [▶]
  "age" => array:3 [▶]
]
        */
        dd(Session::all());

        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
