<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewan';

    protected $fillable = [
        'nama_hewan',
        'umur',
        'jenis_id',
        'pemilik_id',
    ];

    public function jenis()
    {
        return $this->belongsTo(JenisHewan::class, 'jenis_id');
    }

    public function pemilik()
    {
        return $this->belongsTo(Pemilik::class, 'pemilik_id');
    }
}
