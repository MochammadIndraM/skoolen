<?php

namespace App\Http\Controllers\listeningFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnListeningController extends Controller
{
    public function index () {
        return view('page.ListeningFeatures.learn-listening');
    }
}

