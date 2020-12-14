@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h1><strong>Edit Data Barang</strong></h1><br>
            </div>
        </div>
    </div>
    <form action="{{ route('update', $brg->id) }}" class="form-group" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm">
                <input type="text" class="form-control" name="nama_brg" id="" value="{{ $brg->nama_brg }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Qty</label>
            <div class="col-sm">
                <input type="text" class="form-control" name="qty" id="" value="{{ $brg->qty }}">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Harga</label>
            <div class="col-sm">
                <input type="text" class="form-control" name="harga" id="" value="{{ $brg->harga }}">
            </div>
        </div>
        <div class="float-right">
            <a href="{{ route('index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
            <button class="btn btn-primary" type="submit">Update</button>
        </div>
    </form>
@endsection