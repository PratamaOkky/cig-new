<?php

namespace App\Http\Controllers\Admin;

use App\Models\Pesan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class KontakController extends Controller
{
    public function index()
    {
        return view('admin.kontak.index', [
            'msg' => Pesan::count(),
            'contacts'=>Pesan::latest()->paginate(6)
        ]);
    }
    public function destroy(Pesan $contact)
    {
        $contact = Pesan::find($contact->id)->delete();
        return redirect()->route('admin.contact.index')->withSuccess('Berhasil Hapus Pesan');
    }
}
