@extends('layouts.master')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h1>Data Mahasiswa</h1>
            </div>
        </div>
        <div class="col-lg-12 margin-tb mb-3">
            <div class="float-left">
                <a href="{{ route('brgexport') }}" class="btn btn-primary">Export</a>
                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal">Import</a>
            </div>
            <div class="float-right">
                <a href="{{ route('create') }}" class="btn btn-primary"><i class="fas fa-plus-square"></i>&nbsp;&nbsp;Add Barang</a>
            </div>
        </div>
    </div>
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
    <table class="table table-bordered mb-3" cellpadding=3>
        <thead>
            <tr>
                <th col width="50">No</th>
                <th col width="160">Kode Barang</th>
                <th>Nama Barang</th>
                <th col width="50">Qty</th>
                <th col width="80">Harga</th>
                <th col width="220">Info</th>
                <th col width="180">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 0; ?>
            @foreach ($brg as $barang)
            <?php $no++; ?>
            <tr>
                <td class="text-center">{{ $no }}</td>
                <td>{{ $barang->kode_brg }}</td>
                <td>{{ $barang->nama_brg }}</td>
                <td class="text-center">{{ $barang->qty }}</td>
                <td class="text-right">{{ $barang->harga }}</td>
                <td class="text-center">
                    <a href="{{ route('qrcode', $barang->id) }}" class="btn btn-sm btn-info">
                        <i class="fas fa-qrcode" style="color: white"></i>&nbsp;&nbsp;QR Code</a>
                    <a href="{{ route('barcode', $barang->id) }}" class="btn btn-sm btn-dark">
                        <i class="fas fa-barcode" style="color: white"></i>&nbsp;&nbsp;Barcode</a>
                </td>
                <td class="text-center">
                    <form action="{{ route('destroy', $barang->id) }}" method="post">
                        <a href="{{ route('edit', $barang->id) }}" class="btn btn-sm btn-success" role="button">
                            <i class="fas fa-edit"></i>&nbsp;&nbsp;Edit</a>
                        <a href="{{ route('destroy', $barang->id) }}" class="btn btn-sm btn-danger" role="button" 
                            onclick="return confirm('Yakin akan menghapus {{ $barang->nama_brg }}')">
                            <i class="fas fa-trash"></i>&nbsp;&nbsp;Delete</a>
                        </form>                            
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div>
        {{ $brg->links() }}
    </div>
    <!-- Modal -->
    <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('brgimport') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="modal-body">
                    <div class="form-grup">
                        <input type="file" name="file" required="required">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Import</button>
                </div>
            </form>
        </div>
        </div>
    </div>
@endsection