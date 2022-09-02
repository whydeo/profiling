<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\katinflu;
use App\Models\influencer;
use Session;

class InfluencerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('influencer');
    }

 
    public function create()
    {
    $data=katinflu::all();
    return view('influencer',compact('data'));
    }

   
    public function store(Request $request)
    {
       $email= auth()->user()->email;
       

        // dd($nama);
        $file = $request->file('foto');
        $org = $file->getClientOriginalName();
        $path = 'fotouser';
        $file->move($path,$org);

        $influencer = new influencer;
        $influencer->katinflu_id = $request->katinflu;
        $influencer->nama = $request->nama;
        $influencer->headline = $request->headline;
        $influencer->alamat = $request->alamat;
        $influencer->birthday = date('Y-m-d');
        $influencer->gender = $request->gender;
        $influencer->minimum_price = $request->minimum_price;
        $influencer->bio = $request->bio;
        $influencer->foto = $org;
        $influencer->email= $email;
        $influencer->save();

 // dd($influencer->id);
   

        if ($influencer) {
            Session::flash('success','Success Tambah Data');
            return redirect()->route('influencer.show');
        } else {
            Session::flash('success','Failed Tambah Data');
            return redirect()->route('influencer.show');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( )
    {
        $data=katinflu::all();
        $email= auth()->user()->email;
         $item = influencer::where('email',$email)->first();
        //  dd($item);
        
        return view('influencershow',compact('item','data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        dd($id);
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
        // dd($id);
        $foto = $request->file('foto');
        if ($foto == "") {
            $influencer = influencer::find($id);
            $influencer->katinflu_id = $request->katinflu;
            $influencer->nama = $request->nama;
            $influencer->headline = $request->headline;
            $influencer->alamat = $request->alamat;
            $influencer->birthday = date('Y-m-d');
            $influencer->gender = $request->gender;
            $influencer->minimum_price = $request->minimum_price;
            $influencer->bio = $request->bio;
            $influencer->save();
            $item;
           if ($influencer) {
                Session::flash('success','Success Ubah Data');
               return view('influencershow',compact('item'));
            } else {
                Session::flash('success','Failed Ubah Data');
               return view('influencershow',compact('item'));
            }
        } else {
            $file = $request->file('foto');
            $org = $file->getClientOriginalName();
            $path = 'fotouser';
            $file->move($path,$org);

            $influencer = influencer::find($id) ;
            $influencer->katinflu_id = $request->katinflu;
            $influencer->nama = $request->nama;
            $influencer->headline = $request->headline;
            $influencer->alamat = $request->alamat;
            $influencer->birthday = date('Y-m-d');
            $influencer->gender = $request->gender;
            $influencer->minimum_price = $request->minimum_price;
            $influencer->bio = $request->bio;
            $influencer->foto = $org;
            $influencer->email= $email;
            $influencer->save();
            
            if ($influencer) {
                Session::flash('success','Success Ubah Data');
                return view('influencershow');
            } else {
                Session::flash('success','Failed Ubah Data');
                return view('influencershow');
            }
        }
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
