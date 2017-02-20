<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['title','brand','type','price','in_stock','quantity',
    'colors_available','description','short_description','category_id','status' ];

	protected $casts = ['status' => 'boolean','in_stock' => 'boolean','price' => 'float'];
}
