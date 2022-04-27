<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Hash;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Kayandra\Hashidable\Hashidable;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable, Hashidable;

    protected $table = 'users';

    protected $guarded = ['id'];

    protected $with = ['level', 'gender'];

    protected $fillable = [
        'name',
        'nip',
        'email',
        'password',
        'level_id',
        'gender_id',
        'nik',
        'jabatan',
        'divisi',
        'atasan',
        'tempat_lahir',
        'tgl_lahir',
        'kewarganegaraan',
        'agama',
        'alamat',
        'npwp',
        'bpjs_kes',
        'bpjs_tk',
        'tgl_masuk',
        'awal_pkwt',
        'akhir_pkwt',
        'pajak',
        'image',
        'instalasi',
        'bank',
        'rekening'
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime'
    ];

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function gaji()
    {
        return $this->hasOne(Gaji::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function getRouteKeyName()
    {
        return 'nip';
    }

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = Hash::make($password);
    }
}
