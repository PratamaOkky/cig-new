<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kayandra\Hashidable\Hashidable;

class Karir extends Model
{
    use HasFactory, Hashidable;

    protected $table = 'karirs';

    protected $fillable = [
        'lowongan',
        'posisi',
        'detail',
        'image'
    ];

    public function scopeFilter($query, array $filter)
    {
        $query->when($filter['search'] ?? false, function($query, $search)
        {
            return $query->where('lowongan', 'like', '%' . $search . '%')
                        ->orWhere('posisi', 'like', '%' . $search . '%');
        });
    }
}
