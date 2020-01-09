@extends('layouts.template')

@section('title')
Tambah Data - Kategori
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="kategori" class="col-sm-2 control-label">Nama Kategori</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="kategori" name="kategori" value="{{ old('kategori') }}"> 
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gambar_kategori" class="col-sm-2 control-label">Gambar Ketegori</label>
                        <div class="col-sm-6">
                            <input type="file" id="gambar_kategori" name="gambar_kategori" class="form-control">
                        </div>
                    </div>
                    </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm btn-info">Save</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
