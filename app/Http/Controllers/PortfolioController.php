<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function update(Request $request)
    {

        $portfolio = \App\Portfolio::find($request->id);
        $portfolio->nama = $request->nama;
        $portfolio->link = $request->link;
        $portfolio->save();
        return redirect('/portfolio-admin');
    }
    public function delete($id)
    {
        $portfolio = \App\Portfolio::find($id);
        $portfolio->delete();
        return redirect('/portfolio-admin');
    }
    public function updatefoto(Request $request)
    {

        $portfolio = \App\Portfolio::find($request->id);

        $file = $request->file('gambar');

        $portfolio->gambar = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->gambar->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->gambar->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->gambar->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName());
        // dd($tagline);
        $portfolio->save();
        return redirect('/portfolio-admin');
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'link' => 'required',
            'gambar' => 'required'
        ]);
        // dd($request);
        \App\Portfolio::create([
            'nama' => $request->nama,
            'link' => $request->link,
            'gambar' => $request->gambar
        ]);
        return redirect('/portfolio-admin');
    }
}
