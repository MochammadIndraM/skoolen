<?php

namespace App\Http\Controllers\sainsFeatures;

use App\Http\Controllers\Controller;
use App\Models\Cuaca;
use Illuminate\Http\Request;

class CuacaController extends Controller
{
    public function index()
    {
        $listCuaca = Cuaca::all();
        return view('page.SainsFeatures.Cuaca.cuaca', compact('listCuaca'));
    }

    public function listCuaca($slug)
    {
        $hewan = Cuaca::where('slug', $slug)->with('cuaca')->firstOrFail();
        return view('page.SainsFeatures.Cuaca.cuaca', compact('cuaca'));
    }

    public function show($slug)
    {
        $cuaca = Cuaca::where('slug', $slug)->firstOrFail();
        return view('page.SainsFeatures.Cuaca.show', compact('cuaca'));
    }
}
