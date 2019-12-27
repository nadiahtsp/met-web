@extends('layout.admin')
@section('title', 'Testimoni')
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
        <div class="card-body">
            <a href="/testimoni-add" class="btn btn-success"><i class="fa fa-eye">Add Testimoni</i></a>

            <div class="row" style="margin-top:20px;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead style="text-align:center">

                            <tr>
                                <th>
                                    Nama
                                </th>
                                <th>
                                    Employment
                                </th>
                                <th>
                                    Testimoni
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($testimoni as $t)
                            <tr>
                                <td>
                                    {{ $t->nama }}
                                </td>
                                <td>
                                    {{ $t->position }}
                                </td>
                                <td style="width:450px;  white-space:unset;">
                                    {{ $t->testimoni }}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="row" style="text-align: center;">
                                            <div class="col-md-6 button-form">
                                                <a href="/testimoni-edit/{{ $t->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                            </div>
                                            <div class="col-md-6">
                                                <a data-toggle="modal" data-target="#modal-trash{{$t->id}}"class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
                                            </div>
                                        </div>
                                    </div>
                </div>
                </td>
                </tr>
                
                <!-- Modal -->
                <div class="modal fade" id="modal-trash{{$t->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation Delete Content</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                Do you want to delete {{$t->nama}} ?
                            </div>
                            <div class="modal-footer">
                                <a data-dismiss="modal" class="btn btn-secondary">No</a>
                                <a href="/testimoni/hapus/{{ $t->id }}" class="btn btn-danger">Yes</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!-- <tr>
                                <td class="py-1">
                                    <img src="../../images/faces-clipart/pic-1.png" alt="image" />
                                </td>
                                <td>
                                    Edward
                                </td>
                                <td>
                                    <a href="" class="btn btn-warning"><i class="fa fa-eye">Update</i></a>
                                    <a href="" class="btn btn-danger"><i class="fa fa-pencil">Delete</i></a>
                                </td> -->

                </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection