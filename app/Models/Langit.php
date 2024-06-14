<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Langit extends Model
{
    use HasFactory;

    protected $table = 'langit';

    protected $guarded = ['id'];
}
