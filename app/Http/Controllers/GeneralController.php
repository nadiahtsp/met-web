<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Model;

class GeneralController extends Controller
{
    public function index()
    {
        $general = General::all();
        return view('/', ['general' => $general]);
    }

    public function update(Request $request)
    {
        $tagline = \App\General::find($request->id);
        $tagline->title = $request->title;
        $tagline->content = $request->content;
        // dd($tagline);
        $tagline->save();
        Session::flash('update','Updated Success');
        return redirect('/home');
    }

    public function updateFoto(Request $request)
    {
        $tagline = \App\General::find($request->id);

        $file = $request->file('gambar');

        $tagline->gambar = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->gambar->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->gambar->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->gambar->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName());
        // dd($tagline);
        $tagline->save();
        Session::flash('update_foto','Updated Photo Success');
        return redirect('/home');
    }

    public function updateAbout(Request $request)
    {
        $history = \App\General::find($request->id);
        $history->title = $request->title;
        $history->content = $request->content;
        $history->save();
        // dd($tagline);
        Session::flash('update_about','Updated Success');
        return redirect('/about-admin');
    }

    public function updateAboutFoto(Request $request)
    {
        $history = \App\General::find($request->id);

        $file = $request->file('gambar');
        $history->gambar = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->gambar->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->gambar->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->gambar->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName());
        $history->save();
        // dd($tagline);
        Session::flash('update_about_foto','Updated Photo Success');
        return redirect('/about-admin');
    }

    public function updateProfile(Request $request)
    {
        $profile = \App\General::find($request->id);
        $profile->title = $request->title;
        $profile->content = $request->content;
        $profile->additional = $request->additional;
        $profile->save();
        // dd($tagline);
        Session::flash('update_profil','Updated Success');
        return redirect('/profile-met');
    }

    public function updateProfileFoto(Request $request)
    {
        $profile = \App\General::find($request->id);

        $file = $request->file('gambar');
        $profile->gambar = $file->getClientOriginalName();
        echo '<br>';
        echo 'File Real Path: ' . $request->gambar->getRealPath();
        echo '<br>';
        echo 'File Size: ' . $request->gambar->getSize();
        echo '<br>';
        echo 'File Mime Type: ' . $request->gambar->getMimeType();
        $tujuan_upload = 'assets/img';
        $request->gambar->move($tujuan_upload, $request->gambar->getClientOriginalName());
        $profile->save();
        // dd($tagline);
        Session::flash('update_profil_foto','Updated Success');
        return redirect('/profile-met');
    }
}
