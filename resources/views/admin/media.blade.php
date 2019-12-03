@extends('layout.admin')
@section('title', 'Media Sosial')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/fontAwesome.css')}} ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/media-add" class="btn btn-success"><i class="fa fa-eye">Add Media Social</i></a>

            <div class="row" style="margin-top:20px;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Link Social Media
                                </th>
                                <th>
                                    logo class fontawesome
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($media as $m)
                            <tr>
                                <td style="text-align: center;">
                                    {{ $m->nama }}
                                </td>
                                <td style="text-align: center;">
                                    {{ $m->link }}
                                </td>
                                <td style="text-align: center;">
                                <i class="{{ $m->logo}}"> </i>   
                                </td>
                                <td style="text-align: center;">
                                    <div class="row">
                                        <div class="col-md-4 button-form">
                                            <a href="/media-edit/{{ $m->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="/media/hapus/{{ $m->id }}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection