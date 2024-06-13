<?php

namespace App\Http\Controllers\sainsFeatures;

use App\Http\Controllers\Controller;
use App\Models\Tumbuhan;
use App\Models\KategoriTumbuhan;
use Illuminate\Http\Request;

class KategoriTumbuhanController extends Controller
{
    public function index()
    {
        $categories = KategoriTumbuhan::all();
        return view('page.SainsFeatures.Tumbuhan.kategoriTumbuhan', compact('categories'));
    }

    public function kategoriTumbuhan($slug)
    {
        $tumbuhan = kategoriTumbuhan::where('slug', $slug)->with('tumbuhan')->firstOrFail();
        return view('page.SainsFeatures.Tumbuhan.kategoriTumbuhan', compact('tumbuhan'));
    }

    public function listTumbuhan($slug)
    {
        $tumbuhan = KategoriTumbuhan::where('slug', $slug)->with('tumbuhan')->firstOrFail();
        return view('page.SainsFeatures.Tumbuhan.listTumbuhan', compact('tumbuhan'));
    }

    public function detailTumbuhan($nama_tumbuhan)
    {
        $tumbuhan = Tumbuhan::where('nama_tumbuhan', $nama_tumbuhan)->firstOrFail();
        return view('page.SainsFeatures.Tumbuhan.detailTumbuhan', compact('tumbuhan'));
    }

}
