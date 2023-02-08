<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Brand;
use App\Product;
session_start();

class brandController extends Controller
{
   
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function add_brand(){
        $this->AuthLogin();
        return view('admin.add_brand');
    }
    public function all_brand(){
        $this->AuthLogin();
        $all_brand = DB::table('tbl_brand')->get();
        $manager_brand = view('admin.all_brand')->with('all_brand',$all_brand);

        return view('admin_layout')->with('admin.all_brand',$manager_brand);
    }

    public function save_brand(Request $request){
      
       	$data = array();
    	$data['brand_name'] = $request->brand_product_name;
        $data['brand_slug'] = $request->brand_slug;
    	$data['brand_desc'] = $request->brand_product_desc;
    	$data['brand_status'] = $request->brand_product_status;
        DB::table('tbl_brand')->insert($data);
        Session::put('message','Thêm brand Thành Công!');
        return Redirect::to('all-brand');
    }
    public function unactive_brand($BID){
        DB::table('tbl_brand')->where('BID',$BID)->update(['BStatus'=>1]);
        Session::put('message','Ẩn Thành Công');
        return Redirect::to('all-brand');
    }
    public function active_brand($BID){
        DB::table('tbl_brand')->where('BID',$BID)->update(['BStatus'=>0]);
        Session::put('message','Đã Được Hiển Thị');
        return Redirect::to('all-brand');
    }
    public function edit_brand($BID){
        $edit_brand = DB::table('tbl_brand')->where('BID', $BID)->get();
        $manager_brand = view('admin.edit_brand')->with('edit_brand',$edit_brand);

        return view('admin_layout')->with('admin.edit_brand',$manager_brand);
    }
    public function update_brand(Request $request,$BID){
        $data = array();
        $data['BName'] = $request->BName;
        Session::put('message','Cập Nhật Thành Công');
        DB::table('tbl_brand')->where('BID', $BID)->update($data);
        return Redirect::to('all-brand');

    }
    public function delete_brand($BID){
        DB::table('tbl_brand')->where('BID', $BID)->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all-brand');
    }
    //end admin function page
    public function show_brand_home(Request $request, $brand_slug){

        $cate_product = DB::table('tbl_categories')->orderby('CatID','asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('BID','Asc')->get(); 

        $brand_by_id = DB::table('tbl_product')->join('tbl_brand','tbl_product.BID','=','tbl_brand.BID')->where('tbl_brand.brand_slug',$brand_slug)->paginate(6);
        $brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_slug',$brand_slug)->limit(1)->get();
        //print_r($brand_by_id);
        return view('pages.sanpham.show_brand')->with('category',$cate_product)->with('brand_product',$brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name);
    }
    
}
