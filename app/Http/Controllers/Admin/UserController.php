<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\UserRequest;
use App\Http\Controllers\Controller;
use App\Models\{User, Level, Gender};
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\UserUpdateRequest;

class UserController extends Controller
{
    public function index()
    {
        return view('admin.pegawai.index', [
            'genders' => Gender::all(),
            'levels' => Level::all(),
            'user' => User::where('level_id', '2')->count(),
            'admin' => User::where('level_id', '1')->count(),
            'users' => User::orderBy('level_id', 'asc')->get(),
        ]);
    }

    public function store(UserRequest $request, User $user)
    {
        $user = $request->all();
        if ($request->file('image')) {
            $user['image'] = $request->file('image')->store('user');
        }
        User::create($user);
        return redirect()->back()->withSuccess('Berhasil Menambahkan Pengguna');
    }

    public function update(UserUpdateRequest $request, User $user)
    {
        if (request('image')) {
            Storage::delete($user->image);
            $image = request()->file('image')->store('user');
        } elseif ($user->image) {
            $image = $user->image;
        } else {
            $image = null;
        }

        $user = User::findOrFail($user->id)->update([
            'name' => request('name'),
            'nip' => request('nip'),
            'level_id' => request('level_id'),
            'nik' => request('nik'),
            'jabatan' => request('jabatan'),
            'divisi' => request('divisi'),
            'atasan' => request('atasan'),
            'tempat_lahir' => request('tempat_lahir'),
            'tgl_lahir' => request('tgl_lahir'),
            'gender_id' => request('gender_id'),
            'kewarganegaraan' => request('kewarganegaraan'),
            'agama' => request('agama'),
            'alamat' => request('alamat'),
            'npwp' => request('npwp'),
            'bpjs_kes' => request('bpjs_kes'),
            'bpjs_tk' => request('bpjs_tk'),
            'email' => request('email'),
            'tgl_masuk' => request('tgl_masuk'),
            'awal_pkwt' => request('awal_pkwt'),
            'akhir_pkwt' => request('akhir_pkwt'),
            'pajak' => request('pajak'),
            'instalasi' => request('instalasi'),
            'bank' => request('bank'),
            'rekening' => request('rekening'),
            'image' => $image
        ]);
        return redirect()->back()->withSuccess('Berhasil Update Data Pegawai');
    }

    public function destroy(User $user)
    {
        Storage::delete($user->image);
        User::destroy($user->id);
        return redirect()->back()->withSuccess('Berhasil Hapus Pegawai');
    }
}
