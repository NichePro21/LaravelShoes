@extends('admin_layout');
@section('admin_content')

                        <div class="white-box">
                            <h3 class="box-title">Color Table</h3>
                          <div class="table-responsive">
                                <table class="table color-bordered-table purple-bordered-table">
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
                                            <th>Tên danh mục</th>
                                            <th>Color</th>
                                            <th>Quantity</th>
                                            <th>Size</th>
                                            <th>Product</th>
                                            <th>Hiển Thị</th>
                                            <th>Edit</th>
                                            <th style="width:30px;"></th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($all_color_byid as $key => $color_byid)
                                        <tr>
                                          <td>{{$color_byid->color_id}}</td>
                                          <td>{{$color_byid->color_name}}</td>
                                          
                                          <td style="background-color:{{$color_byid->color_code}}; display: inline-grid;
                                            padding-top: 20px;
                                            padding-right: 50px;"></td>
                                          <td>{{$color_byid->color_quantity}}</td>
                                          <td>{{$color_byid->color_size}}</td>
                                          <td>{{$color_byid->product_name}}</td>

                                          <td>
                                            <?php
                                          if($color_byid->color_status == 0){
                                            ?>
                                            <a href="{{URL::to('/unactive-brand/'.$color_byid->color_id )}}"><span class="fa-thumb-styling fa fa-thumbs-up"></span></a>
                                            <?php
                                             }else{
                                             ?>
                                            <a href="{{URL::to('/active-brand/'.$color_byid->color_id )}}"><span class="fa-thumb-styling fa fa-thumbs-down"></span></a>
                                          <?php }
                                          ?>
                                          </td>
                                          <td>
                                            <a href="{{URL::to('/edit-brand/'.$color_byid->color_id )}}" class="editstyling active">
                                              <i class="fa fa-pencil text-success text-active"></i></a>
                                              <hr>
                                              <a href="{{URL::to('/delete-brand/'.$color_byid->color_id )}}" class="deletestyling active" onclick="return confirm('Are you sure you want to delete this brand?')"><i
                                              <i class="fa fa-times text-danger text"></i></a>
                                          </td>
                                        </tr>
                                        @endforeach
                                      </tbody>
                                </table>
                            </div>
                        </div>
                    
@endsection