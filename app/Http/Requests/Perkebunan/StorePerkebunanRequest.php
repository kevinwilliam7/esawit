<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class StorePerkebunanRequest extends FormRequest
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
            'nama' => 'required|string|unique:perkebunans,nama',
            'npwp' => 'nullable|string|unique:perkebunans,npwp',
            'alamat' => 'required|string',
            'email' => 'nullable|email',
            'direktur' => 'nullable|string',
            'gm' => 'nullable|string',
            'kadiv_legal' => 'nullable|string',
            'manager_mill' => 'nullable|string',
            'nomor_akta_pendirian' => 'nullable|string',
            'tanggal_akta_pendirian' => 'nullable|date',
            'notaris_akta_pendirian' => 'nullable|string',
            'komisaris_akta_pendirian' => 'nullable|string',
            'direktur_akta_pendirian' => 'nullable|string',
            'nomor_akta_perubahan' => 'nullable|string',
            'tanggal_akta_perubahan' => 'nullable|date',
            'notaris_akta_perubahan' => 'nullable|string',
            'komisaris_akta_perubahan' => 'nullable|string',
            'direktur_akta_perubahan' => 'nullable|string',
            'bulanan_kebun' => 'nullable|numeric|min:0',
            'tetap_kebun' => 'nullable|numeric|min:0',
            'lepas_kebun' => 'nullable|numeric|min:0',
            'musiman_kebun' => 'nullable|numeric|min:0',
            'bulanan_pabrik' => 'nullable|numeric|min:0',
            'tetap_pabrik' => 'nullable|numeric|min:0',
            'lepas_pabrik' => 'nullable|numeric|min:0',
            'musiman_pabrik' => 'nullable|numeric|min:0',
            'tka' => 'nullable|numeric|min:0',
            'jabatan_tka' => 'nullable|string',
            'pola_kemitraan' => 'nullable|in:kemitraan mandiri,kemitraan satu manajemen',
            'kk_target_plasma' => 'nullable|numeric|min:0',
            'ha_target_plasma' => 'nullable|numeric|min:0',
            'kk_realisasi_plasma' => 'nullable|numeric|min:0',
            'ha_realisasi_plasma' => 'nullable|numeric|min:0',
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama Perusahaan Perkebunan',
            'npwp' => 'NPWP',
            'alamat' => 'Alamat',
            'email' => 'Email',
            'direktur' => 'Direktur Utama',
            'gm' => 'General Manager Operational',
            'kadiv_legal' => 'Kadiv Legal',
            'manager_mill' => 'Manager Mill Project',
            'nomor_akta_pendirian' => 'Nomor Akta Pendirian',
            'tanggal_akta_pendirian' => 'Tanggal Akta Pendirian',
            'notaris_akta_pendirian' => 'Notaris Akta Pendirian',
            'komisaris_akta_pendirian' => 'Komisaris Akta Pendirian',
            'direktur_akta_pendirian' => 'Direktur Akta Pendirian',
            'nomor_akta_perubahan' => 'Nomor Akta Perubahan',
            'tanggal_akta_perubahan' => 'Tanggal Akta Perubahan',
            'notaris_akta_perubahan' => 'Notaris Akta Perubahan',
            'komisaris_akta_perubahan' => 'Komisaris Akta Perubahan',
            'direktur_akta_perubahan' => 'Direktur Akta Perubahan',
            'bulanan_kebun' => 'Pekerja Bulanan Kebun',
            'tetap_kebun' => 'Pekerja Tetap Kebun',
            'lepas_kebun' => 'Pekerja Lepas Kebun',
            'musiman_kebun' => 'Pekerja Musiman Kebun',
            'bulanan_pabrik' => 'Pekerja Bulanan Pabrik',
            'tetap_pabrik' => 'Pekerja Tetap Pabrik',
            'lepas_pabrik' => 'Pekerja Lepas Pabrik',
            'musiman_pabrik' => 'Pekerja Musiman Pabrik',
            'tka' => 'Jumlah TKA',
            'jabatan_tka' => 'Jabatan TKA',
            'pola_kemitraan' => 'Pola Kemitraan',
            'kk_target_plasma' => 'Target Petani Plasma (KK)',
            'ha_target_plasma' => 'Target Petani Plasma (Ha)',
            'kk_realisasi_plasma' => 'Realisasi Petani Plasma (KK)',
            'ha_realisasi_plasma' => 'Realisasi Petani Plasma (Ha)',

        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal :min',
            'in' => ':attribute harus salah satu dari :values',
            'unique' => ':attribute sudah terdaftar',
        ];
    }
}
