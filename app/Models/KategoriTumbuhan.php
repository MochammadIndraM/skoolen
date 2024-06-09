<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriTumbuhan extends Model
{
    use HasFactory;

    protected $table = 'kategori_tumbuhan';

    protected $fillable = [
        'id',
        'kategori_tumbuhan',
    ];
}
