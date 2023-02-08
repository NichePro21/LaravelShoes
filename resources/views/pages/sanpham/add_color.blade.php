@extends('admin_layout')
@section('admin_content')
  <div class="col-md-6">
    <div class="white-box">
        <h3 class="box-title m-b-0">Select color and size for product:</h3>
        <p class="text-muted m-b-30 font-13"></p>
        <form class="form-horizontal" role="form" action="{{URL::to('/save-color')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group" >
                <label for="exampleInputuname" class="col-sm-3 control-label">Name Color</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="ti-user"></i></div>
                        <input type="text" class="form-control" name="color_name" id="color_name" placeholder="Color"> </div>
                </div>
            </div>
            <div class="form-group" >
                <label for="exampleInputuname" class="col-sm-3 control-label">Color</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        
                        <input type="color" id="color_code" name="color_code" value="#ff0000"><br><br>
                         </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                <label >Product</label>
                
                  <select name="PID" class="form-control">
                    @foreach($product_color as $key => $value)
                     <option value="{{$value->PID}}">{{$value->product_name}}</option>
                     @endforeach
                </select>
               
                </div>
            </div>
            <div class="form-group" >
                <label for="exampleInputuname" class="col-sm-3 control-label">Quatity(10,20,30)</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="fa fa-arrows-h"></i></div>
                        <input type="text" class="form-control" name="color_quantity" id="color_quantity" placeholder="Quatity"> </div>
                </div>
            </div>
           
            <div class="form-group" >
                <label for="exampleInputuname" class="col-sm-3 control-label">Color size:(6,6.5,7)</label>
                <div class="col-sm-9">
                    <div class="input-group">
                        <div class="input-group-addon"><i class="mdi mdi-account-edit"></i></div>
                        <input type="text" class="form-control" name="color_size" id="color_size" placeholder="Size"> </div>
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                <label >Show/Off</label>
                  <select name="color_status" class="form-control">
                     <option value="0">Show</option>
                        <option value="1">Hidden</option>
                        
                </select>
                </div>
            </div>
{{--             
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-9">
                    <div class="checkbox checkbox-success">
                        <input id="checkbox" type="checkbox" required>
                        <label for="checkbox">
                            I agree</label>
                    </div>
                </div>
            </div> --}}
            <div class="form-group m-b-0">
                <div class="col-sm-offset-3 col-sm-9">
                    <button type="submit" class="btn btn-info waves-effect waves-light m-t-10">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection