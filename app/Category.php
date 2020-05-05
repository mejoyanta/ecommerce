<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','image','description'];
    
    public function products()
    {
    	return $this->hasMany(Product::class);
    }
    
    public function getNameAttribute($value)
    {
    	return ucfirst($value);
    }
}
