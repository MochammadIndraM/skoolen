<?php

namespace App\Http\Controllers\countingFeatures;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CountMenusController extends Controller
{
    public function index () {
        return view('page.CountingFeatures.count-menu');
    }
}
