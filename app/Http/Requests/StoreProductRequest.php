<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize()
    {
        return auth()->check() && auth()->user()->is_Admin();
    }


    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:categories,id',
            'name' => 'required|string|max:255',
            'slug' => 'required|string|unique:products,slug',
            'description' => 'required|string|min:10',
            'price' => 'required|numeric|min:0.01',
            'stock' => 'required|integer|min:0',
            'sku' => 'required|string|unique:products,sku',
        ];
    }
}
