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
                            <div class="card-header border-0">
                                <div class="card-title text-center">
                                    <img src="{{ asset('public/rubsto/app-assets/images/logo/logo-dark.png')}}" alt="branding logo">
                                </div>
                                {{-- <h6 class="card-subtitle line-on-side text-muted text-center font-small-3 pt-2"><span>Easily Using</span></h6> --}}
                            </div>
                            {{-- <div class="card-content">
                                <div class="text-center">
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-facebook"><span class="fa fa-facebook"></span></a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-twitter"><span class="fa fa-twitter"></span></a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-linkedin"><span class="fa fa-linkedin font-medium-4"></span></a>
                                    <a href="#" class="btn btn-social-icon mr-1 mb-1 btn-outline-github"><span class="fa fa-github font-medium-4"></span></a>
                                </div> --}}
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>{{__('Login')}}</span></p>
                                <div class="card-body">
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}" novalidate>
                                        @csrf
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input id="email" type="email" class="form-control 
                                                @error('email') is-invalid @enderror"  placeholder="{{__('E_mail')}}"
                                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="ft-user"></i>
                                            </div>
                                            
                                        </fieldset>
                                        <fieldset class="form-group position-relative has-icon-left">
                                            <input id="password" type="password" class="form-control 
                                                @error('password') is-invalid @enderror"
                                                name="password" required autocomplete="current-password" placeholder="{{__('Password')}}">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                            <div class="form-control-position">
                                                <i class="fa fa-key"></i>
                                            </div>
                                        </fieldset>
                                        <div class="form-group row">
                                            <div class="col-md-6 col-12 text-center text-sm-left">
                                                <fieldset>
                                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                                </fieldset>
                                            </div>
                                            @if (Route::has('password.request'))
                                                <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                                                    <a  href="{{ route('password.request') }}" class="card-link">{{ __('Forgot Your Password?') }}</a>
                                                </div>
                                            @endif
                                            
                                        </div>
                                        <button type="submit" class="btn btn-outline-info btn-block"><i class="ft-unlock"></i> {{__('Login')}}</button>
                                    </form>
                                </div>
                                <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1"><span>{{__('New to User')}}</span></p>
                                <div class="card-body">
                                    <a href="{{ route('register') }}" class="btn btn-outline-danger btn-block"><i class="ft-user"></i>{{__('Register')}}</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>
@endsection