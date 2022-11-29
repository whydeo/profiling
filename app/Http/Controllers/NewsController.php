<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Session;
use Carbon\Carbon;
use DB;
class NewsController extends Controller
{
  
    public function index()
    {
       
        // $da=Berita::where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
        // ->where('id_jns',2)
        // ->where('status','aktif')
        // ->take(3)
        // ->get();
        // $de=Berita::where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
        // ->where('id_jns',3)
        // ->where('status','aktif')
        // ->take(3)
        // ->get();
        // $data = Berita::orderBy('created_at','DESC')
        // 
        // ->where('id_jns',1)
        // ->where('status','aktif')
        // ->take(4)
        // ->get();
        // dd($data);

        // $post= $data[0]->created_at->difforHumans();
        // $data=[];
        // $datak=Kategori::with('berita')->get();
        // for ($i=1; $i < count($datak) ; $i++) { 
        //     # code...
        //     $data=berita::where('kategori_id',$i)->get();
        // }
      
 
$datak = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',1)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
$da = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',2)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
$dat = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',3)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
$data = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',4)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
     
$datam = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',5)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
$datap = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            ->where('beritas.kategori_id',6)
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak,$dat,$data,$datam,$datap,$da);

$datal = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',7)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
     
$dataml = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            ->where('beritas.kategori_id',8)
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak);
$datapl = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.kategori_id')
            // ->where('beritas.created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
            ->latest('beritas.foto')
            ->where('beritas.kategori_id',9)
            
            ->select('kategoris.*', 'beritas.foto')
            ->latest('beritas.created_at')
            ->take(1)
            // ->latest()
            ->get();
        // dd(Carbon::now()->subDay()->toDateTimeString());
            // dd($datak,$dat,$data,$datam,$datap,$da);


            
     
    return view('welcome',compact('datak','da','dat','data','datam','datap','datal','dataml','datapl'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $news = berita::find($id);
        $data = Berita::orderBy('created_at','DESC')
        ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
       
        ->where('status','aktif')
        ->take(4)
        ->get();

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
