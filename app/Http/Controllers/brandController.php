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
        $min_price = Product::min('product_price');
        $max_price = Product::max('product_price');

        $min_price_range = $min_price + 500000;
        $max_price_range = $max_price + 10000000;
        $brand_by_slug = Brand::where('brand_slug',$brand_slug)->get();
        foreach($brand_by_slug as $key => $cate){
            $BID = $cate->BID;
        }

        if(isset($_GET['sort-by'])){

            $sort_by = $_GET['sort-by'];

            if($sort_by=='giam_dan'){

                $brand_by_slug = Product::with('brand')->where('BID',$BID)->orderBy('product_price','DESC')->paginate(6)->appends(request()->query());
                
            }elseif($sort_by=='tang_dan'){

              $brand_by_slug = Product::with('brand')->where('BID',$BID)->orderBy('product_price','ASC')->paginate(6)->appends(request()->query());

          }elseif($sort_by=='kytu_za'){

           $brand_by_slug = Product::with('brand')->where('BID',$BID)->orderBy('product_name','DESC')->paginate(6)->appends(request()->query());


       }elseif($sort_by=='kytu_az'){

        $brand_by_slug = Product::with('brand')->where('BID',$BID)->orderBy('product_name','ASC')->paginate(6)->appends(request()->query());
    }

}elseif(isset($_GET['start_price']) && $_GET['end_price']){

    $min_price = $_GET['start_price'];
    $max_price = $_GET['end_price'];

    $brand_by_slug = Product::with('brand')->whereBetween('product_price',[$min_price,$max_price])->orderBy('product_price','ASC')->paginate(6);

}else{
    $brand_by_slug = Product::with('brand')->where('BID',$BID)->orderBy('PID','DESC')->paginate(6);
   
}
$brand_name = DB::table('tbl_brand')->where('tbl_brand.brand_slug',$brand_slug)->limit(1)->get();

foreach($brand_name as $key => $val){
    //seo 
    $meta_desc = $val->brand_desc; 
    $meta_keywords = $val->brand_desc;
    $meta_title = $val->brand_name;
    $url_canonical = $request->url();
    //--seo
}
        return view('pages.sanpham.show_brand')->with('category',$cate_product)->with('brand_product',$brand_product)->with('brand_by_id',$brand_by_id)->with('brand_name',$brand_name)->with('brand_by_slug',$brand_by_slug);
    }
    
}
