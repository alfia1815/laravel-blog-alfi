<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul',
        'isi',
        'penulis',
        'tanggal_publikasi',
    ];

    protected $casts = [
        'tanggal_publikasi' => 'date',
    ];
}
