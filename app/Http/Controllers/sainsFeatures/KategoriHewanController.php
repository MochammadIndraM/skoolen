<?php

namespace App\Http\Controllers\sainsFeatures;

use App\Http\Controllers\Controller;
use App\Models\Hewan;
use App\Models\KategoriHewan;
use Illuminate\Http\Request;

class KategoriHewanController extends Controller
{
    public function index()
    {
        $categories = KategoriHewan::all();
        return view('page.SainsFeatures.Hewan.kategoriHewan', compact('categories'));
    }

    public function kategoriHewan($slug)
    {
        $hewan = KategoriHewan::where('slug', $slug)->with('hewan')->firstOrFail();
        return view('page.SainsFeatures.Hewan.kategoriHewan', compact('hewan'));
    }

    public function listHewan($slug)
    {
        $hewan = KategoriHewan::where('slug', $slug)->with('hewan')->firstOrFail();
        return view('page.SainsFeatures.Hewan.listHewan', compact('hewan'));
    }

    public function detailHewan($nama_hewan)
    {
        $hewan = Hewan::where('nama_hewan', $nama_hewan)->firstOrFail();
        return view('page.SainsFeatures.Hewan.detailHewan', compact('hewan'));
    }

}
