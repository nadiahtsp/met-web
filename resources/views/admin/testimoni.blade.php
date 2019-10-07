@extends('layout.admin')
@section('title', 'Testimoni')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
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
                                                <a href="/testimoni/hapus/{{ $t->id }}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
                                            </div>
                                        </div>
                                    </div>
                </div>
                </td>
                </tr>
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