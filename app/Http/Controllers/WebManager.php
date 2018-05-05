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
}
