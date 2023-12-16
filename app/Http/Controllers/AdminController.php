<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use App\Shipping;
use App\Order;
use App\OrderDetails;
use App\Product;
use App\Customer;
use Carbon\Carbon;
use App\Statistic;
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
    public function manage_order(){
		$getorder = Order::orderby('order_id','DESC')->paginate(20);
		foreach($getorder as $key => $ord){
			$order_code = $ord->order_code;

		}
		$order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();



    //    $getorder = DB::table('tbl_order')
    //    ->join('tbl_shipping','tbl_order.shipping_id','tbl_shipping.shipping_id')
    //    ->join('tbl_order_details','tbl_order_details.order_code','tbl_order.order_code')
    //    ->join('tbl_customer','tbl_customer.CID','tbl_order.CID')->get();
		return view('admin.manage_order')->with(compact('getorder','order_details_product'));
	}
    public function ViewOrder($order_code){
		 $order_details = OrderDetails::with('product')->where('order_code',$order_code)->get();
		$getorder = Order::where('order_code',$order_code)->get();
		foreach($getorder as $key => $ord){
			$customer_id = $ord->CID;
			$shipping_id = $ord->shipping_id;
			$order_status = $ord->order_status;
		}
		 $customer = Customer::where('CID',$customer_id)->first();
		 $shipping = Shipping::where('shipping_id',$shipping_id)->first();

		 $order_details_product = OrderDetails::with('product')->where('order_code', $order_code)->get();
            // $order_details = DB::table('tbl_order')
            // ->join('tbl_shipping','tbl_order.shipping_id','tbl_shipping.shipping_id')
            // ->join('tbl_order_details','tbl_order_details.order_code',$order_code)
            // ->join('tbl_customer','tbl_customer.CID','tbl_order.CID')->get();


		return view('admin.order_detail')->with(compact('order_details','customer','shipping','getorder','order_status'));

	}
    public function update_order_qty(Request $request){
		//update order
		$data = $request->all();
		$order = Order::find($data['order_id']);
		$order->order_status = $data['order_status'];
		$order->save();
		//send mail confirm
		// $now = Carbon::now('Asia/Ho_Chi_Minh')->format('d-m-Y H:i:s');
		// $title_mail = "Đơn hàng đã đặt được xác nhận".' '.$now;
		 $customer = Customer::where('CID',$order->CID)->first();
		// $data['email'][] = $customer->customer_email;


	  	//lay san pham

		// foreach($data['order_product_id'] as $key => $product){
		// 		$product_mail = Product::find($product);
		// 		foreach($data['quantity'] as $key2 => $qty){

		// 		 	if($key==$key2){

		// 			$cart_array[] = array(
		// 				'product_name' => $product_mail['product_name'],
		// 				'product_price' => $product_mail['product_price'],
		// 				'product_qty' => $qty
		// 			);

		// 		}
		// 	}
		// }


	  	//lay shipping
	  	$details = OrderDetails::where('order_code',$order->order_code)->first();

		//$fee_ship = $details->product_feeship;
		//$coupon_mail = $details->product_coupon;

	  	$shipping = Shipping::where('shipping_id',$order->shipping_id)->first();

		$shipping_array = array(
			//'fee_ship' =>  $fee_ship,
			'customer_name' => $customer->customer_name,
			'shipping_name' => $shipping->shipping_name,
			'shipping_email' => $shipping->shipping_email,
			'shipping_phone' => $shipping->shipping_phone,
			'shipping_address' => $shipping->shipping_address,
			'shipping_notes' => $shipping->shipping_notes,
			'shipping_method' => $shipping->shipping_method

		);
	  	//lay ma giam gia, lay coupon code
		// $ordercode_mail = array(
		// 	'coupon_code' => $coupon_mail,
		// 	'order_code' => $details->order_code
		// );

		// Mail::send('admin.confirm_order',  ['cart_array'=>$cart_array, 'shipping_array'=>$shipping_array ,'code'=>$ordercode_mail] , function($message) use ($title_mail,$data){
		// 	      $message->to($data['email'])->subject($title_mail);//send this mail with subject
		// 	      $message->from($data['email'],$title_mail);//send from this mail
		// });


		//order date
		$order_date = $order->order_date;

		$statistic = Statistic::where('order_date',$order_date)->get();
		if($statistic){
			$statistic_count = $statistic->count();
		}else{
			$statistic_count = 0;
		}

		if($order->order_status==2){
			//them
			$total_order = 0;
			$sales = 0;
			$profit = 0;
			$quantity = 0;

			foreach($data['order_product_id'] as $key => $product_id){

				$product = Product::find($product_id);
				$product_quantity = $product->product_quantity;
				$product_sold = $product->product_sold;
				//them
				$product_price = $product->product_price;
				$product_cost = $product->price_cost;
				$now = Carbon::now('Asia/Ho_Chi_Minh')->toDateString();

				foreach($data['quantity'] as $key2 => $qty){

					if($key==$key2){
						$pro_remain = $product_quantity - $qty;
						$product->product_quantity = $pro_remain;
						$product->product_sold = $product_sold + $qty;
						$product->save();
						//update doanh thu
						$quantity+=$qty;
						$total_order+=1;
						$sales+=$product_price*$qty;
						$profit = $sales - ($product_cost*$qty);
					}

				}
			}
			//update doanh so db
			if($statistic_count>0){
				$statistic_update = Statistic::where('order_date',$order_date)->first();
				$statistic_update->sales = $statistic_update->sales + $sales;
				$statistic_update->profit =  $statistic_update->profit + $profit;
				$statistic_update->quantity =  $statistic_update->quantity + $quantity;
				$statistic_update->total_order = $statistic_update->total_order + $total_order;
				$statistic_update->save();

			}else{

				$statistic_new = new Statistic();
				$statistic_new->order_date = $order_date;
				$statistic_new->sales = $sales;
				$statistic_new->profit =  $profit;
				$statistic_new->quantity =  $quantity;
				$statistic_new->total_order = $total_order;
				$statistic_new->save();
			}



		}


	}
	public function order_code(Request $request ,$order_code){
		$order = Order::where('order_code',$order_code)->first();
		$order->delete();
		Session::put('message','Delete Order Success');
		return redirect()->back();

	}

}

