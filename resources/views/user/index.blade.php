@extends('layouts.template')

@section('title')
Data User
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
            @if(Request::get('keyword'))
                <a href="{{ route('user.index') }}" class="btn btn-success btn-sm mb-2">Back</a>
            @else
                <a href="{{ route('user.create') }}" class="btn btn-primary btn-sm mb-2">Tambah</a>
            @endif
                <form action="{{ route('user.index') }}" method="GET">
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
                    <h2 class="text-uppercase mb-3">Daftar Data User</h2>
                    <div>
                    @if(Request::get('keyword'))
                        <div class="alert alert-success">
                            Hasil pencarian User dengan keyword :<b> {{ Request::get('keyword')}}</b>
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
                                        Nama
                                    </th>
                                    <th scope="col">
                                        Username
                                    </th>
                                    <th scope="col">
                                        Email
                                    </th>
                                    <th scope="col">
                                        Level
                                    </th>
                                    <th scop="col">
                                        Action
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="list">
                                @foreach($user as $u)
                                <tr>
                                    <td>
                                        {{ $loop->iteration + ($user->perpage() * ($user->currentPage() - 1) ) }}
                                    </td>
                                    <th scope="row" class="name">
                                        {{ $u->name }}
                                    </th>
                                    <td class="budget">
                                        {{ $u->username}}
                                    </td>
                                    <td class="status">
                                        {{ $u->email }}
                                    </td>
                                    <td>
                                        {{ $u->level }}
                                    </td>
                                    <td class="completion">
                                        <form action="{{ route('user.destroy', [$u->id]) }}" method="post" onsubmit="return confirm('Yakin?')" >
                                        <a href="{{ route('user.edit', [$u->id]) }}" class="btn btn-sm btn-primary">Edit</a>
                                            @csrf
                                            {{ method_field('DELETE') }}
                                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                            <a href="{{ route('user.show', [$u->id]) }}" class="btn btn-sm btn-info">Detail</a>
                                        </form>
                                    </td>

                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $user->appends(Request::all())->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
