@extends('layouts.app')

@section('content')
    <div class="container py-4 justify-content-center d-flex">
        <div class="row justify-content-center">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <img src="img/V.jpg" width="45%">
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">{{ __('Register') }}</h1>
                                    </div>
                                    <form class="user" method="POST" action="{{ route('register') }}">
                                        @csrf
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user @error('name') is-invalid @enderror"
                                                id="name" aria-describedby="nameHelp"
                                                placeholder="{{ __('Name') }}" name="name"
                                                value="{{ old('name') }}" required autocomplete="name" autofocus>
                                            
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user @error('email') is-invalid @enderror"
                                                id="email" aria-describedby="emailHelp"
                                                placeholder="{{ __('Email Address') }}" name="email"
                                                value="{{ old('email') }}" required autocomplete="email">
                                                
                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user @error('password') is-invalid @enderror"
                                                id="password" placeholder="{{ __('Password') }}" name="password"
                                                required autocomplete="new-password">
                                            
                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="password-confirm" placeholder="{{ __('Confirm Password') }}" name="password_confirmation"
                                                required autocomplete="new-password">
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-user btn-block" value="{{ __('Register') }}">
                                    </form>
                                    <hr>
                                    <div class="text-center">
                                        <a class="small" href="/login">Return to Login!</a>
                                    </div>
                                </div>
                            </div>
                        </div>                
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
