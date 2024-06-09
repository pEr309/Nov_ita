<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'precio' => $this->precio,
            'user_id'=> $this->user_id,
            'usuario' => $this->user,
            'compra_id' => $this->compra,
            'compra' => $this->compra,
            'created_at'=> $this->created_at,
            'updated_at' => $this->updated_at
        ];
    }
}
