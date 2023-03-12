<?php

namespace App\Http\Requests\Perkebunan;

use Illuminate\Foundation\Http\FormRequest;

class PengolahanRequest extends FormRequest
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
            'nama_pabrik' => 'required|string',
            'jumlah_distribusi' => 'required|string',
        ];
    }

    public function attributes()
    {
        return [
            'nama_pabrik' => 'Nama pabrik',
            'jumlah_distribusi' => 'Jumlah distribusi'
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
        ];
    }
}
