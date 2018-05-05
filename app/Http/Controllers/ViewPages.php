<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\category;
use App\Book;

class ViewPages extends Controller
{
    public function getAddToCart(Request $request, $book_id){

        $book = Book::find($book_id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($book, $book->book_id);

        $request->session()->put('cart', $cart);
        return redirect()->route('home');
    }

    public function getCart(){
        if(Session::has('cart')){
            $cart = Session::get('cart');
            return view('pages.carts', ['cart'=>$cart, 'items'=>$cart->items]);
        }
        $cart = null;
        return view('pages.carts', ['cart'=>$cart]);
    }

    public function getLoaiSanPham($id)
    {
        $category=category::find($id);
        $listBook1=$category->getAllBook()->paginate(12);
        $listBook2=category::find($id)->getAllBook()->paginate(12);
    	$listBook=Book::where('category_id',$id)->paginate(12);
    	return view('pages.loai_san_pham',['listBook'=>$listBook]);
    }
}
