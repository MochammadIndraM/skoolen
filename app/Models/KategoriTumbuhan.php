<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;


class KategoriTumbuhan extends Model
{
    use HasFactory;

    protected $table = 'kategori_tumbuhan';

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($kategoriTumbuhan) {
            $kategoriTumbuhan->slug = Str::slug($kategoriTumbuhan->kategori_tumbuhan);
        });
    }

    public function tumbuhan()
    {
        return $this->hasMany(Tumbuhan::class, 'id_kategori_tumbuhan', 'id');
    }
}
