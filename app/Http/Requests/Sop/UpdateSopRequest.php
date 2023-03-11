<?php

namespace App\Http\Requests\Sop;

use Illuminate\Foundation\Http\FormRequest;

class UpdateSopRequest extends FormRequest
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
            'jenis_izin' => 'required|string',
            'file' => 'nullable|file|mimes:pdf|max:5120',
            'keterangan' => 'nullable|string',
        ];
    }

    public function attributes()
    {
        return [
            'jenis_izin' => 'Jenis izin',
            'file' => 'File',
            'keterangan' => 'Keterangan',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'file' => ':attribute harus berupa file',
            'mimes' => ':attribute harus pdf',
            'max' => ':attribute maksimal 5 MB',
        ];
    }
}
