<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
<<<<<<< HEAD
         'name','name_pro','quantity','category_name', 'price_pro'
=======
         'name','quantity', 'price'
>>>>>>> 3cf190066bdc92320b5f39bcb1780902b4c11238
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
     public function Product()
{
    return $this->hasMany(orders::class);
    return $this->belongsTo(categories::class);
}

}
