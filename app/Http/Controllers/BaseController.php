<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function root()
    {
        return view ('index');
    }
    public function home()
    {
        return view ('home');
    }
    public function about()
    {
        return view ('about');
    }
    public function principal()
    {
        return view ('principal');
    }
}
