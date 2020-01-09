@extends('layouts.template')

@section('title')
Edit Data - Kategori
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('kategori.update', [$kategori->kd_kategori]) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nama_kategori" class="col-sm-2 control-label">Nama Kategori</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_kategori" name="nama_kategori" value="{{ $kategori->kategori }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="gambar_kategori" class="col-sm-2 control-label"></label>
                        <div class="col-sm-6">
                            <img src="{{ asset('uploads/'.$kategori->gambar_kategori) }}" alt="Gambar Produk" class="img-thumbnail" width="100px">
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
                            <button type="submit" class="btn btn-sm btn-info">Update</button>
                        </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
