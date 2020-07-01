<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MainController extends Controller
{

    public function index($category_id=Null)
    {
    	if($category_id):
    		$section_title = DB::table('category_products')->find($category_id)->title;
    		$list_products_top = DB::table('list_products')->where('category_id', $category_id)->orderBy('ordered')->limit(12)->get();
    	else:
    		$section_title = 'ТОП ПРОДАЖ';
    		$list_products_top = DB::table('list_products')->where('top', 1)->orderBy('ordered')->get();
    	endif;
    	$category_products = DB::table('category_products')->get();
    	
        return view('index', ['list_products_top'=>$list_products_top, 'section_title'=>$section_title,
        	                  'category_products'=>$category_products]);
    }
    public function product_detail(Request $request, $id){
        $send_order = $request->get('send-order') ?? '';
    	$product = DB::table('list_products')->find($id);
    	return view('product_detail', ['product'=>$product, 'send_order'=>$send_order]);
    }
    public function product_photo_detail($id){
        $product = DB::table('list_products')->find($id);
        return view('product_photo_detail', ['product'=>$product]);
    }

}
