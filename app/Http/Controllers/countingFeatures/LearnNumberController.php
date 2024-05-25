<?php

namespace App\Http\Controllers\countingFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnNumberController extends Controller
{
    public function index () {
        return view('page.CountingFeatures.learn-number');
    }
}
