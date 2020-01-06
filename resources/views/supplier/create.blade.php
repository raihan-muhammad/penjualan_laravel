@extends('layouts.template')

@section('title')
Tambah Data - Supplier
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('supplier.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama_supplier" class="col-sm-2 control-label">Nama Supplier</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ old('nama_supplier') }}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="alamat_supplier" class="col-sm-2 control-label">Alamat Supplier</label>
                        <div class="col-sm-6">
                            <textarea type="text" class="form-control" id="alamat_supplier" name="alamat_supplier"
                            value="">{{ old('alamat_supplier') }} </textarea>
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
