@extends('layout.admin')
@section('title', 'Portfolio')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="/portfolio-add" class="btn btn-success"><i class="fa fa-eye">Add Portfolio</i></a>

            <div class="row" style="margin-top:20px;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead style="text-align:center">

                            <tr>
                                <th>
                                    Image
                                </th>
                                <th>
                                    Portfolio
                                </th>
                                <th>
                                    Link
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($portfolio as $p)
                            <tr>
                                <td class="py-1" style="padding:10px;">
                                    <img src="{{ asset('assets/img/'.$p->gambar) }}" />
                                </td>
                                <td>
                                    {{ $p->nama }}
                                </td>
                                <td>
                                    {{ $p->link }}
                                </td>
                                <td>
                                    <div class="row">
                                        <div class="row" style="text-align: center;}">
                                            <div class="col-md-12 button-form">
                                                <a href="/portfolio-edit/{{ $p->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                            </div>
                                            <div class="col-md-12 button-form">
                                                <a href="/portfolio-edit-photo/{{ $p->id }}" class="btn btn-inverse-dark btn-fw"><i class="fa fa-eye">Change Photo</i></a>
                                            </div>
                                            <div class="col-md-12">
                                                <a href="/portfolio/hapus/{{ $p->id }}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
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