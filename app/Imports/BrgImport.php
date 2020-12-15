<?php

namespace App\Imports;

use App\Models\Barang;
use Maatwebsite\Excel\Concerns\ToModel;

class BrgImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Barang([
            'kode_brg' => $row[1],
            'nama_brg' => $row[2],
            'qty' => $row[3],
            'harga' => $row[4],
        ]);
    }
}
