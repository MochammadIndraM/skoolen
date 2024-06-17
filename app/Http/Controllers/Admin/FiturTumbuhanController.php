<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tumbuhan;
use App\Models\KategoriTumbuhan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FiturTumbuhanController extends Controller
{
    public function index(){
        $dataTumbuhanAll = Tumbuhan::join('kategori_tumbuhan', 'kategori_tumbuhan.id', '=', 'tumbuhan.id_kategori_tumbuhan')
            ->select('tumbuhan.id as id_tumbuhan', 'tumbuhan.id_kategori_tumbuhan as tumbuhan_idKategori', 'tumbuhan.nama_tumbuhan as nama_tumbuhan', 
            'tumbuhan.deskripsi as deskripsi', 'tumbuhan.gambar as gambar', 'kategori_tumbuhan.kategori_tumbuhan as kategori')
            ->get();

        $dataKategoriTumbuhan = KategoriTumbuhan::all();
        return view('page.Admin.fitur-tumbuhan',compact('dataTumbuhanAll', 'dataKategoriTumbuhan'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'id_kategori_tumbuhan' => 'required',
            'nama_tumbuhan' => 'required|string',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->file('photo')) {
            $namaBerkas = $request->file('photo')->store('images-tumbuhan');
            $Tumbuhan = new Tumbuhan();
            $Tumbuhan->id_kategori_tumbuhan = $request->input('id_kategori_tumbuhan');
            $Tumbuhan->nama_tumbuhan = $request->input('nama_tumbuhan');
            $Tumbuhan->deskripsi = $request->input('deskripsi');
            $Tumbuhan->gambar = $namaBerkas;
            $Tumbuhan->save();
        }

        return redirect()->route('Admin.fitur-tumbuhan');
    }

    public function byId($id){
        $data = Tumbuhan::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'id_kategori_tumbuhan' => 'required',
            'nama_tumbuhan' => 'required|string',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
        ]);

        $Tumbuhan = Tumbuhan::findOrFail($id);

        if ($request->file('photo') == "") {
            $Tumbuhan->id_kategori_tumbuhan = $request->id_kategori_tumbuhan;
            $Tumbuhan->nama_tumbuhan = $request->nama_tumbuhan;
            $Tumbuhan->deskripsi = $request->deskripsi;
            $Tumbuhan->update();
        } else {
            File::delete("storage/" . $Tumbuhan->gambar);
            $namaBerkas = $request->file('photo')->store('images-tumbuhan');
            $Tumbuhan->id_kategori_tumbuhan = $request->id_kategori_tumbuhan;
            $Tumbuhan->nama_tumbuhan = $request->nama_tumbuhan;
            $Tumbuhan->deskripsi = $request->deskripsi;
            $Tumbuhan->gambar = $namaBerkas;
            $Tumbuhan->update();
        }
        return redirect()->route('Admin.fitur-tumbuhan');
    }

    public function destroy($id){
        $Tumbuhan = Tumbuhan::findOrFail($id);
        Storage::delete($Tumbuhan->gambar);
        $Tumbuhan->delete();
        return redirect()->route('Admin.fitur-tumbuhan');
    }
}
