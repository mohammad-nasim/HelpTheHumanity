@extends('frontend.master')

@section('title')
{{ 'Feature' }}
@endsection

@section('header')
@include('frontend.include.header2')
@endsection

@section('content')
<div class="content">
    <section class="other-hero mb-4" style="
    background-color: #000;
    background-image:url({{asset('backend/img/app_image/add_feature_section/'.$add_data->cover_image)}});
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
                <li><a href="{{ route('allfeature') }}">Features</a></li>
                <li>{{ $feature->title  }}</li>
            </ul>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start site-content -->
    <div class="site-content section blog-details-left-sidebar">
        <div class="container">
            <main class="site-main">
                <article class="post post-details">
                    <header class="entry-header">
                        <div class="post-thumbnail img-fluid"><img
                                src="{{asset('backend/img/app_image/feature_section/'.$feature->image)}}" alt=""></div>
                        <div class="post-details-wrap">
                            <div class="byline">
                                <span>
                                    <i
                                      class="icofont icofont-ui-calendar">
                                    </i>{{ Carbon\Carbon::parse( $feature->created_at )->toFormattedDateString() }}</span>
                            </div>
                            <h2 class="entry-title">{{ $feature->title }}</h2>
                        </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                    <p>{!! $feature->description !!}</p>
            </main><!-- .col -->
        </div>
    </div>
</div>
</div>
@endsection
