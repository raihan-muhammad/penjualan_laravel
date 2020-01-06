@extends('layouts.template')

@section('title')
Data Pegawai
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(Request::get('keyword'))
                <a href="{{ route('pegawai.index') }}" class="btn btn-success btn-sm mb-2">Back</a>
            @else
                <a href="{{ route('pegawai.create') }}" class="btn btn-primary btn-sm mb-2">Tambah</a>
            @endif
                <form action="{{ route('pegawai.index') }}" method="GET">
                    <div class="row">
                        <div class="col-md-4 col-12">
                            <div class="form-group">
                                <div class="input-group input-group-alternative mb-4">
                                    <input class="form-control" placeholder="Cari" type="text" name="keyword" value="{{ Request::get('keyword') }}">
                                    <div class="input-group-append">
                                        <span class="input-group-text"><i class="ni ni-zoom-split-in"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        <div class="col-md-1">
                            <button type="submit" class="btn btn-info mt-1">Cari</button>
                        </div>
                    </div>
                </form>
                <div class="table-responsive">
                    <h2 class="text-uppercase mb-3">Daftar Data Pegawai</h2>
                    <div>
                    @if(Request::get('keyword'))
                        <div class="alert alert-success">
                            Hasil pencarian Pegawai dengan keyword :<b> {{ Request::get('keyword')}}</b>
                        </div>
                    @endif

                    @include('alert.success')
                        <table class="table align-items-center">
                            <thead class="thead-light">
                                <tr>
                                    <th scope="col">
                                        No
                                    </th>
                                    <th scope="col">
                                        Nama Pegawai
                                    </th>
                                    <th scope="col">
                                        Username
                                    </th>
                                    <th scope="col">
                                        Jenis Kelamin
                                    </th>
                                    <th scope="col">
                                        Alamat
                                    </th>
                                    <th scope="col">
                                        Status
                                    </th>
                                    <th scope="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($pegawai as $u)
                                <tr>
                                    <td>
                                        {{ $loop->iteration + ($pegawai->perpage() * ($pegawai->currentPage() - 1) ) }}
                                    </td>
                                    <th scope="row" class="name">
                                        {{ $u->nama_pegawai }}
                                    </th>
                                    <td class="budget">
                                        {{ $u->username}}
                                    </td>
                                    <td class="status">
                                        {{ $u->jk }}
                                    </td>
                                    <td>
                                        {{ $u->alamat }}
                                    </td>
                                    <td>
                                        @if($u->is_aktif == 1) Aktif @else Tidak Aktif @endif
                                    </td>
                                    <td class="completion">
                                        <form action="{{ route('pegawai.destroy', [$u->username]) }}" method="post" onsubmit="return confirm('Yakin?')" >
                                        <a href="{{ route('pegawai.edit', [$u->username]) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $pegawai->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
