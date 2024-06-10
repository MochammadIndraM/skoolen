<?php

namespace App\Http\Controllers\readingFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GaleryLearnReading extends Controller
{
    public function index () {
        return view('page.ReadingFeatures.galery-learn-reading');
    }
}
