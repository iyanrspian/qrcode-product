@extends('layouts.master')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="text-center">
                <h1><strong>Detail Data Barang</strong></h1><br>
            </div>
        </div>
    </div>
    <form action="#" class="form-group" method="post">
        @csrf
        <div class="form-group row">
            <label class="col-sm-1 col-form-label">Barcode</label>
            <div class="col-sm form-grup">
                {!! DNS1D::getBarcodeHTML($brg->kode_brg, "C128") !!}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1">Nama</label>
            <div class="col-sm form-grup">
                {{ $brg->nama_brg }}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1">Qty</label>
            <div class="col-sm form-grup">
                {{ $brg->qty }}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1">Harga</label>
            <div class="col-sm form-grup">
                {{ $brg->harga }}
            </div>
        </div>
        <div class="form-group row">
            <label class="col-sm-1">Total</label>
            <div class="col-sm form-grup">
                Rp. {{ $brg->qty*$brg->harga }}
            </div>
        </div>
        <div class="float-left">
            <a href="{{ route('index') }}" class="btn btn-secondary"><i class="fas fa-angle-left"></i>&nbsp;&nbsp;Back</a>
            <a href="{{ route('print_barcode', $brg->id) }}" target="_blank" class="btn btn-primary"><i class="fas fa-print"></i>&nbsp;&nbsp;Print</a>
        </div>
    </form>
@endsection