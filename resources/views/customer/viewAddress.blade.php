@extends('layoutcus')
@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <ul>
                        <li> <a href="/">Home</a>
                        </li>
                        <li><span>/</span> <a href="/my-account">Account</a>
                        </li>
                        <li><span>/</span> <strong>Address Book</strong> </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    
    @if (count($showAddress) != null)
        @foreach ($showAddress as $value)
        
        
            <div class="main-container col2-right-layout">
                
                <div class="main container">
                    <div class="row">
                        <div id="content" class="col-sm-9">
                            <?php
    $message = Session::get('message');
    if ($message) {
        
        echo '<div class="alert success"><span class="closebtn"></span>  
  <strong>Success!</strong> '.$message.'</div>';
        Session::put('message', null);
    }
    ?>
                            <div class="col-main">
                                <div class="my-account">
                                    <div class="page-title">
                                        <h2> Address Book Entries</h2>
                                    </div>
                                    <div class="table-responsive">
                                        <table class="table table-hover">
                                            <tbody>
                                                <tr>
                                                     <td class="text-left">{{$value->CName}}<br>
                                                        {{$value->CAdd}}<br>
                                                        {{$value->Cward}}
                                                        {{$value->Ccity}}
                                                        <br>
                                                    </td>
                                                    <td class="text-right"><a
                                                            href="/my-account/edit-address"
                                                            class="btn btn-info">Edit</a> &nbsp;
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="buttons clearfix">
                                        <div class="pull-left"><a href="/my-account" class="btn btn-default">Back</a></div>

                                    </div>
                                </div>
                            </div>
                        </div>



                    </div>
                </div>
            </div>
        @endforeach
    @else
        <div class="row">
            <a class="btn btn-outline-primary btn-sm" href="/my-account/edit-address/shipping/">
                <i class="czi-edit mr-1"></i>
                Thêm Địa Chỉ </a>
        </div>
        </div>
        </div>
        </div>
    @endif
@endsection
