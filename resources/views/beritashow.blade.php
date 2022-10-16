@extends('layouts.app')

@section('container')
@foreach ($kat as $item)
<div class="card">
    <div class="card-body">
      <img src="{{ asset('fotokat/'.$item->foto) }}" alt="" style="height: 500px; width:1070px;" >

    </div>
</div>
<div class="row">
<div class="col-lg-9">
<div class="card">
<div class="card-header">
{{$item->judul}}
</div>
<div class="card-body">
    {{$item->isi}}
    <br>
    <br>
    {{$item->tanggal}}

</div>
</div>
</div>
<div class="col-lg-3">
<div class="card">
<div class="card-body">
  <ul>
    <li>ksjdgsd</li>
    <li>ksjdgsd</li>
    <li>ksjdgsd</li>
    <li>ksjdgsd</li>  
    <li>ksjdgsd</li>
  </ul>
</div>
</div>
</div>
</div>


@endforeach




@endsection

