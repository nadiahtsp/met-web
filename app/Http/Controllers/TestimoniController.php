<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
class TestimoniController extends Controller
{
    public function update(Request $request)
    {

        $testimoni = \App\Testimoni::find($request->id);
        $testimoni->nama = $request->nama;
        $testimoni->position = $request->position;
        $testimoni->testimoni = $request->testimoni;
        $testimoni->save();
        Session::flash('update','Updated Success');
        return redirect('/testimoni');
    }
    public function delete($id)
    {
        $testimoni = \App\Testimoni::find($id);
        $testimoni->delete();
        Session::flash('delete','Deleted Success');
        return redirect('/testimoni');
    }
    public function store(Request $request)
    {

        $this->validate($request, [

            'nama' => 'required',
            'position' => 'required',
            'testimoni' => 'required'
        ]);
        // dd($request);
        \App\Testimoni::create([
            'nama' => $request->nama,
            'position' => $request->position,
            'testimoni' => $request->testimoni
        ]);
        Session::flash('add','Added Success');
        return redirect('/testimoni');
    }
}
