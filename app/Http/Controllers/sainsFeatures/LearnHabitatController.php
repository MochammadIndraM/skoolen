<?php

namespace App\Http\Controllers\sainsFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LearnHabitatController extends Controller
{
    public function index()
    {
        return view('page.SainsFeatures.learn-habitat');
    }
}
