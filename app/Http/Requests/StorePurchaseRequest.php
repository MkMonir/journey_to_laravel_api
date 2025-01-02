<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePurchaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            "supplier_id" =>"required",
            "purchase_date" => "required|string",
            "note" => "nullable|string",
            "subtotal" => "required|numeric|min:0",
            "labour_cost" => "nullable|numeric|min:0",
            "transport_cost"=> "nullable|numeric|min:0",
            "hidden_commission" => "nullable|numeric|min:0",
            "grand_total" => "required|numeric|min:0",
            'items' => 'required|array',
        ];
    }
}
