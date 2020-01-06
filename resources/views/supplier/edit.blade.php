@extends('layouts.template')

@section('title')
Edit Data - Supplier
@endsection


@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            @include('alert.error')
            <div class="card-body">
                <form action="{{ route('supplier.update', [$supplier->kd_supplier]) }}" method="POST">
                    @csrf
                    {{ method_field('PUT') }}
                    <div class="form-group">
                        <label for="nama_supplier" class="col-sm-2 control-label">Nama Supplier</label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="nama_supplier" name="nama_supplier" value="{{ $supplier->nama_supplier }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="alamat_supplier" class="col-sm-2 control-label">Alamat Supplier</label>
                        <div class="col-sm-6">
                            <textarea type="text" class="form-control" id="alamat_supplier" name="alamat_supplier"
                            value=""> {{ $supplier->alamat_supplier }} </textarea>
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
