<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\Kategori;
use Session;
class KategoriController extends Controller
{

    public function index()
    {
        $data = Kategori::all();
        // dd($data);
        return view('kategori',compact('data'));
    }
   
  
    public function create()
    {
        //
    }

   
    public function store(Request $request)
    {
        // dd($request);
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'fotokat';
        $file->move($path,$org);
        $KategoriModel = new Kategori;
        $KategoriModel->nama = $request->nama;
        $KategoriModel->keterangan = $request->keterangan;
        $KategoriModel->status = 'aktif';
        $KategoriModel->tanggal = date('Y-m-d');
        $KategoriModel->foto = $org;
        $KategoriModel->save();
        if ($KategoriModel) {
            Session::flash('success','Success Tambah Data');
            return redirect()->route('index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('index');
        }
    }


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
    public function edit( request $request ,$id)
    {
        $Kategori = Kategori::find($id);
        $Kategori->nama = $request->nama;
        $Kategori->keterangan = $request->keterangan;
        $Kategori->status = $request->status;
        $Kategori->save();
        if ($Kategori) {
            Session::flash('success','Success update Data');
            return redirect()->route('index');
        } else {
            Session::flash('success','Failed update Data');
            return redirect()->route('index');
        }
        return view('kategori',compact('data'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id )
    {
        // dd($id);
        $KategoriModel = Kategori::find($id);
        $KategoriModel->delete();
        if ($KategoriModel) {
            Session::flash('success','Success Delete Data');
            return redirect()->route('index');
        } else {
            Session::flash('success','Failed Delete Data');
            return redirect()->route('index');
        }
    }

}
