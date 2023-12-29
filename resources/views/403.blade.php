<!DOCTYPE html>
<html lang="en" class="h-100">


<!-- Mirrored from akademi.dexignlab.com/xhtml/page-error-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:35:21 GMT -->

<head>
    <!-- All Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="author" content="DexignLab">
    <meta name="robots" content="">
    <meta name="keywords"
        content="school, school admin, education, academy, admin dashboard, college, college management, education management, institute, school management, school management system, student management, teacher management, university, university management">
    <meta name="description"
        content="Discover Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
    <meta property="og:title" content="Akademi : School and Education Management Admin Dashboard Template">
    <meta property="og:description"
        content="Akademi - the ultimate admin dashboard and Bootstrap 5 template. Specially designed for professionals, and for business. Akademi provides advanced features and an easy-to-use interface for creating a top-quality website with School and Education Dashboard">
    <meta property="og:image" content="social-image.html">
    <meta name="format-detection" content="telephone=no">

    <!-- Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Page Title Here -->
    <title>Akademi : School and Education Management Admin Dashboard Template</title>

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/png" href="Dashboard Admin Siswa/images/favicon.png">
    <link href="Dashboard Admin Siswa/css/style.css" rel="stylesheet">

</head>

<body class="vh-100">
    <div class="authincation h-100"
        style="background-image: url(Dashboard Admin Siswa/images/student-bg.jpg); background-repeat:no-repeat; background-size:cover;">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-lg-6 col-sm-12">
                    <div class="form-input-content  error-page">
                        <h1 class="error-text text-primary">403</h1>
                        <h4> Forbidden Error!</h4>
                        <p>login nya apa malah mau akses halaman apa, hadeuh🥱</p>
                        @if (auth()->user()->role == 'admin')
                            <a class="btn btn-primary" href="{{ route('admin.dashboard_admin') }}">Back to Home</a>
                        @elseif (auth()->user()->role == 'owner')
                            <a class="btn btn-primary" href="{{ route('dash-owner') }}">Back to Home</a>
                        @else
                            <a class="btn btn-primary" href="{{ route('landing') }}">Back to Home</a>
                        @endif
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12">
                    <img class="w-100" src="Dashboard Admin Siswa/images/svg/student.svg" alt="">
                </div>
            </div>
        </div>
    </div>

    <!--**********************************
 Scripts
***********************************-->
    <!-- Required vendors -->
    <script src="Dashboard Admin Siswa/vendor/global/global.min.js"></script>
    <script src="Dashboard Admin Siswa/js/custom.min.js"></script>
    <script src="Dashboard Admin Siswa/js/dlabnav-init.js"></script>
</body>

<!-- Mirrored from akademi.dexignlab.com/xhtml/page-error-403.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 11 Dec 2023 01:35:21 GMT -->

</html>
