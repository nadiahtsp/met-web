@extends('layout.admin')
@section('title', 'Profile MET')
@section('content')
<div class="content-wrapper">
    <div class="row">
        <div class="container">

            <h4 class="card-title" style="text-align: center; font-size: 25px;margin-top: 20px;">Profile MET</h4>
            <p class="card-description">
            </p>

            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('/general/updateProfile')}}/{{$profile[1]->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}

                                <div class="form-group">
                                    <label for="exampleInputName1" style="margin-bottom:20px;">Head Office</label><br>
                                    <label>Address</label>
                                    <textarea style="height:100px;" type="text" class="form-control" id="exampleInputName1" name="title">{{$profile[1]->title}}</textarea>
                                    <label>District & Sub-District</label>   
                                    <input type="text" class="form-control" rows="2" id="exampleInputName1" name="content" value="{{$profile[1]->content}}">
                                    <label>City & Postal Code</label>   
                                    <input type="text" class="form-control" rows="2" id="exampleInputName1" name="additional" value="{{$profile[1]->additional}}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('/general/updateProfile')}}/{{$profile[2]->id}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleTextarea1">Branch Office</label>
                                    <br>
                                    <label>Address</label>
                                    <textarea style="height:100px;" type="text" class="form-control" id="exampleInputName1" name="title">{{$profile[2]->title}}</textarea>
                                    <label>District & Sub-District</label>   
                                    <input type="text" class="form-control" rows="2" id="exampleInputName1" name="content" value="{{$profile[2]->content}}">
                                    <label>City & Postal Code</label>   
                                    <input type="text" class="form-control" rows="2" id="exampleInputName1" name="additional" value="{{$profile[2]->additional}}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('/general/updateProfile')}}/{{$profile[4]->id}}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleTextarea1">Email</label>

                                    <input type="text" class="form-control" rows="2" id="exampleInputName1" name="content" value="{{$profile[4]->content}}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('/general/updateProfile')}}/{{$profile[3]->id}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label for="exampleTextarea1">No-Telf</label>

                                    <input type="text" class="form-control" rows="2" id="exampleInputName1" name="content" value="{{$profile[3]->content}}">
                                </div>
                                <button type="submit" class="btn btn-success mr-2">Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-md-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <form class="forms-sample" action="{{url('/general/updateProfileFoto')}}/{{$profile[0]->id}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                {{ method_field('PUT') }}
                                <div class="form-group">
                                    <label>Logo</label><br>
                                    <img src="{{ asset('assets/img/'.$profile[0]->gambar) }}" width="300px" />
                                    <input type="file" name="gambar" class="form-control">
                                    <div class="input-group col-xs-12">
                                        </span>

                                    </div>
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
@endsection