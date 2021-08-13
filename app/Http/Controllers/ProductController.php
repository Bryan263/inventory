<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Carbon\Carbon;
use DB;

class ProductController extends Controller
{

    public function viewProductPage(){

        $productData = DB::table('products')->get();
        return view('product')->with('productData',$productData);
    }
    public function addOrUpdate(Request $request){

        if($request->id == -1)
        {
            $product = new Product;

            $product->Nama_barang = $request->nama_barang;
            $product->Kode_barang = $request->kode_barang;
            $product->Jumlah_barang = $request->jumlah_barang;
            $product->Tanggal = Carbon::now('Asia/Jakarta');
            
            $product->save();
    
            return redirect()->back();
        }

        else{
            DB::table('products')->where('id',$request->id)->update([
                "Nama_barang" => $request->nama_barang,
                "Kode_barang" => $request->kode_barang,
                "Jumlah_barang" => $request->jumlah_barang,
                "Tanggal" => Carbon::now('Asia/Jakarta')

            ]);
    
            return redirect()->back();
        }    
    }

 
    public function search(Request $request){   

        if($request->product == 'Name')
        {
            $result = DB::table('products')->where('Nama_barang',$request->search)->get();
            return view('searchResult')->with('result',$result);
        }

        if($request->product == 'Code')
        {
            $result = DB::table('products')->where('Kode_barang',$request->search)->get();
            return view('searchResult')->with('result',$result);
        }

    }
}
