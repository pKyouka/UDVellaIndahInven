<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\gudang;

class gudangController extends Controller
{
    public function index()
    {
        $showbarang = gudang::all();
        return view('tables', compact('showbarang'));
    }

    public function create()
    {
        $showbarang = gudang::all();
        return view('tablescreate');
    }

    public function store(Request $request)
    {
        try{
            $validateData = $request->validate([
                'kode' => 'required',
                'tipe' => 'required',
                'barang' => 'required',
                'harga_beli' => 'required',
                'harga_jual' => 'required',
            ]);
            gudang::create($validateData);
            return redirect('/tables');

        }
        catch(\Exception $e){
            return redirect('/tables');
        }
    }

    public function edit($kode)
    {
        $showbarang = gudang::find($kode);
        return view('tablesedit', compact('showbarang'));
    }

    public function update(Request $request, $kode)
    {
        try{
            $validateData = $request->validate([
                'kode' => 'required',
                'tipe' => 'required',
                'barang' => 'required',
                'harga_beli' => 'required',
                'harga_jual' => 'required',
            ]);
            gudang::whereId($kode)->update($validateData);
            return redirect('/tables');
        }
        catch(\Exception $e){
            return redirect('/tables');
        }
    }

    public function destroy($id)
    {
        try{
            $showbarang = gudang::find($id);
            $showbarang->delete();
            return redirect('/tables');
        }
        catch(\Exception $e){
            return redirect('/tables');
        }
    }
}
