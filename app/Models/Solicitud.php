<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Solicitud extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }

    public function inmuebles(){
        return $this->belongsTo(Inmueble::class);
    }

}
