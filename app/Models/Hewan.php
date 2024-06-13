<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hewan extends Model
{
    use HasFactory;

    protected $table = 'hewan';

    protected $guarded = ['id'];

    public function kategoriHewan()
{
    return $this->belongsTo(KategoriHewan::class, 'id_kategori_hewan', 'id');
}


}
