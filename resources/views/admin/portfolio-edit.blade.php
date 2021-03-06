@extends('layout.admin')
@section('title', 'Edit Portfolio')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        @if($message=Session::get('update'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">Edit Portfolio</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="/portfolio/update/{{ $portfolio->id }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputName1">Portfolio</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $portfolio->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Description</label>
                                    <textarea type="text" class="ckeditor" id="exampleInputName1" name="link">{{ $portfolio->link }}</textarea>
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
                            <h4 class="card-title">Portfolio Edit Photo</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="/portfolio/updatefoto/{{ $portfolio->id }}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT')}}
                                <div class="form-group">
                                    <label>File upload</label><br>
                                    <img src="{{ asset('assets/img/'.$portfolio->gambar) }}" width="300px" />
                                    <input type="file" name="gambar" class="form-control">
                                    <div class="input-group col-xs-12">
                                        </span>
                                    </div>
                                </div>

                                <!-- <div class="form-group">
                                <label for="exampleTextarea1">Textarea</label>
                                <textarea class="form-control" id="exampleTextarea1" rows="2"></textarea>
                            </div> -->
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