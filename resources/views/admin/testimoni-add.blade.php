@extends('layout.admin')
@section('title', 'Add Testimony')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>ADD TESTIMONY</strong>
        </div>
        <div class="card-body">
            <a href="/testimoni" class="btn btn-primary">Kembali</a>
            <br />
            <br />

            <form method="post" action="/testimoni/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="nama" class="form-control" placeholder="Portfolio">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Employement</label>
                    <input type="text" name="position" class="form-control" placeholder=" ..">
                    @if($errors->has('position'))
                    <div class="text-danger">
                        {{ $errors->first('position')}}
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <label>Testimony</label>
                    <textarea type="text" name="testimoni" class="form-control" placeholder=" .."> </textarea>
                    @if($errors->has('testimoni'))
                    <div class="text-danger">
                        {{ $errors->first('testimoni')}}
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