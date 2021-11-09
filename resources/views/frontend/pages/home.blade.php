@extends('frontend.master')

@section('title')
    {{ 'Home' }}
@endsection

@section('header')
    @include('frontend.include.header')
@endsection

@section('content')
<!-- Start Hero Section -->
<section class="hero text-center" id="home">
    <div class="single-slide">
        <div class="container">
            <h1>{{$herosection->title}}</h1>
            <h3>{{$herosection->slogan_1}}</h3>
            <h5>{{$herosection->slogan_2}}</h5>
            <div class="hero-btn-group">
                <a href="{{ route('donate-now') }}" class="t-btn hero-btn-1">DONATE NOW</a>
                <a href="#about" class="t-btn hero-btn-2">LEARN MORE</a>
            </div>
        </div>
    </div><!-- .single-slide -->
    <div class="hero-slider owl-carousel">
        <img src="{{asset('backend/img/app_image/hero_section/'.$herosection->image_1)}}" alt="">
        <img src="{{asset('backend/img/app_image/hero_section/'.$herosection->image_2)}}" alt="">
    </div>

</section>
<!-- End Hero Section -->

<!-- Start Feature Section -->
<section class="feature section black-bg text-center">
    <div class="container">
        <div class="row flex">
            @foreach ($features as $feature_data)
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="{{ $feature_data->icon }}"></i>
                    <h3>{{ $feature_data->title }}</h3>
                    <p class="text-justify">{{ \Illuminate\Support\Str::limit($feature_data->description, 160)  }}</p>
                    <a href="{{ route('feature', $feature_data->id)  }}">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
        <div class="hero-btn-group pt-5">
            <a href="{{ route('allfeature') }}" class="t-btn hero-btn-1">All Features</a>
        </div>
    </div>
</section>
<!-- End Feature Section -->

<!-- Start About Section -->
<section class="about section" id="about">
    <div class="container">
        <div class="section-header">
            <h2>About Us</h2>
            <p>{{ $add_aboutus->title }}</p>
        </div><!-- .section-header -->
        <div class="row">
            <div class="col-lg-6">
                <div class="accordian-wrapper">
                    @foreach ($aboutus as $aboutusdata )
                    <div class="single-accordian">
                        <h3 class="accordian-head">{{ $aboutusdata->title }}</h3>
                        <div class="accordian-body">
                            <a href="{{ route('about-us') }}" class="text-justify">{{ \Illuminate\Support\Str::limit($aboutusdata->description, 200)  }}</a>
                        </div>
                    </div><!-- .single-accordian -->
                    @endforeach
                </div>
                <div class="hero-btn-group pt-5">
                    <a href="{{ route('about-us') }}" class="t-btn hero-btn-1">Learn more about us</a>
                </div>
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="video-section">
                    <!-- For Youtube -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe width="560" height="315" src="{{ $add_aboutus->video_link }}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                  <!-- For Vimeo -->
                    <!-- <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="816" height="458" src="https://player.vimeo.com/video/172077385?title=0&byline=0&portrait=0&color=EE5A3F&autoplay=0&loop=0&wmode=transparent" allowfullscreen>
                        </iframe>
                    </div> -->
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End About Section -->

<!-- Start Service Section -->
<section class="service section black-bg" id="service">
    <div class="container">
        <div class="section-header white">
            <h2>SERVICES</h2>
            <p>{{ $add_service->title }}</p>
        </div><!-- .section-header -->
        <div class="row flex text-center">
            @foreach ($service as $service_data)
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="{{ $service_data->icon }}" ></i>
                    <h3>{{ $service_data->title }}</h3>
                    <p class="text-justify">{{ \Illuminate\Support\Str::limit($service_data->description, 160)  }}</p>
                    <a href="{{ route('service',$service_data->id) }}">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            @endforeach
    </div>
    <div class="hero-btn-group pt-5">
        <a href="{{ route('allservice') }}" class="t-btn hero-btn-1">All Services</a>
    </div>

</section>
<!-- End Service Section -->

<!-- Start Donate Section -->
<section class="donate section text-center"
        style="  background-image:url({{asset('backend/img/app_image/add_donate_now/'.$add_donate_now->bg_image)}});
        background-position: center center;
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;">
    <div class="container">
        <h2>{{ $donate_now->title }}</h2>
        <p>{{ $donate_now->description }}</p>
        <a href="{{ route('donate-now') }}" class="t-btn donate-btn">DONATE NOW</a>
    </div>
</section>
<!-- End Donate Section -->

