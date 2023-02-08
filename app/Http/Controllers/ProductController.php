<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;
use Auth;
use App\Brand;
use App\Slider;
use App\CatePost;
use App\Gallery;
use App\Comment;
use App\Product;
use App\Rating;
use Illuminate\Support\Facades\File;
use Storage;
use App\Http\Requests;

session_start();
class ProductController extends Controller
{
    public function AuthLogin()
    {
        $admin_id = Session::get('admin_id');
        if ($admin_id) {
            return Redirect::to('dashboard');
        } else {
            return Redirect::to('admin')->send();
        }
    }
    public function add_product()
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();



        return view('admin.add_product')->with('cate_product', $cate_product)->with('brand_product', $brand_product);
    }
    public function all_product()
    {
        $this->AuthLogin();
        $all_product = DB::table('tbl_product')
            ->join('tbl_categories', 'tbl_categories.CatID', '=', 'tbl_product.CatID')
            ->join('tbl_brand', 'tbl_brand.BID', '=', 'tbl_product.BID')
            ->orderby('tbl_product.PID', 'desc')->get();

        $manager_product = view('admin.all_product')->with('all_product', $all_product);

        return view('admin_layout')->with('admin.all_product', $manager_product);
    }

    // public function save_product(Request $request){
    //    $data = array();

    //     $data['BID'] = $request->BID;
    //     $data['CatID'] = $request->CatID;
    //     $data['PName'] = $request->PName;
    //     $data['PCost'] = $request->PCost;
    //     $data['PPrice'] = $request->PPrice;
    //     $data['PSize'] = $request->PSize;
    //     $data['PStock'] = $request->PStock;
    //     $get_image = $request->file('PPhoto');

    //     if($get_image){
    //         //$get_name_image = $get_image->getClientOriginalExtension();

    //         $new_image = $data['PName'].'.'.$get_image->getClientOriginalExtension();
    //         $get_image->move('public/uploads/product',$new_image);
    //         $data['PPhoto'] = $new_image;
    //         DB::table('tbl_product')->insert($data);
    //     Session::put('message','Thêm Sản Phẩm Thành Công!');
    //     return Redirect::to('all-product');
    //     }
    //     $data['PPhoto'] = '';
    //     DB::table('tbl_product')->insert($data);
    //     Session::put('message','Thêm Sản Phẩm Thành Công!');
    //     return Redirect::to('all-product');

    // }
    public function save_product(Request $request)
    {
        $this->AuthLogin();
        $data = array();

        $product_price = filter_var($request->product_price, FILTER_SANITIZE_NUMBER_INT);
        $price_cost = filter_var($request->price_cost, FILTER_SANITIZE_NUMBER_INT);

        $data['product_name'] = $request->product_name;
        $data['price_cost'] = $price_cost;
        $data['product_tags'] = $request->product_tags;
        // $data['product_quantity'] = $request->product_quantity;
        $data['product_slug'] = $request->product_slug;
        $data['product_price'] = $request->product_price;
        $data['product_size'] = $request->product_size;
        $data['product_desc'] = $request->product_desc;
        $data['product_content'] = $request->product_content;
        $data['CatID'] = $request->product_cate;
        $data['BID'] = $request->product_brand;
        $data['product_status'] = $request->product_status;
        $data['product_image'] = $request->product_status;

        $get_image = $request->file('product_image');

        $path = 'public/uploads/product/';
        $path_gallery = 'public/uploads/product/';
        //them hinh anh
        if ($get_image) {

            $get_name_image = $get_image->getClientOriginalName();
            $name_image = current(explode('.', $get_name_image));
            $new_image = $name_image . rand(0, 99) . '.' . $get_image->getClientOriginalExtension();
            $get_image->move($path, $new_image);
            File::copy($path . $new_image, $path_gallery . $new_image);
            $data['product_image'] = $new_image;

        }
        //them document

        $pro_id = DB::table('tbl_product')->insertGetId($data);
        $gallery = new Gallery();
        $gallery->gallery_image = $new_image;
        $gallery->gallery_name = $new_image;
        $gallery->product_id = $pro_id;
        $gallery->save();

        Session::put('message', 'Thêm sản phẩm thành công');
        return Redirect::to('add-product');
    }
    public function unactive_product($product_id)
    {
        DB::table('tbl_products')->where('product_id', $product_id)->update(['product_status' => 1]);
        Session::put('message', 'Ẩn Thành Công');
        return Redirect::to('all-product');
    }
    public function active_product($product_id)
    {
        DB::table('tbl_products')->where('product_id', $product_id)->update(['product_status' => 0]);
        Session::put('message', 'Đã Được Hiển Thị');
        return Redirect::to('all-product');
    }
    public function edit_product($product_id)
    {
        $this->AuthLogin();
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $tag_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();

        $edit_product = DB::table('tbl_product')->where('PID', $product_id)->get();
        $manager_product = view('admin.edit_product')->with('edit_product', $edit_product)->with('cate_product', $cate_product)->with('tag_product', $tag_product);

        return view('admin_layout')->with('admin.edit_product', $manager_product);
    }
    public function update_product(Request $request, $product_id)
    {
        $data = array();
        $data['BID'] = $request->BID;
        $data['CatID'] = $request->CatID;
        $data['PName'] = $request->PName;
        $data['PCost'] = $request->PCost;
        $data['PPrice'] = $request->PPrice;
        $data['PSize'] = $request->PSize;
        $data['PStock'] = $request->PStock;
        $get_image = $request->file('PPhoto');

        if ($get_image) {
            //$get_name_image = $get_image->getClientOriginalExtension();
            $new_image = $data['PName'] . '.' . $get_image->getClientOriginalExtension();
            $get_image->move('public/uploads/product', $new_image);
            $data['PPhoto'] = $new_image;
            DB::table('tbl_product')->where('PID', $product_id)->update($data);
            Session::put('message', 'Cập Nhật Sản Phẩm Thành Công!');
            return Redirect::to('all-product');
        }
        DB::table('tbl_product')->where('PID', $product_id)->update($data);
        Session::put('message', 'Cập Nhật Sản Phẩm Thành Công!');
        return Redirect::to('all-product');

    }
    public function delete_product($product_id)
    {
        DB::table('tbl_product')->where('PID', $product_id)->delete();
        Session::put('message', 'Xóa Thành Công');
        return Redirect::to('all-product');
    }
    //END ADMIN PAGES TABLE

    public function details_product($product_slug)
    {

        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->where('brand_status', '0')->orderby('BID', 'Asc')->get();

        $detail_product = DB::table('tbl_product')
            ->join('tbl_categories', 'tbl_categories.CatID', '=', 'tbl_product.CatID')
            ->join('tbl_brand', 'tbl_brand.BID', '=', 'tbl_product.BID')
            ->where('tbl_product.product_slug', $product_slug)->get();

        foreach ($detail_product as $key => $value) {
            $category_id = $value->CatID;

        }
        $related_product = DB::table('tbl_product')
            ->join('tbl_categories', 'tbl_categories.CatID', '=', 'tbl_product.CatID')
            ->join('tbl_brand', 'tbl_brand.BID', '=', 'tbl_product.BID')
            ->where('tbl_categories.CatID', $category_id)->whereNotIn('tbl_product.BID', [$product_slug])->get();


        return view('pages.sanpham.show_details')->with('category', $cate_product)->with('brand_product', $brand_product)->with('detail_product', $detail_product)->with('related_product', $related_product);
    }

    public function add_color()
    {
        $product_color = DB::table('tbl_product')->get();
        return view('pages.sanpham.add_color')->with('product_color', $product_color);
    }


    public function product_tabs(Request $request)
    {

        $data = $request->all();

        $output = '';
        $product = Product::where('BID', $data['cate_id'])->orderBy('PID', 'DESC')->get();

        $product_count = $product->count();
        if ($product_count > 0) {
            foreach ($product as $key => $val) {
                $output .= '<input type="hidden" value="' . $val->PID . '" data-id="' . $val->PID . '" class="PID' . $val->PID . '">
                <input type="hidden" value="' . csrf_token() . '" data-content="' . csrf_token() . '" class="token_' . $val->PID . '">

                <input type="hidden" value="' . $val->PID . '" class="cart_product_id_' . $val->PID . '">

                <input type="hidden" id="wishlist_productname' . $val->PID . '" value="' . $val->product_name . '" class="cart_product_name_' . $val->PID . '">
              
                <input type="hidden" value="' . $val->product_quantity . '" class="cart_product_quantity_' . $val->PID . '">
                
                <input type="hidden" value="' . $val->product_image . '" class="cart_product_image_' . $val->PID . '">

                <input type="hidden" id="wishlist_productprice' . $val->PID . '" value="' . number_format($val->product_price, 0, ',', '.') . 'USD">

                <input type="hidden" value="' . $val->product_price . '" class="cart_product_price_' . $val->PID . '">

                <input type="hidden" value="1" class="cart_product_qty_' . $val->PID . '">

                <a id="wishlist_producturl' . $val->PID . '"  href="' . url('chi-tiet/' . $val->product_slug) . '">';
                $output .= '<li class="item col-lg-3 col-md-3 col-sm-4 col-xs-6 active">
            <div class="item-inner">

              <div class="item-img">
               <div class="item-img-info">
                <a class="product-image" href="' . url('product/' . $val->product_slug) . '" title="Decorative Floating wall shelf">
                                       <img width="199px" height="249px" src="' . url('public/uploads/product/' . $val->product_image) . '" alt="Decorative Floating wall shelf" title="Decorative Floating wall shelf">
                                       </a>
                 


               <div class="box-hover">
               <ul class="add-to-links">
                                           <li>
                   <a href="' . url('product/' . $val->product_slug) . '" class="link-quickview" data-name="Decorative Floating wall shelf">Quick View</a>
                 </li>
                   
                 <li>
                   <a onclick="mgk_hm_wishlist" class="link-wishlist">Wishlist</a> 
                 </li>
                
               </ul>
             </div>
               </div>
               <div class="item-title"> 
               <a title="'.$val->product_name.'" href="' . url('product/' . $val->product_slug) . '"><b>'.$val->product_name.'</b></a>
             </div>
                     

                  </div>
               </div>  <!-- End Item info --> 
           </div>  <!-- End  Item inner--> 
         </li>';
            }
        } else {

            $output .= '<div class="tab-panel active" id="tab-1">
            <div class="category-products">
              <b style="text-align: center">Not Have Item</b>
          </div>
      </div>
            
            
            ';
        }
        echo $output;



    }

}