<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    //

    protected $table = 'products';

    /**
	* Defines a many-to-many relationship to products table using the
	* product_category pivot table.
	* @return something (TODO: add return type.)
	*/	
	public function products()
    {
        return $this->belongsToMany('App\Products', 'product_category','category_id');
    }
}
