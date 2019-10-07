@extends('layout.admin')
@section('title', 'Edit Job')
@section('content')

<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <a href="/career-admin" class="btn btn-primary">Back</a>
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <h4 class="card-title">Edit Job</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="/career/update/{{ $career->id }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputName1">Job</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $career->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Requirment</label>
                                    <textarea type="text" class="ckeditor" id="ckedtor" name="deskripsi">{{ $career->deskripsi }}</textarea>
                                </div>

                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">

                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="/career/updatefoto/{{ $career->id }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT')}}
                                <div class="form-group">
                                    <label>File upload</label><br>
                                    <img src="{{ asset('assets/img/'.$career->gambar) }}" width="300px" />
                                    <input type="file" name="gambar" class="form-control">
                                    <div class="input-group col-xs-12">
                                        </span>
                                    </div>
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