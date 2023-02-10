@extends('layout')
@section('content')
<div class="container">
  <ul class="breadcrumb">
        <li><a href="http://brezzademo3.magikthemes.com/index.php?route=common/home">Home</a></li>
        <li><a href="http://brezzademo3.magikthemes.com/index.php?route=checkout/cart">Shopping Cart</a></li>
        <li><a href="http://brezzademo3.magikthemes.com/index.php?route=checkout/checkout">Checkout</a></li>
      </ul>
    <div class="row">                <div id="content" class="col-sm-12">      <h1>Checkout</h1>
      <div class="panel-group" id="accordion">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><span class="number">1</span> Checkout Options</h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-checkout-option">
            <div class="panel-body"></div>
          </div>
        </div>
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle" aria-expanded="true"><span class="number">2</span> Billing Details <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse in" id="collapse-payment-address" aria-expanded="true" style="">
            <div class="panel-body"> 
<form class="form-horizontal">
    <div class="radio">
    <label>
      <input type="radio" name="payment_address" value="existing" checked="checked">
      I want to use an existing address</label>
  </div>
  <div id="payment-existing">
    <select name="address_id" class="form-control">
                  <option value="92" selected="selected">hoangshop hoangshop, cach mang thang 8, TP HCM, Ha Noi, Viet Nam</option>
                </select>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="payment_address" value="new">
      I want to use a new address</label>
  </div>
    <br>
  <div id="payment-new" style="display: none;">
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-payment-firstname">First Name</label>
      <div class="col-sm-10">
        <input type="text" name="firstname" value="" placeholder="First Name" id="input-payment-firstname" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-payment-lastname">Last Name</label>
      <div class="col-sm-10">
        <input type="text" name="lastname" value="" placeholder="Last Name" id="input-payment-lastname" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-payment-company">Company</label>
      <div class="col-sm-10">
        <input type="text" name="company" value="" placeholder="Company" id="input-payment-company" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-payment-address-1">Address 1</label>
      <div class="col-sm-10">
        <input type="text" name="address_1" value="" placeholder="Address 1" id="input-payment-address-1" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-payment-address-2">Address 2</label>
      <div class="col-sm-10">
        <input type="text" name="address_2" value="" placeholder="Address 2" id="input-payment-address-2" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-payment-city">City</label>
      <div class="col-sm-10">
        <input type="text" name="city" value="" placeholder="City" id="input-payment-city" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-payment-postcode">Post Code</label>
      <div class="col-sm-10">
        <input type="text" name="postcode" value="" placeholder="Post Code" id="input-payment-postcode" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-payment-country">Country</label>
      <div class="col-sm-10">
        <select name="country_id" id="input-payment-country" class="form-control">
          <option value=""> --- Please Select --- </option>
                              <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                        <option value="252">Ascension Island (British)</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="16">Bahamas</option>
                                        <option value="17">Bahrain</option>
                                        <option value="18">Bangladesh</option>
                                        <option value="19">Barbados</option>
                                        <option value="20">Belarus</option>
                                        <option value="21">Belgium</option>
                                        <option value="22">Belize</option>
                                        <option value="23">Benin</option>
                                        <option value="24">Bermuda</option>
                                        <option value="25">Bhutan</option>
                                        <option value="26">Bolivia</option>
                                        <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="27">Bosnia and Herzegovina</option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island</option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean Territory</option>
                                        <option value="32">Brunei Darussalam</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
                                        <option value="251">Canary Islands</option>
                                        <option value="39">Cape Verde</option>
                                        <option value="40">Cayman Islands</option>
                                        <option value="41">Central African Republic</option>
                                        <option value="42">Chad</option>
                                        <option value="43">Chile</option>
                                        <option value="44">China</option>
                                        <option value="45">Christmas Island</option>
                                        <option value="46">Cocos (Keeling) Islands</option>
                                        <option value="47">Colombia</option>
                                        <option value="48">Comoros</option>
                                        <option value="49">Congo</option>
                                        <option value="50">Cook Islands</option>
                                        <option value="51">Costa Rica</option>
                                        <option value="52">Cote D'Ivoire</option>
                                        <option value="53">Croatia</option>
                                        <option value="54">Cuba</option>
                                        <option value="246">Curacao</option>
                                        <option value="55">Cyprus</option>
                                        <option value="56">Czech Republic</option>
                                        <option value="237">Democratic Republic of Congo</option>
                                        <option value="57">Denmark</option>
                                        <option value="58">Djibouti</option>
                                        <option value="59">Dominica</option>
                                        <option value="60">Dominican Republic</option>
                                        <option value="61">East Timor</option>
                                        <option value="62">Ecuador</option>
                                        <option value="63">Egypt</option>
                                        <option value="64">El Salvador</option>
                                        <option value="65">Equatorial Guinea</option>
                                        <option value="66">Eritrea</option>
                                        <option value="67">Estonia</option>
                                        <option value="68">Ethiopia</option>
                                        <option value="69">Falkland Islands (Malvinas)</option>
                                        <option value="70">Faroe Islands</option>
                                        <option value="71">Fiji</option>
                                        <option value="72">Finland</option>
                                        <option value="74">France, Metropolitan</option>
                                        <option value="75">French Guiana</option>
                                        <option value="76">French Polynesia</option>
                                        <option value="77">French Southern Territories</option>
                                        <option value="126">FYROM</option>
                                        <option value="78">Gabon</option>
                                        <option value="79">Gambia</option>
                                        <option value="80">Georgia</option>
                                        <option value="81">Germany</option>
                                        <option value="82">Ghana</option>
                                        <option value="83">Gibraltar</option>
                                        <option value="84">Greece</option>
                                        <option value="85">Greenland</option>
                                        <option value="86">Grenada</option>
                                        <option value="87">Guadeloupe</option>
                                        <option value="88">Guam</option>
                                        <option value="89">Guatemala</option>
                                        <option value="256">Guernsey</option>
                                        <option value="90">Guinea</option>
                                        <option value="91">Guinea-Bissau</option>
                                        <option value="92">Guyana</option>
                                        <option value="93">Haiti</option>
                                        <option value="94">Heard and Mc Donald Islands</option>
                                        <option value="95">Honduras</option>
                                        <option value="96">Hong Kong</option>
                                        <option value="97">Hungary</option>
                                        <option value="98">Iceland</option>
                                        <option value="99">India</option>
                                        <option value="100">Indonesia</option>
                                        <option value="101">Iran (Islamic Republic of)</option>
                                        <option value="102">Iraq</option>
                                        <option value="103">Ireland</option>
                                        <option value="254">Isle of Man</option>
                                        <option value="104">Israel</option>
                                        <option value="105">Italy</option>
                                        <option value="106">Jamaica</option>
                                        <option value="107">Japan</option>
                                        <option value="257">Jersey</option>
                                        <option value="108">Jordan</option>
                                        <option value="109">Kazakhstan</option>
                                        <option value="110">Kenya</option>
                                        <option value="111">Kiribati</option>
                                        <option value="253">Kosovo, Republic of</option>
                                        <option value="114">Kuwait</option>
                                        <option value="115">Kyrgyzstan</option>
                                        <option value="116">Lao People's Democratic Republic</option>
                                        <option value="117">Latvia</option>
                                        <option value="118">Lebanon</option>
                                        <option value="119">Lesotho</option>
                                        <option value="120">Liberia</option>
                                        <option value="121">Libyan Arab Jamahiriya</option>
                                        <option value="122">Liechtenstein</option>
                                        <option value="123">Lithuania</option>
                                        <option value="124">Luxembourg</option>
                                        <option value="125">Macau</option>
                                        <option value="127">Madagascar</option>
                                        <option value="128">Malawi</option>
                                        <option value="129">Malaysia</option>
                                        <option value="130">Maldives</option>
                                        <option value="131">Mali</option>
                                        <option value="132">Malta</option>
                                        <option value="133">Marshall Islands</option>
                                        <option value="134">Martinique</option>
                                        <option value="135">Mauritania</option>
                                        <option value="136">Mauritius</option>
                                        <option value="137">Mayotte</option>
                                        <option value="138">Mexico</option>
                                        <option value="139">Micronesia, Federated States of</option>
                                        <option value="140">Moldova, Republic of</option>
                                        <option value="141">Monaco</option>
                                        <option value="142">Mongolia</option>
                                        <option value="242">Montenegro</option>
                                        <option value="143">Montserrat</option>
                                        <option value="144">Morocco</option>
                                        <option value="145">Mozambique</option>
                                        <option value="146">Myanmar</option>
                                        <option value="147">Namibia</option>
                                        <option value="148">Nauru</option>
                                        <option value="149">Nepal</option>
                                        <option value="150">Netherlands</option>
                                        <option value="151">Netherlands Antilles</option>
                                        <option value="152">New Caledonia</option>
                                        <option value="153">New Zealand</option>
                                        <option value="154">Nicaragua</option>
                                        <option value="155">Niger</option>
                                        <option value="156">Nigeria</option>
                                        <option value="157">Niue</option>
                                        <option value="158">Norfolk Island</option>
                                        <option value="112">North Korea</option>
                                        <option value="159">Northern Mariana Islands</option>
                                        <option value="160">Norway</option>
                                        <option value="161">Oman</option>
                                        <option value="162">Pakistan</option>
                                        <option value="163">Palau</option>
                                        <option value="247">Palestinian Territory, Occupied</option>
                                        <option value="164">Panama</option>
                                        <option value="165">Papua New Guinea</option>
                                        <option value="166">Paraguay</option>
                                        <option value="167">Peru</option>
                                        <option value="168">Philippines</option>
                                        <option value="169">Pitcairn</option>
                                        <option value="170">Poland</option>
                                        <option value="171">Portugal</option>
                                        <option value="172">Puerto Rico</option>
                                        <option value="173">Qatar</option>
                                        <option value="174">Reunion</option>
                                        <option value="175">Romania</option>
                                        <option value="176">Russian Federation</option>
                                        <option value="177">Rwanda</option>
                                        <option value="178">Saint Kitts and Nevis</option>
                                        <option value="179">Saint Lucia</option>
                                        <option value="180">Saint Vincent and the Grenadines</option>
                                        <option value="181">Samoa</option>
                                        <option value="182">San Marino</option>
                                        <option value="183">Sao Tome and Principe</option>
                                        <option value="184">Saudi Arabia</option>
                                        <option value="185">Senegal</option>
                                        <option value="243">Serbia</option>
                                        <option value="186">Seychelles</option>
                                        <option value="187">Sierra Leone</option>
                                        <option value="188">Singapore</option>
                                        <option value="189">Slovak Republic</option>
                                        <option value="190">Slovenia</option>
                                        <option value="191">Solomon Islands</option>
                                        <option value="192">Somalia</option>
                                        <option value="193">South Africa</option>
                                        <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                        <option value="113">South Korea</option>
                                        <option value="248">South Sudan</option>
                                        <option value="195">Spain</option>
                                        <option value="196">Sri Lanka</option>
                                        <option value="249">St. Barthelemy</option>
                                        <option value="197">St. Helena</option>
                                        <option value="250">St. Martin (French part)</option>
                                        <option value="198">St. Pierre and Miquelon</option>
                                        <option value="199">Sudan</option>
                                        <option value="200">Suriname</option>
                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                        <option value="202">Swaziland</option>
                                        <option value="203">Sweden</option>
                                        <option value="204">Switzerland</option>
                                        <option value="205">Syrian Arab Republic</option>
                                        <option value="206">Taiwan</option>
                                        <option value="207">Tajikistan</option>
                                        <option value="208">Tanzania, United Republic of</option>
                                        <option value="209">Thailand</option>
                                        <option value="210">Togo</option>
                                        <option value="211">Tokelau</option>
                                        <option value="212">Tonga</option>
                                        <option value="213">Trinidad and Tobago</option>
                                        <option value="255">Tristan da Cunha</option>
                                        <option value="214">Tunisia</option>
                                        <option value="215">Turkey</option>
                                        <option value="216">Turkmenistan</option>
                                        <option value="217">Turks and Caicos Islands</option>
                                        <option value="218">Tuvalu</option>
                                        <option value="219">Uganda</option>
                                        <option value="220">Ukraine</option>
                                        <option value="221">United Arab Emirates</option>
                                        <option value="222">United Kingdom</option>
                                        <option value="223">United States</option>
                                        <option value="224">United States Minor Outlying Islands</option>
                                        <option value="225">Uruguay</option>
                                        <option value="226">Uzbekistan</option>
                                        <option value="227">Vanuatu</option>
                                        <option value="228">Vatican City State (Holy See)</option>
                                        <option value="229">Venezuela</option>
                                        <option value="230" selected="selected">Viet Nam</option>
                                        <option value="231">Virgin Islands (British)</option>
                                        <option value="232">Virgin Islands (U.S.)</option>
                                        <option value="233">Wallis and Futuna Islands</option>
                                        <option value="234">Western Sahara</option>
                                        <option value="235">Yemen</option>
                                        <option value="238">Zambia</option>
                                        <option value="239">Zimbabwe</option>
                            </select> 
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-payment-zone">Region / State</label>
      <div class="col-sm-10">
        <select name="zone_id" id="input-payment-zone" class="form-control"><option value=""> --- Please Select --- </option><option value="3751">An Giang</option><option value="3756">Ba Ria-Vung Tau</option><option value="3752">Bac Giang</option><option value="3753">Bac Kan</option><option value="3754">Bac Lieu</option><option value="3755">Bac Ninh</option><option value="3757">Ben Tre</option><option value="3758">Binh Dinh</option><option value="3759">Binh Duong</option><option value="3760">Binh Phuoc</option><option value="3761">Binh Thuan</option><option value="3762">Ca Mau</option><option value="3763">Can Tho</option><option value="3764">Cao Bang</option><option value="3767">Da Nang</option><option value="3765">Dak Lak</option><option value="3766">Dak Nong</option><option value="3768">Dien Bien</option><option value="3769">Dong Nai</option><option value="3770">Dong Thap</option><option value="3771">Gia Lai</option><option value="3772">Ha Giang</option><option value="3775">Ha Nam</option><option value="3776" selected="selected">Ha Noi</option><option value="3777">Ha Tay</option><option value="3778">Ha Tinh</option><option value="3773">Hai Duong</option><option value="3774">Hai Phong</option><option value="3781">Hau Giang</option><option value="3780">Ho Chi Minh City</option><option value="3779">Hoa Binh</option><option value="3782">Hung Yen</option></select>
      </div>
    </div>
      </div>
  <div class="buttons clearfix">
    <div class="pull-right">
     <!--  <input type="button" value="" id="button-payment-address" data-loading-text="" class="btn btn-primary" /> -->
     <button type="button" id="button-payment-address" data-loading-text="Loading..." class="button continue">Continue</button>
    </div>
  </div>
