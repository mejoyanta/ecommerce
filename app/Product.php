<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'category_id',
		'brand_id',
		'admin_id',
		'title',
		'storage',
		'price',
		'discount',
		'sort_desc',
		'long_desc',
		'status'
    ];

    public function images()
    {
    	return $this->hasMany(Image::class);
    }
    //relation with Category
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
    //relation with Brand
    public function brand()
    {
    	return $this->belongsTo(Brand::class);
    }
	//relation with User
    public function user()
    {
    	return $this->belongsTo(Admin::class);
    }
    public function getDiscountedPriceAttribute()
    {
        return $this->price - $this->discount * $this->price * .01;
    }

}
