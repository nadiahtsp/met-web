<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function update(Request $request)
    {

        $service = \App\Service::find($request->id);
        $service->nama = $request->nama;
        $service->deskripsi = $request->deskripsi;
        $service->save();
        return redirect('/service-admin');
    }
    public function delete($id)
    {
        $service = \App\Service::find($id);
        $service->delete();
        return redirect('/service-admin');
    }
    public function updatefoto(Request $request)
    {

        $service = \App\Service::find($request->id);

        $file = $request->file('gambar');

        $service->logo = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->logo->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->logo->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->logo->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->logo->move($tujuan_upload, $request->logo->getClientOriginalName());
        // dd($tagline);
        $service->save();
        return redirect()->back();
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'deskripsi' => 'required',
        ]);
        // dd($request);
        \App\Service::create([
            'nama' => $request->nama,
            'deskripsi' => $request->deskripsi 
        ]);
       
        return redirect('/service-admin');
    }
}
