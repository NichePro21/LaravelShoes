<?php
//comment
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use Illuminate\Support\Facades\Route;
//frontend
Route::get('/','HomeController@index2');

Route::get('/product/{product_slug}', 'ProductController@details_product');
Route::get('/category/{slug_category_product}','CategoryProduct@show_category_home');

//backend
//Employee

Route::get('/employee_login', 'EmployeeController@index');
Route::get('/staff-dashboard', 'EmployeeController@ShowStaff');
Route::get('/logout', 'EmployeeController@logout');
Route::post('/staff', 'EmployeeController@staffdashboard');



//admin
Route::get('/admin', 'AdminController@index');
Route::get('/dashboard', 'AdminController@ShowDashboard');
Route::get('/logout', 'AdminController@logout');
Route::post('/admin-dashboard', 'AdminController@dashboard');



//brand Products
Route::get('/admin/add-brand', 'brandController@add_brand');
Route::get('/edit-brand/{brand_id}', 'brandController@edit_brand');
Route::get('/delete-brand/{brand_id}', 'brandController@delete_brand');
Route::get('/admin/all-brand', 'brandController@all_brand');
Route::get('/unactive-brand/{brand_id}', 'brandController@unactive_brand');
Route::get('/active-brand/{brand_id}', 'brandController@active_brand');
Route::get('/brand/{brand_slug}', 'brandController@show_brand_home');

Route::post('/product-tabs', 'ProductController@product_tabs');

//

Route::post('/save-brand', 'brandController@save_brand');
Route::post('/update-brand/{brand_id}', 'brandController@update_brand');
//CategoryDetail Products
Route::get('/admin/add-categorydetail', 'CategoryDetail@add_category_detail_product');
Route::get('/edit-categorydetail/{category_id}', 'CategoryDetail@edit_category_detail_product');
Route::get('/delete-categorydetail/{category_id}', 'CategoryDetail@delete_category_detail_product');
Route::get('/admin/all-categorydetail', 'CategoryDetail@all_category_detail_product');
Route::get('/unactive-categorydetail/{category_id}', 'CategoryDetail@unactive_category_detail');
Route::get('/active-categorydetail/{category_id}', 'CategoryDetail@active_category_detail');

Route::post('/save-categorydetail-product', 'CategoryDetail@save_category_detail_product');
Route::post('/update-categorydetail-product/{category_id}', 'CategoryDetail@update_category_detail_product');
//Category Products
Route::get('/admin/add-category', 'CategoryProduct@add_category_product');
Route::get('/edit-category/{category_id}', 'CategoryProduct@edit_category_product');
Route::get('/delete-category/{category_id}', 'CategoryProduct@delete_category_product');
Route::get('/admin/all-category', 'CategoryProduct@all_category_product');
Route::get('/unactive-category/{category_id}', 'CategoryProduct@unactive_category');
Route::get('/active-category/{category_id}', 'CategoryProduct@active_category');

Route::post('/save-category-product', 'CategoryProduct@save_category_product');
Route::post('/update-category-product/{category_id}', 'CategoryProduct@update_category_product');

//Product

Route::get('/admin/add-product', 'ProductController@add_product');
Route::get('/edit-product/{product_id}', 'ProductController@edit_product');
Route::get('/delete-product/{product_id}', 'ProductController@delete_product');
Route::get('/admin/all-product', 'ProductController@all_product');
Route::get('/unactive-product/{product_id}', 'ProductController@unactive_product');
Route::get('/active-product/{product_id}', 'ProductController@active_product');

Route::post('/save-product', 'ProductController@save_product');
Route::post('/update-product/{product_id}', 'ProductController@update_product');

//Cart
Route::post('/add-cart-ajax','CartController@add_cart_ajax');
Route::post('/save-cart', 'CartController@save_cart');
//Route::get('/show-cart', 'CartController@show_cart');
Route::get('/show-cart', 'CartController@show_cart');
Route::get('/delete-to-cart/{rowId}', 'CartController@delete_to_cart');
Route::post('/update-cart-quantity', 'CartController@update_cart_quantity');
Route::post('/update-cart', 'CartController@update_cart');
Route::get('/del-product/{session_id}','CartController@delete_product');

//checkout
//acb
Route::get('/login','CheckoutController@login_checkout');
Route::get('/logout','CheckoutController@logout_checkout');

Route::post('/login-customer','CheckoutController@login_customer');
Route::get('/checkout','CheckoutController@checkout');

Route::post('/save-checkout-customer','CheckoutController@save_checkout_customer');
Route::get('/payment','CheckoutController@payment');
Route::post('/confirm-order','CheckoutController@confirm_order');
Route::post('/order-place','CheckoutController@OrderPlace');

//cart

//Route::get('/show-cart','CartController@show_cart_menu');
Route::get('/hover-cart','CartController@hover_cart');
//customer
Route::post('/add_customer','CustomerController@add_customer');
Route::get('/my-account', 'CustomerController@index');
Route::get('/my-account/orders', 'CustomerController@viewAllOrder');
Route::get('/my-account/view-orders/{order_code}', 'CustomerController@view_history_order');
Route::get('/my-account/add-address/shipping/', 'CustomerController@addShipping');
Route::post('/my-account/save-address/shipping/', 'CustomerController@saveShipping');
Route::get('/my-account/view-order/{OrderNo}', 'CustomerController@viewOrderById');
Route::get('/my-account/register', 'CustomerController@register');

Route::get('/my-account/edit-address', 'CustomerController@EditAddress');
Route::get('/my-account/address', 'CustomerController@viewAddress');
Route::get('/my-account/edit', 'CustomerController@ViewDetails');
Route::post('/my-account/update', 'CustomerController@UpdateInfomation');
Route::post('/my-account/edit-address/update', 'CustomerController@UpdateAddress');
Route::get('/my-account/edit-address/shipping/', 'CustomerController@editShipping');

//Order Detail admin
//Route::get('/check-order-list','CheckoutController@order_details');
Route::get('/admin/view-order/{order_code}', 'AdminController@ViewOrder');
Route::post('/update-order','AdminController@update_order_qty');
Route::get('/admin/all-order','AdminController@manage_order');
// Route::get('/admin-view-order/{orderId}', 'CheckoutController@ViewOrder');

//about Detail
Route::get('/brand/{BID}','brandController@show_brand_home');
