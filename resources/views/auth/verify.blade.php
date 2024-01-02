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

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                    <div class="card-body">
                        @if (session('resent'))
                            <div class="alert alert-success" role="alert">
                                {{ __('A fresh verification link has been sent to your email address.') }}
                            </div>
                        @endif

                        {{ __('Before proceeding, please check your email for a verification link.') }}
                        {{ __('If you did not receive the email') }},
                        <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                            @csrf
                            <button type="submit"
                                class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

<!-- Mirrored from brandio.io/envato/iofrm/html/login20.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 13 Dec 2023 08:34:33 GMT -->

</html>
