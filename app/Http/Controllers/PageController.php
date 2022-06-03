<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        return view('user.index');
    }

    public function pageNotFound()
    {
        return "404 not found";
    }
}
