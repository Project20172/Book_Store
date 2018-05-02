<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Book;


class ViewPages extends Controller
{
    //
    public function homepage()
    {
    	return view('pages.home');
    }

    public function getLoaiSanPham($id)
    {
    	$listBook=Book::where('category_id',$id)->get();
    	return view('pages.loai_san_pham',['listBook'=>$listBook]);
    }
}
