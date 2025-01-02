<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreSupplierRequest extends FormRequest
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
            "name"=> "required|string|min:3",
            "email"=> "required|string|email|unique:suppliers",
            "company_name"=> "required|string|min:3",
            "phone"=> "required|string|min:10",
            "phone_emergency"=> "nullable|string|min:10",
            "address"=> "required|string|min:3",
            "nid_number"=> "required|string|min:10",
            "photo"=> "nullable|image|mimes:jpeg,png,jpg,svg|max:2048",
            "total_due"=> "nullable|integer|min:0",
        ];
    }
}
