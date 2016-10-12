<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $primaryKey = 'product_id';
    protected $fillable = ['name_pro','quantity','category_name','price_pro'];


     public function Product()
{
    return $this->hasMany(orders::class);
    return $this->belongsTo(categories::class);
}

}
