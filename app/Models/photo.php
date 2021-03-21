<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class photo extends Model
{
    use HasFactory;

    public function variations()
    {
        return $this->hasMany(PhotoVariation::class);
    }
}
