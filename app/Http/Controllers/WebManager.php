<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Author;
use App\Book;

class WebManager extends Controller
{
    public function getBookDetail($id)
    {
      $book=Book::find($id);
      return view('pages.book_detail',['book'=>$book]);
    }
}
