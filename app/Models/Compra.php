<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'imagen',
        'precio',
        'total',
        'user_id'
    ];

    public function user(){
        return $this ->belongsTo(User::class);
    }

    public function productos(){
        return $this->hasMany(Producto::class);
    }
}
