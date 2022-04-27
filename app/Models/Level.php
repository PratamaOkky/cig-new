<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kayandra\Hashidable\Hashidable;

class Level extends Model
{
    use HasFactory, Hashidable;

    protected $table = 'levels';

    protected $fillable = [
        'level'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }

}
