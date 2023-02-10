@extends('layoutcus')
@section('header')
<div class="breadcrumbs">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <ul>
                        <li>                            <a href="/">Home</a>
                          </li>
                        <li><span>/</span>                            <a href="/my-account/edit">Account</a>
                          </li>
                        <li><span>/</span>                            <strong>Edit Information</strong>            </li>
            
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
                <h2> My Account Information</h2>
              </div>
              @foreach($Name_by_id as $key => $value)
              <form action="/my-account/update" method="post" enctype="multipart/form-data" class="form-horizontal">
                {{ @csrf_field() }}
              
                
                <fieldset>
                  <legend>Your Personal Details</legend>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-lastname">Full Name</label>
                    <div class="col-sm-10">
                      <input type="text" name="CustomerName" value="{{$value->CName}}" placeholder="Full Name" id="input-lastname" class="form-control">
                                  </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-email">E-Mail</label>
                    <div class="col-sm-10">
                      <input type="email" name="CustomerEmail" value="{{$value->CEmail}}" placeholder="E-Mail" id="CEmail" class="form-control">
                                  </div>
                  </div>
                  <div class="form-group required">
                    <label class="col-sm-2 control-label" for="input-telephone">Telephone</label>
                    <div class="col-sm-10">
                      <input type="tel" name="Customertelephone" value="{{$value->CPhone}}" placeholder="Telephone" id="CPhone" class="form-control">
                                  </div>
                  </div>
                          </fieldset>

                <div class="buttons clearfix">
                  <div class="pull-left"><a href="/my-account" class="btn btn-default">Back</a></div>
                  <div class="pull-right">
                    <!-- <input type="submit" value="" class="btn btn-primary" /> -->
                    <button type="submit" class="button continue"> Continue </button>
                  </div>
                </div>
              </form>
              @endforeach
              </div></div></div>
        </div>
        </div>
        </div>
    @endsection