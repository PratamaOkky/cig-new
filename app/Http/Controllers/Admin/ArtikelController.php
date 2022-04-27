<?php

namespace App\Http\Controllers\Admin;

use App\Models\Artikel;
use App\Http\Controllers\Controller;
use App\Http\Requests\ArtikelRequest;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    public function index()
    {
        return view('admin.artikel.index', [
            'art' => Artikel::count(),
            'artikels' => Artikel::all(),
            'artikels' => Artikel::filter(request(['search']))->paginate(6)
        ]);
    }

    public function edit(Artikel $artikel)
    {
        $artikel = Artikel::findOrFail($artikel->id);
        return view('admin.artikel.edit', compact('artikel'));
    }

    public function store(ArtikelRequest $request, Artikel $artikel)
    {
        Artikel::create([
            'judul' => request('judul'),
            'isi' => request('isi'),
            'detail' => request('detail'),
            'image' => request()->file('image')->store('artikel'),
        ]);

        return redirect()->back()->with('success', 'Berhasil Menambahkan Artikel');
    }

    public function update(ArtikelRequest $request, Artikel $artikel)
    {
        if (request('image')) {
            Storage::delete($artikel->image);
            $image = request()->file('image')->store('artikel');
        } elseif ($artikel->image) {
            $image = $artikel->image;
        } else {
            $image = null;
        }

        $artikel = Artikel::find($artikel->id)->update([
            'judul' => request('judul'),
            'isi' => request('isi'),
            'detail' => request('detail'),
            'image' => $image
        ]);

        return redirect()->route('admin.artikel.index')->with('success', 'Berhasil Ubah Artikel');
    }

    public function destroy(Artikel $artikel)
    {
        Storage::delete($artikel->image);
        $artikel->delete($artikel->id);

        return redirect()->route('admin.artikel.index')->withSuccess('Berhasil Hapus Artikel');
    }
}
