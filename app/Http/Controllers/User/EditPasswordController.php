<?php

namespace App\Http\Controllers\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class EditPasswordController extends Controller
{
    public function edit()
    {
        return view('user.dashboard');
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
