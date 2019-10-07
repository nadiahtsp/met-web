@extends('layout.admin')
@section('title', 'Add Social Media')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/social-media" class="btn btn-primary">back</a>
            <br />
            <br />

            <form method="post" action="/media/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Social Media</label>
                    <input type="text" name="nama" class="form-control" placeholder="">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Link Social Media</label>
                    <input type="text" name="link" class="form-control" placeholder=" ..">
                    @if($errors->has('link'))
                    <div class="text-danger">
                        {{ $errors->first('link')}}
                    </div>
                    @endif

                </div>
                <div class="form-group">
                    <label>Logo class fontawesome</label>
                    <input type="text" name="logo" class="form-control" placeholder=" ex: fa fa-twitter">
                    @if($errors->has('logo'))
                    <div class="text-danger">
                        {{ $errors->first('logo')}}
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