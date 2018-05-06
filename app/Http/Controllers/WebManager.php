<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Author;
use App\Book;

class WebManager extends Controller
{
    public function getNext3Book($book_id)
    {
      $listBook=Book::where('category_id','1')->skip($book_id)->take(3)->get();
      return $listBook;
    }

    public function getNextTabVanHoc($book_id)
    {
      $listBook=Book::where('category_id','1')->skip($book_id)->take(4)->get();
      return $listBook;
    }

    public function getPrevTabVanHoc($book_id)
    {
      $book_id=$book_id-4;
      $listBook=Book::where('category_id','1')->skip($book_id)->take(4)->get();
      return $listBook;
    }

    public function getPrev3Book($book_id)
    {
      $book_id=$book_id-4;
      $listBook=Book::where('category_id','1')->skip($book_id)->take(3)->get();
      return $listBook;
    }
}
