<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class OwnerDataKosts extends Model
{
    use HasFactory;
    protected $table = 'owner_data_kosts';
    protected $primaryKey = 'id';
    protected $fillable = [
        'user_id',
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
        'status',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
