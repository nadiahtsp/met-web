<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class PilarController extends Controller
{
    public function update(Request $request)
    {

        $pilar = \App\Pilar::find($request->id);
        $pilar->nama = $request->nama;
        $pilar->deskripsi = $request->deskripsi;
        $pilar->save();
        Session::flash('update','Updated Success');
        return redirect('/pillar');
    }
    public function delete($id)
    {
        $pilar = \App\Pilar::find($id);
        $pilar->delete();
        Session::flash('delete','Deleted Success');
        return redirect('/pillar');
    }
    public function updatefoto(Request $request)
    {

        $pilar = \App\Pilar::find($request->id);

        $file = $request->file('gambar');

        $pilar->logo = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->logo->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->logo->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->logo->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->logo->move($tujuan_upload, $request->logo->getClientOriginalName());
        // dd($tagline);
        $pilar->save();
        return redirect()->back();
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        // dd($request);
        \App\Pilar::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi 
        ]);
        Session::flash('add','Added Success');
        return redirect('/pillar');
    }
}
