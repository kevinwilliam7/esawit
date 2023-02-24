<?php

namespace App\Http\Requests\Pabrik;

use Illuminate\Foundation\Http\FormRequest;

class PabrikRequest extends FormRequest
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
        dd($this->request);
        return [
            'nama' => 'required|string',
            'npwp' => 'nullable|string',
            'pimpinan' => 'nullable|string',
            'jabatan_pimpinan' => 'required_with:pimpinan|string|nullable',
            'alamat_kantor' => 'required|string',
            'email' => 'nullable|email',
            'telp' => 'nullable|numeric|',
            'luas_lokasi_pabrik' => 'nullable|integer|min:0',
            'tahun_operasi' => 'nullable|digits_between:1900,'.date('Y'),
            'nama_grup' => 'nullable|string',
            'status' => 'nullable|in:go public,tidak go public',
            'bursa_efek' => 'nullable|string',
            'tenaga_kerja_wni' => 'nullable|numeric|min:0',
            'tenaga_kerja_asing' => 'nullable|numeric|min:0',
            'nomor_amdal' => 'nullable|string',
            'amdal' => 'required_with:nomor_amdal|file|mimes:pdf|nullable',
            'ditetapkan_amdal' => 'required_with:nomor_amdal|date|nullable',
            'berakhir_amdal' => 'required_with:nomor_amdal|date|nullable',
            'penjabat_amdal' => 'required_with:nomor_amdal|string|nullable',
            'keterangan_amdal' => 'required_with:nomor_amdal|string|nullable',
            'nomor_siupp' => 'nullable|string',
            'siupp' => 'required_with:nomor_siupp|file|mimes:pdf|nullable',
            'ditetapkan_siupp' => 'required_with:nomor_siupp|date|nullable',
            'berakhir_siupp' => 'required_with:nomor_siupp|date|nullable',
            'penjabat_siupp' => 'required_with:nomor_siupp|string|nullable',
            'keterangan_siupp' => 'required_with:nomor_siupp|string|nullable',
            'nomor_situ' => 'nullable|string',
            'situ' => 'required_with:nomor_situ|file|mimes:pdf|nullable',
            'ditetapkan_situ' => 'required_with:nomor_situ|date|nullable',
            'berakhir_situ' => 'required_with:nomor_situ|date|nullable',
            'penjabat_situ' => 'required_with:nomor_situ|string|nullable',
            'keterangan_situ' => 'required_with:nomor_situ|string|nullable',
            'nomor_hgb' => 'nullable|string',
            'hgb' => 'required_with:nomor_hgb|file|mimes:pdf|nullable',
            'ditetapkan_hgb' => 'required_with:nomor_hgb|date|nullable',
            'berakhir_hgb' => 'required_with:nomor_hgb|date|nullable',
            'penjabat_hgb' => 'required_with:nomor_hgb|string|nullable',
            'keterangan_hgb' => 'required_with:nomor_hgb|string|nullable',
            'nomor_imb_pabrik' => 'nullable|string',
            'imb_pabrik' => 'required_with:nomor_imb_pabrik|file|mimes:pdf|nullable',
            'ditetapkan_imb_pabrik' => 'required_with:nomor_imb_pabrik|date|nullable',
            'berakhir_imb_pabrik' => 'required_with:nomor_imb_pabrik|date|nullable',
            'penjabat_imb_pabrik' => 'required_with:nomor_imb_pabrik|string|nullable',
            'keterangan_imb_pabrik' => 'required_with:nomor_imb_pabrik|string|nullable',
            'nomor_imb_perumahan' => 'nullable|string',
            'imb_perumahan' => 'required_with:nomor_imb_perumahan|file|mimes:pdf|nullable',
            'ditetapkan_imb_perumahan' => 'required_with:nomor_imb_perumahan|date|nullable',
            'berakhir_imb_perumahan' => 'required_with:nomor_imb_perumahan|date|nullable',
            'penjabat_imb_perumahan' => 'required_with:nomor_imb_perumahan|string|nullable',
            'keterangan_imb_perumahan' => 'required_with:nomor_imb_perumahan|string|nullable',
            'nomor_ijin_gangguan' => 'nullable|string',
            'ijin_gangguan' => 'required_with:nomor_ijin_gangguan|file|mimes:pdf|nullable',
            'ditetapkan_ijin_gangguan' => 'required_with:nomor_ijin_gangguan|date|nullable',
            'berakhir_ijin_gangguan' => 'required_with:nomor_ijin_gangguan|date|nullable',
            'penjabat_ijin_gangguan' => 'required_with:nomor_ijin_gangguan|string|nullable',
            'keterangan_ijin_gangguan' => 'required_with:nomor_ijin_gangguan|string|nullable',
            'nomor_ijin_limbah_cair' => 'nullable|string',
            'ijin_limbah_cair' => 'required_with:nomor_ijin_limbah_cair|file|mimes:pdf|nullable',
            'ditetapkan_ijin_limbah_cair' => 'required_with:nomor_ijin_limbah_cair|date|nullable',
            'berakhir_ijin_limbah_cair' => 'required_with:nomor_ijin_limbah_cair|date|nullable',
            'penjabat_ijin_limbah_cair' => 'required_with:nomor_ijin_limbah_cair|string|nullable',
            'keterangan_ijin_limbah_cair' => 'required_with:nomor_ijin_limbah_cair|string|nullable',
            'nomor_ijin_radio' => 'nullable|string',
            'ijin_radio' => 'required_with:nomor_ijin_radio|file|mimes:pdf|nullable',
            'ditetapkan_ijin_radio' => 'required_with:nomor_ijin_radio|date|nullable',
            'berakhir_ijin_radio' => 'required_with:nomor_ijin_radio|date|nullable',
            'penjabat_ijin_radio' => 'required_with:nomor_ijin_radio|string|nullable',
            'keterangan_ijin_radio' => 'required_with:nomor_ijin_radio|string|nullable',
            'nomor_land_aplikasi' => 'nullable|string',
            'land_aplikasi' => 'required_with:nomor_land_aplikasi|file|mimes:pdf|nullable',
            'ditetapkan_land_aplikasi' => 'required_with:nomor_land_aplikasi|date|nullable',
            'berakhir_land_aplikasi' => 'required_with:nomor_land_aplikasi|date|nullable',
            'penjabat_land_aplikasi' => 'required_with:nomor_land_aplikasi|string|nullable',
            'keterangan_land_aplikasi' => 'required_with:nomor_land_aplikasi|string|nullable',
            'nomor_mesin_pabrik' => 'nullable|string',
            'mesin_pabrik' => 'required_with:nomor_mesin_pabrik|file|mimes:pdf|nullable',
            'ditetapkan_mesin_pabrik' => 'required_with:nomor_mesin_pabrik|date|nullable',
            'berakhir_mesin_pabrik' => 'required_with:nomor_mesin_pabrik|date|nullable',
            'penjabat_mesin_pabrik' => 'required_with:nomor_mesin_pabrik|string|nullable',
            'keterangan_mesin_pabrik' => 'required_with:nomor_mesin_pabrik|string|nullable',
            'nomor_ijin_timbang' => 'nullable|string',
            'ijin_timbang' => 'required_with:nomor_ijin_tambang|file|mimes:pdf|nullable',
            'ditetapkan_ijin_timbang' => 'required_with:nomor_ijin_tambang|date|nullable',
            'berakhir_ijin_timbang' => 'required_with:nomor_ijin_tambang|date|nullable',
            'penjabat_ijin_timbang' => 'required_with:nomor_ijin_tambang|string|nullable',
            'keterangan_ijin_timbang' => 'required_with:nomor_ijin_tambang|string|nullable',
            'kapasitas_produksi' => 'nullable|numeric',
            'nomor_dokumen_sertifikat' => 'nullable|string',
            'dokumen_sertifikat' => 'required_with:nomor_dokumen_sertifikat|file|mimes:pdf|nullable'
        ];
    }

    public function attributes()
    {
        return [

        ];
    }

    public function messages()
    {
        return [];
    }
}
