<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra__Productos extends Model
{
    use HasFactory;

    protected $fillable = [
        'compra_id',
        'producto_id'
    ];

    public function compras (){
        return $this->hasMany(Compra::class);
    }

    public function productos (){
        return $this->hasMany(Producto::class);
    }


}
