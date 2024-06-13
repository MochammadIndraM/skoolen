<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cuaca extends Model
{
    use HasFactory;

    protected $table = 'cuaca';

    protected $guarded = ['id'];
}