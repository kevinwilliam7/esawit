<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class SertifikatRequest extends FormRequest
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
            'jenis' => 'required|string',
            'nama_sertifikat' => 'required|string',
            'nomor_surat' => 'required|string',
            'tanggal_terbit' => 'required|date',
            'penjabat' => 'required|string',
            'kategori' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'jenis' => 'Jenis sertifikat',
            'nama_sertifikat' => 'Nama sertifikat',
            'nomor_surat' => 'Nomor surat',
            'tanggal_terbit' => 'Tanggal diterbitkan',
            'penjabat' => 'Penjabat penerbit',
            'kategori' => 'Kategori',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'date' => ':attribute harus berupa tanggal',
        ];
    }
}
