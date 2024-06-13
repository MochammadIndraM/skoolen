<?php

namespace App\Http\Controllers\CountingFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnClockController extends Controller
{
    public function index () {
        return view('page.CountingFeatures.learn-clock');
    }
}
