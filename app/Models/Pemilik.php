<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemilik extends Model
{
    use HasFactory;

    protected $table = 'pemilik';

    protected $fillable = [
        'nama_pemilik',
        'alamat',
    ];

    public function hewan()
    {
        return $this->hasMany(Hewan::class, 'pemilik_id');
    }
}
