<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
		'user_id',
		'billing_id',
		'total',
		'status',
    ];
    protected $with = ['details'];

    public function details()
    {
    	return $this->hasMany(OrderProcess::class);
    }

    public function getDateAttribute()
    {
        return $this->created_at->toFormattedDateString();
    }
}
