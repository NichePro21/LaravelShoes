<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'product_name', 'product_slug','CatID','BID','product_desc','product_content','product_price','product_image','product_status', 'product_tags','product_views','price_cost'
    ];
    protected $primaryKey = 'PID';
 	protected $table = 'tbl_product';

 	public function comment(){
 		return $this->hasMany('App\Comment');
 	}

 	public function category(){
 		return $this->belongsTo('App\CategoryProductModel','CatID');
 	}

}
