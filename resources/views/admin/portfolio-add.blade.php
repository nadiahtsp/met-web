@extends('layout.admin')
@section('title', 'Add Portfolio')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-header text-center">
            <strong>ADD PORTFOLIO</strong>
        </div>
        <div class="card-body">
            <a href="/portfolio-admin" class="btn btn-primary">Kembali</a>
            <br />
            <br />

            <form method="post" action="/portfolio/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Portfolio">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Description</label>
                    <textarea type="text" name="link" class="ckeditor" placeholder="Link Portfolio .."></textarea>
                    @if($errors->has('link'))
                    <div class="text-danger">
                        {{ $errors->first('link')}}
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <label>File upload</label><br>
                    <input type="file" name="gambar" class="form-control">
                    <div class="input-group col-xs-12">
                        </span>
                    </div>
                </div> 


                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Simpan">
                </div>

            </form>

        </div>
    </div>
</div>
@endsection