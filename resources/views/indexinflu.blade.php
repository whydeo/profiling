@extends('layouts.main')
@section('influencer')
    <!-- Team -->
<section id="team" class="pb-5">
  <div class="container">
      <div class="row">
          @foreach ($data as $dat)
          @if ($dat->nama == '')
          @else   
          <!-- Team member -->
          <div class="col-xs-12 col-sm-6 col-md-4">
              <div class="image-flip" >
                  <div class="mainflip flip-0">
                      <div class="frontside">
                          <div class="card">
                              <div class="card-body text-center">
                                  <p><img class=" img-fluid" src="{{asset('fotouser/'.$dat->foto)}}" alt="card image"></p>
                                  <h4 class="card-title">{{$dat->nama}}</h4>
                                  <p class="card-text"><small>{{$dat->headline}}</small></p>
                                  {{-- <p class="card-text"><small>{{$dat->katinflu}}</small></p> --}}
                                  <p class="card-text"><small class="text-muted">{{$dat->bio}}</small></p>
                                  {{-- <a href="#" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></a> --}}
                              </div>
                          </div>
                      </div>
                      <div class="backside col-sm-12">
                          {{-- <div class="card "> --}}
                              <div class="card-body  ">
                                <div class="col-lg-12">
                                  <div class="card mb-12">
                                    <div class="card-body">
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <p class="mb-0">Full Name</p>
                                        </div>
                                        <div class="col-sm-12">
                                          <p class="text-muted mb-0">{{$dat->nama}}</p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <p class="mb-0">Gender</p>
                                        </div>
                                        <div class="col-sm-9">
                                          <p class="text-muted mb-0">{{$dat->gender}}</p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <p class="mb-0">Addres</p>
                                        </div>
                                        <div class="col-sm-12">
                                          <p class="text-muted mb-0">{{$dat->alamat}}</p>
                                        </div>
                                      </div>
                                      <hr>
                                      <div class="row">
                                        <div class="col-sm-12">
                                          <p class="mb-0">minimum price</p>
                                        </div>
                                        <div class="col-sm-12">
                                          <p class="text-muted mb-0">{{$dat->minimum_price}}</p>
                                        </div>
                                      </div>
                                      {{-- <hr> --}}
                                     
                                     
                                    </div>
                                  </div>
                                  <ul class="list-inline">
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="{{$dat->instagram}}">
                                              <i class="fa fa-instagram"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="{{$dat->instagram}}">
                                              <i class="fa fa-twitter"></i>
                                          </a>
                                      </li>
                                      <li class="list-inline-item">
                                          <a class="social-icon text-xs-center" target="_blank" href="{{$dat->tiktok}}">
                                            <i class="fab fa-tiktok"></i>
                                          </a>
                                      </li>
                                      
                                  </ul>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
          @endif
          @endforeach
          <!-- ./Team member -->
          </div>
        </div>
      </div>
    </div>
    <!-- conta
@endsection