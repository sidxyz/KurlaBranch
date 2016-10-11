<?php

namespace App;

//use Illuminate\Notifications\Notifiable;
//use Illuminate\Foundation\Auth\User as Authenticatable;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   // use Notifiable;

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
