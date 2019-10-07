@extends('layout.admin')
@section('title', 'Client')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
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
                                        <div class="col-md-4 button-form">
                                            <a href="/client-edit/{{ $c->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                        </div>
                                        <!-- <div class="col-md-4 button-form">
                                                <a href="/client-edit-photo/{{ $c->id }}" class="btn btn-inverse-dark btn-fw"><i class="fa fa-eye">Change Photo</i></a>
                                            </div> -->
                                        <div class="col-md-4">
                                            <a href="/client/hapus/{{ $c->id }}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
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

        @endsection