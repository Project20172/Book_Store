<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewPages extends Controller
{
    public function homepage()
    {
    	return view('pages.home');
    }
}
