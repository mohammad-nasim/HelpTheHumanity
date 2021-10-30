@extends('frontend.master')

@section('title')
    {{ 'Features' }}
@endsection

@section('content')
<div class="content">
    <section class="other-hero">
        <div class="container other-hero-text">
            <h1>Feature</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('webhome') }}>Home</a></li>
                <li>Feature</li>
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
                        <div class="post-thumbnail img-fluid"><img src="{{asset('backend/img/app_image/feature_section/'.$feature->image)}}" alt="" ></div>
                        <div class="post-details-wrap">
                            <div class="byline">
                                <span><i class="icofont icofont-ui-calendar"></i>{{ Carbon\Carbon::parse( $feature->created_at )->toFormattedDateString() }}</span>
                            </div>
                            <h2 class="entry-title">{{ $feature->title }}</h2>
                        </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                        <p>{{ $feature->description }}</p>


            </main><!-- .col -->
        </div>
        </div>
    </div>
</div>
@endsection
