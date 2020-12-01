<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Barang;

class BarangController extends Controller
{
    public function index(){
        $barangs = Barang::all();
        return view('barang.index', ['barangs' => $barangs]);
    }
    public function create(){
        return view ('form-barang');
    }
    
    public function store (Request $request){
        $validateData = $request->validate([
            'kode_barang' => 'required | size:4 | unique:barangs',
            'nama_barang' => 'required | min:3',
            'stok' => '',
        ]);
        Barang::create($validateData);
        //return "Data Barang berhasil diinput ke dalam database";
        $request->session()->flash('pesan', "Data berhasil ditambahkan");
        return redirect()->route('barangs.index');
    }
    public function detail($barang){
        $result = Barang::find($barang);
        return view('barang.detail-barang', ['barang'=>$result]);
    }
    public function edit($barang){
        $result = Barang::find($barang);
        return view('barang.edit-barang', ['barang'=>$result]);
    }
    public function update(Request $request, Barang $barang){
        $validateData = $request->validate([
            'kode_barang' => 'required|size:4|unique:barangs,kode_barang,'.$barang->id,
            'nama_barang' => 'required|min:3',
            'stok' => '',
        ]);
        Barang::where('id',$barang->id)->update($validateData);
        $request->session()->flash('pesan',"Data berhasil diperbarui");
        return redirect()->route('barangs.detail',['barang'=>$barang->id]);
    }
    /*
    public function update(Request $request, Barang $barang){
        $validateData= $request->validate([
            'kode_barang' => 'required | size:4 | unique:barangs, kode_barang,'.$barang->id,
            'nama_barang' => 'required | min:3',
            'stok' => '',
        ]);
        Barang::where('id', $barang->id)->update($validateData);
        $request->session()->flash('pesan', "Data berhasil diperbarui");
        return redirect()->route('barangs.detail', ['barang' => $barang->id]);
    }
    */
    public function delete(Barang $barang){
        $barang->delete();
        return redirect()->route('barangs.index')->with('pesan', "Data berhasil dihapus");
    }
}