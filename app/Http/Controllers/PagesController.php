<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\SessionModel;

class PagesController extends Controller
{
    public function index()
    {
        $session = SessionModel::all();

        // dd(Session::all());
        dd($session);

        return view('index');
    }

    public function about()
    {
        return view('about');
    }
}
