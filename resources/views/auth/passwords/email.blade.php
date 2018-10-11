<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="CMS">

    <title>Forgot Password</title>
    <!--google font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
    <!--common style-->
    <link href="{{ asset ('admin/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('admin/assets/vendor/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
    <!--custom css-->
    <link href="{{ asset('admin/assets/css/main.css')}}" rel="stylesheet">
</head>

<body class="">

    <div class="container">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-signin" action="{{ route('password.email') }}" method="POST">
        @csrf
            <a href="{{ route('password.request') }}" class="brand text-center">
                <img src="{{ asset('admin/assets/img/dodo-logo.png')}}" srcset="{{ asset('admin/assets/img/dodo-logo.png')}} 2x" alt="" />
            </a>
            <h2 class="form-signin-heading">Forgotten Password? </h2>
            <div class="text-muted" style="text-align:  center;">Enter your email to reset your password:</div>
            <div class="form-group mt-4">
                <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
                <input type="email" id="email" name="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" placeholder="Email address" value="{{ old('email') }}" required>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>

            <button class="btn btn-lg btn-primary btn-block" type="submit">{{ __('Send Password Reset Link') }}</button>

        </form>

    </div>
    <!--===========login end===========-->


    <!-- Placed js at the end of the page so the pages load faster -->
    <script src="{{asset ('admin/assets/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('admin/assets/vendor/jquery-ui-1.12.1/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/popper.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery-ui-touch/jquery.ui.touch-punch-improved.js')}}"></script>
    <script class="include" type="text/javascript" src="{{ asset('admin/assets/vendor/jquery.dcjqaccordion.2.7.js')}}"></script>
    <script src="{{ asset('admin/assets/vendor/jquery.scrollTo.min.js')}}"></script>

    <!--[if lt IE 9]>
    <script src="assets/vendor/modernizr.js"></script>
    <![endif]-->

    <!--init scripts-->
    <script src="{{ asset('admin/assets/js/scripts.min.js')}}"></script>

</body>

<!-- Mirrored from mosaddek.com/theme/diverse/forgot-password.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 23 Jan 2018 17:38:35 GMT -->

</html>