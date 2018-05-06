<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Author;
use App\Book;
use Illuminate\Support\Facades\DB;

class WebManager extends Controller
{

    public function getBookDetail($id)
    {
    //  $book=Book::find($id);
      $books = DB::table('book')
            ->join('author','book.author_id', '=' ,'author.author_id')
            ->where('book_id',$id)
            ->get();
      $reviews = DB::table('book_review')
            ->where('book_review.book_id',$id)
            ->join('customer','book_review.user_id', '=', 'customer.user_id')
            ->select('customer.first_name','customer.last_name','book_review.*')
            ->get()->toArray();
      return view('pages.book_detail',['books'=>$books], 'reviews' => $reviews);

    public function getAdmin()
  	{
  		return view('pages.admin.frame');
    }
      
    public function getListCategory()
    {
    	$list = category::all();
    	return view('pages.admin.listCategory',['list'=>$list]);
    }

    public function getAddCategory()
    {
    	return view('pages.admin.addCategory');
    }

    public function postAddCategory(Request $req)
    {
    	$this->validate($req, 
    	[
    		'txtCateName' => 'required|unique:category,category_name'
    	], 
    	[
    		'txtCateName.requried'=>'Bạn chưa nhập thể loại',
    		'txtCateName.unique'=>'Thể loại đã tồn tại'
    	]);
    	$cate = new category;
    	$cate->category_name=$req->txtCateName;
    	$cate->save();
    	return redirect('admin/add-category')->with('thongbao','Thêm thành công');
    }

    public function getEditCategory($id)
    {
    	$category=category::where('category_id',$id)->get();
    	return view('pages.admin.editCategory',['category'=>$category]);
    }
    public function postEditCategory(Request $req)
    {
    	$id=$req->id;
    	$category=category::where('category_id',$id)->first();
    	$this->validate($req, 
    	[
    		'txtCateName' => 'required|unique:category,category_name'
    	], 
    	[
    		'txtCateName.requried'=>'Bạn chưa nhập thể loại',
    		'txtCateName.unique'=>'Thể loại đã tồn tại'
    	]);
    	$category->category_name=$req->txtCateName;
    	$category->save();
    	return redirect('admin/edit-category/'.$id)->with('thongbao','Sửa thành công');
    }

    public function getRemoveCategory($id)
    {
      $category=category::find($id);
      $category->delete();
      return redirect('/admin/list-category')->with('thongbao','Xoá thành công');
    }

    public function getListAuthor()
    {
    	$list = Author::all();
    	return view('pages.admin.listAuthor',['listAuthor'=>$list]);
    }

    public function getAddAuthor()
    {
    	return view('pages.admin.addAuthor');
    }

    public function postAddAuthor(Request $req)
    {
    	$author=new Author;
       	$author->name=$req->author_name;
        if($req->author_describe==null){
          $author->author_describe="";
        }else{
          $author->author_describe=$req->author_describe;
        }
       	
    	if($req->hasFile('author_picture')){
          $file = $req->author_picture;
          $this->validate($req,
          	[
          		'author_picture'=>'image|mimes:jpeg,png,jpg,gif,svg'
          	],
          	[
          		'author_picture.image'=>'File bạn vừa chọn không phải ảnh',
          		'author_picture.mimes'=>'Chỉ hỗ trợ ảnh đuôi:jpeg,png,jpg,gif,svg',
          	]);
          $filename=time().'-'.$file->getClientOriginalName();
      	  $file->move('images',$filename);  
      	  $author->author_image='images/'.$filename; 
       }
       else{
        $author->author_image="";
       }
       $author->save();
       
       return redirect('/admin/add-author')->with('thongbao','Thêm tác giả thành công');
    }

    public function getEditAuthor($id)
    {
    	$author=Author::where('author_id',$id)->first();
    	return view('pages.admin.editAuthor',['author'=>$author]);
    }

    public function postEditAuthor(Request $req)
    {
    	$author=Author::find($req->author_id);
    	$author->name=$req->author_name;
    	if($req->author_describe!=null){
    		$author->author_describe=$req->author_describe;
    	}
    	else{
    		$author->author_describe="";
    	}

    	if($req->hasFile('author_image')){
          $file = $req->author_image;
          $this->validate($req,
          	[
          		'author_image'=>'image|mimes:jpeg,png,jpg,gif,svg'
          	],
          	[
          		'author_image.image'=>'File bạn vừa chọn không phải ảnh',
          		'author_image.mimes'=>'Chỉ hỗ trợ ảnh đuôi:jpeg,png,jpg,gif,svg',
          	]);
          $filename=time().'-'.$file->getClientOriginalName();
      	  $file->move('images',$filename);  
      	  $author->author_image='images/'.$filename; 
       }
       $author->save();
       return redirect('/admin/edit-author/'.$req->author_id)->with('thongbao','Sửa tác giả thành công');
    }

    public function getRemoveAuthor($id)
    {
      $author=Author::find($id);
      $author->delete();
      return redirect('/admin/list-author')->with('thongbao','Xoá thành công');
    }

    public function getListBook()
    {
      $listBook=Book::all();
      return view('pages.admin.listBook',['listBook'=>$listBook]);
    }

    public function getAddBook()
    {
      $listCategory=category::all();
      $listAuthor=Author::all();
      return view('pages.admin.addBook',['listCategory'=>$listCategory,'listAuthor'=>$listAuthor]);
    }

    public function postAddBook(Request $req)
    {
      $this->validate($req,
        [
          'book_name'=>'required',
          'publish_year'=>'min:0',
          'price'=>'min:0',
          'quantity'=>'min:0'
        ]
        ,
        [
          'book_name.required'=>'Bạn chưa nhập tên sách',
          'publish_year.min'=>'Năm xuất bản không thể âm',
          'price.min'=>'Giá sách không thể âm',
          'quantity.min'=>'Số lượng không thể âm'
        ]);
      $book=new Book;
      $book->category_id=$req->category;
      $book->author_id=$req->author;
      $book->book_name=$req->book_name;
      if($req->ISBN==null){
        $book->ISBN="";
      }
      else{
        $book->ISBN=$req->ISBN;
      }
      if($req->language==null){
        $book->language="";
      }
      else{
        $book->language=$req->language;
      }
      if($book->publish_year==null){
        $book->publish_year=0;
      }
      else{
        $book->publish_year=$req->publish_year;
      }
      
      if($req->publisher==null){
        $book->publisher="";
      }
      else{
        $book->publisher=$req->publisher;
      }
      if($req->abstract==null){
        $book->abstract="";
      }else{
        $book->abstract=$req->abstract;
      }
      if($req->price==null){
        $book->price=0;
      }else{
        $book->price=$req->price;
      }
      if($req->rating==null){
        $book->rating=0;
      }else{
        $book->rating=$req->rating;
      }
      if($req->quantity==null){
        $book->quantity=0;
      }else{
        $book->quantity=$req->quantity;
      }
      
      if($req->hasFile('picture')){
          $file = $req->picture;
          $this->validate($req,
            [
              'picture'=>'image|mimes:jpeg,png,jpg,gif,svg'
            ],
            [
              'picture.image'=>'File bạn vừa chọn không phải ảnh',
              'picture.mimes'=>'Chỉ hỗ trợ ảnh đuôi:jpeg,png,jpg,gif,svg',
            ]);
          $filename=time().'-'.$file->getClientOriginalName();
          $file->move('images',$filename);  
          $book->picture='images/'.$filename; 
       }
       else{
        $book->picture="";
       }
      $book->save();

      return redirect('/admin/add-book')->with('thongbao','Thêm sách thành công');
    }

    public function getEditBook($id)
    {
      $book=Book::find($id);
      $listAuthor=Author::all();
      $listCategory=category::all();
      return view('pages.admin.editBook',['book'=>$book,'listAuthor'=>$listAuthor,'listCategory'=>$listCategory]);
    }

    public function postEditBook(Request $req)
    {
      $this->validate($req,
        [
          'book_name'=>'required',
          'publish_year'=>'min:0',
          'price'=>'min:0',
          'quantity'=>'min:0'
        ]
        ,
        [
          'book_name.required'=>'Bạn chưa nhập tên sách',
          'publish_year.min'=>'Năm xuất bản không thể âm',
          'price.min'=>'Giá sách không thể âm',
          'quantity.min'=>'Số lượng không thể âm'
        ]);
      $book=Book::find($req->book_id);
      $book->category_id=$req->category;
      $book->author_id=$req->author;
      $book->book_name=$req->book_name;
      if($req->ISBN==null){
        $book->ISBN="";
      }
      else{
        $book->ISBN=$req->ISBN;
      }
      if($req->language==null){
        $book->language="";
      }
      else{
        $book->language=$req->language;
      }
      if($book->publish_year==null){
        $book->publish_year=0;
      }
      else{
        $book->publish_year=$req->publish_year;
      }
      if($req->publisher==null){
        $book->publisher="";
      }
      else{
        $book->publisher=$req->publisher;
      }
      if($req->abstract==null){
        $book->abstract="";
      }else{
        $book->abstract=$req->abstract;
      }
      if($req->price==null){
        $book->price=0;
      }else{
        $book->price=$req->price;
      }
      if($req->rating==null){
        $book->rating=0;
      }else{
        $book->rating=$req->rating;
      }
      if($req->quantity==null){
        $book->quantity=0;
      }else{
        $book->quantity=$req->quantity;
      }
      
      if($req->hasFile('picture')){
          $file = $req->picture;
          $this->validate($req,
            [
              'picture'=>'image|mimes:jpeg,png,jpg,gif,svg'
            ],
            [
              'picture.image'=>'File bạn vừa chọn không phải ảnh',
              'picture.mimes'=>'Chỉ hỗ trợ ảnh đuôi:jpeg,png,jpg,gif,svg',
            ]);
          $filename=time().'-'.$file->getClientOriginalName();
          $file->move('images',$filename);  
          $book->picture='images/'.$filename; 
       }
      $book->save();

      return redirect('/admin/edit-book/'.$book->book_id)->with('thongbao','Sửa sách thành công');
    }

    public function getRemoveBook($id)
    {
      $book=Book::find($id);
      $book->delete();
      return redirect('/admin/list-book')->with('thongbao','Xoá thành công');
    }
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
