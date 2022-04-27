<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateRequest extends FormRequest
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
            'nip' => ['required', 'numeric', 'min:3', Rule::unique('users', 'nip')->ignore($this->user),],
            'email' => ['required', 'email:dns', Rule::unique('users','email')->ignore($this->user),],
            'nik' => ['required', 'min:5', 'numeric' , Rule::unique('users','nik')->ignore($this->user),],
            'npwp' => ['required', 'min:5', 'numeric' , Rule::unique('users','npwp')->ignore($this->user),],
            'bpjs_kes' => ['required', 'min:5', 'numeric' , Rule::unique('users','bpjs_kes')->ignore($this->user),],
            'bpjs_tk' => ['required', 'min:5', 'numeric' , Rule::unique('users','bpjs_tk')->ignore($this->user),],
            'rekening' => ['required', 'min:5', 'numeric' , Rule::unique('users','rekening')->ignore($this->user),],
            'name' => ['required', 'max:55', 'string', 'min:3'],
            'password' => ['nullable', 'min:8', 'string'],
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
