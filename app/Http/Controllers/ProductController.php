<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;

class ProductController extends Controller
{

    public function viewProductPage(){
        return view('product');
    }
    public function addOrUpdate(Request $request){

        $product = new Product;

        $product->Nama_barang = $request->nama_barang;
        $product->Kode_barang = $request->kode_barang;
        $product->Jumlah_barang = $request->jumlah_barang;
        $product->Tanggal = Carbon::now('Asia/Jakarta');
        
        $product->save();

        return redirect()->back();
        
    }

    public function update(){

    }

    public function search(){

    }
}
