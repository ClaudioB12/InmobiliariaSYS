<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaccion extends Model
{
    use HasFactory;
    protected $guarded=['id'];

    public function clientes(){
        return $this->belongsTo(Cliente::class);
    }

}
