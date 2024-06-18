<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Langit;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class FiturLangitController extends Controller
{
    public function index(){
        $dataLangitAll = Langit::All();
        return view('page.Admin.fitur-langit', compact('dataLangitAll'));
    }

    public function store(Request $request){
        $validator = Validator::make($request->all(), [
            'list_langit' => 'required',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
            'video_id' => 'required',
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        if ($request->file('photo')) {
            $namaBerkas = $request->file('photo')->store('images-langit');
            $Langit = new Langit();
            $Langit->slug = $request->input('list_langit');
            $Langit->list_langit = $request->input('list_langit');
            $Langit->icon = $namaBerkas;
            $Langit->deskripsi = $request->input('deskripsi');
            $Langit->video_id = $request->input('video_id');
            $Langit->save();
        }

        return redirect()->route('Admin.fitur-langit');
    }

    public function byId($id){
        $data = Langit::where('id', $id)->first();
        return response()->json(['result' => $data]);
    }

    public function update(Request $request, $id){
        $request->validate([
            'list_langit' => 'required',
            'deskripsi' => 'required|string',
            'photo' => 'image|file|max:2000',
            'video_id' => 'required',
        ]);

        $Langit = Langit::findOrFail($id);

        if ($request->file('photo') == "") {
            $Langit->slug = $request->list_langit;
            $Langit->list_langit = $request->list_langit;
            $Langit->deskripsi = $request->deskripsi;
            $Langit->video_id = $request->video_id;
            $Langit->update();
        } else {
            File::delete("storage/" . $Langit->icon);
            $namaBerkas = $request->file('photo')->store('images-langit');
            $Langit->slug = $request->list_langit;
            $Langit->list_langit = $request->list_langit;
            $Langit->icon = $namaBerkas;
            $Langit->deskripsi = $request->deskripsi;
            $Langit->video_id = $request->video_id;
            $Langit->update();
        }
        return redirect()->route('Admin.fitur-langit');
    }

    public function destroy($id){
        $Langit = Langit::findOrFail($id);
        Storage::delete($Langit->icon);
        $Langit->delete();
        return redirect()->route('Admin.fitur-langit');
    }
}
