<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pelamar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class PelamarController extends Controller
{
    public function index()
    {
        return view('admin.pelamar.index', ['pelamars' => Pelamar::all()]);
    }

    public function destroy(Pelamar $pelamar)
    {
        if ($pelamar->cv) {
            Storage::delete($pelamar->cv);
        }
        Pelamar::destroy($pelamar->id);
        return redirect()->back()->with('success', 'Pelamar Berhasil Dihapus');
    }
}
