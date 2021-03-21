<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PhotoVariation extends Model
{
    use HasFactory;
    public function photo()
    {
        return $this->belongsTo(Photo::class);
    }
}
