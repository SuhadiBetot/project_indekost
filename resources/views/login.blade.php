<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from brandio.io/envato/iofrm/html/login20.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:34:29 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/iofrm-style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('template/css/iofrm-theme20.css') }}">
</head>
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
                        <h3> Halaman Login</h3>
                        <p>jika anda sudah punya akun maka silakan login terlebih dahulu</p>
                        <form action="/loginproses" method="POST">
                            @csrf
                            <input class="form-control" type="text" name="email" placeholder="E-mail" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Masuk</button><a href="forget">Ganti password?</a>
                            </div>
                        </form>
                        <div class="page-links mt-4">
                            <a href="register">Register dahulu</a>
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

<!-- Mirrored from brandio.io/envato/iofrm/html/login20.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:34:33 GMT -->
</html>
