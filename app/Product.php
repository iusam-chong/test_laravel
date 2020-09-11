<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use Storage;

class Product extends Model
{
    //
    protected $table      = 'products';
    protected $primaryKey = 'id';

    public function getImagePathAttribute()
    {
        // return Storage::disk('public')->url($this->attributes['image']);
        
        
        return ('/storage/'.$this->image);
        
        
        // return Storage::disk('public')->url($this->attributes['image']);
    }

    public function carts()
    {
        return $this->hasMany('App\Cart');
    }
}
