@extends('layout.admin')
@section('title', 'Add Service')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/service-admin" class="btn btn-primary">back</a>
            <br />
            <br />

            <form method="post" action="/service/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Service</label>
                    <input type="text" name="nama" class="form-control" placeholder="">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Description</label>
                    <input type="text" name="deskripsi" class="form-control" placeholder=" ..">
                    @if($errors->has('deskripsi'))
                    <div class="text-danger">
                        {{ $errors->first('deskripsi')}}
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>
@endsection