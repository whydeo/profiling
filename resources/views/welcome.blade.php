@extends('layouts.app')

@section('jumbotron')
  
  <div class="container-fluid" style="margin-top: 100px">
    <div class="px-lg-5">
  
      <!-- For demo purpose -->
  
      <div class="row">
        <!-- Gallery item -->
        @foreach ($datak as $item)
        <div class="col-xl-3 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('fotokat/'.$item->foto)}}" alt="" class="img-fluid card-img-top">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$item->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$item->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$item->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        @endforeach
       
      
  
      </div>
    </div>
  </div>
  
  
  
  
@endsection