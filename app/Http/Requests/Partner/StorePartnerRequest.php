<?php

namespace App\Http\Requests\Partner;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerRequest extends FormRequest
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
            'name' => 'required|string',
            'link' => 'required|url',
            'image' => 'required|image|mimes:png,jpg,jpeg,svg'
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'Nama',
            'link' => 'Link',
            'image' => 'Logo',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'link' => ':attribute tidak valid',
            'image' => ':attribute harus berupa file gambar / foto',
            'mimes' => ':attribute hanya boleh berekstensi :values'
        ];
    }
}
