@extends('layouts.template')

@section('title')
Data Kategori
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(Request::get('keyword'))
                <a href="{{ route('kategori.index') }}" class="btn btn-success btn-sm mb-2">Back</a>
            @else
                <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm mb-2">Tambah</a>
            @endif
                <form action="{{ route('kategori.index') }}" method="GET">
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
                    <h2 class="text-uppercase mb-3">Daftar Data Kategori</h2>
                    <div>
                    @if(Request::get('keyword'))
                        <div class="alert alert-success">
                            Hasil pencarian Kategori dengan keyword :<b> {{ Request::get('keyword')}}</b>
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
                                        Nama Kategori
                                    </th>
                                    <th scope="col">
                                        Gambar Kategori
                                    </th>
                                    <th scop="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($kategori as $u)
                                <tr>
                                    <td>
                                        {{ $loop->iteration + ($kategori->perpage() * ($kategori->currentPage() - 1) ) }}
                                    </td>
                                    <th scope="row" class="name">
                                        {{ $u->kategori }}
                                    </th>
                                    <td class="budget">
                                        <img src="{{ asset('uploads/'.$u->gambar_kategori) }}" alt="Gambar Produk" class="img-thumbnail" width="100px">
                                    </td>
                                    <td class="completion">
                                        <form action="{{ route('kategori.destroy', [$u->kd_kategori]) }}" method="post" onsubmit="return confirm('Yakin?')" >
                                        @csrf
                                        <a href="{{ route('kategori.edit', [$u->kd_kategori]) }}" class="btn btn-sm btn-primary">Edit</a>
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $kategori->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
