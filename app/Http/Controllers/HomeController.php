<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

use App\Brand;
use App\Product;
session_start();

class HomeController extends Controller
{
    // public function index(){
    //     $cate_product = DB::table('tbl_categories')->orderby('CatID','desc')->get();
    //     $brand_product = DB::table('tbl_brand')->get();
    //     // $all_product = DB::table('tbl_products')
    //     // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_products.category_id')
    //     // ->join('tbl_tags','tbl_tags.tag_id','=','tbl_products.tag_id')->orderby('tbl_products.product_id','desc')->get();
    //     $all_product = DB::table('tbl_product')->orderby('PID','desc')->limit(8)->get();
    //     return view('pages.home')->with('category',$cate_product)->with('brand',$brand_product)->with('all_product',$all_product);
    // }
    public function index2(Request $request)
    {
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'asc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('BID','Asc')->get();
        
        $brand = DB::table('tbl_brand')->where('brand_status','0')->orderby('BID','Asc')->limit(4)->get(); 

        // $all_product = DB::table('tbl_products')
        // ->join('tbl_category_product','tbl_category_product.category_id','=','tbl_products.category_id')
        // ->join('tbl_tags','tbl_tags.tag_id','=','tbl_products.tag_id')->orderby('tbl_products.product_id','desc')->get();
        $all_product = DB::table('tbl_product')->orderby('PID', 'desc')->limit(4)->get();
        
        $product_by_brand = DB::table('tbl_brand')->join('tbl_product','tbl_product.BID','=','tbl_brand.BID')->limit(4)->get();

        $galery_product = DB::table('tbl_product')->orderby('PID','desc')->limit(1)->get();
        $bestseller = Product::orderBy('product_sold', 'DESC')->get();

        //$brand_tabs = Brand::orderBy('BID', 'DESC')->get();
        return view('pages.home')->with('bestseller', $bestseller)->with('category', $cate_product)->with('galery_product',$galery_product)->with('brand_product', $brand_product)->with('brand', $brand)->with('all_product', $all_product)->with('product_by_brand',$product_by_brand);
    }
    public function search(Request $request){
        //category post
        //$category_post = CatePost::orderBy('cate_post_id','DESC')->get();
         //slide
        //$slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();

        //seo 
        // $meta_desc = "Tìm kiếm sản phẩm"; 
        // $meta_keywords = "Tìm kiếm sản phẩm";
        // $meta_title = "Tìm kiếm sản phẩm";
        // $url_canonical = $request->url();
        //--seo
        $keywords = $request->keywords_submit;

        $cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_id','desc')->get(); 
        $brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

        $search_product = DB::table('tbl_product')->where('product_name','like','%'.$keywords.'%')->get(); 


        return view('pages.sanpham.search')->with('category',$cate_product)->with('brand',$brand_product)->with('search_product',$search_product);

    }


}