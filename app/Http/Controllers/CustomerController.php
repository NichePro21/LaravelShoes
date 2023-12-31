<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Carbon\Carbon;
use App\Order;
use App\OrderDetails;
use App\Product;
use App\Brand;
use App\Shipping;
use App\Statistic;
use App\Customer;
Session::start();
class CustomerController extends Controller
{
    public function AuthLogin()
    {
        $CID = Session::get('CID');
        if ($CID) {
            return Redirect::to('my-account');
        } else {
            return Redirect::to('login')->send();
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
        $category = DB::table('tbl_categories')->orderby('CatID', 'ASC')->get();
        $brand_product = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        return view('customer.dashboardCustomer')->with(compact('category', 'brand_product', 'Name_by_id'));
    }
    public function add_customer(Request $request)
    {
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        $data = array();
        $data['CName'] = $request->CName;
        $data['CPhone'] = $request->CPhone;
        $data['CEmail'] = $request->CEmail;
        $data['CAdd'] = $request->CAdd;
        $data['Cward'] = $request->Cward;
        $data['Ccity'] = $request->Ccity;
        $data['Cusername'] = $request->Cusername;
        $data['CPass'] = md5($request->CPass);
       
        $customer_id = DB::table('tbl_customer')->insertGetId($data);

            Session::put('CID', $customer_id);
            Session::put('CName', $request->Cusername);
            if(Session::get('cart')){
                return Redirect::to('/show-cart')->with('category', $cate_product)->with('brand_product', $brand_product);
            }else{
                return Redirect::to('/my-account')->with('category', $cate_product)->with('brand_product', $brand_product);
            };
        //return Redirect::to('/my-account')->with('category', $cate_product)->with('brand_product', $brand_product);
    }
    public function register(){
       // $this->AuthLogin();
        $cate_product = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'desc')->get();
        return view('pages.checkout.dangky')->with('category', $cate_product)->with('brand_product', $brand_product);
    }
    public function viewAllOrder(Request $request)
    {
        //$this->AuthLogin();
       $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'ASC')->get();
        $brand_product = DB::table('tbl_brand')->orderby('BID', 'ASC')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
       
