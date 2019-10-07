<?php

namespace App\Http\Controllers;

use App\General;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    public function home()
    {
        $tagline = \App\General::whereIn('id', [1, 2])->get();
        // dd($tagline);
        return view('admin.home', [
            'tagline' => $tagline
        ]);
    }
    public function about()
    {
        $history = \App\General::whereIn('id', [3])->get();
        // dd($tagline);
        return view('admin.about-admin', [
            'history' => $history
        ]);
    }
    public function portfolio()
    {
        $portfolio = \App\Portfolio::all();
        return view('admin.portfolio-admin', [
            'portfolio' => $portfolio
        ]);
    }
    public function portfolioedit($id)
    {
        $portfolio = \App\Portfolio::find($id);
        return view('admin.portfolio-edit', [
            'portfolio' => $portfolio
        ]);
    }
    public function portfolioeditfoto($id)
    {
        $portfolio = \App\Portfolio::find($id);
        return view('admin.portfolio-editfoto', [
            'portfolio' => $portfolio
        ]);
    }
    public function portfolioadd()
    {
        return view('admin.portfolio-add');
    }
    public function services()
    {
        return view('admin.services');
    }

    //career
    public function career()
    {
        $career = \App\Career::all();
        return view('admin.career-admin', [
            'career' => $career
        ]);
    }
    public function careeredit($id)
    {
        $career = \App\Career::find($id);
        
        return view('admin.career-edit', [
            'career' => $career
        ]);
    }
    public function careeradd()
    {
        return view('admin.career-add');
    }

    public function testimoni()
    {
        $testimoni = \App\Testimoni::all();
        return view('admin.testimoni', [
            'testimoni' => $testimoni
        ]);
    }
    public function testimoniedit($id)
    {
        $testimoni = \App\Testimoni::find($id);
        return view('admin.testimoni-edit', [
            'testimoni' => $testimoni
        ]);
    }
    public function testimoniadd()
    {
        return view('admin.testimoni-add');
    }

    
    public function pilar()
    {
        $pilar = \App\Pilar::all();
        return view('admin.pillar', [
            'pilar' => $pilar
        ]);
    }
    public function pilaredit($id)
    {
        $pilar = \App\Pilar::find($id);
        
        return view('admin.pillar-edit', [
            'pilar' => $pilar
        ]);
    }
    public function pilaradd()
    {
        return view('admin.pillar-add');
    }


//client
    public function client()
    {
        $client = \App\Client::all();
        return view('admin.client', [
            'client' => $client
        ]);
    }
    public function clientedit($id)
    {
        $client = \App\Client::find($id);
        
        return view('admin.client-edit', [
            'client' => $client
        ]);
    }
    public function clientadd()
    {
        return view('admin.client-add');
    }

    //service
    public function service()
    {
        $service = \App\Service::all();
        return view('admin.service-admin', [
            'service' => $service
        ]);
    }
    public function serviceedit($id)
    {
        $service = \App\Service::find($id);
        
        return view('admin.service-edit', [
            'service' => $service
        ]);
    }
    public function serviceadd()
    {
        return view('admin.service-add');
    }

    //media
    public function media()
    {
        $media = \App\Media::all();
        return view('admin.media', [
            'media' => $media
        ]);
    }
    public function mediaedit($id)
    {
        $media = \App\Media::find($id);
        return view('admin.media-edit', [
            'media' => $media
        ]);
    }
    public function mediaadd()
    {
        return view('admin.media-add');
    }

    public function profile()
    {
        $profile = \App\General::whereIn('id', [4,5,6,7,8])->get();
        // dd($tagline);
        return view('admin.profile-met', [
            'profile' => $profile
        ]);
    }
}
