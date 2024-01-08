<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Sewa extends Model
{
    use HasFactory;
    protected $primaryKey = 'id';
    protected $table = 'sewa';
    protected $fillable = [
        'user_id',
        'owner_data_kosts_id',
        'mulai_kos',
        'bulan',
        'status',
        'snap_token',
        'total_pembayaran',
        'pendapatan_admin',
        'pendapatan_owner',
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function dataKos(): BelongsTo
    {
        return $this->belongsTo(OwnerDataKosts::class, 'owner_data_kosts_id');
    }
}
