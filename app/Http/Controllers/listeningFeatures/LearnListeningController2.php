<?php

namespace App\Http\Controllers\listeningFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnListeningController2 extends Controller
{
    public function index()
    {
        return view('page.ListeningFeatures.learn-listening2');
    }
}
