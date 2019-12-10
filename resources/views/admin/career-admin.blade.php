@extends('layout.admin')
@section('title', 'Career')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/career-add" class="btn btn-success"><i class="fa fa-eye">Add Career</i></a>

            <div class="row" style="margin-top:20px;">

                <div class="table-responsive">
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
                    <table class="table table-striped">
                        <thead style="text-align:center">

                            <tr>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Jobs
                                </th>
                                <th>
                                    Requirment
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($career as $c)
                            <tr>
                                <td class="py-1" style="padding:10px; ">
                                    <img src="{{ asset('assets/img/'.$c->gambar) }}" />
                                </td>
                                <td>
                                    {{ $c->nama }}
                                </td>
                                <td>
                                    {!! $c->deskripsi !!}
                                </td>
                                <td>

                                    <div class="row" style="text-align: center;width:200px;  white-space:unset;}">
                                        <div class="col-md-6 button-form">
                                            <a href="/career-edit/{{ $c->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                        </div>
                                        <div class="col-md-6">
                                            <a data-toggle="modal" data-target="#modal-trash{{$c->id}}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
                                        </div>
                                    </div>

                </div>
                </td>
                </tr>
                <!-- Modal Trash -->
                <!-- Button trigger modal -->


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
                                <a href="/career/hapus/{{ $c->id }}" class="btn btn-danger">Yes</a>
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