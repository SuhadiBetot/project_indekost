<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnerDataKosts extends Model
{
    use HasFactory;
    protected $table = 'owner_data_kosts';

    protected $fillable = [
        'nama_kost',
        'ketentuan',
        'lokasi',
        'peraturan',
        'spesifikasi',
        'harga',
        'diskon',
        'fasilitas_kamar',
        'fasilitas_kamar_mandi',
        'fasilitas_tempat_parkir',
        'foto_depan',
        'foto_dalam',
        'foto_tambahan',
    ];
}
