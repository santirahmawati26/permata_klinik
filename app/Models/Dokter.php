<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    /**
     * the atributes that are mass assignable.
     * 
     * @var array<int, string>
     */
    protected $fillable = [
        'nama_dokter',
        'alamat',
        'no_tlp',
        'spesialis',
        'jam_kerja',
        'ruangan',


    ];
}
