@extends('admin_layout');
@section('admin_content')
<div class="form-w3layouts">
    <div class="row bg-title">
        <div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
            <h4 class="page-title">Update Brand</h4> </div>
        
        <!-- /.col-lg-12 -->
    </div>
    <!-- page start-->
    <!-- page start-->
    <div class="row">
        <div class="col-lg-12">
                <section class="panel">
                    <header class="panel-heading">
                        Update Brand
                    </header>
                    <div class="panel-body">
                        <?php 
    $message = Session::get('message');
        if($message){
     echo '<p class="text-alert">'.$message.'</p>' ;
            Session::put('message',null);
    }
    ?>
    @foreach($edit_brand as $key => $edit_value)
                        <div class="position-center">
                            <form role="form" action="{{URL::to('/update-brand/'.$edit_value->BID)}}" method="post">
                                {{csrf_field()}}
                            <div class="form-group">
                                <label for="BName">Name Category</label>
                                <input type="text" value="{{$edit_value->BName}}" class="form-control" name="BName">
                            </div>
                            <button type="submit" name="update_category" class="btn btn-info">Cập Nhật Brand</button>
                        </form>
                        </div>

                    </div>
                    @endforeach
                </section>

        </div>
@endsection