<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Session;

use Illuminate\Http\Request;

class CareerController extends Controller
{
    public function update(Request $request)
    {

        $career = \App\Career::find($request->id);
        $career->nama = $request->nama;
        $career->deskripsi = $request->deskripsi;
        $career->save();
        Session::flash('update','Updated Success');
        return redirect()->back();

    }
    public function delete($id)
    {
        $career = \App\Career::find($id);
        $career->delete();
        Session::flash('delete','Deleted Success');
        return redirect('/career-admin');
    }
    public function updatefoto(Request $request)
    {

        $career = \App\Career::find($request->id);

        $file = $request->file('gambar');

        $career->gambar = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->gambar->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->gambar->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->gambar->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName());
        // dd($tagline);
        $career->save();
        Session::flash('update_foto','Updated Photo Success');
        return redirect()->back();
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'deskripsi' => 'required',
            'gambar' => 'required'
        ]);
        // dd($request);
        \App\Career::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi,
            'gambar' => $request->gambar
        ]);
        Session::flash('add','Added Success');
        return redirect('/career-admin');
    }
}