</form>
<script type="text/javascript"><!--
$('input[name=\'payment_address\']').on('change', function() {
	if (this.value == 'new') {
		$('#payment-existing').hide();
		$('#payment-new').show();
	} else {
		$('#payment-existing').show();
		$('#payment-new').hide();
	}
});
//--></script>
<script type="text/javascript"><!--
// Sort the custom fields
$('#collapse-payment-address .form-group[data-sort]').detach().each(function() {
	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-payment-address .form-group').length-2) {
		$('#collapse-payment-address .form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);
	}

	if ($(this).attr('data-sort') > $('#collapse-payment-address .form-group').length-2) {
		$('#collapse-payment-address .form-group:last').after(this);
	}

	if ($(this).attr('data-sort') == $('#collapse-payment-address .form-group').length-2) {
		$('#collapse-payment-address .form-group:last').after(this);
	}

	if ($(this).attr('data-sort') < -$('#collapse-payment-address .form-group').length-2) {
		$('#collapse-payment-address .form-group:first').before(this);
	}
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$(node).parent().find('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input[name^=\'custom_field\']').attr('value', json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-payment-address select[name=\'country_id\']').on('change', function() {
	$.ajax({
		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
		dataType: 'json',
		beforeSend: function() {
			$('#collapse-payment-address select[name=\'country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
		},
		complete: function() {
			$('.fa-spin').remove();
		},
		success: function(json) {
			if (json['postcode_required'] == '1') {
				$('#collapse-payment-address input[name=\'postcode\']').parent().parent().addClass('required');
			} else {
				$('#collapse-payment-address input[name=\'postcode\']').parent().parent().removeClass('required');
			}

			html = '<option value=""> --- Please Select --- </option>';

			if (json['zone'] && json['zone'] != '') {
				for (i = 0; i < json['zone'].length; i++) {
					html += '<option value="' + json['zone'][i]['zone_id'] + '"';

					if (json['zone'][i]['zone_id'] == '3776') {
						html += ' selected="selected"';
					}

					html += '>' + json['zone'][i]['name'] + '</option>';
				}
			} else {
				html += '<option value="0" selected="selected"> --- None --- </option>';
			}

			$('#collapse-payment-address select[name=\'zone_id\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#collapse-payment-address select[name=\'country_id\']').trigger('change');
//--></script></div>
          </div>
        </div>
                        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false"><span class="number">3</span> Delivery Details <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-shipping-address" aria-expanded="false" style="height: 0px;">
            <div class="panel-body"> 
<form class="form-horizontal">
    <div class="radio">
    <label>
      <input type="radio" name="shipping_address" value="existing" checked="checked">
      I want to use an existing address</label>
  </div>
  <div id="shipping-existing">
    <select name="address_id" class="form-control">
                  <option value="92" selected="selected">hoangshop hoangshop, cach mang thang 8, TP HCM, Ha Noi, Viet Nam</option>
                </select>
  </div>
  <div class="radio">
    <label>
      <input type="radio" name="shipping_address" value="new">
      I want to use a new address</label>
  </div>
    <br>
  <div id="shipping-new" style="display: none;">
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-firstname">First Name</label>
      <div class="col-sm-10">
        <input type="text" name="firstname" value="" placeholder="First Name" id="input-shipping-firstname" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-lastname">Last Name</label>
      <div class="col-sm-10">
        <input type="text" name="lastname" value="" placeholder="Last Name" id="input-shipping-lastname" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-shipping-company">Company</label>
      <div class="col-sm-10">
        <input type="text" name="company" value="" placeholder="Company" id="input-shipping-company" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-address-1">Address 1</label>
      <div class="col-sm-10">
        <input type="text" name="address_1" value="" placeholder="Address 1" id="input-shipping-address-1" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-shipping-address-2">Address 2</label>
      <div class="col-sm-10">
        <input type="text" name="address_2" value="" placeholder="Address 2" id="input-shipping-address-2" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-city">City</label>
      <div class="col-sm-10">
        <input type="text" name="city" value="" placeholder="City" id="input-shipping-city" class="form-control">
      </div>
    </div>
    <div class="form-group">
      <label class="col-sm-2 control-label" for="input-shipping-postcode">Post Code</label>
      <div class="col-sm-10">
        <input type="text" name="postcode" value="810000" placeholder="Post Code" id="input-shipping-postcode" class="form-control">
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-country">Country</label>
      <div class="col-sm-10">
        <select name="country_id" id="input-shipping-country" class="form-control">
          <option value=""> --- Please Select --- </option>
                              <option value="244">Aaland Islands</option>
                                        <option value="1">Afghanistan</option>
                                        <option value="2">Albania</option>
                                        <option value="3">Algeria</option>
                                        <option value="4">American Samoa</option>
                                        <option value="5">Andorra</option>
                                        <option value="6">Angola</option>
                                        <option value="7">Anguilla</option>
                                        <option value="8">Antarctica</option>
                                        <option value="9">Antigua and Barbuda</option>
                                        <option value="10">Argentina</option>
                                        <option value="11">Armenia</option>
                                        <option value="12">Aruba</option>
                                        <option value="252">Ascension Island (British)</option>
                                        <option value="13">Australia</option>
                                        <option value="14">Austria</option>
                                        <option value="15">Azerbaijan</option>
                                        <option value="16">Bahamas</option>
                                        <option value="17">Bahrain</option>
                                        <option value="18">Bangladesh</option>
                                        <option value="19">Barbados</option>
                                        <option value="20">Belarus</option>
                                        <option value="21">Belgium</option>
                                        <option value="22">Belize</option>
                                        <option value="23">Benin</option>
                                        <option value="24">Bermuda</option>
                                        <option value="25">Bhutan</option>
                                        <option value="26">Bolivia</option>
                                        <option value="245">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="27">Bosnia and Herzegovina</option>
                                        <option value="28">Botswana</option>
                                        <option value="29">Bouvet Island</option>
                                        <option value="30">Brazil</option>
                                        <option value="31">British Indian Ocean Territory</option>
                                        <option value="32">Brunei Darussalam</option>
                                        <option value="33">Bulgaria</option>
                                        <option value="34">Burkina Faso</option>
                                        <option value="35">Burundi</option>
                                        <option value="36">Cambodia</option>
                                        <option value="37">Cameroon</option>
                                        <option value="38">Canada</option>
                                        <option value="251">Canary Islands</option>
                                        <option value="39">Cape Verde</option>
                                        <option value="40">Cayman Islands</option>
                                        <option value="41">Central African Republic</option>
                                        <option value="42">Chad</option>
                                        <option value="43">Chile</option>
                                        <option value="44">China</option>
                                        <option value="45">Christmas Island</option>
                                        <option value="46">Cocos (Keeling) Islands</option>
                                        <option value="47">Colombia</option>
                                        <option value="48">Comoros</option>
                                        <option value="49">Congo</option>
                                        <option value="50">Cook Islands</option>
                                        <option value="51">Costa Rica</option>
                                        <option value="52">Cote D'Ivoire</option>
                                        <option value="53">Croatia</option>
                                        <option value="54">Cuba</option>
                                        <option value="246">Curacao</option>
                                        <option value="55">Cyprus</option>
                                        <option value="56">Czech Republic</option>
                                        <option value="237">Democratic Republic of Congo</option>
                                        <option value="57">Denmark</option>
                                        <option value="58">Djibouti</option>
                                        <option value="59">Dominica</option>
                                        <option value="60">Dominican Republic</option>
                                        <option value="61">East Timor</option>
                                        <option value="62">Ecuador</option>
                                        <option value="63">Egypt</option>
                                        <option value="64">El Salvador</option>
                                        <option value="65">Equatorial Guinea</option>
                                        <option value="66">Eritrea</option>
                                        <option value="67">Estonia</option>
                                        <option value="68">Ethiopia</option>
                                        <option value="69">Falkland Islands (Malvinas)</option>
                                        <option value="70">Faroe Islands</option>
                                        <option value="71">Fiji</option>
                                        <option value="72">Finland</option>
                                        <option value="74">France, Metropolitan</option>
                                        <option value="75">French Guiana</option>
                                        <option value="76">French Polynesia</option>
                                        <option value="77">French Southern Territories</option>
                                        <option value="126">FYROM</option>
                                        <option value="78">Gabon</option>
                                        <option value="79">Gambia</option>
                                        <option value="80">Georgia</option>
                                        <option value="81">Germany</option>
                                        <option value="82">Ghana</option>
                                        <option value="83">Gibraltar</option>
                                        <option value="84">Greece</option>
                                        <option value="85">Greenland</option>
                                        <option value="86">Grenada</option>
                                        <option value="87">Guadeloupe</option>
                                        <option value="88">Guam</option>
                                        <option value="89">Guatemala</option>
                                        <option value="256">Guernsey</option>
                                        <option value="90">Guinea</option>
                                        <option value="91">Guinea-Bissau</option>
                                        <option value="92">Guyana</option>
                                        <option value="93">Haiti</option>
                                        <option value="94">Heard and Mc Donald Islands</option>
                                        <option value="95">Honduras</option>
                                        <option value="96">Hong Kong</option>
                                        <option value="97">Hungary</option>
                                        <option value="98">Iceland</option>
                                        <option value="99">India</option>
                                        <option value="100">Indonesia</option>
                                        <option value="101">Iran (Islamic Republic of)</option>
                                        <option value="102">Iraq</option>
                                        <option value="103">Ireland</option>
                                        <option value="254">Isle of Man</option>
                                        <option value="104">Israel</option>
                                        <option value="105">Italy</option>
                                        <option value="106">Jamaica</option>
                                        <option value="107">Japan</option>
                                        <option value="257">Jersey</option>
                                        <option value="108">Jordan</option>
                                        <option value="109">Kazakhstan</option>
                                        <option value="110">Kenya</option>
                                        <option value="111">Kiribati</option>
                                        <option value="253">Kosovo, Republic of</option>
                                        <option value="114">Kuwait</option>
                                        <option value="115">Kyrgyzstan</option>
                                        <option value="116">Lao People's Democratic Republic</option>
                                        <option value="117">Latvia</option>
                                        <option value="118">Lebanon</option>
                                        <option value="119">Lesotho</option>
                                        <option value="120">Liberia</option>
                                        <option value="121">Libyan Arab Jamahiriya</option>
                                        <option value="122">Liechtenstein</option>
                                        <option value="123">Lithuania</option>
                                        <option value="124">Luxembourg</option>
                                        <option value="125">Macau</option>
                                        <option value="127">Madagascar</option>
                                        <option value="128">Malawi</option>
                                        <option value="129">Malaysia</option>
                                        <option value="130">Maldives</option>
                                        <option value="131">Mali</option>
                                        <option value="132">Malta</option>
                                        <option value="133">Marshall Islands</option>
                                        <option value="134">Martinique</option>
                                        <option value="135">Mauritania</option>
                                        <option value="136">Mauritius</option>
                                        <option value="137">Mayotte</option>
                                        <option value="138">Mexico</option>
                                        <option value="139">Micronesia, Federated States of</option>
                                        <option value="140">Moldova, Republic of</option>
                                        <option value="141">Monaco</option>
                                        <option value="142">Mongolia</option>
                                        <option value="242">Montenegro</option>
                                        <option value="143">Montserrat</option>
                                        <option value="144">Morocco</option>
                                        <option value="145">Mozambique</option>
                                        <option value="146">Myanmar</option>
                                        <option value="147">Namibia</option>
                                        <option value="148">Nauru</option>
                                        <option value="149">Nepal</option>
                                        <option value="150">Netherlands</option>
                                        <option value="151">Netherlands Antilles</option>
                                        <option value="152">New Caledonia</option>
                                        <option value="153">New Zealand</option>
                                        <option value="154">Nicaragua</option>
                                        <option value="155">Niger</option>
                                        <option value="156">Nigeria</option>
                                        <option value="157">Niue</option>
                                        <option value="158">Norfolk Island</option>
                                        <option value="112">North Korea</option>
                                        <option value="159">Northern Mariana Islands</option>
                                        <option value="160">Norway</option>
                                        <option value="161">Oman</option>
                                        <option value="162">Pakistan</option>
                                        <option value="163">Palau</option>
                                        <option value="247">Palestinian Territory, Occupied</option>
                                        <option value="164">Panama</option>
                                        <option value="165">Papua New Guinea</option>
                                        <option value="166">Paraguay</option>
                                        <option value="167">Peru</option>
                                        <option value="168">Philippines</option>
                                        <option value="169">Pitcairn</option>
                                        <option value="170">Poland</option>
                                        <option value="171">Portugal</option>
                                        <option value="172">Puerto Rico</option>
                                        <option value="173">Qatar</option>
                                        <option value="174">Reunion</option>
                                        <option value="175">Romania</option>
                                        <option value="176">Russian Federation</option>
                                        <option value="177">Rwanda</option>
                                        <option value="178">Saint Kitts and Nevis</option>
                                        <option value="179">Saint Lucia</option>
                                        <option value="180">Saint Vincent and the Grenadines</option>
                                        <option value="181">Samoa</option>
                                        <option value="182">San Marino</option>
                                        <option value="183">Sao Tome and Principe</option>
                                        <option value="184">Saudi Arabia</option>
                                        <option value="185">Senegal</option>
                                        <option value="243">Serbia</option>
                                        <option value="186">Seychelles</option>
                                        <option value="187">Sierra Leone</option>
                                        <option value="188">Singapore</option>
                                        <option value="189">Slovak Republic</option>
                                        <option value="190">Slovenia</option>
                                        <option value="191">Solomon Islands</option>
                                        <option value="192">Somalia</option>
                                        <option value="193">South Africa</option>
                                        <option value="194">South Georgia &amp; South Sandwich Islands</option>
                                        <option value="113">South Korea</option>
                                        <option value="248">South Sudan</option>
                                        <option value="195">Spain</option>
                                        <option value="196">Sri Lanka</option>
                                        <option value="249">St. Barthelemy</option>
                                        <option value="197">St. Helena</option>
                                        <option value="250">St. Martin (French part)</option>
                                        <option value="198">St. Pierre and Miquelon</option>
                                        <option value="199">Sudan</option>
                                        <option value="200">Suriname</option>
                                        <option value="201">Svalbard and Jan Mayen Islands</option>
                                        <option value="202">Swaziland</option>
                                        <option value="203">Sweden</option>
                                        <option value="204">Switzerland</option>
                                        <option value="205">Syrian Arab Republic</option>
                                        <option value="206">Taiwan</option>
                                        <option value="207">Tajikistan</option>
                                        <option value="208">Tanzania, United Republic of</option>
                                        <option value="209">Thailand</option>
                                        <option value="210">Togo</option>
                                        <option value="211">Tokelau</option>
                                        <option value="212">Tonga</option>
                                        <option value="213">Trinidad and Tobago</option>
                                        <option value="255">Tristan da Cunha</option>
                                        <option value="214">Tunisia</option>
                                        <option value="215">Turkey</option>
                                        <option value="216">Turkmenistan</option>
                                        <option value="217">Turks and Caicos Islands</option>
                                        <option value="218">Tuvalu</option>
                                        <option value="219">Uganda</option>
                                        <option value="220">Ukraine</option>
                                        <option value="221">United Arab Emirates</option>
                                        <option value="222">United Kingdom</option>
                                        <option value="223">United States</option>
                                        <option value="224">United States Minor Outlying Islands</option>
                                        <option value="225">Uruguay</option>
                                        <option value="226">Uzbekistan</option>
                                        <option value="227">Vanuatu</option>
                                        <option value="228">Vatican City State (Holy See)</option>
                                        <option value="229">Venezuela</option>
                                        <option value="230" selected="selected">Viet Nam</option>
                                        <option value="231">Virgin Islands (British)</option>
                                        <option value="232">Virgin Islands (U.S.)</option>
                                        <option value="233">Wallis and Futuna Islands</option>
                                        <option value="234">Western Sahara</option>
                                        <option value="235">Yemen</option>
                                        <option value="238">Zambia</option>
                                        <option value="239">Zimbabwe</option>
                            </select> 
      </div>
    </div>
    <div class="form-group required">
      <label class="col-sm-2 control-label" for="input-shipping-zone">Region / State</label>
      <div class="col-sm-10">
        <select name="zone_id" id="input-shipping-zone" class="form-control"><option value=""> --- Please Select --- </option><option value="3751">An Giang</option><option value="3756">Ba Ria-Vung Tau</option><option value="3752">Bac Giang</option><option value="3753">Bac Kan</option><option value="3754">Bac Lieu</option><option value="3755">Bac Ninh</option><option value="3757">Ben Tre</option><option value="3758">Binh Dinh</option><option value="3759">Binh Duong</option><option value="3760">Binh Phuoc</option><option value="3761">Binh Thuan</option><option value="3762">Ca Mau</option><option value="3763">Can Tho</option><option value="3764">Cao Bang</option><option value="3767">Da Nang</option><option value="3765">Dak Lak</option><option value="3766">Dak Nong</option><option value="3768">Dien Bien</option><option value="3769">Dong Nai</option><option value="3770">Dong Thap</option><option value="3771">Gia Lai</option><option value="3772">Ha Giang</option><option value="3775">Ha Nam</option><option value="3776" selected="selected">Ha Noi</option><option value="3777">Ha Tay</option><option value="3778">Ha Tinh</option><option value="3773">Hai Duong</option><option value="3774">Hai Phong</option><option value="3781">Hau Giang</option><option value="3780">Ho Chi Minh City</option><option value="3779">Hoa Binh</option><option value="3782">Hung Yen</option></select>
      </div>
    </div>
      </div>
  <div class="buttons clearfix">
    <div class="pull-right">
     <!--  <input type="button" value="" id="button-shipping-address" data-loading-text="" class="btn btn-primary" /> -->
      <button type="button" id="button-shipping-address" data-loading-text="Loading..." class="button continue">Continue</button>
    </div>
  </div>
</form>
<script type="text/javascript"><!--
$('input[name=\'shipping_address\']').on('change', function() {
	if (this.value == 'new') {
		$('#shipping-existing').hide();
		$('#shipping-new').show();
	} else {
		$('#shipping-existing').show();
		$('#shipping-new').hide();
	}
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-shipping-address .form-group[data-sort]').detach().each(function() {
	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group').eq(parseInt($(this).attr('data-sort'))+2).before(this);
	}

	if ($(this).attr('data-sort') > $('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group:last').after(this);
	}

	if ($(this).attr('data-sort') == $('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group:last').after(this);
	}

	if ($(this).attr('data-sort') < -$('#collapse-shipping-address .form-group').length-2) {
		$('#collapse-shipping-address .form-group:first').before(this);
	}
});
//--></script>
<script type="text/javascript"><!--
$('#collapse-shipping-address button[id^=\'button-shipping-custom-field\']').on('click', function() {
	var node = this;

	$('#form-upload').remove();

	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');

	$('#form-upload input[name=\'file\']').trigger('click');

	if (typeof timer != 'undefined') {
    	clearInterval(timer);
	}

	timer = setInterval(function() {
		if ($('#form-upload input[name=\'file\']').val() != '') {
			clearInterval(timer);

			$.ajax({
				url: 'index.php?route=tool/upload',
				type: 'post',
				dataType: 'json',
				data: new FormData($('#form-upload')[0]),
				cache: false,
				contentType: false,
				processData: false,
				beforeSend: function() {
					$(node).button('loading');
				},
				complete: function() {
					$(node).button('reset');
				},
				success: function(json) {
					$(node).parent().find('.text-danger').remove();

					if (json['error']) {
						$(node).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');
					}

					if (json['success']) {
						alert(json['success']);

						$(node).parent().find('input[name^=\'custom_field\']').attr('value', json['code']);
					}
				},
				error: function(xhr, ajaxOptions, thrownError) {
					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
				}
			});
		}
	}, 500);
});
//--></script>

<script type="text/javascript">
$('#collapse-shipping-address select[name=\'country_id\']').on('change', function() {
	$.ajax({
		url: 'index.php?route=checkout/checkout/country&country_id=' + this.value,
		dataType: 'json',
		beforeSend: function() {
			$('#collapse-shipping-address select[name=\'country_id\']').after(' <i class="fa fa-circle-o-notch fa-spin"></i>');
		},
		complete: function() {
			$('.fa-spin').remove();
		},
		success: function(json) {
			if (json['postcode_required'] == '1') {
				$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().addClass('required');
			} else {
				$('#collapse-shipping-address input[name=\'postcode\']').parent().parent().removeClass('required');
			}

			html = '<option value=""> --- Please Select --- </option>';

			if (json['zone'] && json['zone'] != '') {
				for (i = 0; i < json['zone'].length; i++) {
					html += '<option value="' + json['zone'][i]['zone_id'] + '"';

					if (json['zone'][i]['zone_id'] == '3776') {
						html += ' selected="selected"';
					}

					html += '>' + json['zone'][i]['name'] + '</option>';
				}
			} else {
				html += '<option value="0" selected="selected"> --- None --- </option>';
			}

			$('#collapse-shipping-address select[name=\'zone_id\']').html(html);
		},
		error: function(xhr, ajaxOptions, thrownError) {
			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
		}
	});
});

$('#collapse-shipping-address select[name=\'country_id\']').trigger('change');
</script></div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false"><span class="number">4</span> Delivery Method <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-shipping-method" aria-expanded="false" style="height: 0px;">
            <div class="panel-body"> 
<p>Please select the preferred shipping method to use on this order.</p>
<p><strong>Flat Rate</strong></p>
<div class="radio">
  <label>
            <input type="radio" name="shipping_method" value="flat.flat" checked="checked">
        Flat Shipping Rate - $5.00</label>
</div>
<p><strong>Add Comments About Your Order</strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"></textarea>
</p>
<div class="buttons">
  <div class="pull-right">
   <!--  <input type="button" value="" id="button-shipping-method" data-loading-text="" class="btn btn-primary" /> -->
    <button type="button" id="button-shipping-method" data-loading-text="Loading..." class="button continue">Continue</button>
  </div>
</div>
</div>
          </div>
        </div>
                <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false"><span class="number">5</span> Payment Method <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-payment-method" aria-expanded="false" style="height: 0px;">
            <div class="panel-body"> 
<p>Please select the preferred payment method to use on this order.</p>
<div class="radio">
  <label>
            <input type="radio" name="payment_method" value="cod" checked="checked">
        Cash On Delivery      </label>
</div>
<p><strong>Add Comments About Your Order</strong></p>
<p>
  <textarea name="comment" rows="8" class="form-control"></textarea>
</p>
<div class="buttons">
  <div class="pull-right">
    <!-- <input type="button" value="" id="button-payment-method" data-loading-text="" class="btn btn-primary" /> -->
    <button type="button" id="button-payment-method" data-loading-text="Loading..." class="button continue">Continue</button>
  </div>
</div>
</div>
          </div>
        </div>
        <div class="panel panel-default">
          <div class="panel-heading">
            <h4 class="panel-title"><a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle collapsed" aria-expanded="false"><span class="number">6</span> Confirm Order <i class="fa fa-caret-down"></i></a></h4>
          </div>
          <div class="panel-collapse collapse" id="collapse-checkout-confirm" aria-expanded="false" style="height: 0px;">
            <div class="panel-body"> 
<div class="table-responsive">
  <table class="table table-bordered table-hover">
    <thead>
      <tr>
        <td class="text-left">Product Name</td>
        <td class="text-left">Model</td>
        <td class="text-right">Quantity</td>
        <td class="text-right">Unit Price</td>
        <td class="text-right">Total</td>
      </tr>
    </thead>
    <tbody>
            <tr>
        <td class="text-left"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2001">Sterling Side Mounted wardrobe pullout</a>
                    </td>
        <td class="text-left">Product 2001</td>
        <td class="text-right">1</td>
        <td class="text-right">$90.00</td>
        <td class="text-right">$90.00</td>
      </tr>
            <tr>
        <td class="text-left"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2012">Sunbaby Magic Bear Chair</a>
                    </td>
        <td class="text-left">Product 2012</td>
        <td class="text-right">2</td>
        <td class="text-right">$100.00</td>
        <td class="text-right">$200.00</td>
      </tr>
            <tr>
        <td class="text-left"><a href="http://brezzademo3.magikthemes.com/index.php?route=product/product&amp;product_id=2025">DecorNation Floating Wall Shelf</a>
                    </td>
        <td class="text-left">Product 2025</td>
        <td class="text-right">1</td>
        <td class="text-right">$1,600.00</td>
        <td class="text-right">$1,600.00</td>
      </tr>
                </tbody>
    <tfoot>
            <tr>
        <td colspan="4" class="text-right"><strong>Sub-Total:</strong></td>
        <td class="text-right">$1,890.00</td>
      </tr>
            <tr>
        <td colspan="4" class="text-right"><strong>Flat Shipping Rate:</strong></td>
        <td class="text-right">$5.00</td>
      </tr>
            <tr>
        <td colspan="4" class="text-right"><strong>Total:</strong></td>
        <td class="text-right">$1,895.00</td>
      </tr>
          </tfoot>
  </table>
</div>
<div class="buttons">
  <div class="pull-right">
    <input type="button" value="Confirm Order" id="button-confirm" class="btn btn-primary" data-loading-text="Loading...">
  </div>
</div>
<script type="text/javascript"><!--
$('#button-confirm').on('click', function() {
	$.ajax({
		type: 'get',
		url: 'index.php?route=payment/cod/confirm',
		cache: false,
		beforeSend: function() {
			$('#button-confirm').button('loading');
		},
		complete: function() {
			$('#button-confirm').button('reset');
		},
		success: function() {
			location = 'http://brezzademo3.magikthemes.com/index.php?route=checkout/success';
		}
	});
});
//--></script>
</div>
          </div>
        </div>
      </div>
      </div>
    </div>
</div>
        {{-- <form action="{{URL::to('/save-checkout-customer')}}" method="post">
          {{csrf_field()}}
          @foreach($shippingAddress as $key => $value)
      @endforeach
      </form> --}}
@endsection