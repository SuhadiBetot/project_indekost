<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from themewagon.github.io/keto/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 02:47:04 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>IN DE KOST</title>
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
    <link rel="icon" href="images/fevicon.html" type="image/gif" />
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet"
        href="{{ asset('user in de kost/themewagon.github.io/css/jquery.mCustomScrollbar.min.css') }}">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet"
        href="{{ asset('user in de kost/netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css') }}">
    <link rel="stylesheet"
        href="{{ asset('user in de kost/cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css') }}"
        media="screen">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Button</title>
    <script src="https://kit.fontawesome.com/3703331060.js" crossorigin="anonymous"></script>
    <style>
        bo body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #F4F5F7;
        }

        .coklat {
            border-radius: 8px;
            border: 1px solid #D7D9DE;
            background: #7E6D2E;
            color: #fff;
        }
        .coklat:hover {
            background: #7E6D1E;
            color: #fff;
        }

        .navbar-nav .nav-link.active,
        .navbar-nav .nav-link.show {
            color: #7E6D2ED2;
            border-bottom: 3px solid #7E6D2ED2;
        }

        .nav-link {
            display: block;
            padding: var(--bs-nav-link-padding-y) var(--bs-nav-link-padding-x);
            font-size: var(--bs-nav-link-font-size);
            font-weight: var(--bs-nav-link-font-weight);
            color: #000;
            text-decoration: none;
            background: 0 0;
            border: 0;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out;
        }

        .login-button {
            color: #FFF;
            font-family: Poppins;
            font-size: 16px;
            font-style: normal;
            font-weight: 500;
            line-height: 20px;
            /* 125% */
            text-transform: uppercase;
            text-align: center;
            text-decoration: none;
            background-color: #7E6D2E;
            /* Green */
            color: white;
            border: none;
            border-radius: 15px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .login-button:hover {
            background-color: #7E6D2E;
            color: #eaeaea;
            /* Darker green on hover */
        }

        figcaption {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            /* Set the text color */
            font-size: 25px;
            /* Set the font size */
            font-weight: bold;
            /* Set the font weight */
            /* Add any other styles you need */
        }
    </style>

</head>
<!-- body -->

<body class="main-layout">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="{{ asset('user in de kost/themewagon.github.io/images/loading.gif') }}"
                alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <nav class="navbar navbar-expand-lg" style="background-color: #fff;">
            <div class="container-fluid">
                <img src="{{asset('asset/inilogo.png')}}" alt="" style="width: 50px">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav text-uppercase fw-medium text-dark ms-auto gap-3">
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page"
                                href="/">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#tentang">Tentang</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ request()->is('kamar-kami') ? 'active' : '' }}"
                                href="{{ route('kamar-kami') }}">Kamar Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#area">Area Kos Terpopuler</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Kos Sekitar Kampus</a>
                        </li>
                        @auth
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    {{ auth()->user()->name }}
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">profile</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                                                viewBox="0 0 24 24" fill="none" stroke="var(--primary)" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round">
                                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                                <polyline points="16 17 21 12 16 7"></polyline>
                                                <line x1="21" y1="12" x2="9" y2="12">
                                                </line>
                                            </svg>
                                            <span class="ms-2 text-primary">{{ __('Logout') }}</span>
                                        </a>
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                            @csrf
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @else
                            <li class="nav-item">
                                <a class="nav-link login-button px-3 py-2 fw-normal" href="{{ route('login') }}">Login |
                                    Register</a>
                            </li>
                        @endauth
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- end header -->
    @yield('kamar-kami')
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
                            <li> <i class="fa fa-envelope" aria-hidden="true"></i><a href="#">
                                    aisyah@gmail.com</a></li>
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
                                © 2023 All Rights Reserved. Design by team In de kost
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
    <script src="{{ asset('user in de kost/themewagon.github.io/js/jquery.min.js') }}"></script>
    <script src="{{ asset('user in de kost/themewagon.github.io/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('user in de kost/themewagon.github.io/js/jquery-3.0.0.min.js') }}"></script>
    <!-- sidebar -->
    <script src="{{ asset('user in de kost/themewagon.github.io/js/jquery.mCustomScrollbar.concat.min.js') }}"></script>
    <script src="{{ asset('user in de kost/themewagon.github.io/js/custom.js') }}"></script>
</body>

<!-- Mirrored from themewagon.github.io/keto/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 06 Dec 2023 02:47:20 GMT -->

</html>
