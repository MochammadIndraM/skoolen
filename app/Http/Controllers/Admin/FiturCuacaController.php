<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuaca;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FiturCuacaController extends Controller
{
    public function index(){
        $dataCuacaAll = Cuaca::All();
        return view('page.Admin.fitur-cuaca', compact('dataCuacaAll'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'nama_cuaca' => 'required',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
            'video_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->file('photo')) {
            $namaBerkas = $request->file('photo')->store('images-cuaca');
            $Cuaca = new Cuaca();
            $Cuaca->slug = $request->input('nama_cuaca');
            $Cuaca->nama_cuaca = $request->input('nama_cuaca');
            $Cuaca->icon = $namaBerkas;
            $Cuaca->deskripsi = $request->input('deskripsi');
            $Cuaca->video_id = $request->input('video_id');
            $Cuaca->save();
        }

        return redirect()->route('Admin.fitur-cuaca');
    }

    public function byId($id){
        $data = Cuaca::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'nama_cuaca' => 'required',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
            'video_id' => 'required',
        ]);

        $Cuaca = Cuaca::findOrFail($id);

        if ($request->file('photo') == "") {
            $Cuaca->slug = $request->nama_cuaca;
            $Cuaca->nama_cuaca = $request->nama_cuaca;
            $Cuaca->deskripsi = $request->deskripsi;
            $Cuaca->video_id = $request->video_id;
            $Cuaca->update();
        } else {
            File::delete("storage/" . $Cuaca->icon);
            $namaBerkas = $request->file('photo')->store('images-cuaca');
            $Cuaca->slug = $request->nama_cuaca;
            $Cuaca->nama_cuaca = $request->nama_cuaca;
            $Cuaca->icon = $namaBerkas;
            $Cuaca->deskripsi = $request->deskripsi;
            $Cuaca->video_id = $request->video_id;
            $Cuaca->update();
        }
        return redirect()->route('Admin.fitur-cuaca');
    }

    public function destroy($id){
        $Cuaca = Cuaca::findOrFail($id);
        Storage::delete($Cuaca->icon);
        $Cuaca->delete();
        return redirect()->route('Admin.fitur-cuaca');
    }
}
