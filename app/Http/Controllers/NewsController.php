<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Session;
use Carbon\Carbon;
class NewsController extends Controller
{
  
    public function index()
    {
       
        $da=Berita::where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
        ->where('id_jns',2)
        ->where('status','aktif')
        ->take(3)
        ->get();
        $de=Berita::where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
        ->where('id_jns',3)
        ->where('status','aktif')
        ->take(3)
        ->get();
        $data = Berita::orderBy('created_at','DESC')
        ->where('created_at', '>=', Carbon::now()->subDay()->toDateTimeString())
        ->where('id_jns',1)
        ->where('status','aktif')
        ->take(4)
        ->get();
        // dd($data);

        // $post= $data[0]->created_at->difforHumans();
        $datak=Kategori::all();
    return view('welcome',compact('data','datak','da','de'));
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
