<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Inmueble extends Model
{
    use HasFactory;
    protected $guarded=['id'];


    public function solicitud(){
        return $this->hasMany(Solicitud::class);
    }
    public function image(){
        return $this->morphOne(Image::class,'imageable');
    }

}
