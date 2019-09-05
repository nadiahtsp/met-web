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
        return view("about");
    }
    public function portfolio()
    {
        return view("portfolio");
    }
    public function service()
    {
        return view("service");
    }
    public function carrer()
    {
        return view("carrer");
    }
    public function blog()
    {
        return view("blog");
    }
}
