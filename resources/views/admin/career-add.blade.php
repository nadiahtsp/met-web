@extends('layout.admin')
@section('title', 'Add Career')
@section('content')
<div class="container">
    <div class="card mt-5">
        <div class="card-body">
            <a href="/portfolio-admin" class="btn btn-primary">Back</a>
            <br />
            <br />

            <form method="post" action="/career/store">

                {{ csrf_field() }}

                <div class="form-group">
                    <label>Job</label>
                    <input type="text" name="nama" class="form-control" placeholder="Job">

                    @if($errors->has('nama'))
                    <div class="text-danger">
                        {{ $errors->first('nama')}}
                    </div>
                    @endif

                </div>

                <div class="form-group">
                    <label>Requirment</label>
                    <textarea type="text" class="ckeditor" id="ckedtor" name="deskripsi" class="form-control" placeholder="Description Job .."> </textarea> 
                    @if($errors->has('deskripsi'))
                    <div class="text-danger">
                        {{ $errors->first('deskripsi')}}
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