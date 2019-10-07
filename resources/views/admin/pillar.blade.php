@extends('layout.admin')
@section('title', 'pillar')
@section('content')
<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <a href="pilar-add" class="btn btn-success"><i class="fa fa-eye">Add Pillars</i></a>

            <div class="row" style="margin-top:20px;">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <th>
                                    Description
                                </th>
                                <th>
                                    Action
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($pilar as $pl)
                            <tr>
                                <td style="text-align: center;">
                                    {{ $pl->nama }}
                                </td>
                                <td style="text-align: center;">
                                    {{ $pl->deskripsi }}
                                </td>
                                <td style="text-align: center;">
                                    <div class="row">
                                        <div class="col-md-4 button-form">
                                            <a href="/pilar-edit/{{ $pl->id }}" class="btn btn-outline-primary"><i class="fa fa-eye">Edit </i></a>
                                        </div>
                                        <div class="col-md-4">
                                            <a href="/pilar/hapus/{{ $pl->id }}" class="btn btn-outline-danger"><i class="fa fa-pencil">Delete</i></a>
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