<?php

namespace App\Http\Controllers\Admin;

use App\Models\Gaji;
use App\Imports\GajiImport;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use Yajra\DataTables\Facades\DataTables;

class GajiController extends Controller
{
    public function index()
    {
        return view('admin.gaji.index');
    }

    public function dataGaji()
    {
        return view('admin.gaji.data_gaji');
    }

    public function getAllGaji()
    {
        $gaji = Gaji::all();
        return DataTables::of($gaji)
                ->addIndexColumn()
                ->addColumn('actions', function($row){
                    return '<div class="btn-group">
                                <button class="text-danger h4 d-inline border-0" style="background: transparent" data-id="'.$row['id'].'" id="delete"><i class="fa fa-trash-o"></i></button>
                            </div>';
                })
                ->addColumn('checkbox', function($row){
                    return '<input type="checkbox" name="id" data-id="'.$row['id'].'"><label></label>';
                })

                ->rawColumns(['actions','checkbox'])
                ->make(true);
    }

    public function deleteGaji(Request $request)
    {
        $gaji_id = $request->id;
        $gaji = Gaji::find($gaji_id)->delete();

        if ($gaji) {
            return response()->json(['code'=>1, 'success'=>'Data Berhasil Dihapus']);
        }else {
            return response()->json(['code'=>0, 'error'=>'Something Wrong!']);
        }
    }

    public function importgaji(Request $request)
    {
        Excel::import(new GajiImport, $request->file('gaji')->store('gaji'));

        return redirect()->back()->with('success', 'Gaji Berhail Di Upload!');
    }

    public function download()
    {
        $nip = Auth::user()->nip;
        $gaji = Gaji::firstWhere('nip', $nip);
        $pdf = PDF::loadView('admin.gaji.slip_gaji', compact('gaji'))->setPaper('legal', 'potrait');
        return $pdf->download('invoice.pdf');
    }

    public function deleteSelected(Request $request)
    {
        $gaji_id = $request->id;
        Gaji::whereIn('id', $gaji_id)->delete();
        return response()->json(['code'=>1, 'success'=>'Data Berhasil Dihapus']);
    }
}
