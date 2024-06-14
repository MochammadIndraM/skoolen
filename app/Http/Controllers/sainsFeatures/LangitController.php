<?php

namespace App\Http\Controllers\sainsFeatures;

use App\Http\Controllers\Controller;
use App\Models\Langit;
use Illuminate\Http\Request;

class LangitController extends Controller
{
    public function index()
    {
        $listLangit = Langit::all();
        return view('page.SainsFeatures.Langit.langit', compact('listLangit'));
    }

    public function listLangit($slug)
    {
        $langit = Langit::where('slug', $slug)->with('langit')->firstOrFail();
        return view('page.SainsFeatures.Langit.langit', compact('langit'));
    }

    public function show($slug)
    {
        $langit = Langit::where('slug', $slug)->firstOrFail();
        return view('page.SainsFeatures.Langit.show', compact('langit'));
    }
}
