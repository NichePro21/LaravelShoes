@extends('admin_layout');
@section('admin_content')
<div class="row bg-title">
  <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
      <h4 class="page-title">Category Layouts</h4> </div>
  
  <!-- /.col-lg-12 -->
</div>
<div class="table-agile-info">
    <div class="panel panel-default">
      <div class="panel-heading">
        Category
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
              <th style="width:20px;">
                <label class="i-checks m-b-none">
                  <input type="checkbox"><i></i>
                </label>
              </th>
              <th>ID</th>
              <th>Category Name</th>
              <th>slug</th>
              <th>Parent</th>
              <th>Edit</th>
              <th style="width:30px;"></th>
            </tr>
          </thead>
          <tbody>
            @foreach($all_category_product as $key => $cate_pro)
            <tr>
              <td><label class="i-checks m-b-none"><input type="checkbox" name="post[]"><i></i></label></td>
              <td>{{$cate_pro->CatID}}</td>
              <td>{{$cate_pro->category_name}}</td>
              <td>{{$cate_pro->slug_category_product}}</td>
              <td>{{$cate_pro->category_parent}}</td>
              
             
              <td>
                <a href="{{URL::to('/edit-category/'.$cate_pro->CatID)}}" class="editstyling active">
                  <i class="fa fa-pencil text-success text-active"></i>Update</a>
                  <hr>
                  <a href="{{URL::to('/delete-category/'.$cate_pro->CatID)}}" class="deletestyling active" onclick="return confirm('Are you sure you want to delete this category?')">
                    <i class="fa fa-times text-danger text"></i>Delete</a>
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