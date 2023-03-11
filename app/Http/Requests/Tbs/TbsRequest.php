<?php

namespace App\Http\Requests\Tbs;

use Illuminate\Foundation\Http\FormRequest;

class TbsRequest extends FormRequest
{
    public $listTbs = [3,4,5,6,7,8,9,10,21,22,23,24,25];
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
        $rules = [
            'bulan' => 'required|string'
        ];
        foreach ($this->listTbs as $tbs) {
            $rules["tbs_$tbs"] = 'required|numeric|min:0';
        }
        return $rules;
    }

    public function attributes()
    {
        $attributes = [
            'bulan' => 'Bulan'
        ];
        foreach ($this->listTbs as $tbs) {
            $attributes["tbs_$tbs"] = "TBS $tbs tahun";
        }
        return $attributes;
    }

    public function messages()
    {
        return [
            'required' => ':attribute wajib diisi',
            'string' => ':attribute harus berupa teks',
            'numeric' => ':attribute harus berupa angka',
            'min' => ':attribute minimal 0'
        ];
    }
}
