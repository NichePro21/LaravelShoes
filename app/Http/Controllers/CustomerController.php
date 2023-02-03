<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function AuthLogin()
    {
        $CID = Session::get('CID');
        if ($CID) {
            return Redirect::to('my-account');
        } else {
            return Redirect::to('login-checkout')->send();
        }
    }
    function getEntryDateAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d', $input)
            ->format(config('app.date_format'));
    }
    public function index(Request $request)
    {
        $this->AuthLogin();

        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        return view('customer.dashboardCustomer')->with(compact('category', 'brand', 'Name_by_id'));
    }
    public function viewAllOrder(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        $AllOrderById = DB::table('masterorder')->join('tbl_customer', 'tbl_customer.CID', '=', 'masterorder.CID')->join('tbl_orderdetails', 'masterorder.OrderNo', '=', 'tbl_orderdetails.OrderNo')->where('tbl_customer.CID', $value)->get();
        return view('customer.orders')->with(compact('category', 'brand', 'Name_by_id', 'AllOrderById'));
    }
    public function viewOrderById($OrderNo,Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        //$AllOrderById = DB::table('masterorder')->join('tbl_customer', 'tbl_customer.CID', '=', 'masterorder.CID')->join('tbl_orderdetails', 'masterorder.OrderNo', '=', 'tbl_orderdetails.OrderNo')->where('tbl_customer.CID', $value)->get();
      
        $ViewOrder = DB::table('masterorder')->join('tbl_orderdetails', 'masterorder.OrderNo', '=', 'tbl_orderdetails.OrderNo')
                                            ->join('tbl_shipping','tbl_shipping.shipping_id','=','masterorder.shipping_id')
                                            ->join('tbl_product','tbl_product.PID','=','tbl_orderdetails.PID')
                                            ->where('tbl_orderdetails.OrderNo',$OrderNo)->get();
        return view('customer.view_orderno')->with(compact('category', 'brand', 'Name_by_id','ViewOrder'));
    }
    public function ViewAddress(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        $showAddress = DB::table('tbl_shipping')->where('tbl_shipping.CID', $value)->get();

        return view('customer.viewAddress')->with(compact('category', 'brand', 'Name_by_id', 'showAddress'));
    }
    public function ViewDetails(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        return view('customer.accountDetail')->with(compact('category', 'brand', 'Name_by_id'));
    }
    public function editShipping(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        return view('customer.editShipping')->with(compact('category', 'brand', 'Name_by_id'));
    }
    public function saveShipping(Request $request)
    {
        $value = $request->session()->get('CID');
        $data = array();
        $data['CID'] = $value;
        $data['Shipping_Name'] = $request->Shipping_Name;
        $data['Shipping_Address'] = $request->Shipping_Address;
        $data['Shipping_City'] = $request->Shipping_City;
        $data['Shipping_Ward'] = $request->Shipping_Ward;
        $data['Shipping_Phone'] = $request->Shipping_Phone;
        $data['Shipping_Email'] = $request->Shipping_Email;
        $db = DB::table('tbl_Shipping')->where('CID', $value)->update($data);
        print_r($db);
        Session::put('message','Save Shipping Success!!');
        return Redirect::to('my-account/edit-address');
    }
    public function addShipping(Request $request)
    {
        $value = $request->session()->get('CID');
        $data = array();
        $data['CID'] = $value;
        $data['Shipping_Name'] = $request->Shipping_Name;
        $data['Shipping_Address'] = $request->Shipping_Address;
        $data['Shipping_City'] = $request->Shipping_City;
        $data['Shipping_Ward'] = $request->Shipping_Ward;
        $data['Shipping_Phone'] = $request->Shipping_Phone;
        $data['Shipping_Email'] = $request->Shipping_Email;
        DB::table('tbl_Shipping')->insert($data);
        print_r($data);
        Session::put('message','Thêm Shipping Thành Công!!');
        return Redirect::to('my-account/edit-address');
    }
}