<!-- Start Cause Section -->
<section class="cause section" id="cause">
    <div class="container ">
        <div class="section-header">
            <h2>CAUSES</h2>
            <p>{{ $add_cause->title }}</p>
        </div><!-- .section-header -->
        <div class="row flex">
            @foreach ($cause as $cause_data)
            <div class="col-sm-4">
                <div class="single-cause">
                    <img src="{{asset('backend/img/app_image/cause/'.$cause_data->image)}}" class="cause-thumb image-fluid" alt="" >
                    <h3>{{ $cause_data->title }}</h3>
                    <p class="text-justify">{{ \Illuminate\Support\Str::limit($cause_data->description, 160)  }}</p>
                    <div class="donate-status">
                        <div class="status">
                            <span>RAISED</span>
                            <span>TARGET</span>
                        </div>
                        <div class="status-bar "><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 80%"></div></div>
                        <div class="status">
                            <span>{{ $cause_data->raised }} Tk</span>
                            <span>{{ $cause_data->target }} Tk</span>
                        </div>
                    </div><!-- .donate-status -->
                    <a href="{{ route('cause', $cause_data->id) }}" class="t-btn t-btn-ex-small">DONATE NOW</a>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
        <div class="hero-btn-group pt-5">
            <a href="{{ route('all-cause') }}" class="t-btn donate-btn">All Causes</a>
        </div>
    </div>
</section>
<!-- End Cause Section -->

<!-- Start Gallery Section -->
<section class="gallery section" id="gallery">
    <div class="container">
        <div class="section-header">
            <h2>GALLERY</h2>
            <p>{{ $add_gallery->title }}</p>
        </div><!-- .section-header -->
        <div class="portfolio zoom-gallery gutter-less">
            <div class="grid-sizer"></div>

            @foreach ( $gallery as $gallery_data )
            <div class="portfolio-item">
                <a href="{{asset('backend/img/app_image/gallery/'.$gallery_data->images)}}" class="gallery-item"><img src="{{asset('backend/img/app_image/gallery/'.$gallery_data->images)}}" alt="">
                </a>
            </div><!-- .portfolio-item -->
            @endforeach
        </div><!-- .portfolio -->
        <div class="hero-btn-group pt-5">
            <a href="{{ route('gallery') }}" class="t-btn donate-btn">All Photos</a>
        </div>
    </div><!-- .container -->
</section>
<!-- End Gallery Section -->

<!-- Start Fun Factor Section -->
<section class="fun-factor section text-center" style="background-image: url({{asset('backend/img/app_image/fun_factor/'.$funfactor_img->bg_image)}});">
    <div class="container">
        <div class="row flex">
            @foreach ($funfactor as $funfactor_data)
            <div class="col-sm-3">
                <div class="single-factor">
                    <i class="{{ $funfactor_data->icon }}"></i>
                    <h3 class="counter">{{ $funfactor_data->counter }}</h3>
                    <h2>{{ $funfactor_data->project }}</h2>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
    </div>
</section>
<!-- End Fun Factor Section -->

<!-- Start Team Section -->
<section class="team section">
    <div class="container">
        <div class="section-header">
            <h2>OUR TEAM</h2>
            <p>{{ $add_ourteam->title }}</p>
        </div><!-- .section-header -->
        <div class="row flex text-center">
            @foreach ($ourteam as $ourteam_data )
            <div class="col-sm-3">
                <div class="team-member">
                    <div class="member-thumb">
                        <img src="{{asset('backend/img/app_image/our_team/'.$ourteam_data->image)}}" alt="">
                        <div class="member-social">
                            <a href="{{ $ourteam_data->linkone }}"><i class="fab fa-facebook-f"></i></a>
                            <a href="{{ $ourteam_data->linktwo }}"><i class="fab fa-linkedin-in"></i></i></a>
                            <a href="{{ $ourteam_data->linkthree }}"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">{{ $ourteam_data->name }}</h3>
                    <span class="designation">{{ $ourteam_data->position }}</span>
                </div>
            </div><!-- .col -->
            @endforeach
        </div>
        <div class="hero-btn-group pt-5">
            <a href="{{ route('our-team') }}" class="t-btn donate-btn">See More</a>
        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- Start Event Section -->
