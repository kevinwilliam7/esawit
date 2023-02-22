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
            'nama' => 'required|string',
            'npwp' => 'nullable|string',
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
        return [];
    }

    public function messages()
    {
        return [];
    }
}
