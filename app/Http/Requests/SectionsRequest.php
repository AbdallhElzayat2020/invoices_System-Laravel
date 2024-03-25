<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SectionsRequest extends FormRequest
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
            'section_name' => 'required|unique:sections|max:255',
            'description' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'section_name.required' => 'اسم القسم اجباري ',
            'section_name.unique' => 'القسم مسجل مسبقا',
            'description.required' => 'الملاحظات او الوصف اجباري',
        ];
    }
}
