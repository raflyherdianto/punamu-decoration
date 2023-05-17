<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImageServices extends Model
{
    use HasFactory;

    protected $guarded=['id'];

    public function services()
    {
        return $this->belongsTo(Services::class);
    }
}
