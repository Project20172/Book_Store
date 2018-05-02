<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Author;

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
       	$author->author_describe=$req->author_describe;
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

       $author->save();
       
       return redirect('/admin/add-author')->with('thongbao','Thêm tác giả thành công');
    }

    public function getEditAuthor($id)
    {
    	$author=Author::where('author_id',$id)->first();
    	// echo $author->name;
    	// echo $author->author_image;
    	// echo $author->author_describe;
    	// echo '<pre>';
    	// var_dump($author);
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
}
