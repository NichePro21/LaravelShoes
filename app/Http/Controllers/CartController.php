<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;
use Carbon\Carbon;

session_start();

class CartController extends Controller
{
    public function hover_cart()
    {
        // {{asset('public/uploads/product/12315.jpg')}}
        $sessioncart = Session::get('cart');
        print_r($sessioncart);
        $cart = count(Session::get('cart'));

        $output = '';
        if ($cart > 0) {

            $output .= '<ul class="hover-cart">';
            foreach (Session::get('cart') as $key => $value) {
                $output .= '<li><a href="#">
                                            <img src="' . asset('public/uploads/product/' . $value['product_image']) . '">
                                            <p>' . $value['product_name'] . '</p>
                                            <p>' . number_format($value['product_price'], 0, ',', '.') . 'vnđ</p>
                                            <p>Số lượng: ' . $value['product_qty'] . '</p>
                                        </a>
                                        <p><a style="text-align:center;font-size:20px" class="delele-hover-cart" href="' . url('/del-product/' . $value['session_id']) . '">
                                            <i class="fa fa-times"></i>
                                        </a></p>

                                        </li>';
            }
            $output .= '</ul>';

        }
        // elseif($cart==''){
        //     $output.='<ul class="hover-cart">
        //                                 <li><p>Giỏ hàng trống</p></li>
        //                             </ul>'; 
        // }

        echo $output;
    }
    public function cart_session()
    {

        $output = '';

        if (Session::get('cart') == true) {
            foreach (Session::get('cart') as $key => $value) {

                $output .= '<input type="hidden" class="cart_id" value="' . $value['product_id'] . '">';
            }
        }
        echo $output;
    }
    public function remove_item(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');

        if ($cart == true) {

            foreach ($cart as $key => $val) {
                if ($val['product_id'] == $data['id']) {
                    unset($cart[$key]);
                }
            }

            Session::put('cart', $cart);

        }

    }
    public function update_cart(Request $request)
    {
        $data = $request->all();
        $cart = Session::get('cart');
        if ($cart == true) {
            // $message = '';

            foreach ($data['cart_qty'] as $key => $qty) {
             dd($data['cart_qty']);
            //     $i = 0;
               // foreach ($cart as $session => $val) {
                    //$i++;

                    //  if ($val['session_id'] == $key) {

                    //    $cart[$session]['product_qty'] = $qty;
                    //     $message .= '<p style="color:blue">' . $i . ') Cập nhật số lượng :' . $cart[$session]['product_name'] . ' thành công</p>';

                    // } elseif ($val['session_id'] == $key && $qty > $cart[$session]['product_quantity']) {
                    //     $message .= '<p style="color:red">' . $i . ') Cập nhật số lượng :' . $cart[$session]['product_name'] . ' thất bại</p>';
                     //}

                //}

            }

          //  Session::put('cart', $cart);
            return redirect()->back()->with('message', 'ok');
        } else {
            return redirect()->back()->with('message', 'Cập nhật số lượng thất bại');
        }
    }
    public function show_cart_menu()
    {
        $cart = count(Session::get('cart'));
        $output = '';
        $output .= '<span class="badges">' . $cart . '</span>';
        echo $output;
    }

    public function save_cart(Request $request)
    {
        // $data = $request->all();
        // //print_r($data);
        // $PID = $request->productid_hidden;
        // $quantity = $request->qty;
        // $product_info = DB::table('tbl_product')->where('PID', $PID)->first();
        // $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        // $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        // //Cart::add('293ad', 'Product 1', 1, 9.99, 550);
        // // Cart::instance('shopping')->add('192ao12', 'Product 1', 1, 9.99, 550);
        // //Cart::destroy();
        // $data['id'] = $product_info->PID;
        // $data['qty'] = $quantity;
        // $data['name'] = $product_info->PName;
        // $data['price'] = $product_info->PPrice;
        // $data['weight'] = $product_info->PPrice;
        // $data['options']['size'] = $product_info->PSize;
        // $data['options']['image'] = $product_info->PPhoto;

        // Cart::add($data);
        // Cart::setGlobalTax(10);
        //Cart::destroy();
       // return Redirect::to('/show-cart');

   //     return view('pages.cart.show_cart')->with('category', $cate_product)->with('brand', $brand_product);


    }
    public function show_cart()
    {


        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        return view('pages.cart.show_cart_ajax')->with('category', $cate_product)->with('brand_product', $brand_product);
    }
    public function delete_to_cart($rowId)
    {
        Cart::update($rowId, 0);

        return Redirect::to('/show-cart');
    }
    public function update_cart_quantity(Request $request)
    {
        $rowId = $request->rowId_cart;
        $qty = $request->cart_quantity;
        Cart::update($rowId, $qty);
        return Redirect::to('/show-cart');

    }
    public function add_cart_ajax(Request $request)
    {
        // Session::forget('cart');
        $data = $request->all();
        print_r($data);
        $session_id = substr(md5(microtime()), rand(0, 26), 5);
        $cart = Session::get('cart');

        if ($cart == true) {
               $is_avaiable = 0;
                foreach($cart as $key => $val){
                    if($val['PID']==$data['cart_product_id']){
                      $is_avaiable++;
                   }
               }
               if($is_avaiable == 0){
                 $cart[] = array(
                        'session_id' => $session_id,
                        'product_name' => $data['cart_product_name'],
                        'PID' => $data['cart_product_id'],
                        'product_image' => $data['cart_product_image'],
                        'product_quantity' => $data['cart_product_quantity'],
                        'product_qty' => $data['cart_product_qty'],
                        'product_price' => $data['cart_product_price'],
                        'product_size' => $data['cart_product_size'],
                    );
                   Session::put('cart',$cart);
                }
        } else {
            $cart[] = array(
                'session_id' => $session_id,
                'product_name' => $data['cart_product_name'],
                'PID' => $data['cart_product_id'],
                'product_image' => $data['cart_product_image'],
                'product_quantity' => $data['cart_product_quantity'],
                'product_qty' => $data['cart_product_qty'],
                'product_price' => $data['cart_product_price'],
                'product_size' => $data['cart_product_size'],

            );
            Session::put('cart', $cart);
        }
       // Session::put('cart', $cart);
        Session::save();

    }
    public function delete_product($session_id){
        $cart = Session::get('cart');
        // echo '<pre>';
        // print_r($cart);
        // echo '</pre>';
    if($cart==true){
        foreach($cart as $key => $val){
            if($val['session_id']==$session_id){
                unset($cart[$key]);
            }
        }
        Session::put('cart',$cart);
        return redirect()->back()->with('message','Xóa sản phẩm thành công');

    }else{
        return redirect()->back()->with('message','Xóa sản phẩm thất bại');
    }
    }
}