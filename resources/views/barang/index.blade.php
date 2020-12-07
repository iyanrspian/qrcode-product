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
                {{-- <a href="{{ route('mhsexport') }}" class="btn btn-primary">Export</a> --}}
                {{-- <a href="#" class="btn btn-success" data-toggle="modal" data-target="#importModal">Import</a> --}}
            </div>
            <div class="float-right">
                {{-- <a href="{{ route('print_pdf') }}" target="_blank" class="btn btn-danger">Print</a> --}}
                {{-- <a href="{{ route('create') }}" class="btn btn-primary">Add Data</a> --}}
                <a href="#" class="btn btn-primary">Tambah Barang</a>
            </div>
        </div>
    </div>
    {{-- @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif --}}
    <table class="table table-bordered mb-3" cellpadding=3>
        <thead>
            <tr>
                <th col width="50">No</th>
                <th>Kode Barang</th>
                <th>Nama Barang</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            {{-- @foreach ($mhs as $mahasiswa) --}}
            <tr>
                <td>1</td>
                <td>BRG-2001</td>
                <td>Sunlight</td>
                <td>20</td>
                <td>1500</td>
                <td>
                    {{-- <form action="{{ route('destroy', $mahasiswa->id) }}" method="post">
                        <a href="{{ route('show', $mahasiswa->id) }}" class="btn btn-info">Show</a>
                        <a href="{{ route('edit', $mahasiswa->id) }}" class="btn btn-success" 
                            role="button">Edit</a>
                        <a href="{{ route('destroy', $mahasiswa->id) }}" class="btn btn-danger" role="button" 
                            onclick="return confirm('Yakin akan menghapus {{ $mahasiswa->nama }}')">Delete</a>
                    </form> --}}
                </td>
            </tr>
            {{-- @endforeach --}}
        </tbody>
    </table>
    <div>
        {{-- {{ $mhs->links() }} --}}
    </div>
    <!-- Modal -->
    {{-- <div class="modal fade" id="importModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Import Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <form action="{{ route('mhsimport') }}" method="post" enctype="multipart/form-data">
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
    </div> --}}
@endsection