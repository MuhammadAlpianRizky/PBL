<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function subject()
    {
        return $this->belongsTo(Mahasiswa::class);
    }

    public function student()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
    protected $fillable = [
            'nama',
            'npm',
            'no_hp',
            'mata_kuliah',
            'jam',
            'saran_komentar',
        
    ];
}
