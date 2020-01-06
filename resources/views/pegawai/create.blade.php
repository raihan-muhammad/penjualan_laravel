@extends('layouts.template')

@section('title')
Tambah Data - Pegawai
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('pegawai.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_pegawai" class="col-sm-2 control-label">Nama Pegawai</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ old('nama_pegawai') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="username" class="col-sm-2 control-label">Username</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="username" name="username"
                                value="{{ old('username') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Jenis Kelamin</label>
                        <div class="col-sm-6">
                            <select name="jk" id="jk" class="form-control">
                                <option value="PRIA">Pria</option>
                                <option value="WANITA">Wanita</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat" class="col-sm-2 control-label">Alamat</label>
                        <div class="col-sm-6">
                            <textarea name="alamat" id="" cols="30" rows="10" id="alamat" class="form-control">
                                {{ old('alamat') }}
                            </textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="is_aktif" class="col-sm-2 control-label">Status</label>
                        <div class="col-sm-6">
                            <select name="is_aktif" id="is_aktif" class="form-control">
                                <option value="1">Aktif</option>
                                <option value="0">Tidak Aktif</option>
                            </select>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-sm btn-info">Save</button>
                        </div>
                    </div>
            </div>
            
            </form>
        </div>
    </div>
</div>
</div>
@endsection
