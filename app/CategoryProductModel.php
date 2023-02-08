<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CategoryProductModel extends Model
{
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'meta_keywords', 'category_name', 'slug_category_product','category_desc','category_status','category_parent','category_order'
    ];
    protected $primaryKey = 'CatID';
 	protected $table = 'tbl_categories';

 	public function product(){
 		return $this->hasMany('App\Product');
 	}
}
