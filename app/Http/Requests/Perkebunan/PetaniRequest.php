<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class PetaniRequest extends FormRequest
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
            'tahap' => 'required|string',
            'koperasi' => 'required|string',
            'jumlah_kk' => 'required|integer|min:0',
            'luas' => 'required|numeric|min:0'
        ];
    }

    public function attributes()
    {
        return [
            'tahap' => 'Tahap',
            'koperasi' => 'Koperasi',
            'jumlah_kk' => 'Jumlah KK',
            'luas' => 'Luas'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'numeric' => ':attribute harus berupa angka',
            'integer' => ':attribute harus berupa angka desimal',
            'min' => ':attribute minimal :values'
        ];
    }
}
