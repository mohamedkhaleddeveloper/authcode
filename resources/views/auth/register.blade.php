@extends('layouts.app')
@section('content')
<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
<div class="app-content content">
      <div class="content-wrapper">
        <div class="content-header row"></div>
        <div class="content-body">
            <section class="flexbox-container">
                <div class="col-12 d-flex align-items-center justify-content-center">
                    <div class="col-md-4 col-10 box-shadow-2 p-0">
                        <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                            <div class="card-header border-0 pb-0">
                                <div class="card-title text-center">
                                    <img src="{{ asset('public/rubsto/app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                                </div>
                            </div>
                            <div class="card-content">
                                
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>{{__('Register')}}</span></p>
                                <div class="card-body pt-0">
                                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-name">{{__('Name')}}</label>
                                            <input id="name" type="text" class="form-control 
                                                @error('name') is-invalid @enderror" name="name" 
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group">
                                            <label for="user-email">{{__('E_mail')}}</label>
                                            {{-- <input type="email" class="form-control" id="user-email" placeholder="Your Email Address"> --}}
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group mb-1">
                                            <label for="user-password">{{__('Password')}}</label>
                                            {{-- <input type="password" class="form-control" id="user-password" placeholder="Enter Password"> --}}
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </fieldset>
                                        <fieldset class="form-group floating-label-form-group mb-1">
                                            <label for="user-password">{{__('Confirm Password')}}</label>
                                            {{-- <input type="password" class="form-control" id="user-password" placeholder="Enter Password"> --}}
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </fieldset>
                                        {{-- <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input type="checkbox" id="remember-me" class="chk-remember">
                                                    <label for="remember-me">{{__('Remember Me')}}</label>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6 col-12 float-sm-left text-center text-sm-right"><a href="recover-password.html" class="card-link">{{__('Forgot Your Password?')}}</a></div>
                                        </div> --}}
                                        <button type="submit" class="btn btn-outline-info btn-block mb-3"><i class="ft-user"></i>{{__('Register')}}</button>
                                    </form>
                                </div>
                                <div class="card-body pt-0">
                                    <a href="{{ route('login') }}" class="btn btn-outline-danger btn-block"><i class="ft-unlock"></i>{{__('Login')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////////////////////////-->
@endsection
