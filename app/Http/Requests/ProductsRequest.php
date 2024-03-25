<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductsRequest extends FormRequest
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
            'product_name' => 'required|unique:products|max:255',
            'section_id' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'product_name.required' => 'لا يمكن ترك اسم المنتج فارغا',
            'section_id.required' => 'لابد من اختيار قسم لا يمكن تركة فارغا',
        ];
    }
}
