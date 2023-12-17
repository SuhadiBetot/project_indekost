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
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      {{-- search --}}
      <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Search Example</title>
  <style>
    bo

    body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
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

        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating > span {
            display: inline-block;
            position: relative;
            width: 1.1em;
            color: yellow; /* Warna bintang */
        }

        .rating > span:hover:before,
        .rating > span:hover ~ span:before {
            content: "\2605";
            position: absolute;
        }
        #location-filter {
            display: flex;
        justify-content: flex-end;
            margin-bottom: 10px;
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
                              <a href="index-2.html"><img style="width: 150px; height: auto" src="{{asset('storage/asset/logo.png')}}" alt="#" /></a>
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
      {{-- search --}}
      <div class="container mt-3">
         <div class="input-group">
             <input type="text" class="form-control-md" placeholder="Search..." aria-label="Search" aria-describedby="searchButton" style="width: 300px;">
             <div class="input-group-append">
                 <button class="btn btn-success" type="button" id="searchButton" style="width: 80px;">Search</button>
             </div>
             <div id="location-filter" style="margin-left: 600px">
                <select id="city-filter">
                    <option value="">Pilih Lokasi</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="Surabaya">Surabaya</option>
                    <option value="Bandung">Bandung</option>
                    <option value="Yogyakarta">Yogyakarta</option>
                </select>
            </div>
         </div>
     </div>
     {{-- search --}}
      {{-- card --}}
      <center>
         <br>
        <div class="card mb-3" style="max-width: 900px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="{{asset('storage/asset/kmr.png')}}" class="img-fluid rounded-start" alt="..." style="max-width: 100%; height: 100%;">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                     <div class="d-flex justify-content-left">
                        <button type="button" class="btn btn-outline-danger btn-sm">cewek</button>
                    </div>
                        <h3 class="card-title text-left mb-0" style="font-weight: bold;">Griya Permata Alam Regency 1</h3>
                        <p class="card-text text-left mb-0">Jl. Ngijo KarangPloso Malang</p>
                        <h5 class="card-text text-left mb-0"><small class="text-muted">Fasilitas: kipas angin, kasur, bantal, guling, lemari, dan stopkontak</small></h5>
                        <div class="d-flex justify-content-left">
                            <h1><span>&#9733;</span></h1>
                     </div>
                     <h5 class="card-title text-right mb-0" style="font-weight: bold;">3.000.000,00</h5>
                    </div>
                </div>
            </div>
        </div>
        <div class="card mb-3" style="max-width: 900px;">
         <div class="row g-0">
             <div class="col-md-4">
                 <img src="{{asset('storage/asset/kmr.png')}}" class="img-fluid rounded-start" alt="..." style="max-width: 100%; height: 100%;">
             </div>
             <div class="col-md-8">
                 <div class="card-body">
                  <div class="d-flex justify-content-left">
                     <button type="button" class="btn btn-outline-primary btn-sm">cowok</button>
                 </div>
                     <h3 class="card-title text-left mb-0" style="font-weight: bold;">Griya Permata Alam Regency 1</h3>
                     <p class="card-text text-left mb-0">Jl. Ngijo KarangPloso Malang</p>
                     <h5 class="card-text text-left mb-0"><small class="text-muted">Fasilitas: kipas angin, kasur, bantal, guling, lemari, dan stopkontak</small></h5>
                     <div class="d-flex justify-content-left">
                        <h1><span>&#9733;</span></h1>
                  </div>
                  <h5 class="card-title text-right mb-0" style="font-weight: bold;">3.000.000,00</h5>
                 </div>
             </div>
         </div>
     </div>
     <div class="card mb-3" style="max-width: 900px;">
      <div class="row g-0">
          <div class="col-md-4">
              <img src="{{asset('storage/asset/kmr.png')}}" class="img-fluid rounded-start" alt="..." style="max-width: 100%; height: 100%;">
          </div>
          <div class="col-md-8">
              <div class="card-body">
               <div class="d-flex justify-content-left">
                  <button type="button" class="btn btn-outline-warning btn-sm">campur</button>
              </div>
                  <h3 class="card-title text-left mb-0" style="font-weight: bold;">Griya Permata Alam Regency 1</h3>
                  <p class="card-text text-left mb-0">Jl. Ngijo KarangPloso Malang</p>
                  <h5 class="card-text text-left mb-0"><small class="text-muted">Fasilitas: kipas angin, kasur, bantal, guling, lemari, dan stopkontak</small></h5>
                  <div class="d-flex justify-content-left">
                    <h1><span>&#9733;</span></h1>
               </div>
               <h5 class="card-title text-right mb-0" style="font-weight: bold;">3.000.000,00</h5>
              </div>
          </div>
      </div>
  </div>
    </center>
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
      <script>
        document.getElementById("city-filter").addEventListener("change", function() {
            var selectedCity = this.value;
            var locationList = document.getElementById("location-list").getElementsByTagName("li");

            for (var i = 0; i < locationList.length; i++) {
                var location = locationList[i];
                var city = location.getAttribute("data-city");

                if (selectedCity === "" || selectedCity === city) {
                    location.style.display = "block";
                } else {
                    location.style.display = "none";
                }
            }
        });
    </script>

   </body>

<!-- Mirrored from themewagon.github.io/keto/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 02:47:20 GMT -->
</html>
