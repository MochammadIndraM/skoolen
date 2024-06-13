<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tumbuhan extends Model
{
    use HasFactory;

    protected $table = 'tumbuhan';

    protected $guarded = ['id'];

    public function kategoriTumbuhan()
    {
        return $this->belongsTo(KategoriTumbuhan::class, 'id_kategori_tumbuhan', 'id');
    }
}
