<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    //
    use HasFactory;
    protected $filable = ['product_id','product_name', 'product_description', 'product_price', 'product_image'];

    public $timestamps = true;
}
