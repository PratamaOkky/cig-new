<?php

namespace App\Http\Controllers\Auth;

use App\Models\{User, Level};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        $level = Level::all();
        $user = User::with('level')->get();
        return view('admin.pegawai.index', ['user'=>$user, 'levels'=>$level]);
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama' =>  'required|max:255',
            'nip' => 'required|unique:tb_user|max:100',
            'level_id' =>  'required',
            'password' => 'required|min:5|max:255',
            'jabatan' => 'nullable',
            'divisi' => 'nullable',
            'atasan' => 'nullable',
            'ttl' => 'nullable',
            'tgl_lahir' => 'nullable|date:d-m-Y',
            'nik' => 'nullable|unique:tb_user|max:100',
            'awal_pkwt' => 'nullable|date:d-m-Y',
            'akhir_pkwt' => 'nullable|date:d-m-Y',
            'status_pajak' => 'nullable',
            'gender_id' => 'nullable',
            'kewarganegaraan' => 'nullable',
            'agama' => 'nullable',
            'alamat' => 'nullable',
            'npwp' => 'nullable|unique:tb_user|max:100',
            'no_kes' => 'nullable|unique:tb_user|max:100',
            'no_tk' => 'nullable|unique:tb_user|max:100',
            'email' => 'nullable|email|unique:tb_pegawai',
            'instalasi' => 'nullable',
            'bank' => 'nullable',
            'rek' => 'nullable',
            'tgl_masuk' => 'nullable',
            'image' => 'file|image|max:2048'
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        if ($request->file('image')) {
            $validatedData['image'] = $request->file('image')->store('user');
        }

        if (User::create($validatedData)) {
            return redirect()->route('pengguna.index')->with('success', 'Berhasil Menambahkan Pengguna');
        }
        return redirect()->route('pengguna.index')->with('error', 'Gagal Menambah Data');
    }
}
