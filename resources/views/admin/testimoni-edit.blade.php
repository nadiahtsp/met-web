@extends('layout.admin')
@section('title', 'Edit Testimony')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Testimony</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="/testimoni/update/{{ $testimoni->id }}" method="post" >
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputName1">Name</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $testimoni->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Employement</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="position" value="{{ $testimoni->position }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Testimony</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1" name="testimoni" >{{ $testimoni->testimoni }}
                                    </textarea>
                                </div>
                                
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection