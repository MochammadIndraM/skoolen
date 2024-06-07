<?php

namespace App\Http\Controllers\sainsFeatures;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class LangitController extends Controller
{
    public function index()
    {
        return view('page.SainsFeatures.Langit.langit');
    }
}
