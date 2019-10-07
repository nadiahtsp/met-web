@extends('layout.admin')
@section('title', 'Home')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Tagline</h4>
                            <!-- <p class="card-description">
                                Sebelum: {{$tagline[1]->title}}
                            </p> -->
                            <form class="forms-sample" method="post" action="{{url('/general/update')}}/{{$tagline[1]->id}}">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <input type="text" name="title" value="{{$tagline[1]->title}}" class="form-control">
                                    <!-- <textarea class="form-control" placeholder="tagline" exampleTextarea1" rows="2"></textarea> -->
                                </div>
                                <!-- <div class="form-group">
                            <label for="exampleInputEmail3">Content</label>
                            <textarea name="editor1" class="form-control" id="exampleTextarea1"></textarea>
                            <script>
                                CKEDITOR.replace('editor1');
                            </script>-->
                                <button type="submit" class="btn btn-success mr-2">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">About Us</h4>
                            <p class="card-description">
                            </p>
                            <form class="forms-sample" method="post" action="{{url('/general/update')}}/{{$tagline[0]->id}}" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleInputName1">Title</label>
                                    <input type="text" class="form-control" id="exampleInputName1" name="title" Value="{{$tagline[0]->title }}">
                                </div>

                                <div class="form-group">
                                    <label for="exampleTextarea1">Content</label>
                                    <input class="form-control" id="exampleTextarea1" name="content" Value="{{$tagline[0]->content }}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Save</button>
                            </form>


                            <div class="col-md-12 grid-margin stretch-card">
                                <div class="card">
                                    <p class="card-description">
                                    </p>
                                    <form class="forms-sample" method="post" action="{{url('/general/updateFoto')}}/{{$tagline[0]->id}}" enctype="multipart/form-data">
                                        {{ csrf_field() }}
                                        {{ method_field('PUT') }}
                                        <div class="form-group">
                                            <label>Background</label><br>
                                            <img src="{{ asset('assets/img/'.$tagline[0]->gambar) }}" width="300px" />
                                            <input type="file" name="gambar" class="form-control" value="old(nameAttribute)">
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
            @endsection