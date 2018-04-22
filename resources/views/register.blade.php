<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>My Band</title>

        <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
        <script link="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
    </head>
    <body>
        <div class="position-ref full-height">
            <div class="welcome-header full-height">
            @include('modules/navbar')

            <div class="content fade-in-2">
                <div class="title-light m-b-md">
                    New Account
                </div>
                <div class="line-separator">
                </div>
                <div class="padding">
                </div>
                <div style="width:50%; margin: 0 auto; text-align: left;">
                    <form id="create-form" method="POST" action="{{ route('register.post') }}">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <label for="emailAddress">Email Address</label>
                            <input type="email" class="form-control" id="email" placeholder="Email" name="email" value="{{ old('email') }}">
                        </div>
                        <div class="form-group">
                            <label for="password">Password</label>
                            <input type="password" class="form-control" id="password" placeholder="Password" name="password" value="{{ old('password') }}">
                        </div>
                        <div class="form-group">
                            <label for="passwordConfirm">Confirm Password</label>
                            <input type="password" class="form-control" id="passwordConfirm" placeholder="Password" name="passwordConfirm" value="{{ old('passwordConfirm') }}">
                        </div>
                        </br>
                        <div class="form-group" style="text-align:center">
                            <a class="btn green" href="javascript:{}" onclick="document.getElementById('create-form').submit();">Create Account</a>
                        </div>
                    </form>
                </div>
            </div>
            </div>
        </div>
    </body>
</html>