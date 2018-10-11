<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <meta name="description" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="author" content="CMS">

    <title>{{ __('Reset Password') }}</title>
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

        <form class="form-signin" action="{{ route('password.request') }}" method="POST">
        @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <a href="{{ route('password.request') }}" class="brand text-center">
                <img src="{{ asset('admin/assets/img/dodo-logo.png')}}" srcset="{{ asset('admin/assets/img/dodo-logo.png')}} 2x" alt="" />
            </a>
            <h2 class="form-signin-heading">{{ __('Reset Password') }} </h2>
            <div class="form-group mt-4">
                <label for="inputEmail" class="sr-only">{{ __('E-Mail Address') }}</label>
                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Email Address" value="{{ $email ?? old('email') }}" required autofocus>
                @if ($errors->has('email'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
            <div class="form-group mt-4">
                <label for="inputEmail" class="sr-only">{{ __('Password') }}</label>
                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="New Password" name="password" required>

                   @if ($errors->has('password'))
                      <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('password') }}</strong>
                      </span>
                   @endif
            </div>
            <div class="form-group mt-4">
                <label for="password_confirm" class="sr-only">{{ __('Confirm Password') }}</label>
                <input id="password-confirm" type="password" placeholder="Confirm New Password" class="form-control" name="password_confirmation" required>
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