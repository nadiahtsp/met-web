<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view("index");
    }
    public function about()
    {
        return view("pages.about");
    }
    public function portfolio()
    {
        return view("pages.portfolio");
    }
    public function service()
    {
        return view("pages.service");
    }
    public function carrer()
    {
        return view("pages.carrer");
    }
    public function blog()
    {
        return view("pages.blog");
    }
}
