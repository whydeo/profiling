<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use App\Models\jnsbrta;
use Session;
class BeritaController extends Controller
{
  
    public function index()
    {
        $datak=Kategori::all();
        $jns=jnsbrta::all();
        $data = Berita::orderBy('created_at','DESC')
        ->paginate(10);
        // dd($data);
    return view('berita',compact('data','datak','jns'));
    }

    public function create()
    {
        $data=Kategori::all();
        $datas=jnsbrta::all();
            // dd($data);

        return view('berita',compact('data','datas'));
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
        $Berita->id_jns = $request->jenis;
        $Berita->judul = $request->judul;
        $Berita->penulis = $request->penulis;
        $Berita->tanggal = date('Y-m-d');
        $Berita->isi = $request->isi;
        $Berita->foto = $org;
        $Berita->status = "aktif";
        $Berita->save();
        if ($Berita) {
            Session::flash('success','Success Tambah Data');
            return redirect()->route('berita.index');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('berita.index');
        }
    }

    public function liat($id){
        
        $kat=berita::where('id',$id)
        // ->where('id_jns',1)
        // ->latest()
        ->take(1)
        ->get();
        // dd($kat[0]->kategori_id);
        $hitung=berita::where('kategori_id',$kat[0]->kategori_id)
      
        ->get();
    
    $hut= count($hitung);
        // dd($hut);
        if ($hut > 1) {
            # code...

             
            $berita=berita::where('kategori_id',$kat[0]->kategori_id)
            // ->where('id_jns',3)
            ->take(1)
            ->where('id','!=',$kat[0]->id)
           
            ->get();
            $ber=berita::where('kategori_id',$kat[0]->kategori_id)
            ->where('id','!=',$kat[0]->id)
            ->where('id','!=',$berita[0]->id)
            // ->where('id_jns',2)
           
            ->get();  
            // dd($ber);  
                // dd( $berita);
        $con=kategori::get();
        // $itung=$con;
        $conn=count($con);
        //  dd($conn);
       if (($conn == 1)) {
        # code...
        // dd($conn);
        $katt=kategori::where('id',1)->select('id','nama')->first();
        // dd($katt);
        return view('detailberita',compact('hut','kat','conn','ber','berita','katt'));
       }elseif ($conn == 2) {
            # code
            
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k'));
        }
       elseif ($conn == 3) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka'));
        }
       elseif ($conn == 4) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka','katti'));
        }
       elseif ($conn == 5) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();

            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu'));
        }
      
       elseif ($conn == 6) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt'));
        }
       elseif ($conn == 7) {
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();   
            $katta=kategori::where('id',7)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt','katta'));
        }
       elseif ($conn == 8) {
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();   
            $katta=kategori::where('id',7)->select('id','nama')->first();
            $kattn=kategori::where('id',8)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt','katta','kattn'));
        }
       elseif ($conn == 9) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();   
            $katta=kategori::where('id',7)->select('id','nama')->first();
            $kattn=kategori::where('id',8)->select('id','nama')->first();
            $kattg=kategori::where('id',9)->select('id','nama')->first();
            return view('detailberita',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt','katta','kattn','kattg'));
        }}
      

    }
    public function show( request $request ,$id)
    {

        $kat=berita::where('kategori_id',$id)
        // ->where('id_jns',1)
        // ->latest()
        ->take(1)
        ->get();
        $hitung=berita::where('kategori_id',$id)
      
        ->get();
    
    $hut= count($hitung);
        // dd($hut);
        if ($hut > 1) {
            # code...
            // dd($ber);   
            $berita=berita::where('kategori_id',$id)
          
            ->where('id','!=',$kat[0]->id)
            ->take(1)
            ->get();
            $ber=berita::where('kategori_id',$id)
            ->where('id','!=',$kat[0]->id)
            ->where('id','!=', $berita[0]->id)
            ->get();  

               //  dd( $berita);
        $con=kategori::get();
        // $itung=$con;
        $conn=count($con);
        //  dd($conn);
       if (($conn == 1)) {
        # code...
        // dd($conn);
        $katt=kategori::where('id',1)->select('id','nama')->first();
        // dd($katt);
        return view('beritashow',compact('hut','kat','conn','ber','berita','katt'));
       }elseif ($conn == 2) {
            # code
            
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k'));
        }
       elseif ($conn == 3) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka'));
        }
       elseif ($conn == 4) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka','katti'));
        }
       elseif ($conn == 5) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();

            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu'));
        }
      
       elseif ($conn == 6) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt'));
        }
       elseif ($conn == 7) {
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();   
            $katta=kategori::where('id',7)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt','katta'));
        }
       elseif ($conn == 8) {
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();   
            $katta=kategori::where('id',7)->select('id','nama')->first();
            $kattn=kategori::where('id',8)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt','katta','kattn'));
        }
       elseif ($conn == 9) {
            # code...
            $katt=kategori::where('id',1)->select('id','nama')->first();
            $k=kategori::where('id',2)->select('id','nama')->first();
            $ka=kategori::where('id',3)->select('id','nama')->first();
            $katti=kategori::where('id',4)->select('id','nama')->first();
            $kattu=kategori::where('id',5)->select('id','nama')->first();
            $kattt=kategori::where('id',6)->select('id','nama')->first();   
            $katta=kategori::where('id',7)->select('id','nama')->first();
            $kattn=kategori::where('id',8)->select('id','nama')->first();
            $kattg=kategori::where('id',9)->select('id','nama')->first();
            return view('beritashow',compact('hut','kat','conn','ber','berita','katt','k','ka','katti','kattu','kattt','katta','kattn','kattg'));
        }
        }
   //dd( $berita);
   $con=kategori::get();
   // $itung=$con;
   $conn=count($con);
   //  dd($conn);
  if (($conn == 1)) {
   # code...
   // dd($conn);
   $katt=kategori::where('id',1)->select('id','nama')->first();
   // dd($katt);
   return view('beritashow',compact('hut','kat','conn','katt'));
  }elseif ($conn == 2) {
       # code
       
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k'));
   }
  elseif ($conn == 3) {
       # code...
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k','ka'));
   }
  elseif ($conn == 4) {
       # code...
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       $katti=kategori::where('id',4)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k','ka','katti'));
   }
  elseif ($conn == 5) {
       # code...
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       $katti=kategori::where('id',4)->select('id','nama')->first();
       $kattu=kategori::where('id',5)->select('id','nama')->first();

       return view('beritashow',compact('hut','kat','conn','katt','k','ka','katti','kattu'));
   }
 
  elseif ($conn == 6) {
       # code...
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       $katti=kategori::where('id',4)->select('id','nama')->first();
       $kattu=kategori::where('id',5)->select('id','nama')->first();
       $kattt=kategori::where('id',6)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k','ka','katti','kattu','kattt'));
   }
  elseif ($conn == 7) {
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       $katti=kategori::where('id',4)->select('id','nama')->first();
       $kattu=kategori::where('id',5)->select('id','nama')->first();
       $kattt=kategori::where('id',6)->select('id','nama')->first();   
       $katta=kategori::where('id',7)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k','ka','katti','kattu','kattt','katta'));
   }
  elseif ($conn == 8) {
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       $katti=kategori::where('id',4)->select('id','nama')->first();
       $kattu=kategori::where('id',5)->select('id','nama')->first();
       $kattt=kategori::where('id',6)->select('id','nama')->first();   
       $katta=kategori::where('id',7)->select('id','nama')->first();
       $kattn=kategori::where('id',8)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k','ka','katti','kattu','kattt','katta','kattn'));
   }
  elseif ($conn == 9) {
       # code...
       $katt=kategori::where('id',1)->select('id','nama')->first();
       $k=kategori::where('id',2)->select('id','nama')->first();
       $ka=kategori::where('id',3)->select('id','nama')->first();
       $katti=kategori::where('id',4)->select('id','nama')->first();
       $kattu=kategori::where('id',5)->select('id','nama')->first();
       $kattt=kategori::where('id',6)->select('id','nama')->first();   
       $katta=kategori::where('id',7)->select('id','nama')->first();
       $kattn=kategori::where('id',8)->select('id','nama')->first();
       $kattg=kategori::where('id',9)->select('id','nama')->first();
       return view('beritashow',compact('hut','kat','conn','katt','k','ka','katti','kattu','kattt','katta','kattn','kattg'));
   }
      
     
      
           

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
            $Berita->status = $request->status;
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
            $Berita->status = $request->status;
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
