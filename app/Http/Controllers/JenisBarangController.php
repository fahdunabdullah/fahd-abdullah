<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\jenisBarang;
class JenisBarangController extends Controller
{
    public function index() 
    {
        $data = array(
            'title'=> 'Data Jenis Barang',
            'data_jenis' => JenisBarang::all(),
        );
        return view('admin.master.jenisbarang.list',$data);
    }
    /**
     * Show the form for creating a new resource.
     */

    public function store(Request $request)
    {
        JenisBarang::create([
            'name_jenis' => $request->nama_jenis,
        ]);
        
        return redirect('/jenisbarang')->with('success'.'Data Berhasil Disimpan');
                       
    }

    public function update(Request $request,$id)
    {
        JenisBarang::where('id',$id)
        ->where('id',$id)
          ->update([
            'nama_jenis' => $request->nama_jenis,
        ]);
        
        $product->update($request->all());
        
        return redirect('/jenisbarang')->with('success'.'Data Berhasil Diubah');
                       
    }   
    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        JenisBarang::where('id',$id)->delete();
         
        return redirect('/jenisbarang')->with('success'.'Data Berhasil Dihapus');
    }
}
