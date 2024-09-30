<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataKejadian extends Model
{
    use HasFactory;
    public $table = 'datakejadian';
    public $fillable = [
        'nama_kejadian',
        'tanggal_kejadian',
        'alamat_kejadian',
        'deskripsi_kejadian',
    ];
}
