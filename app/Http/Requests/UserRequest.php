<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
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
            'nip' => ['required', 'max:32', 'min:3', 'unique:users,nip,'],
            'email' => ['required', 'email:dns', 'unique:users,email,'],
            'nik' => ['required', 'min:5', 'numeric' , 'unique:users,nik,'],
            'npwp' => ['required', 'min:5', 'numeric' , 'unique:users,npwp,'],
            'bpjs_kes' => ['required', 'min:5', 'numeric' , 'unique:users,bpjs_kes,'],
            'bpjs_tk' => ['required', 'min:5', 'numeric' , 'unique:users,bpjs_tk,'],
            'rekening' => ['required', 'min:5', 'numeric' , 'unique:users,rekening,'],
            'name' => ['required', 'max:35', 'string', 'min:5'],
            'password' => ['required', 'min:8', 'max:35'],
            'jabatan' => ['required', 'min:5', 'max:35', 'string'],
            'divisi' => ['required', 'min:5', 'max:35', 'string'],
            'atasan' => ['required', 'min:5', 'max:35', 'string'],
            'tempat_lahir' => ['required', 'min:5', 'max:35', 'string'],
            'kewarganegaraan' => ['required', 'min:3', 'max:35', 'string'],
            'agama' => ['required', 'min:3', 'max:35', 'string'],
            'alamat' => ['required', 'min:5', 'string'],
            'instalasi' => ['required', 'min:3', 'max:35', 'string'],
            'pajak' => ['required', 'min:3', 'max:35', 'string'],
            'bank' => ['min:3', 'max:35', 'string'],
            'level_id' => ['required'],
            'gender_id' => ['required'],
            'tgl_lahir' => ['required', 'date'],
            'tgl_masuk' => ['required', 'date'],
            'awal_pkwt' => ['required', 'date'],
            'akhir_pkwt' => ['required', 'date'],
            'image' => ['nullable', 'image', 'mimes:png,jpg', 'max:2048'],
        ];
    }
}
