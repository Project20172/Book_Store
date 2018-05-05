<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebManager extends Controller
{
    public function getAdmin()
  	{
  		return view('pages.admin.frame');
  	}
}
