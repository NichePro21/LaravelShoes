@extends('layoutcus')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li> <a href="/">Home</a>
                        </li>
                        <li><span>/</span> <strong>Account</strong> </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
<div class="main-container col2-right-layout">
    <div class="main container">
    
        <div class="row">                <div id="content" class="col-sm-9">
            <?php
    $message = Session::get('message');
    if ($message) {
        
        echo '<div class="alert success">  
  <strong>Success!</strong> '.$message.'</div>';
        Session::put('message', null);
    }
    ?>
          <div class="col-main">
          <div class="account-login">  
                <h2>My Account</h2>
          <ul class="list-unstyled">
            <li><a href="/my-account/edit">Edit your account information</a></li>
            <li><a href="/my-account/password">Change your password</a></li>
            <li><a href="/my-account/address">Modify your address book entries</a></li>
            <li><a href="/my-account/wishlist">Modify your wish list</a></li>
          </ul>
                <h2>My Orders</h2>
          <ul class="list-unstyled">
            <li><a href="/my-account/orders">View your order history</a></li>
                    <li><a href="/my-account/reward">Your Reward Points</a></li>
                    <li><a href="/my-account/return">View your return requests</a></li>
            <li><a href="/my-account/transaction">Your Transactions</a></li>
            <li><a href="/my-account/recurring">Recurring payments</a></li>
          </ul>
          </div></div></div>
        
    
    </div>
    </div>
    </div>
@endsection
