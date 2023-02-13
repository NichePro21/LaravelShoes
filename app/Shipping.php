<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipping extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'shipping_name','CID', 'shipping_address','shipping_ward','shipping_city','shipping_phone', 'shipping_phone','shipping_email','shipping_notes','shipping_method'
    ];
    protected $primaryKey = 'shipping_id';
 	protected $table = 'tbl_shipping';
}
