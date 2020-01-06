@extends('layouts.template')

@section('title')
Edit Data - Pegawai
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('pegawai.update', [$pegawai->username]) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $pegawai->nama_pegawai }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ $pegawai->username }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="jk" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-6">
                            <select name="jk" id="jk" class="form-control">
                                <option value="PRIA" @if($pegawai->jk == "PRIA") selected @endif>Pria</option>
                                <option value="WANITA" @if($pegawai->jk == "WANITA") selected @endif>Wanita</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">alamat</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $pegawai->alamat }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="is_aktif" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-6">
                            <select name="is_aktif" id="is_aktif" class="form-control">
                                <option value="1" @if($pegawai->is_aktif == 1) selected @endif>Aktif</option>
                                <option value="0" @if($pegawai->is_aktif == 0) selected @endif>Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm btn-info">Update</button>
                        </div>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection
