<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use Illuminate\Http\Request;
use Haruncpi\LaravelIdGenerator\IdGenerator;
use Barryvdh\DomPDF\Facade as PDF;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function barcode($id)
    {
        $brg = Barang::find($id);
        return view('barang.barcode', compact('brg'));
    }

    public function qrcode($id)
    {
        $brg = Barang::find($id);
        return view('barang.qrcode', compact('brg'));
    }

    public function print_barcode($id)
    {
        $brg = Barang::find($id);
        $pdf = PDF::loadview('barang.print_barcode', ['brg'=>$brg]);
        return $pdf->stream();
    }
    
    public function print_qrcode($id)
    {
        $brg = Barang::find($id);
        $pdf = PDF::loadview('barang.print_qrcode', ['brg'=>$brg]);
        return $pdf->stream();
    }

    public function index()
    {
        // $brg = Barang::all();
        $brg = Barang::latest()->paginate(5);
        return view('barang.index', compact('brg'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_brg' => 'required',
            'qty' => 'required|integer',
            'harga' => 'required|integer'
        ]);
        
        $kode_brg = IdGenerator::generate(['table' => 'barangs', 'length' => 10, 'prefix' =>'BRG20-', 'field' => 'kode_brg']);
        
        // Barang::create($request->all());
        Barang::create([
            'kode_brg' => $kode_brg,
            'nama_brg' => $request->nama_brg,
            'qty' => $request->qty,
            'harga' => $request->harga
        ]);
        return redirect()->route('index')->with('success', 'Data barang telah ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $brg = Barang::find($id);
        return view('barang.edit', compact('brg'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_brg' => 'required',
            'qty' => 'required|integer',
            'harga' => 'required|integer'
        ]);

        $brg = Barang::find($id);
        $brg->update($request->all());
        return redirect()->route('index')->with('success', 'Data barang telah diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $brg = Barang::find($id);
        $brg->delete();
        return redirect()->route('index')->with('success', 'Data barang telah dihapus!');
    }
}
