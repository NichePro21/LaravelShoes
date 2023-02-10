@extends('layoutcus')
@section('content')
<div class="main-container col2-right-layout">
  <div class="main container">
  <div class="account-login">  
        <div class="row">                <div id="content" class="col-sm-12">
          <?php
          $message = Session::get('message');
          if ($message) {
              
              echo '<div class="alert info">  
        <strong>Notification:</strong> '.$message.'</div>';
              Session::put('message', null);
          }
          ?>
          <div class="page-title"><h2>Account Login</h2></div>
        <div class="col2-set">
          <div class="col-1 new-users">
            <div class="content">
              <h2>New Customer</h2>
              <p><strong>Register Account</strong></p>
              <p>By creating an account you will be able to shop faster, be up to date on an order's status, and keep track of the orders you have previously made.</p>
             <!--  <a href="" class="btn btn-primary"></a> -->
              <button onclick="window.location='/my-account/register';" class="button create-account" type="button"><span>Continue</span></button>
            </div>
          </div>
          <div class="col-2 registered-users">
            <div class="content">
              <h2>Returning Customer</h2>
              <p><strong>I am a returning customer</strong></p>
              <form action="{{'/login-customer'}}" method="post" enctype="multipart/form-data">
                {{@csrf_field()}}
                <div class="form-group">
                  <label class="control-label" for="input-email">User Name</label>
                  <input type="text" name="username" placeholder="User Name" id="username" class="form-control" required>
                </div>
                <div class="form-group">
                  <label class="control-label" for="input-password">Password</label>
                  <input type="password" name="password" placeholder="Password" id="password" class="form-control" required>
                  </div>
                  <!-- <input type="submit" value="" class="btn btn-primary" /> -->
                  <button type="submit" class="button login"> Login </button>
                  {{-- <a href="http://brezzademo3.magikthemes.com/index.php?route=account/forgotten">Forgot Password</a> --}}
                              {{-- <input type="hidden" name="redirect" value="http://brezzademo3.magikthemes.com/index.php?route=account/account"> --}}
                            </form>
            </div>
          </div>
        </div>
        </div>
      </div>
  </div>
  </div>
  </div>
@endsection