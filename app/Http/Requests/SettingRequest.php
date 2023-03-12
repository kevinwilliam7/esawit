<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'email' => 'required|email',
            'phone' => 'required|string',
            'address' => 'required|string',
            'lat' => 'required|numeric',
            'lng' => 'required|numeric',
        ];
    }

    public function attributes()
    {
        return [
            'email' => 'Email',
            'phone' => 'No. Telp',
            'address' => 'Alamat',
            'lat' => 'Koordinat',
            'lng' => 'Koordinat',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'email' => ':attribute tidak valid',
            'numeric' => ':attribute tidak valid'
        ];
    }
}
