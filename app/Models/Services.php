<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function categories()
    {
        return $this->belongsTo(Categories::class);
    }

    public function image_services()
    {
        return $this->hasMany(ImageServices::class);
    }

    public function reviews()
    {
        return $this->hasMany(Reviews::class);
    }

    public function favorites()
    {
        return $this->hasMany(Favorites::class);
    }

    public function carts()
    {
        return $this->hasMany(Carts::class);
    }

    public function transactions()
    {
        return $this->hasMany(Transactions::class);
    }


}
