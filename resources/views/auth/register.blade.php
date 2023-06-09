@extends('layouts.backend.app')

@section('title', 'NWLS - Registration System')

@push('css')
    <style>
        .input-group-text {
            width: 42px;
        }

        .input-group-text span.fas.fa-eye {
            cursor: pointer;
        }

        .hide-password {
            display: none;
        }

    </style>
@endpush

@section('content')

    <div class="register-box">
        <div class="card card-outline card-primary">
            <div class="logo text-center pt-2">
                <img src="{{ asset('public/assets/images/nwls-logo.png') }}" alt="NWLS-LOGO" width="72" height="72">
            </div>

            <div class="card-header text-center p-0">
                <a href="{{ url('/') }}" class="h1" target="_blank"><b>NW</b>LS</a>
            </div>

            <div class="card-body">
                <p class="login-box-msg">Register a new user</p>

                <form action="{{ route('register') }}" method="POST">
                    @csrf
                    <div class="input-group mb-3">
                        <input type="text" id="name" class="form-control @error('name') is-invalid @enderror" name="name"
                            value="{{ old('name') }}" placeholder="Full Name" required autocomplete="name" autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" id="email" class="form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" placeholder="Email" required autocomplete="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" placeholder="Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text password-showhide">
                                <span class="fas fa-eye show-password"></span>
                                <span class="fas fa-eye-slash hide-password"></span>
                            </div>
                        </div>

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="input-group mb-3">
                        <input type="password" id="password-confirm" class="form-control" name="password_confirmation"
                            placeholder="Retype Password" required autocomplete="new-password">
                        <div class="input-group-append">
                            <div class="input-group-text confirm-password-showhide">
                                <span class="fas fa-eye show-password"></span>
                                <span class="fas fa-eye-slash hide-password"></span>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="input-group">
                                <div class="input-group-append">
                                    <div class="input-group-text" style="background-color: #fff!important; padding: 0px 2px!important; border: 0px!important;">
                                        <span>
                                            <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                            @if ($errors->has('g-recaptcha-response'))
    <p class="text-danger text-left mt-1" style="font-size: 14px;!important">{{ $errors->first('g-recaptcha-response') }}</p>
    @endif
                                        </span>
                                    </div>
                                </div>
                            </div> -->

                    <div class="row">
                        <div class="col-12">
                            <button type="submit" class="btn btn-primary btn-block mb-1">Register</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>

                <a href="{{ route('login') }}" class="text-center">I already have a user</a>
            </div>
            <!-- /.card-body -->
            <div class="card-footer d-flex flex-column text-center ftr">
                <small><a>Powered By</a></small>
                <small><a>Blue Ocean Tech Solutions Pvt. Ltd.</a></small>
            </div>
            <!-- /.card-footer -->
        </div><!-- /.card -->
    </div>
    <!-- /.register-box -->
@endsection

@push('js')
    <script>
        $(document).ready(function() {
            $(".show-password, .hide-password").on('click', function() {
                var passwordId = $(this).parents('div:nth(2)').find('input').attr('id');
                if ($(this).hasClass('show-password')) {
                    $("#" + passwordId).attr("type", "text");
                    $(this).parent().find(".show-password").hide();
                    $(this).parent().find(".hide-password").show();
                } else {
                    $("#" + passwordId).attr("type", "password");
                    $(this).parent().find(".hide-password").hide();
                    $(this).parent().find(".show-password").show();
                }
            });
        });
    </script>
@endpush
