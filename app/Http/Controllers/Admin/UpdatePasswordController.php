<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Rules\oldMatchPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UpdatePasswordController extends Controller
{
    public function edit()
    {
        return view('admin.dashboard');
    }

    public function update(Request $request)
    {
       $request->validate([
            'old_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (Hash::check($request->old_password, auth()->user()->password)) {
            auth()->user()->update($request->only('password'));
            return redirect()->back()->withSuccess('Berhasil Update Password');
        }

        throw ValidationException::withMessages(['old_password' => 'Password Tidak Sesuai']);
    }
}
