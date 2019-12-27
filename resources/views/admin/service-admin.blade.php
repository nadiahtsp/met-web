@extends('layout.admin')
@section('title', 'Services')
@section('content')
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
        <div class="card-body" style="margin-bottom:20px;">
            <a href="/service-add" class="btn btn-success"><i class="fa fa-eye">Add Service</i></a>

            <div class="row">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th style="text-align: center;">
                                    Services
                                </th>
                                <th style="text-align: center;">
                                    Description
                                </th>
                                <th style="text-align: center;">
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($service as $s)
                            <tr>
                                <td>
                                    {{$s->nama}}
                                </td>
                                <td style="width:450px;  white-space:unset;">
                                    {{$s->deskripsi}}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4 button-form">
                                            <a href="/service-edit/{{ $s->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a data-toggle="modal" data-target="#modal-trash{{$s->id}}" class="btn btn-outline-danger">Delete</i></a>
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-trash{{$s->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Delete Content</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to delete {{$s->nama}} ?
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" class="btn btn-secondary">No</a>
                                            <a href="/service/hapus/{{ $s->id }}" class="btn btn-danger">Yes</a>
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