<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class PagesController extends Controller
{
     /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function welcome()
    {
        return view('welcome');
    }
}