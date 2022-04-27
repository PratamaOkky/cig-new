<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kayandra\Hashidable\Hashidable;

class Pelamar extends Model
{
    use HasFactory, Hashidable;

    protected $table = 'applicants';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'nohp',
        'posisi',
        'cv'
    ];
}
