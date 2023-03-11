<?php

namespace App\Http\Requests\Pabrik;

use Illuminate\Foundation\Http\FormRequest;

class SupplierRequest extends FormRequest
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
            'nama_perkebunan' => 'required|string',
            'jumlah_supply' => 'required|numeric|min:0',
            'jangka_waktu' => 'required|integer|min:0',
        ];
    }

    public function attributes()
    {
        return [
            'nama_perkebunan' => 'Kebun supplier',
            'jumlah_supply' => 'Jumlah supply',
            'jangka_waktu' => 'Jangka waktu supply',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'numeric' => ':attribute harus berupa angka',
            'integer' => ':attribute harus berupa angka desimal',
            'min' => ':attribute minimal :min',
        ];
    }
}
