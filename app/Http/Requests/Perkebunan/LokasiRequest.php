<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class LokasiRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'desa_id' => 'required|exists:desas,id|numeric|min:1',
        ];
    }

    public function attributes()
    {
        return [
            'desa_id' => 'Desa',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'exists' => ':attribute tidak valid',
            'numeric' => ':attribute tidak valid',
            'min' => ':attribute tidak valid',
        ];
    }
}
