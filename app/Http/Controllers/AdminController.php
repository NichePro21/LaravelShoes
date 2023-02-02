<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function AuthLogin(){
        $admin_id = Session::get('admin_id');
        if($admin_id) {
            return Redirect::to('dashboard');
        }else{
            return Redirect::to('admin')->send();
        }
    }
    public function index(){
        return view('admin_login');
    }
    public function ShowDashboard(){
        $this->AuthLogin();
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
      
        if ($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message','sai tai khoan');
            return Redirect::to('/admin');
        }

    }
    public function logout(){
        $this->AuthLogin();
        Session::put('admin_name',null);
        Session::put('admin_id', null);
        return Redirect::to('/admin');
    }
    //admin check order
    // public function order_details(){
    //     //$this->AuthLogin();
    //     $all_order = DB::table('masterorder')
    //     ->join('tbl_customer','tbl_customer.CID','=','masterorder.CID')
    //     ->select('masterorder.*','tbl_customer.CName')
    //     ->orderby('masterorder.OrderNo','desc')->get();
    //     $manager_order = view('staff.order_list')->with('all_order',$all_order);

    //     return view('staff_layout')->with('staff.order_list',$manager_order);

    // }
    public function ViewOrder(){
        $OrderById = DB::table('masterorder')
        ->join('tbl_customer','tbl_customer.CID','=','masterorder.CID')
        ->join('tbl_shipping','masterorder.shipping_id','=','tbl_shipping.shipping_id')
        ->join('tbl_orderdetails','tbl_orderdetails.OrderNo','=','masterorder.OrderNo')
        ->select('masterorder.*','tbl_customer.*','tbl_shipping.*','tbl_orderdetails.*')->first();
        $manager_order_by_id = view('admin.view_order')->with('manager_order_by_id',$OrderById);
        return view('admin_vieworder')->with('admin.view_order',$manager_order_by_id);
    }
    
}

