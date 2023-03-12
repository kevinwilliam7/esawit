<?php

namespace App\Http\Requests\Perkebunan\Legalitas;

use Illuminate\Foundation\Http\FormRequest;

class IupRequest extends FormRequest
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
            'jenis_iup' => 'required|string',
            'kategori' => 'required|string',
            'nomor_surat' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'luas' => 'required|numeric|min:0',
            'penjabat_penerbit' => 'required|string',
            'lokasi' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'jenis_iup' => 'Jenis dokumen',
            'kategori' => 'Kategori',
            'nomor_surat' => 'Nomor surat',
            'tanggal_terbit' => 'Tanggal terbit',
            'luas' => 'Luas',
            'penjabat_penerbit' => 'Penjabat penerbit',
            'lokasi' => 'Lokasi',
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
