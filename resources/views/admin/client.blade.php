@extends('layout.admin')
@section('title', 'Client')
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
        @endif
        <div class="card-body">
            <a href="/client-add" class="btn btn-success"><i class="fa fa-eye">Add Client</i></a>

            <div class="row" style="margin-top:20px;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead style="text-align:center">

                            <tr>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($client as $c)
                            <tr>
                                <td class="py-1" style="padding:40px; width:100px;">
                                    <img src="{{ asset('assets/img/'.$c->gambar) }}" style="width: 150px;height: inherit;" />
                                </td>
                                <td style="text-align: center;">
                                    {{ $c->nama }}
                                </td>
                                <td style="text-align: center;">
                                    <div class="row">
                                        <div class="col-md-2">

                                        </div>
                                        <div class="col-md-4 button-form">
                                            <a href="/client-edit/{{ $c->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                        </div>
                                        <!-- <div class="col-md-4 button-form">
                                                <a href="/client-edit-photo/{{ $c->id }}" class="btn btn-inverse-dark btn-fw"><i class="fa fa-eye">Change Photo</i></a>
                                            </div> -->
                                        <div class="col-md-4">
                                            <a data-toggle="modal" data-target="#modal-trash{{$c->id}}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
                                        </div>
                                        <div class="col-md-2">

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <!-- Modal -->
                            <div class="modal fade" id="modal-trash{{$c->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Confirmation Delete Content</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Do you want to delete {{$c->nama}} ?
                                        </div>
                                        <div class="modal-footer">
                                            <a data-dismiss="modal" class="btn btn-secondary">No</a>
                                            <a href="/client/hapus/{{ $c->id }}" class="btn btn-danger">Yes</a>
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

        @endsection