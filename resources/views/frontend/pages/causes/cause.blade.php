@extends('frontend.master')

@section('title')
{{ 'Cause' }}
@endsection

@section('content')
<div class="content">


    <!-- Start site-content -->
    <div class="site-content section blog-details-left-sidebar">
        <div class="container">
            <section class="donate-now" style="margin-bottom: 30px; margin-top: 20px">
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
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->bkash_logo)  : ''  }}" alt="Card image cap">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->bkash: "Empty"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "Empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->rocket_logo)  : ''  }}" alt="Card image cap">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->rocket: "Empty"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "Empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->nagad_logo)  : ''  }}" alt="Card image cap">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->nagad: "Empty"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "Empty" }}</a>
                                        </div>
                                      </div>
                                </div>
                                <div class="col-12 col-md-3" style="margin-bottom: 30px">
                                    <div class="card" >
                                        <img class="card-img-top" src="{{ $singlecause->paymentmethod ? asset('backend/img/app_image/payment_method/'.$singlecause->paymentmethod->bank_logo)  : ''  }}" alt="Card image cap">
                                        <div class="card-body">

                                          <p class="card-text h3">{{ $singlecause->paymentmethod ? $singlecause->paymentmethod->bank: "Empty"}}</p>

                                          <a href="#" class="btn btn-danger disabled"> Reference : {{ $singlecause->paymentmethod ? $singlecause->paymentmethod->reference: "Empty" }}</a>
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
