<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CompraResource extends JsonResource
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
            'imagen' => $this->imagen,
            'precio' => $this->precio,
            'total' => $this->total,
            'user_id' => $this->user_id,
            'user' => $this->user,
            'created_at'=> $this->created_at,
            'updated_at'=>$this->updated_at
        ];
    }
}