<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home1()
    {
        return view('Admin/admin-home');
    }
    
}