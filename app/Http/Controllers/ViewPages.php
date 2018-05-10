<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\category;
use App\Book;
use App\Cart;

class ViewPages extends Controller
{   
    public function getAddToCart(Request $request, $book_id){
        // echo "string";
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

    public function removeAllCart(Request $request){
        $request->session()->put('cart', null);
        return redirect()->route('cart');
    }

    public function updateCart(Request $request){
        $action = $request->get('action');
        $id = $request->get('id');
        if(Session::has('cart')){
            $cart = Session::get('cart');
            if($action == 'removeBook'){
                $cart->remove($id);
            } else if($action == 'increaseQty'){
                $cart->increase($id);
            } else if($action == 'decreaseQty'){
                $cart->decrease($id);
            }
            return 'ok';
        }
    }

    public function homepage()
    {
        $listBook=Book::where('category_id',1)->skip(0)->take(3)->get();
        $listVanHoc=Book::where('category_id',1)->skip(0)->take(4)->get();
        $listGiaoDuc=Book::where('category_id',2)->skip(0)->take(4)->get();
        $listThieuNhi=Book::where('category_id',5)->skip(0)->take(4)->get();
        $listTeen=Book::where('category_id',6)->skip(0)->take(4)->get();
        return view('pages.home',['listBook'=>$listBook,'listVanHoc'=>$listVanHoc,'listGiaoDuc'=>$listGiaoDuc,'listThieuNhi'=>$listThieuNhi,'listTeen'=>$listTeen]);
    }


    public function getContentCheckOut()
    {
        return view('pages.check_out');
    }

    public function getBuyBook()
    {
        return view('pages.buyBook');
    }

    public function getContentPayment()
    {
        return view('pages.payment');
    }


    public function getLoaiSanPham($id)
    {
        $category=category::find($id);
        $listBook=Book::where('category_id',$id)->paginate(12);
        return view('pages.loai_san_pham',['listBook'=>$listBook,'title'=>$category->category_name]);
    }
}
