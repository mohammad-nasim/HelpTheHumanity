@extends('auth.customauth.master')

@section('content')
<div class="container-fluid  py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img class="img-fluid"
                            style="width:360px;height:360px" src="{{ asset('customauth/img/loginlogo.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3 mb-4">
                        <div>
                            <h3>Help The <strong>Humanity</strong> Foundation</h3>
                            <br>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                    <div class="row px-3">
                        <label class="mb-1">
                            <h6 class="mb-0 text-sm">Email Address</h6>
                        </label>
                        <input id="email" type="email" class="mb-1 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter a valid email address">

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row px-3">
                        <label class="mb-1 mt-3">
                            <h6 class="mb-0 text-sm">Password</h6>
                        </label>
                        <input id="password" type="password" class="  form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Enter password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>

                    <div class="row px-3 mb-4">
                        <a href="{{ route('password.request') }}"
                          class="ml-auto mb-0 text-sm">Forgot Password?
                        </a>
                    </div>

                    <div class="row mb-5 px-3">
                        <button type="submit" class="btn btn-blue text-center">Login</button>
                    </div>

                    <div class="row mb-4 px-3">
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; Help The Humanity Foundation 2021-22. All rights reserved.</small>
            </div>
        </div>
    </div>
</div>
@endsection
