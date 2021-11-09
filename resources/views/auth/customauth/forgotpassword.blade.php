@extends('auth.customauth.master')

@section('title')
Reset Password
@endsection

@section('content')
<div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
    <div class="card card0 border-0">
        <div class="row d-flex">
            <div class="col-lg-6">
                <div class="card1 pb-5">
                    <div class="row px-3 justify-content-center mt-4 mb-5 border-line">
                        <img class="img-fluid"
                            style="width:360px;height:360px" src="{{ asset('customauth/img/forgotpass.png') }}">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 ">
                <div class="card2 card border-0 px-4 py-5">
                    <div class="row px-3 mb-4">
                        <div>
                            <h3>Get a <strong class="reset-text">Password </strong>Reset Link</h3>
                            <br>
                        </div>
                    </div>

                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email Address</h6>
                            </label>
                            <input id="email" type="email" class="mb-4 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Enter a valid email address">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="r0w mb-5 px-3">
                            <button type="submit" class="btn btn-block text-center btn-forgot ">Send Password Reset Link</button>
                        </div>
                    </form>
                    <div class="row mb-4 px-3">
                        <h6 class="font-weight-bold">Already have an account ?
                        <a href={{ url('login')}} class="text-danger ">Login</a>
                        </h6>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-blue py-4">
            <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2019. All rights reserved.</small>
                <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span
                        class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span>
                    <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
            </div>
        </div>
    </div>
</div>
@endsection
