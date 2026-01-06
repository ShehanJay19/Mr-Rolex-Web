<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOrderRequest extends FormRequest
{
    public function authorize(): bool
    {
        return $this->user() !== null;
    }

    public function rules(): array
    {
        return [
            'shipping_address' => 'required|string|min:5',
            'billing_address' => 'nullable|string|min:5',
            'phone' => 'required|string|regex:/^[0-9\-\s\+\(\)]{10,}$/',
            'total_amount' => 'required|numeric|min:0.01',
        ];
    }

    public function messages(): array
    {
        return [
            'shipping_address.required' => 'Shipping address is required',
            'phone.regex' => 'Enter a valid phone number',
        ];
    }
}
