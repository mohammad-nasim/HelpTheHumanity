@extends('frontend.master')

@section('title')
{{ 'Service' }}
@endsection

@section('content')
<!-- Start Hero Section -->
<div class="content">
    <!-- End Hero Section -->

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
                        <p>{{ $service->description }}</p>


            </main><!-- .col -->
        </div>
        </div>
    </div>
</div>
    <!-- Start site-content -->
@endsection
