<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konsultasi extends Model
{
    use HasFactory;
    /**
     * the atributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pasien',
        'keluhan',
        'nama_dokter',
        'tanggal_konsultasi',
        'jam_konsultasi',


    ];
}
