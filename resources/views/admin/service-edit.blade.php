@extends('layout.admin')
@section('title', 'Edit Service')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="card-body">
                <a href="/service-admin" class="btn btn-primary">Back</a>
                <br />
                <br />
                <div class="row justify-content-center">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Pillar</h4>
                                <p class="card-description">
                                </p>
                                <form class="forms-sample" action="/service/update/{{ $service->id }}" method="post">
                                    {{ csrf_field() }}
                                    {{ method_field('PUT') }}
                                    <div class="form-group">
                                        <label for="exampleInputName1">Name Pillar</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="nama" value="{{ $service->nama }}">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputName1">Description</label>
                                        <input type="text" class="form-control" id="exampleInputName1" name="deskripsi" value="{{ $service->deskripsi }}">
                                    </div>
                                    <button type="submit" class="btn btn-success mr-2">Submit</button>
                                    
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