@extends('layout.admin')
@section('title', 'Media Sosial')
@section('content')
<link rel="stylesheet" href="{{asset('assets/css/fontAwesome.css')}} ">
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
    @if($message=Session::get('add'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
        @elseif($message=Session::get('delete'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
        @elseif($message=Session::get('update'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">x</button>
            <strong>{{$message}}</strong>
        </div>
        @endif
        <div class="card-body">
            <a href="/media-add" class="btn btn-success"><i >Add Media Social</i></a>

            <div class="row" style="margin-top:20px;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align:center;">
                                    Name
                                </th>
                                <th style="text-align:center;">
                                    Link Social Media
                                </th >
                                <th>
                                    logo class fontawesome
                                </th>
                                <th style="text-align:center;">
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
                                <td style="text-align: center; width:300px;  white-space:unset;">
                                    {{ $m->link }}
                                </td>
                                <td style="text-align: center;">
                                <i class="{{ $m->logo}}"> </i>   
                                </td>
                                <td style="text-align: center;">
                                    <div class="row" style="text-align: center;">
                                        <div class="col-md-6 button-form">
                                            <a href="/media-edit/{{ $m->id }}" class="btn btn-outline-primary"><i >Edit </i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a data-toggle="modal" data-target="#modal-trash{{$m->id}}" class="btn btn-outline-danger"><i>Delete</i></a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            
                <!-- Modal -->
                <div class="modal fade" id="modal-trash{{$m->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation Delete Content</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Do you want to delete {{$m->nama}} ?
                            </div>
                            <div class="modal-footer">
                                <a data-dismiss="modal" class="btn btn-secondary">No</a>
                                <a href="/media/hapus/{{ $m->id }}" class="btn btn-danger">Yes</a>
                            </div>
                        </div>
                    </div>
                </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection