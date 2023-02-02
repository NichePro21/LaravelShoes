<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
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
        return view('customer.orders')->with(compact('category','brand','Name_by_id'));
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
}
