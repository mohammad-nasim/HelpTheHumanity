@extends('frontend.master')

@section('title')
{{ 'Donate Now' }}
@endsection

@section('header')
    @include('frontend.include.header2')
@endsection

@section('content')
<section class="other-hero mb-4" style="
    background-color: #000;
    background-image:url({{asset('backend/img/app_image/add_donate_now/'.$add_donatenow->cover_image)}});
    background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
    min-height: 290px;
    width: 100%;
    position: relative;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;">
    <div class="container other-hero-text">
        <h1></h1>
        <ul class="breadcrumb">
            <li><a href="{{ route('webhome') }}">Home</a></li>
            <li>Donate Now</li>
        </ul>
    </div>
</section>
<div class="container">
    <section class="donate-now" style="margin-bottom: 10px; margin-top: 40px">
        <div class="section-header">
            <h2>Donate Now</h2>
            <p>{{ $add_donatenow->title }}</p>
        </div>
        <!-- .section-header -->
        <div class="card text-center mb-5">
            <div class="card-header">
            </div>
            <div class="card-body">
                <h2 class="card-title " style="padding:0px">{{ $donatenow->title }}</h2>
                <br>
                <span class="badge badge-danger"> <span class="h5"> Cause: {{ $donatenow->cause }}</span></span>
                <br>
                <br>
                <div class="post-thumbnail py-5"><img src="{{asset('backend/img/app_image/donatenow/'.$donatenow->image)}}" alt=""></div>
                <p class="card-text text-center">{{ $donatenow->description }}</p>
            </div>
            <div class="container">
                <div class="donation-method " style="padding-top: 20px; margin-top: 30px; margin-bottom: 30px">
                    <div class="row d-flex justify-content-center text-center">
                        <div class="col-12 col-md-3" style="margin-bottom: 30px">
                            <div class="card" >
                                <img class="card-img-top" src="{{asset('backend/img/app_image/donatenow/'.$donatenow->bkash_logo)}}" alt="Card image cap">
                                <div class="card-body">
                                    <br>
                                  <p class="card-text h4">{{ $donatenow->bkash }}</p>
                                  <a href="#" class="btn btn-danger disabled"> Reference : {{ $donatenow->reference }}</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-md-3" style="margin-bottom: 30px">
                            <div class="card" ">
                                <img class="card-img-top" src="{{asset('backend/img/app_image/donatenow/'.$donatenow->rocket_logo)}}" alt="Card image cap">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text h4">{{ $donatenow->rocket }}</p>
                                  <a href="#" class="btn btn-danger disabled"> Reference : {{ $donatenow->reference }}</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-md-3" >
                            <div class="card" ">
                                <img class="card-img-top" src="{{asset('backend/img/app_image/donatenow/'.$donatenow->nagad_logo)}}" alt="Card image cap">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text h4">{{ $donatenow->nagad }}</p>
                                  <a href="#" class="btn btn-danger disabled"> Reference : {{ $donatenow->reference }}</a>
                                </div>
                              </div>
                        </div>
                        <div class="col-12 col-md-3" >
                            <div class="card" ">
                                <img class="card-img-top" src="{{asset('backend/img/app_image/donatenow/'.$donatenow->bank_logo)}}" alt="Card image cap">
                                <div class="card-body">
                                    <br>
                                    <p class="card-text h4">{{ $donatenow->bank }}</p>
                                  <a href="#" class="btn btn-danger disabled"> Reference : {{ $donatenow->reference }}</a>
                                </div>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
@endsection
