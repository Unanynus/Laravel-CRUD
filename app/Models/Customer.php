<?php

namespace App\Models;

use GuzzleHttp\Psr7\Request;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = null;

    public function getCustomer(){
        // return $this->hasOne('App\Models\Product');
        return $this->hasMany(Product::class,'id');
    }

   
}
