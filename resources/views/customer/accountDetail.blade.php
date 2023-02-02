@extends('layoutcus')
@section('header')
    <div class="page-title-overlap bg-dark pt-4">
        <div class="container d-lg-flex justify-content-between py-2 py-lg-3">
            <div class="order-lg-2 mb-3 mb-lg-0 pt-lg-2">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb breadcrumb-light flex-lg-nowrap justify-content-center justify-content-lg-start">
                        <li class="breadcrumb-item"><a class="text-nowrap" href="/">Home</a></li>

                    </ol>
                </nav>
            </div>
            <div class="order-lg-1 pe-lg-4 text-center text-lg-start">
                <h1 class="h3 text-light mb-0">Account details</h1>
            </div>
        </div>
    </div>
    <div class="container pb-5 mb-2 mb-md-4">
    @endsection
    @section('content')
<form class="woocommerce-EditAccountForm edit-account" action="" method="post">
    <div class="cartzilla-pp-wrap bg-secondary rounded-lg p-4 mb-4">
    <div class="media align-items-center">
    <img alt="cartzilla" src="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=90&amp;d=mm&amp;r=g" srcset="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=180&amp;d=mm&amp;r=g 2x" class="avatar avatar-90 photo" height="90" width="90" gurl="https://secure.gravatar.com/avatar/0fb72e997fe7c0c7bbb507419c903152?s=90&amp;d=mm&amp;r=g" decoding="async"> <div class="media-body pl-3">
    <a href="#" class="cartzilla-pp-add-change btn btn-light btn-shadow btn-sm mb-2">
    <i class="czi-loading mr-2"></i>
    Change profile picture </a>
    <a href="#" class="cartzilla-pp-remove btn btn-light btn-shadow btn-sm mb-2 d-none">
    <i class="czi-close mr-2"></i>
    Remove </a>
    <div class="p mb-0 font-size-ms text-muted">Upload JPG, GIF or PNG image.</div>
    <input type="hidden" name="cartzilla_custom_avatar_id" class="cartzilla-pp-file-field" value="0">
    </div>
    </div>
    </div>
    <div class="row">
    <div class="col-sm-6">
    <div class="woocommerce-form-row woocommerce-form-row--first form-group">
    <label for="account_first_name">First name<span class="text-danger">*</span></label>
    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="account_first_name" id="account_first_name" autocomplete="given-name" value="abcxyz">
    </div>
    </div>
    <div class="col-sm-6">
    <div class="woocommerce-form-row woocommerce-form-row--last form-group">
    <label for="account_last_name">Last name<span class="text-danger">*</span></label>
    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="account_last_name" id="account_last_name" autocomplete="family-name" value="abcxyz">
    </div>
    </div>
    </div>
    <div class="woocommerce-form-row woocommerce-form-row--wide form-group">
    <label for="account_display_name">Display name<span class="text-danger">*</span></label>
    <input type="text" class="woocommerce-Input woocommerce-Input--text input-text form-control" name="account_display_name" id="account_display_name" value="cartzilla">
    <small class="form-text text-muted">This will be how your name will be displayed in the account section and in reviews</small>
    </div>
    <div class="woocommerce-form-row woocommerce-form-row--wide form-group">
    <label for="account_email">Email address<span class="text-danger">*</span></label>
    <input type="email" class="woocommerce-Input woocommerce-Input--email input-text form-control" name="account_email" id="account_email" autocomplete="email" value="Cartzilla@gmail.com">
    </div>
    <div class="woocommerce-form-row woocommerce-form-row--wide form-group">
    <label for="password_current">Current password</label>
    <div class="password-toggle">
    <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control" name="password_current" id="password_current" autocomplete="off"><span class="show-password-input"></span></span>
    <label class="password-toggle-btn">
    <input class="custom-control-input" type="checkbox">
    <i class="czi-eye password-toggle-indicator"></i>
    <span class="sr-only">Show password</span>
    </label>
    </div>
    <small class="form-text text-muted">Leave blank to leave unchanged</small>
    </div>
    <div class="woocommerce-form-row woocommerce-form-row--wide form-group">
    <label for="password_1">New password</label>
    <div class="password-toggle">
    <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control" name="password_1" id="password_1" autocomplete="off"><span class="show-password-input"></span></span>
    <label class="password-toggle-btn">
    <input class="custom-control-input" type="checkbox">
    <i class="czi-eye password-toggle-indicator"></i>
    <span class="sr-only">Show password</span>
    </label>
    </div>
    <small class="form-text text-muted">Leave blank to leave unchanged</small>
    </div>
    <div class="woocommerce-form-row woocommerce-form-row--wide form-group">
    <label for="password_2">Confirm new password</label>
    <div class="password-toggle">
    <span class="password-input"><input type="password" class="woocommerce-Input woocommerce-Input--password input-text form-control" name="password_2" id="password_2" autocomplete="off"><span class="show-password-input"></span></span>
    <label class="password-toggle-btn">
    <input class="custom-control-input" type="checkbox">
    <i class="czi-eye password-toggle-indicator"></i>
    <span class="sr-only">Show password</span>
    </label>
    </div>
    </div>
    <button type="submit" class="woocommerce-Button button btn btn-primary" name="save_account_details" value="Save changes">Save changes</button>
    <input type="hidden" name="action" value="save_account_details">
    <input type="hidden" id="save-account-details-nonce" name="save-account-details-nonce" value="4b59993026"><input type="hidden" name="_wp_http_referer" value="/my-account/edit-account/">
    </form>
    @endsection