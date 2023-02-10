@extends('layoutcus')
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
                        <li>                            <a href="/">Home</a>
                          </li>
                        <li><span>/</span>                            <a href="/my-account">Account</a>
                          </li>
                        <li><span>/</span>                            <a href="/my-account/address">Address Book</a>
                          </li>
                        <li><span>/</span>                            <strong>Edit Address</strong>            </li>
            
          </ul>
        </div>
      </div>
    </div>
</div>
@endsection
@section('content')
<div class="main container col2-right-layout">
    <div class="row">                <div id="content" class="col-sm-9"> 
        <div class="col-main">
        <div class="my-account">
              <div class="page-title">
          <h2> Edit Address</h2>
        </div>
        @foreach($Name_by_id as $key => $value)
        <form action="/my-account/edit-address/update" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{@csrf_field()}}
          <fieldset>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-lastname">Full Name</label>
              <div class="col-sm-10">
                <input type="text" name="CName" value="{{$value->CName}}" placeholder="Last Name" id="CName" class="form-control">
                            </div>
            </div>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
              <div class="col-sm-10">
                <input type="text" name="CAdd" value="{{$value->CAdd}}" placeholder="Address 1" id="input-address-1" class="form-control">
                            </div>
            </div>
            <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-city">Ward</label>
                <div class="col-sm-10">
                  <input type="text" name="Cward" value="{{$value->Cward}}" placeholder="Ward" id="input-city" class="form-control">
                              </div>
              </div>
            <div class="form-group required">
              <label class="col-sm-2 control-label" for="input-city">City</label>
              <div class="col-sm-10">
                <input type="text" name="Ccity" value="{{$value->Ccity}}" placeholder="City" id="input-city" class="form-control">
                            </div>
            </div>
          </fieldset>
          <div class="buttons clearfix">
            <div class="pull-left"><a href="/my-account/address" class="btn btn-default">Back</a></div>
            <div class="pull-right">
             <!--  <input type="submit" value="" class="btn btn-primary" /> -->
              <button type="submit" class="button continue"> Continue </button>
            </div>
          </div>
        </form>
        @endforeach
        </div></div></div>
      
  
  <aside id="column-right" class="col-right col-xs-12  col-sm-3">
  
      <div class="block block-account">  
    <div class="block-title">
    Account  </div>
   <div class="block-content">
    <ul>
      <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/account">My Account</a></li>
      <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/edit">Edit Account</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/password">Password</a></li>
      <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/address">Address Book</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/wishlist">Wish List</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/order">Order History</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/download">Downloads</a></li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/recurring">Recurring payments</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/reward">Reward Points</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/return">Returns</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/transaction">Transactions</a> </li>
    <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/newsletter">Newsletter</a></li>
      <li><a href="http://brezzademo3.magikthemes.com/index.php?route=account/logout">Logout</a></li>
    </ul>
  </div>
  </div>  </aside>
  </div>
  </div>
  @endsection