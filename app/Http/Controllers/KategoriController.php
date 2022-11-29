<?php

namespace App\Http\Controllers;
use DB;
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
        // dd($request->id);
        // $file = $request->file('foto');
        // $org = $file->getClientOriginalName();
        // $path = 'fotokat';
        // $file->move($path,$org);

        $sat=kategori::where('id',1)->first();
        $s=kategori::where('id',2)->first();
        $sa=kategori::where('id',3)->first();
        $sas=kategori::where('id',4)->first();
        $sasi=kategori::where('id',5)->first();
        $sasim=kategori::where('id',6)->first();
        $sasimi=kategori::where('id',7)->first();
        $sasimit=kategori::where('id',8)->first();
        $sasimits=kategori::where('id',9)->first();
  

        // dd($s);
        // $kat = kategori::get('id');
        // $dat= kategori :: all();
        
        // for ($i=1; $i >= count($kat) ; $i++) { 
          
            
        // }
        // dd($sat);
        
        $KategoriModel = new Kategori;
       
        if ($sat == null) {
            $KategoriModel->id = 1;
            
        }elseif ($s == null) {
            $KategoriModel->id = 2;
            // $kiw=2;
        }
        elseif ($sa == null) {
            $KategoriModel->id = 3;
            // $kiw=2;
        }
        elseif ($sas == null) {
            $KategoriModel->id = 4;
            // $kiw=2;
        }
        elseif ($sasi == null) {
            $KategoriModel->id = 5;
            // $kiw=2;
        }
        elseif ($sasim == null) {
            $KategoriModel->id = 6;
            // $kiw=2;
        }
        elseif ($sasimi == null) {
            $KategoriModel->id = 7;
            // $kiw=2;
        }
        elseif ($sasimit == null) {
            $KategoriModel->id = 8;
            // $kiw=2;
        }
        elseif ($sasimits == null) {
            $KategoriModel->id = 9;
            // $kiw=2;
        }
        
        $KategoriModel->nama = $request->nama;
        $KategoriModel->keterangan = $request->keterangan;
        $KategoriModel->status = 'aktif';
        $KategoriModel->tanggal = date('Y-m-d');
      
        // $KategoriModel->foto = $org;
        // dd($kiw);
        // dd($KategoriModel);
        $KategoriModel->save();
        if ($KategoriModel) {
            Session::flash('success','Success Tambah Data');
            return redirect()->route('index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('index');
        }
        //$KategoriModel->id = 1;
       
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
