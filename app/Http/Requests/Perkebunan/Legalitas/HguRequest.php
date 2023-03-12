<?php

namespace App\Http\Requests\Perkebunan\Legalitas;

use Illuminate\Foundation\Http\FormRequest;

class HguRequest extends FormRequest
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
            'nomor_surat' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'luas' => 'required|numeric|min:0'
        ];
    }

    public function attributes()
    {
        return [
            'nomor_surat' => 'Nomor surat',
            'tanggal_terbit' => 'Tanggal terbit',
            'luas' => 'Luas',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'date' => ':attribute harus berupa tanggal',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal :min'
        ];
    }
}
