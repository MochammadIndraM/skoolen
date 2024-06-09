<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class KategoriHewan extends Model
{
    use HasFactory;

    protected $table = 'kategori_hewan';

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($kategoriHewan) {
            $kategoriHewan->slug = Str::slug($kategoriHewan->kategori_hewan);
        });
    }

    public function hewan()
    {
        return $this->hasMany(Hewan::class, 'id_kategori_hewan', 'id');
    }
}
