<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\CategoryProductModel;
use App\Product;
use Auth;
use App\Http\Requests;
session_start();

class CategoryProduct extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    // public function add_category_product(){
    //     $this->AuthLogin();
    //     return view('admin.add_category');
    // }
    public function add_category_product(){
        $this->AuthLogin();
        $category = CategoryProductModel::where('category_parent',0)->orderBy('CatID','DESC')->get();
        return view('admin.add_category')->with(compact('category'));
    }
    public function all_category_product(){
        $this->AuthLogin();

        $all_category_product = DB::table('tbl_categories')->get();
        $manager_category = view('admin.all_category')->with('all_category_product',$all_category_product);

        return view('admin_layout')->with('admin.all_category',$manager_category);
    }

    public function save_category_product(Request $request){
        $this->AuthLogin();
        $data = array();

        $data['category_name'] = $request->category_product_name;
        $data['category_parent'] = $request->category_parent;
        $data['meta_keywords'] = $request->category_product_keywords;
        $data['slug_category_product'] = $request->slug_category_product;
        $data['category_desc'] = $request->category_product_desc;
        $data['category_status'] = $request->category_product_status;

        DB::table('tbl_categories')->insert($data);
        Session::put('message','Thêm danh mục sản phẩm thành công');
        return Redirect::to('all-category');
    }
    public function unactive_category($CatID){
        DB::table('tbl_categories')->where('CatID',$CatID)->update(['category_status'=>1]);
        Session::put('message','Ẩn Thành Công');
        return Redirect::to('all-category');
    }
    public function active_category($CatID){
        DB::table('tbl_categories')->where('CatID',$CatID)->update(['category_status'=>0]);
        Session::put('message','Đã Được Hiển Thị');
        return Redirect::to('all-category');
    }
    public function edit_category_product($CatID){
        $edit_category_product = DB::table('tbl_categories')->where('CatID', $CatID)->get();
        $manager_category = view('admin.edit_category')->with('edit_category_product',$edit_category_product);

        return view('admin_layout')->with('admin.edit_category',$manager_category);
    }
    public function update_category_product(Request $request,$CatID){
        $data = array();
        $data['CateName'] = $request->category_product_name;
        Session::put('message','<b>Cập Nhật Thành Công</b>');
        DB::table('tbl_categories')->where('CatID', $CatID)->update($data);
        return Redirect::to('all-category');

    }
    public function delete_category_product($CatID){
        DB::table('tbl_categories')->where('CatID', $CatID)->delete();
        Session::put('message','Xóa Thành Công');
        return Redirect::to('all-category');
    }
    public function show_category_home(Request $request ,$slug_category_product){

        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'asc')->get();
        $tag_product = DB::table('tbl_brand')->orderby('BID','asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('BID','asc')->get(); 
        // $category_by_id = DB::table('tbl_product')
        // ->join('tbl_categories','tbl_product.CatID','=','tbl_categories.CatID')
        // ->where('tbl_product.CatID',$request->CatID)->get();
        $category_by_slug = CategoryProductModel::where('slug_category_product',$slug_category_product)->get();
        
        $CateName = DB::table('tbl_categories')->where('tbl_categories.slug_category_product',$slug_category_product)->limit(1)->get();

        $min_price = Product::min('product_price');
        $max_price = Product::max('product_price');

        $min_price_range = $min_price + 500000;
        $max_price_range = $max_price + 10000000;

        foreach($category_by_slug as $key => $cate){
            $CatID = $cate->CatID;
        }

        if(isset($_GET['sort-by'])){

            $sort_by = $_GET['sort-by'];

            if($sort_by=='giam_dan'){

                $category_by_id = Product::with('category')->where('CatID',$CatID)->orderBy('product_price','DESC')->paginate(6)->appends(request()->query());
                
            }elseif($sort_by=='tang_dan'){

              $category_by_id = Product::with('category')->where('CatID',$CatID)->orderBy('product_price','ASC')->paginate(6)->appends(request()->query());

          }elseif($sort_by=='kytu_za'){

           $category_by_id = Product::with('category')->where('CatID',$CatID)->orderBy('product_name','DESC')->paginate(6)->appends(request()->query());


       }elseif($sort_by=='kytu_az'){

        $category_by_id = Product::with('category')->where('CatID',$CatID)->orderBy('product_name','ASC')->paginate(6)->appends(request()->query());
    }

}elseif(isset($_GET['start_price']) && $_GET['end_price']){

    $min_price = $_GET['start_price'];
    $max_price = $_GET['end_price'];

    $category_by_id = Product::with('category')->whereBetween('product_price',[$min_price,$max_price])->orderBy('product_price','ASC')->paginate(6);

}else{
    $category_by_id = Product::with('category')->where('CatID',$CatID)->orderBy('PID','DESC')->paginate(6);
   
}


$category_name = DB::table('tbl_categories')->where('tbl_categories.slug_category_product',$slug_category_product)->limit(1)->get();

foreach($category_name as $key => $val){
                //seo 
    $meta_desc = $val->category_desc; 
    $meta_keywords = $val->meta_keywords;
    $meta_title = $val->category_name;
    $url_canonical = $request->url();
                //--seo
}
        return view('pages.sanpham.show_category')->with('category',$cate_product)->with('brand',$tag_product)->with('category_by_slug',$category_by_slug)->with('CateName',$CateName)->with('brand_product',$brand_product)->with('category_by_id',$category_by_id)->with('category_name',$category_name)->with('meta_desc',$meta_desc)->with('meta_keywords',$meta_keywords)->with('meta_title',$meta_title)->with('url_canonical',$url_canonical)->with('min_price',$min_price)->with('max_price',$max_price)->with('max_price_range',$max_price_range)->with('min_price_range',$min_price_range);
    }
}
