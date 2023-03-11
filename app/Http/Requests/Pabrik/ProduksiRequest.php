<?php

namespace App\Http\Requests\Pabrik;

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
            'tahun_produksi' => 'required|numeric|between:1900,'.date('Y'),
            'hasil_pabrik' => 'required|string',
            'jumlah_produksi' => 'required|numeric|min:0'
        ];
    }
    
    public function attributes()
    {
        return [
            'tahun_produksi' => 'Tahun produksi',
            'hasil_pabrik' => 'Nama hasil pabrik',
            'jumlah_produksi' => 'Jumlah produksi',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'numeric' => ':attribute harus berupa angka',
            'between' => ':attribute harus berada diantara :min dan :max',
            'min' => ':attribute minimal :min ton',
        ];
    }
}
