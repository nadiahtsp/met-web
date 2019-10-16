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
        $home = General::whereIn('id', [1, 2])->get();
        $testimony = Testimoni::all();
        $portfolio = Portfolio::all();
        $service = \App\Service::all();
        // dd($tagline);
        return view("index", [
            'home' => $home,
            'testimony' => $testimony,
            'portfolio' => $portfolio,
            'service' => $service
        ]);
       
        
    }
    public function about()
    {
        $history = \App\General::whereIn('id', [3])->get();
        $client = \App\Client::all();
        $pilar = \App\Pilar::all();
        return view('pages.about', [
            'history' => $history,
            'client' => $client,
            'pilar' => $pilar
        ]);
    }
    public function portfolio()
    {
        $portfolio = Portfolio::all();
       
        return view('pages.portfolio', [
            'portfolio' => $portfolio
        ]);
    }
    public function service()

    {
        $service = \App\Service::all();

        return view("pages.service",[  
            'service' => $service
            ]);
    }
    public function carrer()
    {
        $career = \App\Career::all();
        return view('pages.carrer', [
            'career' => $career,
          
        ]);
    }
    public function blog()
    {
        return view("pages.blog");
    }
}
