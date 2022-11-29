@extends('layouts.main')

@section('container')


<body>

<!-- News With Sidebar Start -->
<div class="container-fluid py-3">
    <div class="container">
        <div class="row">
          <div class="col-lg-8">
              @foreach ($kat as $item)
                <!-- News Detail Start -->
                <div class="position-relative mb-3">
                    <img class="img-fluid w-100" src="{{ asset('foto/'.$item->foto) }} " style="object-fit: cover;">
                    
                    <div class="overlay position-relative bg-light" style="padding: 10px">
                        <div class="mb-3">
                            <span>{{$item->kategori->nama}}</span>
                            <span class="px-1">/</span>
                            <span>{{$item->tanggal}}</span>
                        </div>
                        <div>
                            <h3 class="mb-3">{{$item->judul}}</h3>
                            <p>{{$item->isi}}</p>

                            @endforeach
                         @if ($hut >= 3)
                         @foreach ($berita as $ie)  
                         <h4 class="mb-3">{{$ie->judul}}</h4>
                        
                         <img class="img-fluid w-50 float-left mr-4 mb-2" src="{{ asset('foto/'.$ie->foto) }}">
                         <p>{{{$ie->isi}}}</p>
                         <span>{{$ie->tanggal}}</span> 
                             @endforeach
                             @endif
                        </div>
                    </div>
                </div>
                <!-- News Detail End -->

              
            </div>

            <div class="col-lg-4 pt-3 pt-lg-0">
             
               
                <div class="mb-3 pb-3">
                    <a href=""><img class="img-fluid" src="img/news-500x280-4.jpg" alt=""></a>
                </div>

                <!-- Pepular News Setart -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Tranding</h3>
                    </div>
                    
                  @if ($hut >= 3)
                  @foreach ($ber as $dat)
                  <div class="d-flex mb-3">
                      <img src="{{asset('foto/'.$dat->foto)}}" style="width: 100px; height: 100px; object-fit: cover;">
                      <div class="w-100 d-flex flex-column justify-content-center bg-light px-3" style="height: 100px;">
                          <div class="mb-1" style="font-size: 13px;">
                            <span>{{$dat->kategori->nama}}</span>
                              <span class="px-1">/</span>
                              <span>{{$item->tanggal}}</span>
                          </div>
                          <a class="h6 m-0" href="{{ route('berita.liat',$dat->id) }}">{{$dat->judul}}</a>
                      </div>
                  </div>
                  @endforeach
                  @endif
                  
                    
                </div>
                <!-- Pepular News Endtot -->

                <!-- Tags Start -->
                <div class="pb-3">
                    <div class="bg-light py-2 px-4 mb-3">
                        <h3 class="m-0">Kategory</h3>
                    </div>
                    <div class="d-flex flex-wrap m-n1">
                     
                @if ($conn == 1)
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 @elseif($conn == 2 )
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$k->id) }}">{{$k->nama}}</a>
                 @elseif($conn == 3  )
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$k->id) }}">{{$k->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$ka->id) }}">{{$ka->nama}}</a>
                 @elseif($conn == 4  )
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show', [$katt->id])}}">{{$katt->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$k->id]) }}">{{$k->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$ka->id]) }}">{{$ka->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$katti->id]) }}">{{$katti->nama}}</a>
              
                 @elseif($conn == 5 )
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show', [$katt->id])}}">{{$katt->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$k->id]) }}">{{$k->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$ka->id]) }}">{{$ka->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$katti->id]) }}">{{$katti->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$kattu->id]) }}">{{$kattu->nama}}</a>
              
           
                 @elseif($conn == 6)
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show', [$katt->id])}}">{{$katt->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$k->id]) }}">{{$k->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$ka->id]) }}">{{$ka->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$katti->id]) }}">{{$katti->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$kattu->id]) }}">{{$kattu->nama}}</a>
                <a  class="btn btn-sm btn-outline-secondary m-1" href="{{ route('berita.show',[$kattt->id]) }}">{{$kattt->nama}}</a>
              
             
                 
                 @elseif($conn == 7)
                 <li><a href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show', [$katt->id])}}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show',[$k->id]) }}">{{$k->nama}}</a>
                 <li><a href="{{ route('berita.show',[$ka->id]) }}">{{$ka->nama}}</a>
                 <li><a href="{{ route('berita.show',[$katti->id]) }}">{{$katti->nama}}</a>
                 <li><a href="{{ route('berita.show',[$kattu->id]) }}">{{$kattu->nama}}</a>
                 <li><a href="{{ route('berita.show',[$katta->id]) }}">{{$katta->nama}}</a>
              
                 
                 @elseif($conn == 8 )
                 <li><a href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show', [$katt->id])}}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show',[$k->id]) }}">{{$k->nama}}</a>
                 <li><a href="{{ route('berita.show',[$ka->id]) }}">{{$ka->nama}}</a>
                 <li><a href="{{ route('berita.show',[$katti->id]) }}">{{$katti->nama}}</a>
                 <li><a href="{{ route('berita.show',[$kattu->id]) }}">{{$kattu->nama}}</a>
                 <li><a href="{{ route('berita.show',[$katta->id]) }}">{{$katta->nama}}</a>
                 <li><a href="{{ route('berita.show',[$kattn->id]) }}">{{$kattn->nama}}</a>
                 
                 @elseif($conn == 9 )
                 <li><a href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show',$katt->id) }}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show', [$katt->id])}}">{{$katt->nama}}</a>
                 <li><a href="{{ route('berita.show',[$k->id]) }}">{{$k->nama}}</a>
                 <li><a href="{{ route('berita.show',[$ka->id]) }}">{{$ka->nama}}</a>
                 <li><a href="{{ route('berita.show',[$katti->id]) }}">{{$katti->nama}}</a>
                 <li><a href="{{ route('berita.show',[$kattu->id]) }}">{{$kattu->nama}}</a>
                 <li><a href="{{ route('berita.show',[$katta->id]) }}">{{$katta->nama}}</a>
                 <li><a href="{{ route('berita.show',[$kattn->id]) }}">{{$kattn->nama}}</a>
                 <li><a href="{{ route('berita.show',[$kattg->id]) }}">{{$kattg->nama}}</a>
                 
                 @endif
                    </div>
                </div>








                <!-- Tags End -->
            </div>
        </div>
    </div>
</div>
</div>
<!-- News With Sidebar End -->



<!-- Back to Top -->
<a href="#" class="btn btn-dark back-to-top"><i class="fa fa-angle-up"></i></a>


</body>
@section('js')
    
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>

<!-- Contact Javascript File -->
<script src="mail/jqBootstrapValidation.min.js"></script>
<script src="mail/contact.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
@endsection
@endsection

