<?php

namespace App\Http\Requests\Perundangan;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePerundanganRequest extends FormRequest
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
            'file' => 'nullable|file|mimes:pdf|max:5120'
        ];
    }

    public function attributes()
    {
        return [
            'nama' => 'Nama',
            'file' => 'File',
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
