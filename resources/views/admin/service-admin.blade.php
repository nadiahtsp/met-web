@extends('layout.admin')
@section('title', 'Services')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
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
                                            <a href="/service/hapus/{{ $s->id }}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
                                        </div>
                                        <div class="col-md-2">

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