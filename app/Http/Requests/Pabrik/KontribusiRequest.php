<?php

namespace App\Http\Requests\Pabrik;

use Illuminate\Foundation\Http\FormRequest;

class KontribusiRequest extends FormRequest
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
            'pelaksanaan' => 'required|in:realisasi,rencana',
            'tahun' => 'required|numeric|between:1900,'.date('Y'),
            'jenis_kegiatan' => 'required|string',
            'tanggal' => 'required|date',
            'nilai_setara' => 'required|integer|min:1',
            'desa_id' => 'required|exists:desas,id'
        ];
    }

    public function attributes()
    {
        return [
            'pelaksanaan' => 'Pelaksanaan',
            'tahun' => 'Tahun kegiatan',
            'jenis_kegiatan' => 'Jenis kegiatan',
            'tanggal' => 'Tanggal',
            'nilai_setara' => 'Nilai setara',
            'desa_id' => 'Desa',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'in' => ':attribute harus salah satu diantara sudah realisasi atau masih rencana',
            'numeric' => ':attribute harus berupa angka',
            'between' => ':attribute harus diantara :min dan :max',
            'string' => ':attribute harus berupa teks',
            'date' =>  ':attribute tidak valid',
            'min' => ':attribute minimal :min',
            'integer' => ':attribute harus berupa angka',
            'exists' => ':attribute tidak valid'
        ];
    }
}
