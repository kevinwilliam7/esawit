<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class PerolehanRequest extends FormRequest
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
            'jenis_kebun' => 'required|in:plasma,inti',
            'tahun' => 'required|integer|between:1900,'.date('Y'),
            'luas' => 'required|numeric|min:0',
        ];
    }

    public function attributes()
    {
        return [
            'jenis_kebun' => 'Jenis kebun',
            'tahun' => 'Tahun',
            'luas' => 'Luas',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'in' => ':attribute harus salah satu diantara :values',
            'numeric' => ':attribute harus berupa angka',
            'between' => ':attribute harus diantara :min dan :max',
            'min' => ':attribute minimal :min',
            'integer' => ':attribute harus berupa angka',
            'exists' => ':attribute tidak valid'
        ];
    }
}
