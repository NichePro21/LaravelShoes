@extends('layoutcus')
@section('breadcrumbs')
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
                        <li>                            <a href="/my-common/home">Home</a>
                          </li>
                        <li><span>/</span>                            <a href="/my-account/account">Account</a>
                          </li>
                        <li><span>/</span>                            <strong>Register</strong>            </li>
            
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
          <div class="col-main">
          <div class="my-account">
                <div class="page-title">
            <h2> Register Account</h2>
          </div>
          <p>If you already have an account with us, please login at the <a href="/login">login page</a>.</p>
          <form action="{{URL::to('/add_customer')}}" method="post" enctype="multipart/form-data" class="form-horizontal">
            {{ csrf_field() }}
            <fieldset id="account">
              <legend>Your Personal Details</legend>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-firstname">Full Name</label>
                <div class="col-sm-10">
                  <input type="text" name="CName" value="" placeholder="First Name" id="CName" class="form-control" required minlength="5" maxlength="100">
                              </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                <div class="col-sm-10">
                  <input type="email" name="CEmail" value="" placeholder="E-Mail" id="CEmail" class="form-control" required>
                              </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                <div class="col-sm-10">
                  <input type="tel" name="CPhone" value="" placeholder="555-555-5555" id="CPhone" class="form-control" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}">
                              </div>
              </div>
                      </fieldset>
            <fieldset id="address">
              <legend>Your Address</legend>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-address-1">Address 1</label>
                <div class="col-sm-10">
                  <input type="text" name="CAdd" value="" placeholder="Address 1" id="CAdd" class="form-control">
                              </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-city">City</label>
                <div class="col-sm-10">
                  <input type="text" name="Ccity" value="" placeholder="City" id="Ccity" class="form-control" required>
                              </div>
              </div>
              
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-zone">Ward</label>
                <div class="col-sm-10">
                    <input type="text" name="Cward" value="" placeholder="Ward" id="Cward" class="form-control" required>
                </div>
              </div>
                      </fieldset>
            <fieldset>
              <legend>Your Login</legend>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-zone">User Name</label>
                <div class="col-sm-10">
                    <input type="text" name="Cusername" value="" placeholder="Username" id="Cusername" class="form-control" required>
                </div>
              </div>
              <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-password">Password</label>
                <div class="col-sm-10">
                  <input type="password" name="password" value="" placeholder="Password" id="password" class="form-control">
                              </div>
              </div>
              {{-- <div class="form-group required">
                <label class="col-sm-2 control-label" for="input-confirm">Password Confirm</label>
                <div class="col-sm-10">
                  <input type="password" name="confirm" value="" placeholder="Password Confirm" id="confirm" class="form-control">
                              </div>
              </div> --}}
            </fieldset>
            
                            <div class="buttons">
              <div class="pull-right">
                <!-- <input type="submit" value="" class="btn btn-primary" /> -->
                <button type="submit" class="button continue"> Continue </button>
              </div>
            </div>
                  </form>
          </div></div></div>
        
    
    <aside id="column-right" class="col-right col-xs-12  col-sm-3">
    
        <div class="block block-account">  
      <div class="block-title">
      Account  </div>
     <div class="block-content">
      <ul>
        <li><a href="/my-account/login">Login</a> </li>
      <li><a href="/my-account/register">Register</a> </li>
      <li><a href="/my-account/forgotten">Forgotten Password</a></li>
        <li><a href="/my-account/account">My Account</a></li>
        <li><a href="/my-account/address">Address Book</a> </li>
      <li><a href="/my-account/order">Order History</a> </li>
      </ul>
    </div>
    </div>  </aside>
    </div>
    </div>
    </div>
@endsection