<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PurchaseResource extends JsonResource
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
            "supplier_id"=> $this->supplier_id,
            "purchase_date"=> $this->purchase_date,
            "note"=> $this->note,
            "subtotal"=> $this->subtotal,
            "labour_cost"=> $this->labour_cost,
            "transport_cost"=> $this->transport_cost,
            "hidden_commission"=> $this->hidden_commission,
            "gand_total"=> $this->gand_total,
            "items"=> $this->items,
        ];
    }
}
