@extends('layouts.template')

@section('title')
Tambah Data - User
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('user.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama" class="col-sm-2 control-label">Nama</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}">
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
                        <label for="email" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-6">
                            <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Password</label>
                        <div class="col-sm-6">
                            <input type="password" class="form-control" id="password" name="password" value="">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="password" class="col-sm-2 control-label">Level</label>
                        <div class="col-sm-6">
                            <select name="level" id="level" class="form-control">
                                <option value="admin">Administrator</option>
                                <option value="staff">Staff</option>
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
