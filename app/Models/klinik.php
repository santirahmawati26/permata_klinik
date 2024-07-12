<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class klinik extends Model
{
    use HasFactory;
    /**
     * the atributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_pasien',
        'alamat',
        'no_tlp',
        'riwayat_penyakit',


    ];
}

