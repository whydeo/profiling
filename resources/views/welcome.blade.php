@extends('layouts.main')

@section('jumbotron')
  
  <div class="container-fluid" style="margin-top: 100px">
    <div class="px-lg-5">
  
      <!-- For demo purpose -->
  
      <div class="row">
        <!-- Gallery item -->
        @foreach ($datak as  $key=>$item)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$item->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top  ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$item->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$item->keterangan}}</p>
            </div>
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$item->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
        @foreach ($dat as  $key=>$ite)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$ite->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$ite->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$ite->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$ite->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
        @foreach ($datam as  $key=>$itema)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$itema->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$itema->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$itema->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$itema->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
  
      </div>
      <div class="row">
        <!-- Gallery item -->
        @foreach ($da as  $key=>$item)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$item->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$item->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$item->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$item->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
        @foreach ($data as  $key=>$ite)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$ite->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$ite->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$ite->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$ite->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
        @foreach ($datap as  $key=>$itema)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$itema->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$itema->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$itema->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$itema->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
  
      </div>
      <div class="row">
        <!-- Gallery item -->
        @foreach ($datal as  $key=>$item)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$item->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$item->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$item->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$item->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
        @foreach ($dataml as  $key=>$ite)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$ite->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$ite->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$ite->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$ite->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
        @foreach ($datapl as  $key=>$itema)
        <div class="col-xl-4 col-lg-4 col-md-6 mb-4">
          <div class="bg-white rounded shadow-sm"><img src="{{asset('foto/'.$itema->foto)}}" style="max-height:250px;" alt="" class="img-fluid card-img-top ">
            <div class="p-4">
              <h5> <a href="#" class="text-dark">{{$itema->nama}}</a></h5>
              <p class="small text-muted mb-0">{{$itema->keterangan}}</p>
              
            </div>
            
            <a class="btn btn-primary text-uppercase" href="{{ route('berita.show',$itema->id) }}" style="margin-left: 170px;margin-bottom:20px;" > More</a>
          </div>
        </div>
        
        @endforeach
  
      </div>

      </div>
    </div>
  </div>
  
  
  
  
@endsection