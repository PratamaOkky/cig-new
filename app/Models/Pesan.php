<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kayandra\Hashidable\Hashidable;

class Pesan extends Model
{
    use HasFactory, Hashidable;

    protected $table = 'contacts';

    protected $guarded = ['id'];

    protected $fillable = [
        'name',
        'email',
        'subject',
        'isi'
    ];
}
