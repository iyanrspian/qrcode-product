<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Print - Data Barang</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <center>
        <h3 class="mb-3">Detail Data Barang</h3><br>
    </center>
    <table class="table table-bordered">
        @csrf
        <thead>
            <tr>
                <th col width="160">QR Code</th>
                <th>Nama Barang</th>
                <th col width="20">Qty</th>
                <th col width="40">Harga</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{!! DNS2D::getBarcodeHTML($brg->kode_brg, "QRCODE") !!}</td>
                <td>{{ $brg->nama_brg }}</td>
                <td class="text-center">{{ $brg->qty }}</td>
                <td class="text-right">{{ $brg->harga }}</td>
            </tr>
        </tbody>
    </table>
    <div class="float-right">
        Total : Rp. {{ $brg->qty*$brg->harga }}
    </div>
</body>
</html>