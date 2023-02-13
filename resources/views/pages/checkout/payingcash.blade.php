
@extends('layout')
@section('content')
<div class="main-container col2-right-layout">
  <div class="main container">
    <div class="row">                <div id="content" class="col-sm-12">      <h1>Your order has been placed!</h1>
        <p>Your order has been successfully processed!</p><p>You can view your order history by going to the <a href="/my-account">my account</a> page and by clicking on <a href="/my-account/orders">history</a>.</p><p>If your purchase has an associated download, you can go to the account <p>Please direct any questions you have to the .</p><p>Thanks for shopping with us online!</p>      <div class="buttons">
          <div class="pull-right">
            <!-- <a href="" class="btn btn-primary"></a> -->
            <button onclick="window.location='/'" type="submit" class="button continue"> Continue </button>
          </div>
        </div>
        </div>
      </div>
  </div>
  </div>
  @endsection