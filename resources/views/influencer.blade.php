@extends('layouts.backend')

@section('title', 'Influencer')
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

{{-- style --}}

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



</style>


@section('content')
<div class="card">
    <div class="card-header">
        <h4>Influencer</h4>
    </div>
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
            <article id="edit_categories" class="white-content-block">
  <h4 class="panel-title">Categories &nbsp;&nbsp;<span class="glyphicon glyphicon-ok color-green" aria-hidden="true"></span></h4>
  <div class="panel-body">
    <p> Add up to 5 categories you are influential in. </p>
    
   
      <select name="katinflu" class="form-control">
        @foreach($data as $d)
        <option value="{{$d->id}}">{{$d->nama}}</option>
        @endforeach
      </select>
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


  
  
  

    </div>

</div>
@endsection