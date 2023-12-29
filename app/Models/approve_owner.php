<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class approve_owner extends Model
{
    use HasFactory;

    protected $table = 'approve_owner';

    protected $fillable = [
        'nama_kos',
        'nama_user',
        'metode_pembayaran',
        'harga',
        'jangka_waktu',
        'bukti',
        'Status',
    ];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function notifikasi()
    {
        return $this->hasMany(Notifikasi::class);
    }
}

