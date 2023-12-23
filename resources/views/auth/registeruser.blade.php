<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/register20.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:35:14 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/iofrm-theme20.css') }}">
</head>

<style>
    .center-button {
        text-align: center; /* Atau gunakan margin: 0 auto; */
    }
</style>


<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('template/images/graphic3.svg') }}" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3> Halaman Register </h3>
                        <p> jika anda belum punya akun maka daftar  terlebih dahulu</p>
                        <form action="{{route('register')}}" method="post">
                            @csrf
                            <input class="form-control" type="text" name="name" placeholder=" Name" required>
                            @error('name')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input class="form-control" type="email" name="email" placeholder="E-mail " required>
                            @error('email')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            @error('password')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input class="form-control" type="password" name="password_confirmation" placeholder="konfirmasi Password" required>
                            @error('password_confirmation')
                                <p class="text-danger">{{$message}}</p>
                            @enderror
                            <input type="text" name="role" value="user" hidden>
                            <div class="form-button  center-button">
                                <button id="submit" type="submit" class="ibtn btn-block">Daftar</button>
                            </div>
                        </form>
                        {{-- <div class="other-links">
                            <div class="text">Or register with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div> --}}
                        <div class="page-links center-button">
                            <a href="login">Login </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('template/js/jquery.min.js') }}"></script>
<script src="{{ asset('template/js/popper.min.js') }}"></script>
<script src="{{ asset('template/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('template/js/main.js') }}"></script>
</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/register20.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:35:14 GMT -->
</html>
