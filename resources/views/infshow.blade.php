@extends('layouts.backend')

@section('title', 'Dashboard')

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<!-- select2-bootstrap4-theme -->
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
<link href="select2-bootstrap4.css" rel="stylesheet"> <!-- for local development env -->



{{-- css --}}
<style>
    body {
    background-color: #f9f9fa
}

.padding {
    padding: 3rem !important
}

.user-card-full {
    overflow: hidden;
}

.card {
    border-radius: 5px;
    -webkit-box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    box-shadow: 0 1px 20px 0 rgba(69,90,100,0.08);
    border: none;
    margin-bottom: 30px;
}

.m-r-0 {
    margin-right: 0px;
}

.m-l-0 {
    margin-left: 0px;
}

.user-card-full .user-profile {
    border-radius: 5px 0 0 5px;
}

.bg-c-lite-green {
        background: -webkit-gradient(linear, left top, right top, from(#f29263), to(#ee5a6f));
    background: linear-gradient(to right, #ee5a6f, #f29263);
}

.user-profile {
    padding: 20px 0;
}

.card-block {
    padding: 1.25rem;
}

.m-b-25 {
    margin-bottom: 25px;
}

.img-radius {
    border-radius: 60%;
    height: 200px;
    width: auto;
 
}


 
h6 {
    font-size: 14px;
}

.card .card-block p {
    line-height: 25px;
}

@media only screen and (min-width: 1400px){
p {
    font-size: 14px;
}
}

.card-block {
    padding: 1.25rem;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.m-b-20 {
    margin-bottom: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.card .card-block p {
    line-height: 25px;
}

.m-b-10 {
    margin-bottom: 10px;
}

.text-muted {
    color: #919aa3 !important;
}

.b-b-default {
    border-bottom: 1px solid #e0e0e0;
}

.f-w-600 {
    font-weight: 600;
}

.m-b-20 {
    margin-bottom: 20px;
}

.m-t-40 {
    margin-top: 20px;
}

.p-b-5 {
    padding-bottom: 5px !important;
}

.m-b-10 {
    margin-bottom: 10px;
}

.m-t-40 {
    margin-top: 20px;
}

.user-card-full .social-link li {
    display: inline-block;
}

.user-card-full .social-link li a {
    font-size: 20px;
    margin: 0 10px 0 0;
    -webkit-transition: all 0.3s ease-in-out;
    transition: all 0.3s ease-in-out;
}



</style>


@section('content')
<div class="card">
        <div class="card-header">
        <h4>Dashboard</h4>
    </div>
    @if(Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif
    <div class="card-body">

        <div class="page-content page-container" id="page-content">
            <div class="padding">
                <div class="row container d-flex justify-content-center">
        <div class="col-xl-12 col-md-12">
  
                {{-- @foreach ($tampil as $item) --}}
                    
               
                                                        <div class="card user-card-full">
                                                            <div class="row m-l-0 m-r-0">
                                                                <div class="col-sm-4 bg-c-lite-green user-profile">
                                                                    <div class="card-block text-center text-white">
                                                                        <div class="m-b-25">
                                                                            <img src="{{asset('fotouser/'.$item->foto)}}" class="img-radius" alt="User-Profile-Image">
  
                                                                          </div>
                                                                        <h6 class="f-w-600">{{$item->nama}}</h6>
                                                                        <p>{{$item->katinflu}}</p>
                                                                        <i class=" mdi mdi-square-edit-outline feather icon-edit m-t-10 f-16"></i>
                                                                    </div>
                                                                </div>
                                                                <div class="col-sm-8">
                                                                    <div class="card-block">
                                                                        <h6 class="m-b-20 p-b-5 b-b-default f-w-600">Influencer</h6>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <p class="m-b-10 f-w-600">Name</p>
                                                                                <h6 class="text-muted f-w-400">{{$item->nama}}</h6>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <p class="m-b-10 f-w-600">headline</p>
                                                                                <h6 class="text-muted f-w-400">{{$item->headline}}</h6>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <p class="m-b-10 f-w-600">Addres</p>
                                                                                <h6 class="text-muted f-w-400">{{$item->alamat}}</h6>
                                                                            </div>
                                                                        </div>
                                                                        <h6 class="m-b-20 m-t-40 p-b-5 b-b-default f-w-600"></h6>
                                                                        <div class="row">
                                                                            <div class="col-sm-4">
                                                                                <p class="m-b-10 f-w-600">gender</p>
                                                                                <h6 class="text-muted f-w-400">{{$item->gender}}</h6>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <p class="m-b-10 f-w-600">minimum price</p>
                                                                                <h6 class="text-muted f-w-400">{{$item->minimum_price}}</h6>
                                                                            </div>
                                                                            <div class="col-sm-4">
                                                                                <p class="m-b-10 f-w-600">birthday</p>
                                                                                <h6 class="text-muted f-w-400">{{$item->birthday}}</h6>
                                                                            </div>
                                                                            
                                                                        </div>
                                                                       
                                                                        
                                                                        <ul class="social-link list-unstyled m-t-40 m-b-10">
                                                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="facebook" data-abc="true"><i class="mdi mdi-facebook feather icon-facebook facebook" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="twitter" data-abc="true"><i class="mdi mdi-twitter feather icon-twitter twitter" aria-hidden="true"></i></a></li>
                                                                            <li><a href="#!" data-toggle="tooltip" data-placement="bottom" title="" data-original-title="instagram" data-abc="true"><i class="mdi mdi-instagram feather icon-instagram instagram" aria-hidden="true"></i></a></li>
                                                                        </ul>
                                                                    </div>

                                                                </div>
                                                                
                                                            </div>
                
                                                            <div class="container">
                                                                <div class="row">
                                                                  <div class="col-sm">
                                                                  </div>
                                                                  <div class="col-sm-8">
                                                                    <div class="col-sm-12">
                                                                        <p class="m-b-10 f-w-600">bio</p>
                                                                        <h6 class="text f-w-400">{{$item->bio}}</h6>
                                                                    </div>
                                                                  </div>
                                                                  
                                                                </div>
                                                              </div>
                                                           
                                                        </div>
                                                    </div>
                                                     </div>
                                                        </div>
                                                    </div>
  
  
  
                                                             
                                                  
    </div>
</div>

@section('js')
       
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script type="text/javascript">
$(function () {
  $('select').each(function () {
    $(this).select2({
      theme: 'bootstrap4',
      width: 'style',
      placeholder: $(this).attr('placeholder'),
      allowClear: Boolean($(this).data('allow-clear')),
    });
  });
});
</script>
@endsection
@endsection