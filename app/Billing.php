<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Billing extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'fname',
        'lname',
        'company',
        'country',
        'street_address',
        'town',
        'state',
        'phone',
        'email',
        'order_note',
        'ship_fname',
        'ship_lname',
        'ship_company',
        'ship_country',
        'ship_street_address',
        'ship_town',
        'ship_state',
        'ship_phone',
        'ship_email'
    ];

    public function getNameAttribute()
    {
        return "{$this->fname} {$this->lname}";
    }

    public function getAddressAttribute()
    {
        return "{$this->street_address}, {$this->town}, {$this->state}, {$this->country}";
    }
}
