@extends('frontend.master')

@section('title')
{{ 'About-Us' }}
@endsection

@section('content')
<!-- Start Hero Section -->
<div class="content">
    <section class="other-hero">
        <div class="container other-hero-text">
            <h1>About Us</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('webhome') }}">Home</a></li>
                <li>About-us</li>
            </ul>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start site-content -->

    <div class="site-content section blog-details-left-sidebar">
        <div class="container">
            <div class="section-header">
                <h2>About Us</h2>
                <p>{{ $add_aboutus->description }}</p>
            </div><!-- .section-header -->

            <main class="site-main">
                <article class="post post-details">

                    @foreach ($aboutus as $data)
                    <div class="entry-content">
                        <header class="entry-header">
                            <div class="post-details-wrap">
                                <h2 class="entry-title">{{ $data->title }}</h2>
                            </div><!-- .post-details-wrap -->
                            <div class="post-thumbnail">
                                @if ($data->image)
                                <img src="{{asset('backend/img/app_image/about_us/'.$data->image)}}" alt="" style="width: 600px; height: 400px">
                                @else
                                @endif
                            </div>
                        </header>
                        <p>{{ $data->description }}</p>

                    </div>
                    @endforeach
            </main><!-- .col -->
        </div>
        </div>
    </div>
</div>
    <!-- Start site-content -->
@endsection
