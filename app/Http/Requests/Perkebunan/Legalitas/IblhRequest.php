<?php

namespace App\Http\Requests\Perkebunan\Legalitas;

use Illuminate\Foundation\Http\FormRequest;

class IblhRequest extends FormRequest
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
            'jenis_dokumen' => 'required|string',
            'nomor_surat' => 'required|string',
            'tanggal' => 'required|date',
            'luas' => 'required|numeric|min:0',
            'penjabat_penerbit' => 'required|string',
            'keterangan' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'jenis_dokumen' => 'Jenis dokumen',
            'nomor_surat' => 'Nomor surat',
            'tanggal' => 'Tanggal',
            'luas' => 'Luas',
            'penjabat_penerbit' => 'Penjabat penerbit',
            'keterangan' => 'Keterangan',
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
