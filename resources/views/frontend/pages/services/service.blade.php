@extends('frontend.master')

@section('title')
{{ 'Service' }}
@endsection

@section('header')
    @include('frontend.include.header2')
@endsection

@section('content')
<div class="content">
    <section class="other-hero mb-4" style="
    background-color: #000;
    background-image:url({{asset('backend/img/app_image/add_service/'.$add_data->cover_image)}});
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
                <li><a href="{{ route('allservice') }}">Services</a></li>
                <li>{{ $service->title  }}</li>
            </ul>
        </div>
    </section>

    <!-- Start site-content -->
    <div class="site-content section blog-details-left-sidebar">
        <div class="container">
            <main class="site-main">
                <article class="post post-details">
                    <header class="entry-header">
                        <div class="post-thumbnail"><img src="{{asset('backend/img/app_image/service/'.$service->image)}}" alt=""></div>
                        <div class="post-details-wrap">
                            <div class="byline">
                                <span><i class="icofont icofont-ui-calendar"></i>{{ Carbon\Carbon::parse( $service->created_at )->toFormattedDateString() }}</span>
                            </div>
                            <h2 class="entry-title">{{ $service->title }}</h2>
                        </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                        <p>{!! $service->description !!}</p>


            </main><!-- .col -->
        </div>
        </div>
    </div>
</div>
    <!-- Start site-content -->
@endsection
