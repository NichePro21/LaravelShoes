<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
class CustomerController extends Controller
{
    public function AuthLogin(){
        $CID = Session::get('CID');
        if($CID) {
            return Redirect::to('my-account');
        }else{
            return Redirect::to('login-checkout')->send();
        }
    }
    function getEntryDateAttribute($input)
    {
        return Carbon::createFromFormat('Y-m-d', $input)
          ->format(config('app.date_format'));
    }
    public function index(Request $request){
        $this->AuthLogin();

        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID','desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID',$value)->limit(1)->get();
        return view('customer.dashboardCustomer')->with(compact('category','brand','Name_by_id'));
    }
    public function viewAllOrder(Request $request){
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID','desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID',$value)->limit(1)->get();
        $AllOrderById = DB::table('masterorder')->join('tbl_customer', 'tbl_customer.CID', '=', 'masterorder.CID')->join('tbl_orderdetails','masterorder.OrderNo','=','tbl_orderdetails.OrderNo')->where('tbl_customer.CID',$value)->get();
        return view('customer.orders')->with(compact('category','brand','Name_by_id','AllOrderById'));
    }
    public function ViewAddress(Request $request){
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID','desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID',$value)->limit(1)->get();
        return view('customer.viewAddress')->with(compact('category','brand','Name_by_id'));
    }
    public function ViewDetails(Request $request){
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID','desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID',$value)->limit(1)->get();
        return view('customer.accountDetail')->with(compact('category','brand','Name_by_id'));
    }
    public function editBilling(Request $request){
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID','desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID',$value)->limit(1)->get();
        return view('customer.editBilling')->with(compact('category','brand','Name_by_id'));
    }
    public function editShipping(Request $request){
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID','desc')->get();
        $brand = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID',$value)->limit(1)->get();
        return view('customer.accountDetail')->with(compact('category','brand','Name_by_id'));
    }
    public function saveBilling(Request $request){
        $data = array();
        $value = $request->session()->get('CID');
        $data['CID'] = $value;
        $data['Billing_Name'] = $request->Billing_Name;
        $data['Billing_Address'] = $request->Billing_Address;
        $data['Billing_City'] = $request->Billing_City;
        $data['Billing_Ward'] = $request->Billing_Ward;
        $data['Billing_Phone'] = $request->Billing_Phone;
        $data['Billing_Email'] = $request->Billing_Email;
        DB::table('tbl_billing')->update($data);
        Session::put('message','Save Billing Success!!');
        return Redirect::to('my-account/edit-address');
    }
}
