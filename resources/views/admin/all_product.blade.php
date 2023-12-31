@extends('admin_layout');
@section('admin_content')
<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Product Layouts</h4> </div>
  
  <!-- /.col-lg-12 -->
</div>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        All Product
      </div>
      
      <div class="table-responsive">
        <table class="table table-striped b-t b-light">
          <thead>
            <tr>
              <?php 
    $message = Session::get('message');
        if($message){
     echo '<p class="text-alert">'.$message.'</p>' ;
            Session::put('message',null);
    }
    ?>
              
              <th>ID</th>
              <th>Brand</th>
              <th>Category</th>
              <th>Tên</th>
              <th>Giá Vốn</th>
              <th>Giá Bán</th>
              <th>Size</th>
              <th>Số Lượng</th>
              <th>Hình Ảnh</th>
              <th>Edit</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_product as $key => $product_pro)
            <tr>
              
              <td>{{$product_pro->PID}}</td>
              <td>{{$product_pro->brand_name}}</td>
              <td>{{$product_pro->category_name}}</td>
              <td>{{$product_pro->product_name}}</td>
              <td>{{$product_pro->price_cost}}</td>
              <td>{{$product_pro->product_price}}</td>
              <td>{{$product_pro->product_size}}</td>
              <td>{{$product_pro->product_quantity}}</td>
              <td><img src="{{URL::to('/public/uploads/product')}}/{{ $product_pro->product_image }}" height="100" width="100" alt=""></td>
              
             
              
              <td>
                <a href="{{URL::to('/admin/edit-product/'.$product_pro->PID)}}" class="editstyling active">
                  <i class="fa fa-pencil text-success text-active"></i></a>
                  <hr>
                  <a href="{{URL::to('/admin/delete-product/'.$product_pro->PID)}}" class="deletestyling active" onclick="return confirm('Are you sure you want to delete this tag?')"><i
                  <i class="fa fa-times text-danger text"></i></a>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
      <footer class="panel-footer">
        <div class="row">
          
          <div class="col-sm-5 text-center">
            <small class="text-muted inline m-t-sm m-b-sm">showing 20-30 of 50 items</small>
          </div>
          <div class="col-sm-7 text-right text-center-xs">                
            <ul class="pagination pagination-sm m-t-none m-b-none">
              <li><a href=""><i class="fa fa-chevron-left"></i></a></li>
              <li><a href="">1</a></li>
              <li><a href="">2</a></li>
              <li><a href="">3</a></li>
              <li><a href="">4</a></li>
              <li><a href=""><i class="fa fa-chevron-right"></i></a></li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </div>
@endsection