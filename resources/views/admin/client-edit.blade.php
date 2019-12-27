@extends('layout.admin')
@section('title', 'Edit Client')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            @if($message=Session::get('update'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
            @endif
            <div class="card-body">
                <a href="/client" class="btn btn-primary">Back</a>
                <br />
                <br />
                <div class="row justify-content-center">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Client</h4>
                                <p class="card-description">
                                </p>
                                <form class="forms-sample" action="/client/update/{{ $client->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name Client</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $client->nama }}">
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
                        @if($message=Session::get('update_foto'))
            <div class="alert alert-success alert-block">
                <button type="button" class="close" data-dismiss="alert">x</button>
                <strong>{{$message}}</strong>
            </div>
            @endif
                            <div class="card-body">
                                <h4 class="card-title">Client Edit Photo</h4>
                                <p class="card-description">
                                </p>
                                <form class="forms-sample" action="/client/updatefoto/{{ $client->id }}" method="post" enctype="multipart/form-data">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <label>File upload</label><br>
                                        <img src="{{ asset('assets/img/'.$client->gambar) }}" width="300px" />
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
</div>
@endsection