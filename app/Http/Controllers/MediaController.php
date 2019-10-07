<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MediaController extends Controller
{
    public function update(Request $request)
    {

        $media = \App\Media::find($request->id);
        $media->nama = $request->nama;
        $media->link = $request->link;
        $media->logo = $request->logo;
        $media->save();
        return redirect('/social-media');
    }
    public function delete($id)
    {
        $media = \App\Media::find($id);
        $media->delete();
        return redirect('/social-media');
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'link' => 'required',
            'logo' => 'required',
        ]);
        // dd($request);
        \App\Media::create([
            'nama' => $request->nama,
            'link' => $request->link,
            'logo' => $request->logo
        ]);

        return redirect('/social-media');
    }
}
