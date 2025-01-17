<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'descripcion',
        'user_id',
        'compra_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function compra(){
        return $this->belongsTo(Compra::class);
    }

}
