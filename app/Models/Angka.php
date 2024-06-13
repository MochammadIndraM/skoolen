<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Angka extends Model
{
    use HasFactory;

    protected $table = 'angka';

    protected $fillable = [
        'id',
        'angka',
        'deskripsi',
        'img_angka',
        'img_des',
    ];
}
