<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hewan;
use App\Models\KategoriHewan;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FiturHewanController extends Controller
{
    public function index(){
        $dataHewanAll = Hewan::join('kategori_hewan', 'kategori_hewan.id', '=', 'hewan.id_kategori_hewan')
            ->select('hewan.id as id_hewan', 'hewan.id_kategori_hewan as hewan_idKategori', 'hewan.nama_hewan as nama_hewan', 
            'hewan.deskripsi as deskripsi', 'hewan.gambar as gambar', 'kategori_hewan.kategori_hewan as kategori')
            ->get();

        $dataKategoriHewan = KategoriHewan::all();
        return view('page.Admin.fitur-hewan',compact('dataHewanAll', 'dataKategoriHewan'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'id_kategori_hewan' => 'required',
            'nama_hewan' => 'required|string',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->file('photo')) {
            $namaBerkas = $request->file('photo')->store('images-hewan');
            $Hewan = new Hewan();
            $Hewan->id_kategori_hewan = $request->input('id_kategori_hewan');
            $Hewan->nama_hewan = $request->input('nama_hewan');
            $Hewan->deskripsi = $request->input('deskripsi');
            $Hewan->gambar = $namaBerkas;
            $Hewan->save();
        }

        return redirect()->route('Admin.fitur-hewan');
    }

    public function byId($id){
        $data = Hewan::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'id_kategori_hewan' => 'required',
            'nama_hewan' => 'required|string',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
        ]);

        $Hewan = Hewan::findOrFail($id);

        if ($request->file('photo') == "") {
            $Hewan->id_kategori_hewan = $request->id_kategori_hewan;
            $Hewan->nama_hewan = $request->nama_hewan;
            $Hewan->deskripsi = $request->deskripsi;
            $Hewan->update();
        } else {
            File::delete("storage/" . $Hewan->gambar);
            $namaBerkas = $request->file('photo')->store('images-hewan');
            $Hewan->id_kategori_hewan = $request->id_kategori_hewan;
            $Hewan->nama_hewan = $request->nama_hewan;
            $Hewan->deskripsi = $request->deskripsi;
            $Hewan->gambar = $namaBerkas;
            $Hewan->update();
        }
        return redirect()->route('Admin.fitur-hewan');
    }

    public function destroy($id){
        $Hewan = Hewan::findOrFail($id);
        Storage::delete($Hewan->gambar);
        $Hewan->delete();
        return redirect()->route('Admin.fitur-hewan');
    }
}