<section class="event section" id="event">
    <div class="container">
        <div class="section-header">
            <h2>OUR EVENT</h2>
            <p>{{ $add_event->title }}</p>
        </div><!-- .section-header -->
        <div class="row flex">
            @foreach ($event as $event_data)

            <div class="col-lg-6">
                <div class="single-event">
                    <div class="event-thumb"><img src="{{asset('backend/img/app_image/event/'.$event_data->image)}}" alt=""></div>
                    <div class="event-details">
                        <h3>{{ $event_data->title }}</h3>
                        <p class="text-justify">{{ \Illuminate\Support\Str::limit($event_data->description, 160)  }}</p>
                        <div class="event-location">
                            <span><i class="icofont icofont-ui-calendar"></i>{{ Carbon\Carbon::parse( $event_data->date )->toFormattedDateString() }}</span>
                            <span><i class="icofont icofont-location-pin"></i>Bangladesh</span>
                        </div>
                        <div class="event-btn-group">
                            <a href="{{ route('event', $event_data->id) }}" class="t-btn t-btn-ex-small event-btn-1">Details</a>
                            <a href="{{ route('all-event') }}" class="t-btn t-btn-ex-small event-btn-2">All Events</a>
                        </div>
                    </div>
                </div>
            </div><!-- .col -->
            @endforeach
    </div>
</section>
<!-- End Event Section -->

<!-- Start Client Section -->
<div class="client section" style="
        background-image: url({{asset('backend/img/app_image/partner/'.$partner->bg_image)}});
        background-position: center center;
        position: relative;
        background-repeat: no-repeat;
        background-size: cover;
        background-attachment: fixed;
        min-height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-wrap: wrap;">
    <div class="container">
        <div class="client-logo">
            <img src="{{asset('backend/img/app_image/partner/'.$partner->image_one)}}" alt="" style="width:180px;height:100px">
            <img src="{{asset('backend/img/app_image/partner/'.$partner->image_two)}}" alt="" style="width:180px;height:100px">
            <img src="{{asset('backend/img/app_image/partner/'.$partner->image_three)}}" alt="" style="width:180px;height:100px">
            <img src="{{asset('backend/img/app_image/partner/'.$partner->image_four)}}" alt="" style="width:180px;height:100px">
        </div>
    </div>
</div>
<!-- End Client Section -->

<!-- Start Blog Section -->
<section class="blog home-blog section" id="blog">
    <div class="container">
        <div class="section-header">
            <h2>OUR NEWS</h2>
            <p>{{ $add_news->title }}</p>
        </div>
        <!-- .section-header -->
        <div class="row flex">
            @foreach ($news as $news_data )
            <div class="col-sm-6">
                <div class="post">
                    <header class="entry-header">
                          <a href="blog-details-1.html" class="post-thumbnail" target="_blank"><img src="{{asset('backend/img/app_image/news/'.$news_data->image)}}" alt="" ></a>
                          <div class="post-details-wrap">
                            <h2 class="entry-title"><a href="blog-details-1.html" target="_blank">{{ $news_data->title }}</a></h2>
                            <div class="byline">
                                  <span class="author"><a href="#"><i class="fa fa-user"></i> Post Admin</a></span>
                                <span class="posted-on"><span>{{ Carbon\Carbon::parse( $news_data->date )->toFormattedDateString() }}</span>
                            </div>
                          </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                        <p class="text-justify">{{ \Illuminate\Support\Str::limit($news_data->description, 160)  }}</p>
                          <a href="{{ route('news', $news_data->id) }}" class="t-btn t-btn-ex-small read-more-btn" target="_blank">Read More</a>
                    </div>
                </div><!-- .post -->
            </div><!-- .col -->
            @endforeach
        </div>
        <div class="hero-btn-group pt-5">
            <a href="{{ route('all-news') }}" class="t-btn donate-btn">See More</a>
        </div>
    </div>
</section>
<!-- End Blog Section -->

<!-- Start Contact Section -->
<section class="contact section" id="contact">
    <div class="container">
        <div class="section-header">
            <h2>CONTACT</h2>
            <p>{{ $add_contact->title }}</p>
        </div><!-- .section-header -->
        <form action="{{ route('contact.message') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" name="first_name" placeholder="First Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="last_name"  placeholder="Last Name">
                </div>
                <div class="col-sm-6">
                    <input type="email" name="email"  placeholder="Enter Email">
                </div>
                <div class="col-sm-6">
                    <input type="text" name="phone"  placeholder="Mobile No.">
                </div>
                <div class="col-sm-12">
                    <textarea cols="30" name="message"  rows="10" placeholder="Enter Your Message"></textarea>
                </div>
                <div class="col-sm-12 text-center">
                    <button type="submit" class="t-btn submit-btn">Send Message</button>
                </div>
            </div>
        </form>
    </div>
</section>
<!-- End Contact Section -->
@endsection
