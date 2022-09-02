<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Session;
class BeritaController extends Controller
{
  
    public function index()
    {
        $data = Berita::orderBy('created_at','DESC')
        ->paginate(10);
        $datak=Kategori::all();
    return view('berita',compact('data','datak'));
    }

    
    public function create()
    {
        $data=Kategori::all();
        return view('berita',compact('data'));
    }

 
    public function store(Request $request)
    {
        // dd($request);
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'foto';
        $file->move($path,$org);

        $Berita = new Berita;
        $Berita->kategori_id = $request->kategori;
        $Berita->judul = $request->judul;
        $Berita->penulis = $request->penulis;
        $Berita->tanggal = date('Y-m-d');
        $Berita->isi = $request->isi;
        $Berita->foto = $org;
        $Berita->save();
        if ($Berita) {
            Session::flash('success','Success Tambah Data');
            return redirect()->route('berita.index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('berita.index');
        }
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
    public function edit(request $request, $id)
    {
        $foto = $request->file('foto');
        if ($foto == "") {
            $Berita = Berita::find($id);
            $Berita->kategori_id = $request->kategori;
            $Berita->judul = $request->judul;
            $Berita->penulis = $request->penulis;
            $Berita->isi = $request->isi;
            $Berita->save();

           if ($Berita) {
                Session::flash('success','Success Ubah Data');
                return redirect()->route('berita.index');
            } else {
                Session::flash('success','Failed Ubah Data');
                return redirect()->route('berita.index');
            }
        } else {
            $file = $request->file('foto');
            $org = $file->getClientOriginalName();
            $path = 'foto';
            $file->move($path,$org);

            $Berita = Berita::find($id) ;
            $Berita->kategori_id = $request->kategori;
            $Berita->judul = $request->judul;
            $Berita->penulis = $request->penulis;
            $Berita->isi = $request->isi;
            $Berita->foto = $org;
            $Berita->save();
            if ($Berita) {
                Session::flash('success','Success Ubah Data');
                return redirect()->route('berita.index');
            } else {
                Session::flash('success','Failed Ubah Data');
                return redirect()->route('berita.index');
            }
        }
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
        //
    }

    public function destroy($id)
    {
        $Berita = Berita::find($id);
        $Berita->delete();
         if ($Berita) {
            Session::flash('success','Success Hapus Data');
            return redirect()->route('berita.index');
        } else {
            Session::flash('success','Failed Hapus Data');
            return redirect()->route('berita.index');
        }

    }
}
