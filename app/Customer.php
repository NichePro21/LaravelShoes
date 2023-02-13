<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'CName', 'CEmail', 'Cusername','CPass','CPhone'
    ];
    protected $primaryKey = 'CID';
 	protected $table = 'tbl_customer';

 	
}
