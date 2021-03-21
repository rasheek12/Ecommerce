<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cart extends Model
{
    use HasFactory;
    protected $fillable=['session_Id'];
    public function total()
    {
        return $this->photovariations->count();
    }
    public function totalAmount()
    {
        return $this->photoVariations->sum('price');
    }
    public function photovariations()
    {
        return $this->belongsToMany(PhotoVariation::class,'cart_photo');
    }
}
