<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class ClientController extends Controller
{
    public function update(Request $request)
    {

        $client = \App\Client::find($request->id);
        $client->nama = $request->nama;
        $client->save();
        Session::flash('update','Updated Success');
        return redirect()->back();
    }
    public function delete($id)
    {
        $client = \App\Client::find($id);
        $client->delete();
        Session::flash('delete','Deleted Success');
        return redirect('/client');
    }
    public function updatefoto(Request $request)
    {

        $client = \App\Client::find($request->id);

        $file = $request->file('gambar');

        $client->gambar = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->gambar->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->gambar->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->gambar->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName());
        // dd($tagline);
        $client->save();
        Session::flash('update_foto','Updated Photo Success');
        return redirect()->back();
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'gambar' => 'required'
        ]);
        // dd($request);
        \App\Client::create([
            'nama' => $request->nama,
            'gambar' => $request->gambar
        ]);
        Session::flash('add','Added Success');
        return redirect('/client');
    }
}
