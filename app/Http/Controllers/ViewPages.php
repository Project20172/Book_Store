<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Book;
use App\Cart;
use Session;



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

    public function getAddToCart(Request $request, $book_id){

        $book = Book::find($book_id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($book, $book->book_id);

        $request->session()->put('cart', $cart);
        // dd($request->session()->get('cart'));

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
}