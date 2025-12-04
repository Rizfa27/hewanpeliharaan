<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;

    protected $table = 'pemiliks';

    protected $fillable = [
        'nama_pemilik',
        'alamat',
        'foto',
    ];

    public function hewan()
    {
        return $this->hasMany(Hewan::class, 'pemilik_id');
    }
}
