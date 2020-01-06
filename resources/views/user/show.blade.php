@extends('layouts.template')

@section('title')
Data User
@endsection

@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <a href="{{ route('user.index') }}" class="btn btn-sm btn-info mb-2">Back</a>
                <div class="table-responsive">
                    <h2 class="text-uppercase mb-3">Daftar Data User</h2>
                    <div>

                        <table class="table align-items-center">
                            <tr>
                                <td>Username</td>
                                <td>:</td>
                                <td>{{ $user->username }}</td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>:</td>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td>:</td>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <td>Level</td>
                                <td>:</td>
                                <td>{{ $user->level }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
