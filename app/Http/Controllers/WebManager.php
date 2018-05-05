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
}
