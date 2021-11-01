@extends('frontend.master')

@section('title')
{{ 'Cause' }}
@endsection

@section('header')
    @include('frontend.include.header2')
@endsection

@section('content')
<div class="content">
    <section class="other-hero mb-4" style="
    background-color: #000;
    background-image:url({{asset('backend/img/app_image/add_cause/'.$add_cause->cover_image)}});
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
                <li><a href="{{ route('all-cause') }}">Causes</a></li>
                <li>{{ $singlecause->title  }}</li>
            </ul>
        </div>
    </section>
    <div class="site-content section blog-details-left-sidebar">
        <div class="container">
            <section class="donate-now" style="margin-bottom: 30px; margin-top: 10px">
                <div class="card text-center mb-5">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <h2 class="card-title " style="padding:20px">{{ $singlecause->title }}</h2>

                        <span class="badge badge-danger"> <span class="h5"> Cause: {{ $singlecause->cause }}</span></span>
                        <br>
                        <br>
                        <div class="post-thumbnail py-5">
                            <img src="{{asset('backend/img/app_image/cause/'.$singlecause->image)}}" alt="">
                        </div>

                        <p class="card-text text-center">{{ $singlecause->description }} </p>
                    </div>
                    <br>
                    <div class="row pt-5 mt-5">
                        <div class="col-md-3"></div>
                        <div class="col-md-6 ">
                            <div class="donate-status">
                                <div class="status">
                                    <span>RAISED</span>
                                    <span>TARGET</span>
                                </div>
                                <div class="status-bar "><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 80%"></div></div>
                                <div class="status">
                                    <span>{{ $singlecause->raised }} Tk</span>
                                    <span>{{ $singlecause->target }} Tk</span>
                                </div>
                            </div><!-- .donate-status -->
                        </div>
                        <div class="col-md-3"></div>

                    </div>
                    <div class="container">
                        <div class="donation-method " style="padding-top: 20px; margin-top: 30px; margin-bottom: 30px">
                            <div class="row d-flex justify-content-center text-center">
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->bkash_logo)  : ''  }}" alt="logo is not available">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->bkash: "Not Available"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->rocket_logo)  : ''  }}" alt="logo is not available">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->rocket: "Not Available"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->nagad_logo)  : ''  }}" alt="logo is not available">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->nagad: "Not Available"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->bank_logo)  : 'Not Available'  }}" alt="logo is not available">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->bank: "Not Available"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>



</div>
</div>
@endsection
