<?php

namespace App\Http\Controllers\Homepage;

use App\Models\{Karir, Pesan, Pelamar, Artikel};
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    // Home
    public function index()
    {
        return view('homepage.home');
    }
    // End Home

     // artikel
     public function blog(Artikel $artikel)
     {
        return view('homepage.blog.index', [
            'artikels' => Artikel::paginate(6),
            compact('artikel')]);
     }

     public function detail(Artikel $artikel)
     {
        $art = Artikel::findOrFail($artikel->id);
        $artikels = Artikel::OrderBy('created_at', 'asc')->paginate(6);
        return view('homepage.blog.detail', compact('art', 'artikels'));
     }
    // About
    public function about()
    {
        return view('homepage.tentang');
    }
    // End About

    // Layanan
    public function layanan()
    {
        return view('homepage.layanan');
    }
    // End Layanan

    // Karir
    public function career()
    {
        return view('homepage.karir.kariru', [
            'karirs' => Karir::orderBy('created_at', 'asc')->paginate(5),
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => ['required', 'max:35', 'min:3', 'string'],
            'email' => ['required', 'email:dns'],
            'posisi' => ['required', 'min:5', 'max:150', 'string'],
            'nohp' => ['required', 'min:5', 'numeric'],
            'cv' => ['required', 'file', 'max:2048']
        ]);

        if ($request->file('cv')) {
            $validatedData['cv'] = $request->file('cv')->store('cv');
        }

        Pelamar::create($validatedData);

        return redirect()->back()->withSuccess('CV Anda Berhasil Dikirim');
    }
    // End Karir

    // Kontak
    public function indexKontak()
    {
        return view('homepage.kontak');
    }

    public function postKontak(Request $request)
    {
        $validate = $request->validate([
            'name' => ['required', 'string', 'min:3', 'max:55'],
            'email' => ['required', 'email:dns'],
            'subject' => ['required', 'string', 'max:55'],
            'isi' => ['required']
        ]);

        Pesan::create($validate);

        return redirect()->back()->withSuccess('Berhasil Mengirim Pesan');
    }
    // End Kontak
}
