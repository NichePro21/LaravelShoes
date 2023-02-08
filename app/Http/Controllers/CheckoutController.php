<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Facades\Cart;

session_start();

class CheckoutController extends Controller
{
    public function AuthLogin(){
        $EID = Session::get('EID');
        if($EID) {
            return Redirect::to('staff-dashboard');
        }else{
            return Redirect::to('employee_login')->send();
        }
    }
    public function login_checkout()
    {
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        return view('pages.checkout.login_checkout')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function add_customer(Request $request)
    {
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        $data = array();
        $data['CName'] = $request->CName;
        $data['CPhone'] = $request->CPhone;
        $data['CEmail'] = $request->CEmail;
        $data['Cusername'] = $request->Cusername;
        $data['CPass'] = md5($request->CPass);

        $customer_id = DB::table('tbl_customer')->insertGetId($data);

        Session::put('CID', $customer_id);
        Session::put('CName', $request->Cusername);
        return Redirect::to('/my-account')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function checkout()
    {
        $value = Session::get('CID');
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        $shippingAddress = DB::table('tbl_shipping')->where('tbl_shipping.CID', $value)->get();
       
        return view('pages.checkout.show_checkout')->with('category', $cate_product)->with('brand', $brand_product)->with('shippingAddress', $shippingAddress);
    }
    public function save_checkout_customer(Request $request)
    {
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        $data = array();
        $data['shipping_name'] = $request->shipping_name;
        $data['shipping_city'] = $request->shipping_city;
        $data['shipping_ward'] = $request->shipping_ward;
        $data['shipping_phone'] = $request->shipping_phone;
        $data['shipping_address'] = $request->shipping_address;
        $data['CID'] = Session::get('CID');
        $data['shipping_email'] = $request->shipping_email;
        
        $shipping_id = DB::table('tbl_shipping')->update($data);

        Session::put('shipping_id', $shipping_id);

        return Redirect::to('/payment')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function logout_checkout()
    {
        Session::flush();
        return Redirect::to('/login-checkout');
    }
    public function login_customer(Request $request)
    {
        $username = $request->username;
        $password = md5($request->password);

        $result = DB::table('tbl_customer')->where('Cusername', $username)->where('CPass', $password)->first();
    
        if ($result) {
            Session::put('CID', $result->CID);
            Session::put('Cusername',$result->Cusername);
            return Redirect::to('my-account/');
        } else {
            return Redirect::to('/login-checkout');
        }

        return Redirect('/checkout');
    }
    public function payment()
    {
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        return view('pages.checkout.payment')->with('category', $cate_product)->with('brand', $brand_product);
    }
    public function OrderPlace(Request $request)
    {
        //echo Session::get('CID');
        //payment method
        // $content = Cart::content();
        // echo $content;
        $data = array();
        $data['payment_method'] = $request->payment_option;
        $data['payment_status'] = 'In Progress';
        $payment_id = DB::table('tbl_payment')->insertGetId($data);

        //insert masterorder

        $order_data = array();
        $order_data['CID'] = Session::get('CID');
        $order_data['shipping_id'] = Session::get('shipping_id');
        $order_data['payment_id'] = $payment_id;
        $order_data['order_total'] = Cart::total();
        $order_data['order_status'] = 'In Progress';
        $OrderNo = DB::table('masterorder')->insertGetId($order_data);

        //insert order_detail
        $content = Cart::content();
        foreach ($content as $value_content) {
            $order_detail_data = array();
            $order_detail_data['OrderNo'] = $OrderNo;
            $order_detail_data['PID'] = $value_content->id;
            $order_detail_data['PName'] = $value_content->name;
            $order_detail_data['PPrice'] = $value_content->price;
            $order_detail_data['Quantity'] = $value_content->qty;
            DB::table('tbl_orderdetails')->insertGetId($order_detail_data);
        }

        if ($data['payment_method'] == 2) {

            echo 'Paying Cash';
        } elseif ($data['payment_method'] == 1) {
            Cart::destroy();

            $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
            $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
            return view('pages.checkout.payingcash')->with('category', $cate_product)->with('brand', $brand_product);
        } else {
            echo 'Wrong!!';
        }
    }
    public function order_details(){
        //$this->AuthLogin();
        $all_order = DB::table('masterorder')
        ->join('tbl_customer','tbl_customer.CID','=','masterorder.CID')
        ->select('masterorder.*','tbl_customer.CName')
        ->orderby('masterorder.OrderNo','desc')->get();
        $manager_order = view('staff.order_list')->with('all_order',$all_order);

        return view('staff_layout')->with('staff.order_list',$manager_order);

    }
    public function ViewOrder($orderId){
        $OrderById = DB::table('masterorder')
        ->join('tbl_customer','tbl_customer.CID','=','masterorder.CID')
        ->join('tbl_shipping','masterorder.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_orderdetails','tbl_orderdetails.OrderNo','=','masterorder.OrderNo')
        ->select('masterorder.*','tbl_customer.*','tbl_shipping.*','tbl_orderdetails.*')->first();
        // echo '<pre>';
        // print_r($OrderById);
        // echo '</pre>';

        $manager_order_by_id = view('staff.order_detail')->with('manager_order_by_id',$OrderById);
        return view('staff_layout')->with('staff.order_detail',$manager_order_by_id);
    }
    public function cart_add(Request $request){
     $request->all();
        dd($request);
    }
}
