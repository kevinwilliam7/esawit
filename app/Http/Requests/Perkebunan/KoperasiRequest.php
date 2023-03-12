<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class KoperasiRequest extends FormRequest
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
            'nama_koperasi' => 'required|string',
            'jumlah_anggota' => 'required|integer|min:0',
            'luas' => 'required|numeric|min:0',
            'bank' => 'required|string',
            'akad' => 'required|date',
            'nilai_kredit' => 'required|integer|min:0',
            'tahun_lunas' => 'required|integer|min:1900',
            'standar_biaya'  => 'required|integer|min:0',
        ];
    }

    public function attributes()
    {
        return [
            'nama_koperasi' => 'Nama koperasi',
            'jumlah_anggota' => 'Jumlah anggota',
            'luas' => 'Luas',
            'bank' => 'Bank',
            'akad' => 'Tanggal akad',
            'nilai_kredit' => 'Nilai kredit',
            'tahun_lunas' => 'Perkiraan lunas',
            'standar_biaya' => 'Standar biaya'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'numeric' => ':attribute harus berupa angka',
            'string' => ':attribute harus berupa teks',
            'date' =>  ':attribute tidak valid',
            'min' => ':attribute minimal :min',
            'integer' => ':attribute harus berupa angka desimal',
        ];
    }
}
