<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class MediaController extends Controller
{
    public function update(Request $request)
    {

        $media = \App\Media::find($request->id);
        $media->nama = $request->nama;
        $media->link = $request->link;
        $media->logo = $request->logo;
        $media->save();
        Session::flash('update','Updated Success');
        return redirect('/social-media');
    }
    public function delete($id)
    {
        $media = \App\Media::find($id);
        $media->delete();
        Session::flash('delete','Deleted Success');
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
        Session::flash('add','Added Success');
        return redirect('/social-media');
    }
}
