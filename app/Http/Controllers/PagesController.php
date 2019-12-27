<?php

namespace App\Http\Controllers;

use App\General;
use App\Testimoni;
use App\Portfolio;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $profil = \App\General::whereIn('id', [4, 5, 6, 7, 8])->get();
        $home = General::whereIn('id', [1, 2])->get();
        $testimony = Testimoni::all();
        $portfolio = Portfolio::all();
        $service = \App\Service::all();
        $media = \App\Media::all();
        // dd($tagline);
        return view("index", [
            'home' => $home,
            'testimony' => $testimony,
            'portfolio' => $portfolio,
            'service' => $service,
            'profil' => $profil,
            'media' => $media
        ]);
    }
    public function about()
    {
        $profil = \App\General::whereIn('id', [4, 5, 6, 7, 8])->get();
        $history = \App\General::whereIn('id', [3])->get();
        $client = \App\Client::all();
        $pilar = \App\Pilar::all();
        $media = \App\Media::all();
        return view('pages.about', [
            'history' => $history,
            'client' => $client,
            'pilar' => $pilar,
            'profil' => $profil,
            'media' => $media
        ]);
    }
    public function portfolio()
    {
        $profil = \App\General::whereIn('id', [4, 5, 6, 7, 8])->get();
        $portfolio = Portfolio::all();
        $media = \App\Media::all();
        return view('pages.portfolio', [
            'portfolio' => $portfolio,
            'profil' => $profil,
            'media' => $media
        ]);
    }
    public function service()

    {
        $profil = \App\General::whereIn('id', [4, 5, 6, 7, 8])->get();
        $service = \App\Service::all();
        $media = \App\Media::all();
        return view("pages.service", [
            'service' => $service,
            'profil' => $profil,
            'media' => $media
        ]);
    }
    public function carrer()
    {
        $profil = \App\General::whereIn('id', [4, 5, 6, 7, 8])->get();
        $career = \App\Career::all();
        $media = \App\Media::all();
        return view('pages.carrer', [
            'career' => $career,
            'profil' => $profil,
            'media' => $media
        ]);
    }
    public function portfolioPages($id)
    {
        $profil = \App\General::whereIn('id', [4, 5, 6, 7, 8])->get();
        $portfolio_page = \App\Portfolio::find($id);
        $media = \App\Media::all();
        return view('pages.portfolio_page', [
            'portfolio_page' => $portfolio_page,
            'profil' => $profil,
            'media' => $media
        ]);
    }
    public function blog()
    {
        return view("pages.blog");
    }
}
