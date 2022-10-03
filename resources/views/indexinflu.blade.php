
<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>INFLUENCER</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href=".././assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="../assets/vendors/aos/dist/aos.css/aos.css" />
    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="../assets/images/favicon.png" />
    <!-- inject:css -->
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- endinject -->
   <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
      <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      {{-- <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" /> --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" />

  </head>

<style>
  
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 60px 0;
}

section .section-title {
    text-align: center;
    color: #007b5e;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #ffffff;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #007b5e !important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #007b5e !important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    border-radius: 50%;
}

.fab .fa-tiktok {
  color: #111111;
  filter: drop-shadow(-5px -5px 0 #24f6f0) contrast(150%) brightness(110%);
  z-index: -1;
}

.fab .fa-tiktok::after {
  filter: drop-shadow(5px 5px 0 #F70250) contrast(150%) brightness(110%);
  z-index: -1;
}
  
    </style>

  <body>
    <div class="container-scroller">
      <!-- partial:../partials/_navbar.html -->
      <header id="header">
        <div class="container">
          <nav class="navbar navbar-expand-lg navbar-light">
            <div class="navbar-top">
              <div class="d-flex justify-content-between align-items-center">
                <ul class="navbar-top-left-menu">
                  <li class="nav-item">
                    <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                  </li>
                  <li class="nav-item">
                    <a href="pages/aboutus.html" class="nav-link">About</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Events</a>
                  </li>
                  <li class="nav-item">
                    <a href="#" class="nav-link">Write for Us</a>
                  </li>
                  <li class="nav-item">
                    <a href="{{url('influencer/index')}}" class="nav-link">Influencer</a>
                  </li>
                </ul>
                <ul class="navbar-top-right-menu">
                  @if (Route::has('login'))
                  <li class="nav-item pl-1">
                      @auth
                      
                      <a class="nav-link" href="{{ url('influencer/create') }}"></i>Back</a>
                      @else
                      <a class="nav-link" href="{{ url('login') }}"></i>Login</a>
  
              @endif
              @endif
                  {{-- <li class="nav-item">
                    <a href="#" class="nav-link">Sign in</a>
                  </li> --}}
                </ul>
              </div>
            </div>
            <div class="navbar-bottom">
              <div class="d-flex justify-content-between align-items-center">
                <div>
                  <a class="navbar-brand" href="#"
                    ><img src="assets/images/logo.svg" alt=""
                  /></a>
                </div>
                <div>
                  <button
                    class="navbar-toggler"
                    type="button"
                    data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div
                    class="navbar-collapse justify-content-center collapse"
                    id="navbarSupportedContent"
                  >
                    <ul
                      class="navbar-nav d-lg-flex justify-content-between align-items-center"
                    >
                      <li>
                        <button class="navbar-close">
                          <i class="mdi mdi-close"></i>
                        </button>
                      </li>
                      <li class="nav-item active">
                        <a class="nav-link" href="{{ route('welcome') }}">Home</a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/business.html">Business</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/sports.html">Sports</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/art.html">Art</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/politics.html">POLITICS</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/travel.html">Travel</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="pages/contactus.html">Contact</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <ul class="social-media">
                  <li>
                    <a href="#">
                      <i class="mdi mdi-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-youtube"></i>
                    </a>
                  </li>
                  <li>
                    <a href="#">
                      <i class="mdi mdi-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </div>
      </header>

      <!-- partial -->
      <div class="flash-news-banner">
        <div class="container">
          <div class="d-lg-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
              <span class="badge badge-dark mr-3">JOIN WITH US?</span>
              <p class="mb-0">
                Lorem Ipsum has been the industry's standard dummy text ever
                since the 1500s.
              </p>
            </div>
            <div class="d-flex">
              <a href="{{ url('login/google') }}" >CREATE ACOUNT?</a>
            </div>
          </div>
        </div>
      </div>
      <div class="content-wrapper">
        <div class="container">
          
             
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
    <!-- container-scroller ends -->
    <!-- partial:../partials/_footer.html -->
    <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="../assets/images/logo.svg" class="footer-logo" alt="" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Newspaper is your news, entertainment, music fashion website. We
                    provide you with the latest breaking news and videos straight from
                    the entertainment industry.
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h3 class="font-weight-bold mb-3">RECENT POSTS</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="../assets/images/dashboard/home_1.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2 pt-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="../assets/images/dashboard/home_2.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div>
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="../assets/images/dashboard/home_3.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600 mb-3">
                              Cotton import from USA to soar was American traders
                              predict
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">CATEGORIES</h3>
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Magazine</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Business</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Sports</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="footer-border-bottom pb-2 pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Arts</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                  <div class="pt-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <h5 class="mb-0 font-weight-600">Politics</h5>
                      <div class="count">1</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>. All rights reserved.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </footer>

    <!-- partial -->
    <!-- inject:js -->
    <script src="../assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->

    <script src="../assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="../assets/js/demo.js"></script>
    <script src="../assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
