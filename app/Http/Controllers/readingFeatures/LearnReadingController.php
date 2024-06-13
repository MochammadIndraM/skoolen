<?php

namespace App\Http\Controllers\readingFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abjad;

class LearnReadingController extends Controller
{
    public function index () {
        $dataAbjad = Abjad::all();
        return view('page.ReadingFeatures.learn-reading', compact('dataAbjad'));
    }
}
