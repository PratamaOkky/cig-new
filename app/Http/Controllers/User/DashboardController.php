<?php

namespace App\Http\Controllers\User;

use App\Models\Gaji;
use App\Models\User;
use App\Models\Gender;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use App\Rules\oldMatchPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        return view('user.dashboard', [
            'user' => User::get(),
            'genders' => Gender::all(),
            'gaji' => Gaji::all(),
        ]);
    }

    public function editPassword($id)
    {
        return view('user.dashboard', [
            'user' => User::find($id),
        ]);
    }

    public function updatePassword(Request $request, $id)
    {
        $request->validate([
            'old_password' =>  ['required', new oldMatchPassword],
            'password' => 'required|min:8|confirmed',
        ]);

        User::find($id)->update([
            'old_password' => $request->old_password,
            'password' => $request->password,
        ]);
        return redirect()->route('user.dashboard')->withSuccess('Berhasil Merubah Password');
    }

    public function downloadGaji()
    {
        $nip = auth()->user()->nip;
        $gaji = Gaji::firstWhere('nip', $nip);
        $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji'))->setPaper('legal', 'potrait');
        return $pdf->download('invoice.pdf');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
