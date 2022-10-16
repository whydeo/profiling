<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {{-- ftoooter --}}
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"> --}}
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">
    {{-- aos --}}
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- Bootstrap CSS -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Allura&display=swap" rel="stylesheet">
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet"> --}}

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;1,200;1,300&display=swap"
        rel="stylesheet">
    <title>WEB TV ASIA </title>
    <link rel="icon" href="{{ asset('img/ima.png') }}">


</head>
<style>

    html {
  scroll-behavior: smooth;
}
    .jumbotron {
        height: 100vh;
        /* background-image: url('img/deo.jpg'); */
        background-size: cover;
        /* filter: brightness(50%); */
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(255 86 119)), url('img/deo.jpg');
        /* background-repeat: no-repeat; */
    }

    .jumbotron2 {
        height: 80vh;
        background-color: #FF5677;
        z-index: -1;
    }

    .special {
        display: grid;
    }

    .lingkeran {
        text-align: center;
        height: 50px;
        width: 50px;
        background-color: whitesmoke;
        border-radius: 100%;
    }

    .lingkeran-gendut {
        text-align: center;
        height: 160px;
        width: 160px;
        background-color: whitesmoke;
        border-radius: 100%;
    }

    /* for tablets and desktops*/
    @media screen and (min-width: 600px) {
        .special {
            grid-template-columns: 1fr 2fr;
            grid-template-rows: 50px 50px;
        }

        .logo {
            grid-area: 1/1/3/2;
            margin-left: 30px;
        }
    }

    .arrow {
        position: absolute;
        top: -10%;
        left: 60%;
        transform: translate(-50%, -50%);
    }

    .arrow span {
        display: block;
        width: 20px;
        height: 20px;
        border-bottom: 5px solid #f7f7f6;
        border-right: 5px solid #f7f7f6;
        transform: rotate(45deg);
        margin: -10px;
        animation: animate 2s infinite;
    }

    .arrow span:nth-child(2) {
        animation-delay: -0.2s;
    }

    .arrow span:nth-child(3) {
        animation-delay: -0.4s;
    }

    @keyframes animate {
        0% {
            opacity: 0;
            transform: rotate(45deg) translate(-20px, -20px);
        }

        50% {
            opacity: 1;
        }

        100% {
            opacity: 0;
            transform: rotate(45deg) translate(20px, 20px);
        }
    }


    .jumbotron3 {
        height: 100%;
        /* background-image: url('img/deo.jpg'); */
        /* background-size: cover; */
        /* filter: brightness(50%); */
        /* background-image : linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 1)), url('img/deo.jpg'); */
        /* background-repeat: no-repeat; */
        /* margin-top: -3%; */
        background-color: #FF957B;
        /* margin-top: 0; */
        z-index: -1;
    }

    .jumbotron4 {
        height: 100%;
        background-color: #FEA8A7;
        z-index: 4;
    }

    .jumbotron5 {

        background-color: rgb(234, 226, 226);
        z-index: 5;
    }

    /* .jumbotron3 h1{
        margin-top: 50px;
    } */

    .stuck .sticky-top {
        background-color: transparent !important;
        padding-top: 3px !important;
        padding-bottom: 3px !important;
    }

    .tombol-putih {

        background-color: transparent;
        border: 1px solid;
        background-color: transparent;
        color: #f7f7f6;
    }

    .tombol-putih:hover {
        background-color: #f7f7f6;
        color: #020104;
    }

    .grid-container {
        display: grid;
        grid-template-columns: auto auto auto auto;
        gap: 10px;
        padding: 10px;
        width: 400px;
        margin-left: 30%;
        margin-top: 5%;
    }

    .card img {
        border-radius: 100%;
        height: 130px;
        width: 130px;
    }

    .material-icons.md-48 {
        font-size: 48px;
    }

    .material-icons.orange600 {
        color: #5C4C48;
    }

    .jumbotron5 {
        height: 100vh;
    }

    body {
        font-family: 'Montserrat', sans-serif;
        background-color: #f6f3ea;
    }

    .testimonial {
        padding: 80px 0;
    }

    .sec-heading {
        margin-bottom: 60px;
    }

    .sec-heading h6 {
        font-family: allura;
        font-weight: 900;
        font-size: 80px;
    }

    .single-box {
        /* border: 3px solid #e6f0fa; */
        padding: 50px 30px 40px;
        border-radius: 20px;
        background: #fff;
    }

    .img-area {
        margin: 45px 0 20px;
    }

    .single-box img {
        max-width: 100px;
        border-radius: 50%;
        margin: 0 auto
    }

    .single-box h4 {
        font-weight: 600;
        margin: 0;
        font-family: 'Allura', cursive;
        font-size: 35px;
    }

    .single-box {
        overflow: hidden
    }

    .single-box .img-area {
        width: 30%;
        float: left;
        margin: 0
    }

    .single-box .content {
        width: 70%;
        float: left;
        padding-left: 10px
    }

    .single-box p {
        margin: 10px 0 25px;
        line-height: 2.3;
    }

    .testi-carousel-three .single-box {
        border: 0;
        padding: 0 50px;
    }

    .testi-carousel .owl-dots,
    .clients-carousel .owl-dots,
    .testi-carousel-three .owl-dots {
        position: absolute;
        left: 0;
        right: 0;
        bottom: -60px;
        text-align: center;
        width: 100%;
    }

    .testi-carousel .owl-dot,
    .clients-carousel .owl-dot,
    .testi-carousel-three .owl-dot {
        width: 16px;
        height: 16px;
        background-color: #ddd;
        display: inline-block;
        margin: 0 6px;
        text-align: center;
        border-radius: 50%;
    }

    .testi-carousel .owl-dot.active,
    .clients-carousel .owl-dot.active,
    .testi-carousel-three .owl-dot.active {
        background-color: blueviolet;
    }

    @media only screen and (min-width: 360px) and (max-width: 479px) {
        .testimonial {
            padding: 70px 0 130px;
        }
    }

    @media only screen and (min-width: 320px) and (max-width: 359px) {
        .testimonial {
            padding: 70px 0 130px;
        }

        .single-box {
            padding: 50px 0 40px;
        }

        .single-box .img-area {
            width: 100%;
            float: none;
        }

        .single-box .content {
            width: 100%;
            float: none;
        }
    }

    footer {
        background: #16222A;
        background: -webkit-linear-gradient(59deg, #3A6073, #16222A);
        background: linear-gradient(59deg, #3A6073, #16222A);
        color: white;
        margin-top: 100px;
    }

    footer a {
        color: #fff;
        font-size: 26px;
        transition-duration: 0.2s;
    }

    footer a:hover {
        color: #FA944B;
        text-decoration: none;
    }

    .copy {
        font-size: 12px;
        padding: 10px;
        border-top: 1px solid #FFFFFF;
    }

    .footer-middle {
        padding-top: 2em;
        color: white;
    }


    /SOCİAL İCONS/
    /* footer social icons */

    ul.social-network {
        list-style: none;
        display: inline;
        margin-left: 0 !important;
        padding: 0;
    }

    ul.social-network li {
        display: inline;
        margin: 0 5px;
    }


    /* footer social icons */

    .social-network a.icoFacebook:hover {
        background-color: #fea8a7;
    }

    .social-network a.icoLinkedin:hover {
        background-color: #fea8a7;
    }

    .social-network a.icoFacebook:hover i,
    .social-network a.icoLinkedin:hover i {
        color: #fff;
    }

    .social-network a.socialIcon:hover,
    .socialHoverClass {
        color: #44BCDD;
    }

    .social-circle li a {
        display: inline-block;
        position: relative;
        margin: 0 auto 0 auto;
        -moz-border-radius: 50%;
        -webkit-border-radius: 50%;
        border-radius: 50%;
        text-align: center;
        width: 50px;
        height: 50px;
        font-size: 26px;
    }

    .social-circle li i {
        margin: 0;
        line-height: 30px;
        text-align: center;
    }

    .social-circle li a:hover i,
    .triggeredHover {
        -moz-transform: rotate(360deg);
        -webkit-transform: rotate(360deg);
        -ms--transform: rotate(360deg);
        transform: rotate(360deg);
        -webkit-transition: all 0.2s;
        -moz-transition: all 0.2s;
        -o-transition: all 0.2s;
        -ms-transition: all 0.2s;
        transition: all 0.2s;
    }

    .social-circle i {
        color: #595959;
        -webkit-transition: all 0.8s;
        -moz-transition: all 0.8s;
        -o-transition: all 0.8s;
        -ms-transition: all 0.8s;
        transition: all 0.8s;
    }

    .social-network a {
        background-color: #F9F9F9;
    }

</style>

<body>
    <nav style="transition: all 0.7s ease-in-out;" class="navbar navbar-expand-md fixed-top navbar-dark">
        <a class="navbar-brand" style="font-weight: 600" href="#"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav ml-auto" style="margin-right:40px;">
                <li class="nav-item">
                    <a class="nav-link" href="{{url('/')}}">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{url('influencer/index')}}">INFLUENCER</a>
                </li>
                <li class="nav-item">
                  @if (Route::has('login'))
                  @auth
                  
                  <a class="nav-link"style="margin-left: 1000px" href="{{ url('influencer/create') }}"></i>Back</a>
                  @else
                  <a class="nav-link"  style="margin-left: auto" href="{{ url('login') }}">LOGIN</a>
          
          @endif
          @endif
                </li>
            </ul>

        </div>
    </nav>

    <div class="jumbotron" style=" border-radius : 0px; margin-bottom : 0px">
        <div class="row">
            <div class="col-8 mx-auto">
                <div class="text-center">
                    <h1 class="display-4 text-light" data-aos="zoom-in-up" data-aos-duration="1500"
                        style="margin-top:20%;font-weight: 600; font-family:Verdana, Geneva, Tahoma, sans-serif">Deo's
                        Studio</h1>
                    <div class="lead text-light " data-aos="zoom-in-up" data-aos-duration="1500" style="">When you
                        design in STUDIO, every stroke gets
                        code generated ready to go live. CMS, IDE and Analytics are integrated for seamless
                        customizations. Cross-team collaboration is built along every step.</div>
                </div>
                <div class="col-3 mx-auto text-center">
                    <div class="btn tombol-putih mt-3 " data-aos="zoom-in-up" data-aos-duration="1500">kam to play
                        &#128540;</div>
                </div>
            </div>
        </div>
    </div>
<div><span id="siapa-kami"></span>
    <div class="jumbotron2" style=" border-radius : 0px;">
        <div class="container">


            <div class="row justify-content-center">
                <div class="col-md-5" style="margin-right: 30px;">



                    <div class="special" style="margin-top : 40%;" data-aos="zoom-in-left" data-aos-duration="800" data-aos-delay="500">
                        <a data-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false"
                            aria-controls="multiCollapseExample1" class="topNav text-white"
                            style="font-size : 32px; text-decoration : none;">siapa kami?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample1"
                            style="font-weight : 0; font-size: 14px;">kami adalah team Studio Deo, sebuah team yang
                            menyediakan jasa yang berhubungan dengan fotografi dan videografi, sampai penyewaan studio
                        </div>
                    </div>


                    <div class="special" style="margin-top : 20%;"  data-aos="zoom-in-left" data-aos-duration="800" data-aos-delay="500">
                        <a data-toggle="collapse" href="#multiCollapseExample2" role="button" aria-expanded="false"
                            aria-controls="multiCollapseExample2" class="topNav text-white"
                            style="font-size : 32px; text-decoration : none;">kenapa kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample2"
                            style="font-weight : 0; font-size: 14px;">karena kami menyediakan pelayanan dengan kualitas
                            yang baik namun dengan harga yang masih terjangkau </div>
                    </div>

                </div>


                <div class="col-md-2" style="background-color: ;  display: flex;
                align-items: center; margin-top :10%;     margin-left: -40px;">
                    <div class="arrow">
                        <span></span>

                        <span></span>

                    </div>
                    <div class="lingkeran-gendut" data-aos="zoom-in">
                        <img src="{{ asset('img/cam.png') }}" alt="" style="margin-top: -40px; margin-left : -70px; height : 250px; width : 300px">
                    </div>
                </div>


                <div class="col-md-5" style="background-color: ">

                    <div class="special" style="margin-top : 40%;"  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500">
                        <a data-toggle="collapse" href="#multiCollapseExample3" role="button" aria-expanded="false"
                            aria-controls="multiCollapseExample3" class="topNav text-white"
                            style="font-size : 32px; text-decoration : none;">keungulan kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample3"
                            style="font-weight : 0; font-size: 14px;">kami memiliki kamera dan peralatan dengan kualitas
                            tinggi, dimana kami menjamin bahwa penyewa tidak akan kecewa saat menyewa layanan kami</div>
                    </div>


                    <div class="special" style="margin-top : 20%;"  data-aos="zoom-in-right" data-aos-duration="800" data-aos-delay="500">
                        <a data-toggle="collapse" href="#multiCollapseExample4" role="button" aria-expanded="false"
                            aria-controls="multiCollapseExample4" class="topNav text-white"
                            style="font-size : 32px; text-decoration : none;">tujuan kami ?</a>
                        <div class="logo">
                            <div class="lingkeran" style="margin-left: 50px">
                                <i class="medium material-icons" style="margin-top: 15px;">accessibility</i>
                            </div>
                        </div>
                        <div class="bottomNav text-white collapse multi-collapse" id="multiCollapseExample4"
                            style="font-weight : 0; font-size: 14px;">menyediakan fotografi dan videografi dengan harga
                            yang dapat djijangkau oleh seluruh kalangan masyarakat</div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FF5677" fill-opacity="1" d="M0,96L1440,192L1440,0L0,0Z"></path>
    </svg>



        <div class="jumbotron3" style=" border-radius : 0px;margin-top : -225px">
            <br>

            <div class="container">
                <div class="text-center">
                    <h1 class="display-4 text-light"
                        style="margin-top:15%; margin-bottom:7%; font-weight: 400; font-family: 'Montserrat', sans-serif;"
                        data-aos="zoom-in" data-aos-duration="800">
                        Layanan yang kami berikan</h1>
                </div>

                <div class="row mt-2" style="">
                    <div class="col"  data-aos="fade-down" data-aos-duration="800" data-aos-delay="500">
                        <center>
                            {{-- <i class="bi-stars" style="font-size: 2rem;color: rgb(239, 163, 11)"></i> --}}
                            <span class="material-icons md-48 orange600">home</span>

                        </center>
                        <br>
                        <center>
                            <h5 class="text-light">Meningkatkan kredibilitas</h5>
                            <p style="color:white ;" style="color:white ;">Add a position:
                                fixed
                                to the .jumbotron class, then set top: 0 to get the element fixed to the very top of the
                                browser viewport. I would set a width:100% as the position:fixed will shrink your
                                element.
                            </p>

                        </center>
                    </div>

                    <div class="col"  data-aos="fade-down" data-aos-duration="800" data-aos-delay="600">

                        <center>
                            {{-- <i class="bi-alarm" style="font-size: 2rem;color: whitei> --}}
                            <span class="material-icons md-48 orange600">face</span>
                        </center>
                        <br>
                        <center>
                            <h5 class="text-light">Efisien</h5>
                            <p style="color:white ;">Add a position: fixed to the .jumbotron class, then
                                set
                                top: 0 to get the element fixed to the very top of the browser viewport. I would set a
                                width:100% as the position:fixed will shrink your element.</p>
                        </center>

                    </div>
                    <div class="col"  data-aos="fade-down" data-aos-duration="800" data-aos-delay="700">
                        <center>
                            <span class="material-icons md-48 orange600">clock</span>
                        </center>
                        <br>
                        <center>
                            <h5 class="text-light">Pasar yang luas</h5>
                            <p style="color:white ;">Add a position: fixed to the .jumbotron class, then
                                set
                                top: 0 to get the element fixed to the very top of the browser viewport. I would set a
                                width:100% as the position:fixed will shrink your element.</p>
                        </center>
                    </div>
                    <div class="col"  data-aos="fade-down" data-aos-duration="800" data-aos-delay="900">
                        <center>
                            <span class="material-icons md-48 orange600">book</span>
                        </center>
                        <br>
                        <center>
                            <h5 class="text-light">Informasi yang lengkap</h5>
                            <p style="color:white ;">Add a position: fixed to the .jumbotron class, then
                                set
                                top: 0 to get the element fixed to the very top of the browser viewport. I would set a
                                width:100% as the position:fixed will shrink your element.</p>
                        </center>
                    </div>
                    <div class="col"  data-aos="fade-down" data-aos-duration="800" data-aos-delay="1000">
                        <center>
                            <span class="material-icons md-48 orange600">clock</span>
                        </center>
                        <br>
                        <center>
                            <h5 class="text-light">Buka 24 jam</h5>
                            <p style="color:white ;">Add a position: fixed to the .jumbotron class, then
                                set
                                top: 0 to get the element fixed to the very top of the browser viewport. I would set a
                                width:100% as the position:fixed will shrink your element.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FF957B" fill-opacity="1" d="M0,160L1440,64L1440,0L0,0Z"></path>
    </svg>

    <div class="jumbotron4" style=" border-radius : 0px; margin-top : -280px;">
        <section class="testimonial">
            <div class="container" style="margin-top : 10%; margin-bottom : 10%;">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                        <div class="sec-heading text-center"  data-aos="zoom-in" data-aos-duration="800">
                            <h6 class="text-white" style="font-weight : 600">" Client's Says "</h6>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="clients-carousel owl-carousel"  data-aos="fade-down" data-aos-duration="1000" data-aos-delay="500">
                        <div class="single-box">
                            <div class="img-area"><img alt="" class="img-fluid"
                                    src="{{ asset('img/andre.jpg') }}">
                            </div>
                            <div class="content">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloribus minima
                                    praesentium laborum ea earum."</p>
                                <h4>Yafet forger</h4>
                                <h6>Designation Here</h6>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="img-area"><img alt="" class="img-fluid"
                                    src="{{ asset('img/anya.jpg') }}">
                            </div>
                            <div class="content">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloribus minima
                                    praesentium laborum ea earum."</p>
                                <h4>Deo forger</h4>
                                <h6>Designation Here</h6>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="img-area"><img alt="" class="img-fluid"
                                    src="{{ asset('img/mama.jpg') }}">
                            </div>
                            <div class="content">
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloribus minima
                                    praesentium laborum ea earum."</p>
                                <h4>Yor forger</h4>
                                <h6>Designation Here</h6>
                            </div>
                        </div>
                        <div class="single-box">
                            <div class="img-area"><img alt="" class="img-fluid"
                                    src="{{ asset('img/bapak.jpg') }}">
                            </div>
                            <div class="content">
                                <span class="rating-star"><i class="icofont-star"></i><i
                                        class="icofont-star"></i><i class="icofont-star"></i><i
                                        class="icofont-star"></i><i class="icofont-star"></i></span>
                                <p>"Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam, doloribus minima
                                    praesentium laborum ea earum."</p>
                                <h4>Loid forger</h4>
                                <h6>Designation Here</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#FEA8A7" fill-opacity="1" d="M0,64L1440,160L1440,0L0,0Z"></path>
    </svg>

    {{-- <div class="penjara"  data-aos="fade-up" data-aos-duration="800" data-aos-delay="500"> --}}

        <div class="jumbotron5 text-center" style="margin-top: -240px; height: 100%;" >
            <br><br>
        <br><br>
        <br><br>
        <br><br>
        <div class="col-md-12 text-center page-footer"   data-aos-duration="1000" data-aos-delay="500">
            <h4 class="" style="font-weight: 600; font-size : 3rem;">Let's have a little talk</h4>
            <h3 class=""
                style="font-weight: 600; font-size : 3.4rem;margin-top : -20px; color :#acacac;">0921 - 3989 - 9382</h3>
            <ul class="social-network social-circle">
                <li><a href="#" class="icoFacebook mb-3" title="Facebook"><i class="fa fa-google mt-2"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-twitter mt-2"></i></a></li>
                <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook mt-2"></i></a></li>
                <li><a href="#" class="icoLinkedin" title="Linkedin"><i class="fa fa-instagram mt-2"></i></a></li>
            </ul>
        </div>
    </div>

</div>
</div>
<div></div>
{{-- </div> --}}
    <div class="container"></div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js">
    </script>
    <script type="text/javascript">
        $('.clients-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            autoplayTimeout: 5000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 450,
            margin: 30,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 2
                },
                991: {
                    items: 2
                },
                1200: {
                    items: 2
                },
                1920: {
                    items: 2
                }
            }
        });
    </script>
            <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script type="text/javascript">
        AOS.init({
            once: true,
            duration: 1200,
        });
    </script>

    <script type="text/javascript">
        $(document).ready(function() {
            $(window).scroll(function() {
                if ($(window).scrollTop() > 56) {
                    $(".navbar").addClass("bg-dark");
                } else {
                    $(".navbar").removeClass("bg-dark");
                }
            });
            // If Mobile, add background color when toggler is clicked
            $(".navbar-toggler").click(function() {
                if (!$(".navbar-collapse").hasClass("show")) {
                    $(".navbar").addClass("bg-dark");
                } else {
                    if ($(window).scrollTop() < 25) {
                        $(".navbar").removeClass("bg-dark");
                    } else {}
                }
            });
        });
    </script>


</body>

</html>












