<?php

namespace App\Http\Controllers\countingFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Angka;

class LearnNumberController extends Controller
{
    public function index () {
        $dataAngka = Angka::all();
        return view('page.CountingFeatures.learn-number', compact('dataAngka'));
    }
}
