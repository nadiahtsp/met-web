@extends('layout.admin')
@section('title', 'About Us')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        @if($message=Session::get('update_about'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                        @elseif($message=Session::get('update_about_foto'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">x</button>
                            <strong>{{$message}}</strong>
                        </div>
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">About MET</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" action="{{url('/general/updateAbout')}}/{{$history[0]->id}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="title" value="{{$history[0]->title}}">
                                </div>
                                <div class="form-group">
                                    <label for="exampleTextarea1">Content</label>

                                    <textarea style="height:100px;" type="text" class="form-control" rows="2" id="exampleInputName1" name="content">{{$history[0]->content}}</textarea>
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Save</button>

                            </form>


                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">

                                    <form class="forms-sample" action="{{url('/general/updateAboutFoto')}}/{{$history[0]->id}}" method="post" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label>File upload</label><br>
                                            <img src="{{ asset('assets/img/'.$history[0]->gambar) }}" width="300px" />
                                            <input type="file" name="gambar" class="form-control">
                                            <div class="input-group col-xs-12">
                                                </span>
                                            </div>
                                        </div>

                                        <button type="submit" class="btn btn-success mr-2">Save</button>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection