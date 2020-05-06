<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProcess extends Model
{
    protected $table = 'order_product';

    protected $with = ['product'];

    protected $fillable = [
		'order_id',
		'product_id',
		'quantity',
		'price',
		'total',
    ];

    public function product()
    {
    	return $this->belongsTo(Product::class, 'product_id', 'id');
    }

}
