<?php

namespace App\Imports;

use App\Models\Gaji;
use Maatwebsite\Excel\Concerns\ToModel;

class GajiImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Gaji([
            'nip' => $row[0],
            'gaji' => $row[1],
            't_makan' => $row[2],
            't_operasional' => $row[3],
            't_jabatan' => $row[4],
            'lembur_nas' => $row[5],
            'lembur_b' => $row[6],
            'koreksi' => $row[7],
            'bpjs_kes_perusahaan' => $row[8],
            'bpjs_tk_perusahaan' => $row[9],
            'koreksi_plus' => $row[10],
            'bonus' => $row[11],
            'total_plus' => $row[12],
            'jaminan' => $row[13],
            'koreksi_min' => $row[14],
            'diksar' => $row[15],
            'kta' => $row[16],
            'pph21' => $row[17],
            'bpjs_kes_kar' => $row[18],
            'bpjs_tk_kar' => $row[19],
            'bpjs_kes' => $row[20],
            'bpjs_tk' => $row[21],
            'potongan' => $row[22],
            'total' => $row[23],
        ]);
    }
}
