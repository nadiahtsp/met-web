@extends('layout.admin')
@section('title', 'Edit Social Media')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Edit Social Media</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="/media/update/{{ $media->id }}" method="post" >
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputName1">Social Media</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $media->nama }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Link Social Media</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="link" value="{{ $media->link }}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputName1">Logo Class Font Awesome</label>
                                    <textarea type="text" class="form-control" id="exampleInputName1" name="logo" >{{ $media->logo }}
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