<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id"=> $this->id,
            "name" =>$this->name,
            "brand_name" => $this->brand_name,
            "bosta_type"=> $this->bosta_type,
            "selling_price"=> $this->selling_price,
            "purchase_price"=> $this->purchase_price,
        ];
    }
}
