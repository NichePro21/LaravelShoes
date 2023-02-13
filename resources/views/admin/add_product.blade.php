@extends('admin_layout');
@section('admin_content')
<div class="form-w3layouts">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Add Product</h4> </div>
        
        <!-- /.col-lg-12 -->
    </div>
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Add new Product
                    </header>
                    <div class="panel-body">
                        <?php 
    $message = Session::get('message');
        if($message){
     echo '<p class="text-alert">'.$message.'</p>' ;
            Session::put('message',null);
    }
    ?>
                        <div class="position-center">
                            <form role="form" action="{{URL::to('/save-product')}}" method="post" enctype="multipart/form-data">
                                {{csrf_field()}}
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Category</label>
                                      <select name="product_cate" class="form-control input-sm m-bot15">
                                        @foreach($cate_product as $key => $cate)
                                            @if($cate->category_parent==0)
                                                <option style="font-size: 15px" value="{{$cate->CatID}}">{{$cate->category_name}}</option>
                                                @foreach($cate_product as $key => $cate_sub)
                                                    @if($cate_sub->category_parent!=0 && $cate_sub->category_parent==$cate->CatID)
                                                    <option style="color: red;font-size: 15px" value="{{$cate_sub->CatID}}">---{{$cate_sub->category_name}}</option>   
                                                    @endif
                                                @endforeach

                                            @endif
                                        @endforeach
                                            
                                    </select>
                                </div>
                               
                                 <div class="form-group">
                                    <label for="exampleInputPassword1">Brand</label>
                                      <select name="product_brand" class="form-control input-sm m-bot15">
                                        @foreach($brand_product as $key => $brand)
                                            <option value="{{$brand->BID}}">{{$brand->brand_name}}</option>
                                        @endforeach
                                            
                                    </select>
                                </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Name Product</label>
                                <input type="text" data-validation="length" data-validation-length="min10" data-validation-error-msg="Làm ơn điền ít nhất 10 ký tự" name="product_name" class="form-control" required id="slug" placeholder="Name" onkeyup="ChangeToSlug();"> 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Size</label>

                                <input type="text" data-role="tagsinput" name="product_size" class="form-control" required>
                                 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug</label>
                                <input type="text" name="product_slug" class="form-control " id="convert_slug" placeholder="slug" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Giá bán</label>
                                <input type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" name="product_price" class="form-control price_format" id="" required>
                            </div>
                             <div class="form-group">
                                <label for="exampleInputEmail1">Giá gốc</label>
                                <input type="text" data-validation="length" data-validation-length="min5" data-validation-error-msg="Làm ơn điền số tiền" name="price_cost" class="form-control price_format" id="" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                <input type="file" name="product_image" class="form-control" id="exampleInputEmail1">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Tags sản phẩm</label>

                                <input type="text" data-role="tagsinput" name="product_tags" class="form-control" required>
                                 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Quantity</label>

                                <input type="text" data-role="tagsinput" name="product_quantity" class="form-control" required>
                                 
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mô tả sản phẩm</label>
                                <textarea style="resize: none"  rows="8" class="form-control" name="product_desc" id="ckeditor1" placeholder="Mô tả sản phẩm" required></textarea>
                            </div>
                             <div class="form-group">
                                <label for="exampleInputPassword1">Nội dung sản phẩm</label>
                                <textarea style="resize: none" rows="8" class="form-control" name="product_content"  id="my-editor" placeholder="Nội dung sản phẩm" required></textarea>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Show/Hidden</label>
                                  <select name="product_status" class="form-control input-sm m-bot15">
                                     <option value="0">Show</option>
                                        <option value="1">Hidden</option>
                                        
                                </select>
                            </div>
                            <button type="submit" name="add_category" class="btn btn-info">Add Product</button>
                        </form>
                        </div>

                    </div>
                </section>

        </div>
        
@endsection