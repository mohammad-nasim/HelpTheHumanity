@extends('frontend.master')

@section('title')
    {{ 'Event' }}
@endsection

@section('content')
<div class="content">
    <section class="other-hero">
        <div class="container other-hero-text">
            <h1>Event</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Event Details</li>
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
                        <div class="post-thumbnail"><img src="img/blog-2.jpg" alt=""></div>
                        <div class="post-details-wrap">
                            <div class="byline">
                                <span class="posted-on"><a href="#"><i class="fa fa-calendar"></i>10 Jan 2017</a></span>
                            </div>
                            <h2 class="entry-title">WE BUILD SCHOOL & HOSPITAL</h2>
                        </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor.
                            Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur
                            ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla
                            consequat massa quis enim. Donec pede justo, fringilla vel, aliquet nec, vulputate eget,
                            arcu. In enim justo, rhoncus ut, imperdiet a, venenatis vitae, justo.</p>
                        <p>Nullam dictum felis eu pede mollis pretium. Integer tincidunt. Cras dapibus. Vivamus
                            elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo ligula, porttitor eu,
                            consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in, viverra quis, feugiat a,
                            tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque rutrum. Aenean imperdiet.
                            Etiam ultricies nisi vel augue. Curabitur ullamcorper ultricies nisi. Nam eget dui. Etiam
                            rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet
                            adipiscing sem neque sed ipsum</p>

            </main><!-- .col -->
        </div>
        </div>
    </div>
</div>
@endsection
