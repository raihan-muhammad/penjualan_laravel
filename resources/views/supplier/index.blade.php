@extends('layouts.template')

@section('title')
Data Supplier
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(Request::get('keyword'))
                <a href="{{ route('supplier.index') }}" class="btn btn-success btn-sm mb-2">Back</a>
            @else
                <a href="{{ route('supplier.create') }}" class="btn btn-primary btn-sm mb-2">Tambah</a>
            @endif
                <form action="{{ route('supplier.index') }}" method="GET">
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
                    <h2 class="text-uppercase mb-3">Daftar Data Supplier</h2>
                    <div>
                    @if(Request::get('keyword'))
                        <div class="alert alert-success">
                            Hasil pencarian Supplier dengan keyword :<b> {{ Request::get('keyword')}}</b>
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
                                        Nama Supplier
                                    </th>
                                    <th scope="col">
                                        Alamat Supplier
                                    </th>
                                    <th scop="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($supplier as $u)
                                <tr>
                                    <td>
                                        {{ $loop->iteration + ($supplier->perpage() * ($supplier->currentPage() - 1) ) }}
                                    </td>
                                    <th scope="row" class="name">
                                        {{ $u->nama_supplier }}
                                    </th>
                                    <td class="budget">
                                        {{ $u->alamat_supplier}}
                                    </td>
                                    <td class="completion">
                                        <form action="{{ route('supplier.destroy', [$u->kd_supplier]) }}" method="post" onsubmit="return confirm('Yakin?')" >
                                        @csrf
                                        <a href="{{ route('supplier.edit', [$u->kd_supplier]) }}" class="btn btn-sm btn-primary">Edit</a>
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $supplier->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
