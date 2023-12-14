
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
      <link rel="stylesheet" href="{{ asset('user in de kost/themewagon.github.io/css/bootstrap.min.css') }}">
      <!-- style css -->
      <link rel="stylesheet" href="{{ asset('user in de kost/themewagon.github.io/css/style.css') }}">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{ asset('user in de kost/themewagon.github.io/css/responsive.css') }}">
      <!-- fevicon -->
      <link rel="icon" href="{{ asset('user in de kost/themewagon.github.io/images/fevicon.html') }}" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{ asset('user in de kost/css/jquery.mCustomScrollbar.min.css') }}">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="{{ asset('user in de kost/netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
      <link rel="stylesheet" href="{{ asset('user in de kost/cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="{{ asset('user in de kost/themewagon.github.io/images/loading.gif') }}" alt="#"/></div>
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
                              <a href="{{ asset('user in de kost/themewagon.github.io/index-2.html') }}"><img src="images/logo.png" alt="#" /></a>
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
                                 <a class="nav-link" href="index-2.html">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.html">About</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="room.html">Our room</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="gallery.html">Gallery</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="blog.html">Blog</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="contact.html">Contact Us</a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- our_room -->
      <div  class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Pengajuan Sewa</h2>
                     <p>Lorem Ipsum available, but the majority have suffered </p>
                  </div>
               </div>
            </div>
            <style>
                .input,
        .file-label {
            cursor: pointer;
            font-size: 16px;
            padding: 14px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

       .form-select, .form-control{
            border-color: #ccc;
        }

    </style>
    <section class="space-top space-extra-bottom" data-bg-src="{{ asset('assets/img/bg/price-bg-1-1.jpg') }}">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card" style="background-color:transparent; border: 1px solid #2F2C43; border-radius:">
                        <div class="card-body">
                            {{-- <form action="{{ route('turnamen.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                @csrf
                                <div class="mb-3 d-flex justify-content-between">
                                    <label for="nama" class="form-label" style="width: 15%; color: rgb(0, 0, 0);">Nama</label>
                                    <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" id="nama" style="width: 70%; border-radius: 8px;">
                                </div>
                                <div class="mb-3 d-flex justify-content">
                                    <label for="format_pertandingan" class="form-label" style="width: 28%; color: #000;">Jenis Kelamin</label>
                                    <div>
                                        <div class="form-check" style="margin-bottom: 2%;">
                                            <input class="form-check-input" type="radio" name="format_pertandingan" id="format_pertandingan1" value="laki-laki" {{ old('format_pertandingan') == 'laki-laki' ? 'checked' : '' }}>
                                            <label class="form-check-label" style="color: rgb(0, 0, 0); font-size: 14px;" for="format_pertandingan1">
                                                Laki-laki
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="format_pertandingan" id="format_pertandingan2" value="perempuan" {{ old('format_pertandingan') == 'perempuan' ? 'checked' : '' }}>
                                            <label class="form-check-label" style="color: rgb(0, 0, 0); font-size: 14px;" for="format_pertandingan2">
                                              Perempuan
                                            </label>
                                        </div>

                                    </div>
                                </div>
                                <div class="mb-3 d-flex justify-content-between">
                                    <label for="deskripsi" class="form-label" style="width: 15%; color: #000;">Username</label>
                                    <textarea name="deskripsi" class="form-control @error('deskripsi') is-invalid @enderror" id="deskripsi" style="width: 70%; border-radius: 8px;"></textarea>
                                </div>
                                <div class="mb-3 d-flex justify-content-between">
                                    <label for="nama" class="form-label" style="width: 15%; color: #000;">Metode Pembayaran</label>
                                    <select name="nama_game" class="form-select @error('nama_game') is-invalid @enderror" id="nama_game" style="width: 70%; border-radius: 8px;">
                                        <option value="" disabled selected>Pilih Metode Pembayaran </option>
                                        <option value="ml" {{ old('ml') == 'ml' ? 'selected' : '' }}>Bank BRI</option>
                                        <option value=dota_2" {{ old('dota_2') == 'dota_2' ? 'selected' : '' }}>Bank BCA</option>
                                        <option value=ff" {{ old('ff') == 'ff' ? 'selected' : '' }}>FF</option>
                                        <option value=pubg_mobile" {{ old('pubg_mobile') == 'pubg_mobile' ? 'selected' : '' }}>Bank Mandiri</option>
                                        <option value=pubg" {{ old('pubg') == 'pubg' ? 'selected' : '' }}>Bank Jatim</option>
                                    </select>
                                </div>
                                <div class="mb-3 d-flex align-items-center" style="width:200%">
                                    <label for="" class="form-label" style="width: 15%; color:#000;">Foto:</label>
                                    <div class="d-flex align-items-center" style="width: 35%; ">
                                        <input type="file" id="fileInput" style="display:none; ">
                                        <input class="input" type="file" name="foto" id="foto" placeholder="contoh:081652371232"  style="border-radius: 8px;">
                                    </div>
                                </div><div class="mb-3 d-flex align-items-center" style="width:200%">
                                    <label for="" class="form-label" style="width: 15%; color:#000;">Foto:</label>
                                    <div class="d-flex align-items-center" style="width: 35%; ">
                                        <input type="file" id="fileInput" style="display:none; ">
                                        <input class="input" type="file" name="foto" id="foto" placeholder="contoh:081652371232"  style="border-radius: 8px;">
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-outline-primary">Simpan</button>
                            {{-- </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div data-bg-src="assets/img/bg/match-bg-3-1.png">
        <section class="space-extra-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.3s">

                    </div>
                </div>
            </div>
        </section>
    </div> --}}
{{-- @endsection --}}

         </div>
      </div>
      <!-- end our_room -->

      <!-- end contact -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class=" col-md-4">
                     <h3>Contact US</h3>
                     <ul class="conta">
                        <li><i class="fa fa-map-marker" aria-hidden="true"></i> Address</li>
                        <li><i class="fa fa-mobile" aria-hidden="true"></i> +01 1234569540</li>
                        <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#"> demo@gmail.com</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>Menu Link</h3>
                     <ul class="link_menu">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="about.html"> about</a></li>
                        <li><a href="room.html">Our Room</a></li>
                        <li><a href="gallery.html">Gallery</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact Us</a></li>
                     </ul>
                  </div>
                  <div class="col-md-4">
                     <h3>News letter</h3>
                     <form class="bottom_form">
                        <input class="enter" placeholder="Enter your email" type="text" name="Enter your email">
                        <button class="sub_btn">subscribe</button>
                     </form>
                     <ul class="social_icon">
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
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
      <script src="{{ asset('user in de kost/themewagon.github.io/js/jquery.min.js') }}"></script>
      <script src="{{ asset('user in de kost/themewagon.github.io/js/bootstrap.bundle.min.js') }}"></script>
      <script src="{{ asset('user in de kost/themewagon.github.io/js/jquery-3.0.0.min.js') }}"></script>
      <!-- sidebar -->
      <script src="{{ asset('user in de kost/themewagon.github.io/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
      <script src="{{ asset('user in de kost/themewagon.github.io/js/custom.js') }}"></script>
   </body>

<!-- Mirrored from themewagon.github.io/keto/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 02:47:20 GMT -->
</html>