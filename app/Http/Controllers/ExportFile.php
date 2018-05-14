<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;
use App\Book;
use App\category;
use App\Author;


class ExportFile extends Controller
{

	public function getExport($name,$a,$list)
	{
		$arrCharacters=['A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];

		$spreadsheet=new Spreadsheet;
		$sheet=$spreadsheet->getActiveSheet();
		// $a mảng danh sách các cột
		// $list là mảng các dòng cần ghi
		for ($i = 0; $i < count($a) ; $i++) {
			$sheet->setCellValue($arrCharacters[$i].'1',$a[$i]);
		}
		$row=2;
		foreach ($list as $value) {
			for ($i = 0; $i < count($a) ; $i++) {
				$sheet->setCellValue($arrCharacters[$i].$row,$value[$a[$i]]);
			}
			$row++;
		}
		$writer=new Xlsx($spreadsheet);
		$writer->save('export\\'.$name.' '.date('d-m-Y H-i-s',time()).'.xlsx');
	}

	public function getExportListBook()
	{
		$listBook=Book::all()->toArray();
		$this->getExport('listBook',array('book_id','category_id','author_id','book_name','ISBN','language','publish_year','publisher','abstract','price','picture','rating','quantity'),$listBook);
		echo 'Done';
	}

	public function getExportListCategory()
	{
		$list=category::all();
		$this->getExport('listCategory',array('category_id','category_name'),$list);
		echo 'Done';
	}

	public function getExportListAuthor()
	{
		$list=Author::all();
		$this->getExport('listAuthor',array('author_id','name','author_image','author_describe'),$list);
		echo 'Done';
	}
}
