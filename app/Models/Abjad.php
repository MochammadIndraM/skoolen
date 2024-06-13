<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abjad extends Model
{
    use HasFactory;

    protected $table = 'abjad';

    protected $fillable = [
        'id',
        'huruf',
        'img_abjad',
        'img_des',
        'deskripsi'
    ];
}
