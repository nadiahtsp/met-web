@extends('layout.admin')
@section('title', 'Portfolio Edit Photo')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
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