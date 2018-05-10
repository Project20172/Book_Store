<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Author;
use App\Book;
use App\Customer;
use Session;
use Illuminate\Support\Facades\DB;

class WebManager extends Controller
{


	public function getCheckUserName($id)
	{
		$customer=Customer::where('user_name',$id)->get();
		if(count($customer)>0){
			return 1;
		}
		else{
			return 0;
		}
	}

	public function postSendReview(Request $req)
	{
		$result = DB::table('book_review')->insert(['book_id'=>$req->book_id,'user_id'=>$req->customer_id,'rating'=>$req->rating,'reviews'=>$req->review,'review_date'=>NOW()]);
		if($result){
			$reviews = DB::table('book_review')
			->where('book_review.book_id',$req->book_id)
			->join('customer','book_review.user_id', '=', 'customer.user_id')
			->select('customer.first_name','customer.last_name','book_review.*')
			->get()->toArray();
			$str='<table id="book_reviews" class="table table-bordered">';
      //review
			foreach ($reviews as $review) {
				$str.='<tr>';
				$str.='<td class="col-sm-2">';
				$str.='<span>'.$review -> first_name.'</span>';
				$str.='<span>'.$review -> last_name.'</span>';
				$str.='<br>';
				$str.='<span>'.$review -> review_date.'</span>';
				$str.='</td>';
				$str.='<td class="col-sm-10">';
				for($i=0; $i < $review->rating; $i++){
					$str.='<span class="fa fa-star" style="color: orange;"></span>';
				}
				for($j=5; $j > $review->rating; $j--){
					$str.='<span class="fa fa-star"></span>';
				}
				$str.='<br>';
				$str.=$review ->reviews;
				$str.='</td>';
				$str.='</tr>';
			}
			$str.='</table>';
      //end review

      // edit

			$review_info1=DB::table('book_review')->selectRaw('COUNT(book_review.user_id) AS quantity,AVG(book_review.rating) As medium')->where('book_id',$req->book_id)->get();
			$temp=DB::table('book_review')->where('book_id',$req->book_id)->selectRaw('book_review.rating,COUNT(book_review.user_id)*100/(SELECT COUNT(*) FROM book_review) AS 
				percent')->groupby('book_review.rating')->get();
			$review_info2=array();

			foreach ($temp as $value) {
				$review_info2[$value->rating]=$value->percent;
			}
			$str1='';
			for ($i = 1; $i < 6; $i++) {
				try{
					if(array_key_exists($i,$review_info2)){
						$str1.='<div id="'.$i.'-star">';
						$str1.='        <div class="col-sm-2">';
						$str1.='          <span>'.$i.' </span><span class="fa fa-star checked"></span>';
						$str1.='        </div>';
						$str1.='        <div class="col-sm-10">';
						$str1.='          <div class="progress">';
						$str1.='              <div class="progress-bar progress-bar-success" 
						role="progressbar" aria-valuenow="40"
						aria-valuemin="0" aria-valuemax="100" style="width:'.$review_info2[$i].'%">'.
						$review_info2[$i].'%';
						$str1.='              </div>';
						$str1.='          </div>';
						$str1.='        </div>';
						$str1.='     </div>';
					}else{
						$str1.='<div id="'.$i.'-star">';
						$str1.='        <div class="col-sm-2">';
						$str1.='          <span>'.$i.' </span><span class="fa fa-star checked"></span>';
						$str1.='        </div>';
						$str1.='        <div class="col-sm-10">';
						$str1.='          <div class="progress">';
						$str1.='              <div class="progress-bar progress-bar-success" 
						role="progressbar" aria-valuenow="40"
						aria-valuemin="0" aria-valuemax="100" style="width: 0%">0%';
						$str1.='              </div>';
						$str1.='          </div>';
						$str1.='        </div>';
						$str1.='     </div>';
					}
				}catch(Exception $e){
					echo 'Caught exception: ',  $e->getMessage(), "\n";
				}
			}


      // end edit


			$review_info3 = DB::table('book_review')->selectRaw('COUNT(book_review.user_id) AS quantity,AVG(book_review.rating) As medium')->where('book_id',$req->book_id)->get();
			$str3='';
			foreach ($review_info3 as $value) {
				$str3.='<p>Đánh giá trung bình</p>';
				$str3.='<h1>'.$value->medium.'/5</h1>';
				$str3.='<p><span>('. $value->quantity .') nhận xét</span></p>';
			}
			$listEdit=array('str'=>$str,'str1'=>$str1,'str3'=>$str3);

			return $listEdit;
		}
		else{
			return 0;
		}
	}

	public function getBookDetail($id)
	{
		$books = DB::table('book')
		->join('author','book.author_id', '=' ,'author.author_id')
		->where('book_id',$id)
		->get();
		$reviews = DB::table('book_review')
		->where('book_review.book_id',$id)
		->join('customer','book_review.user_id', '=', 'customer.user_id')
		->select('customer.first_name','customer.last_name','book_review.*')
		->get()->toArray();
		$review_info1=DB::table('book_review')->selectRaw('COUNT(book_review.user_id) AS quantity,AVG(book_review.rating) As medium')->where('book_id',$id)->get();
		$temp=DB::table('book_review')->where('book_id',$id)->selectRaw('book_review.rating,COUNT(book_review.user_id)*100/(SELECT COUNT(*) FROM book_review) AS 
			percent')->groupby('book_review.rating')->get();
		$review_info2=array();

		foreach ($temp as $value) {
			$review_info2[$value->rating]=$value->percent;
		}
		return view('pages.book_detail',
			[
				'books'=>$books,
				'reviews' => $reviews,
				'review_info2'=>$review_info2,
				'review_info1'=>$review_info1
			]);
	}

	public function postCheckLogin(Request $req)
	{
		$check=Customer::whereRaw('user_name=? and password=?',[$req->username,$req->password])->get();
		if(sizeof($check)!=0){
			Session::put('UserLogin', $check[0]);
			return redirect('/home');
		}
		else{
			return redirect('/login')->with('thongbao','Sai UserName hoặc Password');
		}
	}

	public function getLogin()
	{
		return view('pages.login');
	}

	public function getLogout()
	{
		Session::forget('UserLogin');
		return redirect('/home');
	}

	public function getBookByAuthor($id)
	{
		$listBook=Book::where('author_id',$id)->paginate(12);
		$author=Author::find($id);
		return view('pages.loai_san_pham',['listBook'=>$listBook,'title'=>'Sách của '.$author->name]);
	}

	public function postSearchBook(Request $req)
	{
    //var_dump($req->search_content);
		$search_type=$req->search_type;
		if ($search_type==1) {

			// hoàng giang
			// $listBook=Book::join('category','category.category_id','=','book.category_id')
			// ->join('author','author.author_id','=','book.author_id')
			// ->whereRaw('book.book_name like CONCAT("%",?,"%") or book.publisher like CONCAT("%",?,"%") or author.name like CONCAT("%",?,"%") or category.category_name like CONCAT("%",?,"%")',[$req->search_content,$req->search_content,$req->search_content,$req->search_content])
			// ->get();

			// vân anh
			$listBook=DB::table('book')
			->join('author','book.author_id','=','author.author_id')
			->join('category','book.category_id','=','category.category_id')
			->where('book.book_name','like','%'.$req->search_content.'%')
			->orWhere('book.publisher','like','%'.$req->search_content.'%')
			->orWhere('author.name','like','%'.$req->search_content.'%')
			->orWhere('category.category_name','like','%'.$req->search_content.'%')
			->get();

      // $listBook=Book::join('category','category.category_id','=','book.category_id')
      // ->join('author','author.author_id','=','book.author_id')
      // ->whereRaw('book_name like CONCAT("%",?,"%")',[$req->search_content])
      // ->get();

      // $listBook=DB::select('
      //   SELECT * FROM book,category,author WHERE book.category_id=category.category_id AND book.author_id=author.author_id AND (book.book_name like "%?%" or book.publisher like "%?%" or author.name like "%?%" or category.category_name like "%?%")
      // ',[$req->search_content,$req->search_content,$req->search_content,$req->search_content]);

		} else if ($search_type==2) {

			$listBook=Book::where('book_name','LIKE','%'.$req->search_content.'%')->get();

      // $listBook=Book::whereRaw('book_name like CONCAT("%", CONVERT(?, BINARY), "%")',[$req->search_content])->get();

		} else if ($search_type==3) {

			$listBook=Book::join('author','book.author_id','=','author.author_id')->where('name','LIKE','%'.$req->search_content.'%')->get();

      // $listBook=Book::join('author','book.author_id','=','author.author_id')
      // ->whereRaw('author.author_name like CONCAT("%", CONVERT(?, BINARY), "%")',[$req->search_content])->get();

		} else if ($search_type==4) {

			$listBook=DB::table('book')->join('category','category.category_id','=','book.category_id')->
			where('category.category_name','LIKE','%'.$req->search_content.'%')->get();

      // $listBook=DB::table('book')->join('category','category.category_id','=','book.category_id')->
      // whereRaw('category.category_name like CONCAT("%", CONVERT(?, BINARY), "%")',[$req->search_content])->get();

		} else {

			$listBook=Book::where('publisher','LIKE','%'.$req->search_content.'%')->get();

      // $listBook=Book::whereRaw('publisher like CONCAT("%", CONVERT(?, BINARY), "%")',[$req->search_content])->get();

		}

    // $listBook=Book::where('book_name','LIKE','%'.$req->search_content.'%')->get();

		return $listBook;
	}

	public function getAdmin()
	{
		return view('pages.admin.frame');
	}

	public function getListCategory()
	{
		$list = category::all();
		return view('pages.admin.listCategory',['list'=>$list]);
	}

	public function getListCustomer()
	{
		$list = Customer::all();
		return view('pages.admin.listCustomer',['list'=>$list]);
	}

	public function getAddCategory()
	{
		return view('pages.admin.addCategory');
	}

	public function getAddCustomer()
	{
		return view('pages.admin.addCustomer');
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


	public function postAddCustomer(Request $req)
	{
		//echo $req->user_name;
		$customer=new Customer();
		$this->validate($req,
			[
				'user_name'=>'required|unique:customer,user_name',
				'password'=>'required',
				'first_name'=>'required',
				'last_name'=>'required'
			]
			,
			[
				'user_name.required'=>'Chưa nhập user_name',
				'user_name.unique'=>'User Name đã tồn tại',
				'password.required'=>'Chưa nhập password',
				'first_name.required'=>'Chưa nhập first_name',
				'last_name.required'=>'Chưa nhập last_name'
			]);
		$customer->user_name=$req->user_name;
		$customer->password=$req->password;
		$customer->first_name=$req->first_name;
		$customer->last_name=$req->last_name;
		$customer->address=$req->address;
		$customer->city=$req->city;
		$customer->email=$req->email;
		$customer->phone=$req->phone;
		$customer->save();
		
		return redirect('/admin/add-customer')->with('thongbao','Thêm khách hàng thành công');

	}

	public function postAddAuthor(Request $req)
	{
		$author=new Author;
		$author->name=$req->author_name;
		if($req->author_describe==null){
			$author->author_describe="";
		}
		else{
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

	public function postEditCustomer(Request $req)
	{
		$customer=Customer::find($req->user_id);

		$this->validate($req,
			[
				'password'=>'required',
				'first_name'=>'required',
				'last_name'=>'required'
			]
			,
			[
				'password.required'=>'Chưa nhập password',
				'first_name.required'=>'Chưa nhập first_name',
				'last_name.required'=>'Chưa nhập last_name'
			]);
		$customer->password=$req->password;
		$customer->first_name=$req->first_name;
		$customer->last_name=$req->last_name;
		if ($req->address==null) {
			$customer->address='';
		} else {
			$customer->address=$req->address;
		}

		if ($req->city==null) {
			$customer->city='';
		} else {
			$customer->city=$req->city;
		}

		if ($req->email==null) {
			$customer->email='';
		} else {
			$customer->email=$req->email;
		}
		
		if ($req->phone==null) {
			$customer->phone='';
		} else {
			$customer->phone=$req->phone;
		}
		$customer->save();
		
		return redirect('/admin/edit-customer/'.$req->user_id)->with('thongbao','Sửa thông tin khách hàng thành công');
	}

	public function getEditAuthor($id)
	{
		$author=Author::where('author_id',$id)->first();
		return view('pages.admin.editAuthor',['author'=>$author]);
	}

	public function getEditCustomer($id)
	{
		$customer=Customer::where('user_id',$id)->first();
		return view('pages.admin.editCustomer',['customer'=>$customer]);
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

	public function getRemoveCustomer($id)
	{
		$customer=Customer::find($id);
		$customer->delete();
		return redirect('/admin/list-customer')->with('thongbao','Xoá thành công');
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
		if($req->publish_year==null){
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
		if($req->publish_year==null){
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
