@extends('layouts.backend')

@section('title', 'Influencer')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
{{-- <script src="vendor/select2/dist/js/select2.min.js"></script> --}}

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!-- select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

<!-- select2-bootstrap4-theme -->
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet"> <!-- for live demo page -->
<link href="select2-bootstrap4.css" rel="stylesheet"> <!-- for local development env -->

{{-- style --}}



<style>









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
    border-radius: 5px;
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
.multipleChosen, .multipleSelect2{
  width: 300px;
}   

select {
  width: 100%;
  min-height: 100px;
  border-radius: 3px;
  border: 1px solid #444;
  padding: 10px;
  color: #444444;
  font-size: 14px;
}



</style>
@section('content')

  
      
  {{-- @if (auth()->user()->email == $item->email ) --}}
@if ($item == "")
    
@if(Session::has('success'))
<div class="alert alert-success">
<p>{{Session::get('success')}}</p>
</div>
@endif
<div class="card-body">
  <div class="panel-header panel-header-sm">
  </div>


  

  <div class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header d-flex justify-content-between">
          <h4 class="card-title">INFLUENCER</h4>
  <!-- Button trigger modal -->

</div>

<div class="card-body">
<p>Tell the world about yourself here. This is a place to share a lot more information than you can on your Instagram profile. Click here for an example profile with a great bio.</p>
<form action="{{route('influencer.store')}}" method="POST" enctype="multipart/form-data">
@csrf 
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputnama4">full name</label>
      <input type="nama" class="form-control" name="nama" id="inputnama4">
    </div>
    <div class="form-group col-md-6">
      <label for="inputheadline4">headline</label>
      <input type="headline" class="form-control" name="headline" id="inputheadline4">
      <span class="help-block">
          A short one-liner that describes you. This will sometimes be
          displayed next to your username.
          </span>
    </div>
  </div>
  <div class="form-group">
    <label for="inputAddress">Address</label>
    <input type="text" class="form-control" name="alamat" id="inputAddress" placeholder="jakarta,Indonesia">
  </div>
<div class="form-row">
<div class="col-md-6" >
  <label>Gender <span class="fa fa-info-circle has-tooltip hidden" data-trigger="hover" data-toggle="tooltip" title=""></span></label>
  <select required="required" class="form-control" name="gender" id="account_gender"><option value="">Leave blank</option>
  <option value="male">Male</option>
  <option value="female">Female</option></select>     
</div>    
<div class="col-md-6">
      <label>image <span class="fa fa-info-circle has-tooltip hidden" data-trigger="hover" data-toggle="tooltip" title=""></span></label>
      <div class="form-group">
          <input type="file" name="foto" class="form-control" required="">
      </div>
      
</div>
</div>
  <br>                             
  <p class="form-inline">
      <label>Date of Birth</label><br>
      <div class="input-group">
        <input class="form-control date-picker" placeholder="YYYY-mm-dd" type="date" name="birthday" id="account_birthday" />
      </div>
      </p>
  <div class="form-row">
    <div class="form-group col-md-6">
      <br>
      <label>Posts Starting at $</label><br>
      <p>What is your minimum price point for posting on behalf of a business?</p>
      <div class="input-group">
        <input placeholder="e.g. $500 / IDR.7440550,00" step="1" max="50000" class="form-control" type="number" name="minimum_price" id="account_minimum_rate" />
      </div>
    </div>
  
    <div class="form-group col-md-6 mt-5">
      <label for="account_bio">Bio</label> <small class="text-muted pull-right">Max 5000 characters.</small><br>
      <textarea class="form-control" placeholder="Tell the world about yourself here. This is a place to share a lot more information than you can on your Instagram profile." style="min-height: 200px" name="bio" id="account_bio"></textarea>
      <br>
    </div>
  


    
    <div class="col-md-6" style="margin-top: -165px">
      <div class="form-group">
        <label for="inputAddress">Tik tok</label>
        <input type="text" class="form-control" name="tiktok" id="inputAddress" placeholder="masukan link profil">
      </div>
      <div class="form-group">
        <label for="inputAddress">twiter</label>
        <input type="text" class="form-control" name="twiter" id="inputAddress" placeholder="masukan link profil">
      </div>
      <div class="form-group">
        <label for="inputAddress">instagram</label>
        <input type="text" class="form-control" name="instagram" id="inputAddress" placeholder="masukan link profil">
      </div>


</div>
 

  </div>
  </div>

<br><br>
<br><br>

  <div class="col-md-12">
        <button type="submit" class="btn btn-primary">save</button>

    </div>

</form>  


</div>

</div>
</div> 

    
@else

     
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



@endif
  
  


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
@stop


@endsection
