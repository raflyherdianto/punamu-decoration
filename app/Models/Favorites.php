<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favorites extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function services()
    {
        return $this->belongsTo(Services::class);
    }
}
