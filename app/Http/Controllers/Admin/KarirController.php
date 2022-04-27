<?php

namespace App\Http\Controllers\Admin;

use App\Models\{Karir, Pelamar};
use App\Http\Requests\KarirRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;

class KarirController extends Controller
{
    public function index()
    {
        return view('admin.karir.index', [
            'total' => Karir::count(),
            'karirs' => Karir::all(),
            'pelamar' => Pelamar::count(),
            'karirs' => Karir::filter(request(['search']))->paginate(6)
        ]);
    }

    public function store(KarirRequest $request)
    {
        Karir::create([
            'image' => request()->file('image')->store('karir'),
            'lowongan' => request('lowongan'),
            'posisi' => request('posisi'),
            'detail' => request('detail'),
        ]);
        return redirect()->back()->with('success', 'Berhasil Menambahkan Karir');
    }

    public function edit(Karir $karir)
    {
        return view('admin.karir.edit', compact('karir'));
    }

    public function update(KarirRequest $request, Karir $karir)
    {
        if (request('image')) {
            Storage::delete($karir->image);
            $image = request()->file('image')->store('karir');
        } elseif ($karir->image) {
            $image = $karir->image;
        } else {
            $image = null;
        }

        $karir = Karir::findOrFail($karir->id)->update([
            'lowongan' => request('lowongan'),
            'posisi' => request('posisi'),
            'detail' => request('detail'),
            'image' => $image
        ]);

        return redirect()->route('admin.karir.index')->withSuccess('Berhasil Ubah Karir');
    }

    public function destroy(Karir $karir)
    {
        Storage::delete($karir->image);
        Karir::destroy($karir->id);
        return redirect()->route('admin.karir.index')->with('success', 'Berhasil Hapus Karir');
    }
}
