<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KategoriHewan extends Model
{
    use HasFactory;

    protected $table = 'kategori_hewan';

    protected $fillable = [
        'id',
        'kategori_hewan',
    ];
}
