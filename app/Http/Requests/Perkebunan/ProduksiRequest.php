<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class ProduksiRequest extends FormRequest
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
            'kondisi' => 'required|in:berjalan,kemarin',
            'jenis_kebun' => 'required|string',
            'triwulan' => 'required|string',
            'tahun' => 'required|integer|between:1900,'.date('Y'),
            'jumlah_produksi' => 'required|numeric|min:0',
        ];
    }

    public function attributes()
    {
        return [
            'kondisi' => 'Kondisi',
            'jenis_kebun' => 'Jenis kebun',
            'triwulan' => 'Triwulan',
            'tahun' => 'Tahun',
            'jumlah_produksi' => 'Jumlah produksi / ton TBS'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'in' => ':attribute harus salah satu diantara :values',
            'numeric' => ':attribute harus berupa angka',
            'between' => ':attribute harus diantara :min dan :max',
            'string' => ':attribute harus berupa teks',
            'min' => ':attribute minimal :min',
            'integer' => ':attribute harus berupa angka'
        ];
    }
}
