<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $attr = $request->validate([
            'nip' => 'required',
            'password' => 'required'
        ]);

        if (Auth::attempt($attr)) {
            if (Auth::check() && Auth::user()->level_id == 1) {
                return redirect()->route('admin.dashboard')->withSuccess('Berhasil Login');
            } elseif(Auth::check() && Auth::user()->level_id == 2) {
                return redirect()->route('user.dashboard')->withSuccess('Berhasil Login');
            } else {
                return redirect()->route('/');
            }
        }

        throw ValidationException::withMessages([
            'nip' => 'Nip atau Password Salah!'
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
