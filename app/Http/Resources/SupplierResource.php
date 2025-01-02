<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SupplierResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            // "supplier_id" => (string) $this->supplier_id,
            "name" => $this->name,
            "company_name"=> $this->company_name,
            "email"=> $this->email,
            "phone"=> $this->phone,
            "phone_emergency"=> $this->phone_emergency,
            "address"=> $this->address,
            "nid_number"=> $this->nid_number,
            "photo"=> $this->photo,
            "total_due"=> $this->total_due,
        ];
    }
}
