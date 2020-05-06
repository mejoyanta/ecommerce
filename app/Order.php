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

    public function user()
    {
    	return $this->belongsTo(User::class);
    }

    public function billing()
    {
        return $this->belongsTo(Billing::class);
    }

    public function details()
    {
        return $this->hasMany(OrderProcess::class);
    }

    public function getDateAttribute()
    {
        return $this->created_at->toFormattedDateString();
    }

    public function scopeDelivered($query)
    {
        return $query->where('status','delivered');
    }

    public function scopePending($query)
    {
        return $query->where('status','pending');
    }


}
