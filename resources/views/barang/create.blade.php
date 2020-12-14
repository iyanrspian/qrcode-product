@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h1><strong>Add Data Barang</strong></h1><br>
            </div>
        </div>
    </div>
    <form action="{{ route('store') }}" class="form-group" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Nama</label>
            <div class="col-sm">
                <input type="text" class="form-control form-control" name="nama_brg" id="" placeholder="Misal: 'Sunlight'">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Qty</label>
            <div class="col-sm">
                <input type="text" class="form-control form-control" name="qty" id="" placeholder="Misal: '3'">
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Harga</label>
            <div class="col-sm">
                <input type="text" class="form-control form-control" name="harga" id="" placeholder="Misal: '2500'">
            </div>
        </div>
        <div class="float-right">
            <a href="{{ route('index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
@endsection