<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KarirRequest extends FormRequest
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
            'lowongan' => ['required', 'max:150', 'unique:karirs,lowongan,' . optional($this->karir)->id],
            'posisi' => ['required', 'max:150'],
            'detail' => ['required'],
            'image' => ['nullable', 'mimes:png,jpg,jpeg' ,'max:2048'],
        ];
    }
}
