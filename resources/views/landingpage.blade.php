<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/keto/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 02:47:04 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>keto</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('user in de kost/themewagon.github.io/css/bootstrap.min.css')}}">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('user in de kost/themewagon.github.io/css/style.css')}}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('user in de kost/themewagon.github.io/css/responsive.css')}}">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.html" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('user in de kost/themewagon.github.io/css/jquery.mCustomScrollbar.min.css')}}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{asset('user in de kost/netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css')}}">
      <link rel="stylesheet" href="{{asset('user in de kost/cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css')}}" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
      <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Button</title>
  <style>
    bo

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    .login-button {
      padding: 10px 20px;
      font-size: 16px;
      text-align: center;
      text-decoration: none;
      background-color: #7E6D2E; /* Green */
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      transition: background-color 0.3s;
    }

    .login-button:hover {
      background-color: #7E6D2E; /* Darker green on hover */
    }

    figcaption {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    color: white; /* Set the text color */
    font-size: 25px; /* Set the font size */
    font-weight: bold; /* Set the font weight */
    /* Add any other styles you need */
    }

  </style>

   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{asset('user in de kost/themewagon.github.io/images/loading.gif')}}" alt="#"/></div>
      </div>
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index-2.html"><img src="{{asset('storage/asset/')}}" alt="#" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item active">
                                 <a class="nav-link" href="index-2.html">Beranda</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">Tentang Kami</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="room.html">Area Terpopuler</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.html">Sekitar Kampus</a>
                              </li>
                              <li class="nav-item">
                                <a href="#" class="login-button">LOG IN | SIGN IN</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
      <!-- banner -->
      <section class="banner_main">
         <div id="myCarousel" class="carousel slide banner" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
               <li data-target="#myCarousel" data-slide-to="1"></li>
               <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <img class="first-slide" src="{{asset('storage/asset/banner1.png')}}" alt="First slide">
                  <div class="container">
                  </div>
               </div>
               <div class="carousel-item">
                  <img class="second-slide" src="{{asset('storage/asset/banner2.png')}}" alt="Second slide">
               </div>
               <div class="carousel-item">
                  <img class="third-slide" src="{{asset('storage/asset/banner3.png')}}" alt="Third slide">
               </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
            </a>
         </div>
         {{-- <div class="booking_ocline">
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="book_room">
                        <h1>Book a Room Online</h1>
                     </div>
                  </div>
               </div>
            </div>
         </div> --}}
      </section>
      <!-- end banner -->
      <!-- about -->
      <div class="about">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div class="titlepage">
                     <h2>Tentang Kami</h2>
                     <p>The passage experienced a surge in popularity during the 1960s when Letraset used it on their dry-transfer sheets, and again during the 90s as desktop publishers bundled the text with their software. Today it's seen all around the web; on templates, websites, and stock designs. Use our generator to get your own, or read on for the authoritative history of lorem ipsum. </p>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="about_img">
                     <figure><img src="{{asset('storage/asset/tentang.png')}}" alt="#"/></figure>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end about -->
      <!-- kamar -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Kamar Kami</h2>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover" class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('storage/asset/kamar.png')}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar 1</h3>
                        <p>Ini adalah tampilan kost In De Kost, dalam nya ada kasur ,lemari, meja dll</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('storage/asset/kamar.png')}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar 2</h3>
                        <p>Ini adalah tampilan kost In De Kost, dalam nya ada kasur ,lemari, meja dll</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('storage/asset/kamar.png')}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar 3</h3>
                        <p>Ini adalah tampilan kost In De Kost, dalam nya ada kasur ,lemari, meja dll</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('storage/asset/kamar.png')}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar 4</h3>
                        <p>Ini adalah tampilan kost In De Kost, dalam nya ada kasur ,lemari, meja dll</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('storage/asset/kamar.png')}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar 5</h3>
                        <p>Ini adalah tampilan kost In De Kost, dalam nya ada kasur ,lemari, meja dll</p>
                     </div>
                  </div>
               </div>
               <div class="col-md-4 col-sm-6">
                  <div id="serv_hover"  class="room">
                     <div class="room_img">
                        <figure><img src="{{asset('storage/asset/kamar.png')}}" alt="#"/></figure>
                     </div>
                     <div class="bed_room">
                        <h3>Kamar 6</h3>
                        <p>Ini adalah tampilan kost In De Kost, dalam nya ada kasur ,lemari, meja dll</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end kamar -->
      <!-- area -->
      <div class="our_room">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage">
                        <h2>Area Kost Terpopuler</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure>
                                <img src="{{asset('storage/asset/area.png')}}" alt="#">
                                <figcaption>Medan</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure>
                                <img src="{{asset('storage/asset/area.png')}}" alt="#">
                                <figcaption>Jakarta</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure>
                                <img src="{{asset('storage/asset/area.png')}}" alt="#">
                                <figcaption>Malang</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure>
                                <img src="{{asset('storage/asset/area.png')}}" alt="#">
                                <figcaption>Bandung</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure>
                                <img src="{{asset('storage/asset/area.png')}}" alt="#">
                                <figcaption>Probolinggo</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div id="serv_hover" class="room">
                        <div class="room_img">
                            <figure>
                                <img src="{{asset('storage/asset/area.png')}}" alt="#">
                                <figcaption>Denpasar</figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
     <!-- end area -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row justify-content-between">
                  <div class=" col-md-4">
                     <h3>Hubungi Kami</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Alamat</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +62 085 5163 6651</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> aisyah@gmail.com</a></li>
                     </ul>
                  </div>
                <div class="col-md-4">
                    <h3>Menu Link</h3>
                    <ul class="link_menu custom-menu">
                        <li class="active"><a href="#">Beranda</a></li>
                        <li><a href="about.html"> Tentang</a></li>
                        <li><a href="room.html">Kamar Kita</a></li>
                        <li><a href="gallery.html">Gambar</a></li>
                        <li><a href="contact.html">Hubungi Kami</a></li>
                    </ul>
                </div>
               </div>
            </div>
            <div class="copyright">
               <div class="container">
                  <div class="row">
                     <div class="col-md-10 offset-md-1">

                        <p>
                        © 2019 All Rights Reserved. Design by <a href="https://html.design/"> Free Html Templates</a>
                        <br><br>
                        Distributed by <a href="https://themewagon.com/" target="_blank">ThemeWagon</a>
                        </p>

                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="{{asset('user in de kost/themewagon.github.io/js/jquery.min.js')}}"></script>
      <script src="{{asset('user in de kost/themewagon.github.io/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('user in de kost/themewagon.github.io/js/jquery-3.0.0.min.js')}}"></script>
      <!-- sidebar -->
      <script src="{{asset('user in de kost/themewagon.github.io/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
      <script src="{{asset('user in de kost/themewagon.github.io/js/custom.js')}}"></script>
   </body>

<!-- Mirrored from themewagon.github.io/keto/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 02:47:20 GMT -->
</html>
