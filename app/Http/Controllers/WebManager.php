<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Author;
use App\Book;

class WebManager extends Controller
{
    public function getAdmin()
  	{
  		return view('pages.admin.frame');
    }
      
    public function getListCategory()
    {
    	$list = category::all();
    	return view('pages.admin.listCategory',['list'=>$list]);
    }
}
