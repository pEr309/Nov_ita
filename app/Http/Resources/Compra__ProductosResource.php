<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class Compra__ProductosResource extends JsonResource
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
            'compra_id'=> $this->compra_id,
            'compra' => $this->compra,
            'producto_id' => $this->producto,
            'producto' => $this->producto,
        ];
    }
}