        //$AllOrderById = DB::table('masterorder')->join('tbl_customer', 'tbl_customer.CID', '=', 'masterorder.CID')->join('tbl_orderdetails', 'masterorder.OrderNo', '=', 'tbl_orderdetails.OrderNo')->where('tbl_customer.CID', $value)->get();
        if(!Session::get('CID')){
			return redirect('/login')->with('error','Vui lòng đăng nhập để xem lịch sử mua hàng');
		}else{

			
			//category post
	        //$category_post = CatePost::orderBy('cate_post_id','DESC')->get();

	        //slide
	        //$slider = Slider::orderBy('slider_id','DESC')->where('slider_status','1')->take(4)->get();
	        //seo 
	        // $meta_desc = "Lịch sử đơn hàng"; 
	        // $meta_keywords = "Lịch sử đơn hàng";
	        // $meta_title = "Lịch sử đơn hàng";
	        // $url_canonical = $request->url();
	        //--seo
	        
	    	//$cate_product = DB::table('tbl_category_product')->where('category_status','0')->orderby('category_parent','desc')->orderby('category_order','ASC')->get(); 
	        
	        //$brand_product = DB::table('tbl_brand')->where('brand_status','0')->orderby('brand_id','desc')->get(); 

	        $getorder = Order::where('CID',Session::get('CID'))->orderby('order_id','DESC')->paginate(10);
            foreach($getorder as $key => $value){
               $order_code =  $value->order_code;
                $order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
                
            }
           
	    	return view('customer.orders')->with(compact('category', 'brand_product', 'Name_by_id','order_details','getorder'));
		}
        

    }
    public function viewOrderById($OrderNo,Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        //$AllOrderById = DB::table('masterorder')->join('tbl_customer', 'tbl_customer.CID', '=', 'masterorder.CID')->join('tbl_orderdetails', 'masterorder.OrderNo', '=', 'tbl_orderdetails.OrderNo')->where('tbl_customer.CID', $value)->get();
      
        $ViewOrder = DB::table('masterorder')->join('tbl_orderdetails', 'masterorder.OrderNo', '=', 'tbl_orderdetails.OrderNo')
                                            ->join('tbl_shipping','tbl_shipping.shipping_id','=','masterorder.shipping_id')
                                            ->join('tbl_product','tbl_product.PID','=','tbl_orderdetails.PID')
                                            ->where('tbl_orderdetails.OrderNo',$OrderNo)->get();
        return view('customer.view_orderno')->with(compact('category', 'brand_product', 'Name_by_id','ViewOrder'));
    }
    public function ViewAddress(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
        $showAddress = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->get();

        return view('customer.viewAddress')->with(compact('category', 'brand_product', 'Name_by_id', 'showAddress'));
    }
    public function EditAddress(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
       // print_r($Name_by_id);
        return view('customer.editAddress')->with(compact('category', 'brand_product', 'Name_by_id'));
    }
    public function UpdateAddress(Request $request){
        $data = array();
        $value = $request->session()->get('CID');
        
        $data['CName'] = $request->CName;
        $data['CAdd'] = $request->CAdd;
        $data['Cward'] = $request->Cward;
        $data['Ccity'] = $request->Ccity;
        DB::table('tbl_customer')->where('CID', $value)->update($data);
        Session::put('message', 'Update Address Successful!!!');
        return Redirect::to('my-account/address');
    }
    public function ViewDetails(Request $request)
    {
        $this->AuthLogin();
        $value = $request->session()->get('CID');
        $category = DB::table('tbl_categories')->orderby('CatID', 'desc')->get();
        $brand_product = DB::table('tbl_brand')->get();
        $Name_by_id = DB::table('tbl_customer')->where('tbl_customer.CID', $value)->limit(1)->get();
       // print_r($Name_by_id);
        return view('customer.accountDetail')->with(compact('category', 'brand_product', 'Name_by_id'));
    }
    public function UpdateInfomation(Request $request){
        $data = array();
        $value = $request->session()->get('CID');
        //$data['CID'] = Session::get('CID');
        $data['CName'] = $request->CustomerName;
        $data['CEmail'] = $request->CustomerEmail;
        $data['CPhone'] = $request->Customertelephone;
        DB::table('tbl_customer')->where('CID', $value)->update($data);
        Session::put('message', 'Update Infomation Successful!!!');
        return Redirect::to('my-account');
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
      //  print_r($db);
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
      //  print_r($data);
        Session::put('message','Thêm Shipping Thành Công!!');
        return Redirect::to('my-account/edit-address');
    }
    public function view_history_order(Request $request,$order_code){
		if(!Session::get('CID')){
			return redirect('/login')->with('error','Please Login');
		}else{

		
	    
	        
            $cate_product = DB::table('tbl_categories')->orderby('CatID', 'ASC')->get();
            $brand_product = DB::table('tbl_brand')->orderby('BID', 'ASC')->get();
	        
	        //xem lich sử
	        $order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
			$getorder = Order::where('order_code',$order_code)->first();
			
			$customer_id = $getorder->CID;
			$shipping_id = $getorder->shipping_id;
			$order_status = $getorder->order_status;
			
			$customer = Customer::where('CID',$customer_id)->first();
			$shipping = Shipping::where('shipping_id',$shipping_id)->first();

			//$order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();

			

	    	return view('customer.view_orderno')->with('category',$cate_product)->with('brand_product',$brand_product)->with('order_details',$order_details)->with('customer',$customer)->with('shipping',$shipping)->with('getorder',$getorder)->with('order_status',$order_status)->with('order_code',$order_code); //1
		}
	}
}