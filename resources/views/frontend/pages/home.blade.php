@extends('frontend.master')

@section('title')
    {{ 'Home' }}
@endsection

@section('content')
<!-- Start Hero Section -->
<section class="hero text-center" id="home">
    <div class="single-slide">
        <div class="container">
            <h1>HUMANITY . <span>INTEGRITY</span> . HONESTY</h1>
            <h3>AWESOME THEMEZ PRESENT NON-PROFIT SITE</h3>
            <h5>Donation and help us for homeless people.We are a organization that helps for children people.</h5>
            <div class="hero-btn-group">
                <a href="" class="t-btn hero-btn-1">DONATE NOW</a>
                <a href="" class="t-btn hero-btn-2">LEARN MORE</a>
            </div>
        </div>
    </div><!-- .single-slide -->
    <div class="hero-slider owl-carousel">
        <img src="img/hero-bg-1.jpg" alt="">
        <img src="img/hero-bg-2.jpg" alt="">
    </div>
</section>
<!-- End Hero Section -->

<!-- Start Feature Section -->
<section class="feature section black-bg text-center">
    <div class="container">
        <div class="row flex">
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-coins"></i>
                    <h3>Donation Now</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-users"></i>
                    <h3>Join As Volunteer</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-read-book"></i>
                    <h3>Provide Education</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Feature Section -->

<!-- Start About Section -->
<section class="about section" id="about">
    <div class="container">
        <div class="section-header">
            <h2>About Us</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="row">
            <div class="col-lg-6">
                <div class="accordian-wrapper">
                    <div class="single-accordian">
                        <h3 class="accordian-head">Charity Owner / Founder</h3>
                        <div class="accordian-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  htin doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim impo voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequr mni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia. Dolor sit amet, consectetur adipiscing elit.</div>
                    </div><!-- .single-accordian -->
                    <div class="single-accordian">
                        <h3 class="accordian-head">Our Vision  & Mission</h3>
                        <div class="accordian-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  htin doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim impo voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequr mni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia. Dolor sit amet, consectetur adipiscing elit.</div>
                    </div><!-- .single-accordian -->
                    <div class="single-accordian">
                        <h3 class="accordian-head">Who We Are</h3>
                        <div class="accordian-body">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium  htin doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim impo voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequr mni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia. Dolor sit amet, consectetur adipiscing elit.</div>
                    </div><!-- .single-accordian -->
                </div>
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="video-section">
                    <!-- For Youtube -->
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" width="816" height="459" src="https://www.youtube.com/embed/J_eU1yVQ32k?modestbranding=1&autohide=1&showinfo=0&controls=0" allowfullscreen>
                        </iframe>
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
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="row flex text-center">
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-pixels"></i>
                    <h3>HELP ORPHANAGE</h3>
                    <p>Temt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-food-basket"></i>
                    <h3>FOOD SUPPLY</h3>
                    <p>Temt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-hospital"></i>
                    <h3>HOSPITAL</h3>
                    <p>Temt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-education"></i>
                    <h3>FREE EDUCATION</h3>
                    <p>Temt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-blood-drop"></i>
                    <h3>DONATE BLOOD</h3>
                    <p>Temt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-feature">
                    <i class="icofont icofont-building-alt"></i>
                    <h3>PROVIDE SHELTER</h3>
                    <p>Temt perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa qua.</p>
                    <a href="">See More <i class="icofont icofont-arrow-right"></i></a>
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Service Section -->

<!-- Start Donate Section -->
<section class="donate section text-center">
    <div class="container">
        <h2>HELP POOR PEOPLE & GIVE DONATION</h2>
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi.</p>
        <a href="" class="t-btn donate-btn">DONATE NOW</a>
    </div>
</section>
<!-- End Donate Section -->

<!-- Start Cause Section -->
<section class="cause section" id="cause">
    <div class="container ">
        <div class="section-header">
            <h2>CAUSES</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="row flex">
            <div class="col-sm-4">
                <div class="single-cause">
                    <img src="img/cause-1.jpg" class="cause-thumb" alt="">
                    <h3>PROVIDE EDUCATION FOR CHILD</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque point corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident for help.</p>
                    <div class="donate-status">
                        <div class="status">
                            <span>RAISED</span>
                            <span>TARGET</span>
                        </div>
                        <div class="status-bar "><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 80%"></div></div>
                        <div class="status">
                            <span>5000 $</span>
                            <span>7000 $</span>
                        </div>
                    </div><!-- .donate-status -->
                    <a href="#" class="t-btn t-btn-ex-small">DONATE NOW</a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-cause">
                    <img src="img/cause-2.jpg" class="cause-thumb" alt="">
                    <h3>HELP FOR MEDICAL & HEALTH</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque point corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident for help.</p>
                    <div class="donate-status">
                        <div class="status">
                            <span>RAISED</span>
                            <span>TARGET</span>
                        </div>
                        <div class="status-bar"><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 75%"></div></div>
                        <div class="status">
                            <span>5000 $</span>
                            <span>8000 $</span>
                        </div>
                    </div><!-- .donate-status -->
                    <a href="#" class="t-btn t-btn-ex-small">DONATE NOW</a>
                </div>
            </div><!-- .col -->
            <div class="col-sm-4">
                <div class="single-cause">
                    <img src="img/cause-3.jpg" class="cause-thumb" alt="">
                    <h3>CLOTHING & LAND PROVIDE</h3>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque point corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident for help.</p>
                    <div class="donate-status">
                        <div class="status">
                            <span>RAISED</span>
                            <span>TARGET</span>
                        </div>
                        <div class="status-bar"><div class="wow fadeInLeft"  data-wow-duration="1.2s" data-wow-delay="0.1s" style="width: 70%"></div></div>
                        <div class="status">
                            <span>38000 $</span>
                            <span>50000 $</span>
                        </div>
                    </div><!-- .donate-status -->
                    <a href="#" class="t-btn t-btn-ex-small">DONATE NOW</a>
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Cause Section -->

<!-- Start Gallery Section -->
<section class="gallery section" id="gallery">
    <div class="container">
        <div class="section-header">
            <h2>GALLERY</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="portfolio zoom-gallery gutter-less">
            <div class="grid-sizer"></div>
            <div class="portfolio-item">
                <a href="img/gallary-l-1.jpg" class="gallery-item"><img src="img/gallary-1.jpg" alt="">
                </a>
            </div><!-- .portfolio-item -->
            <div class="portfolio-item">
                <a href="img/gallary-l-2.jpg" class="gallery-item"><img src="img/gallary-2.jpg" alt="">
                </a>
            </div><!-- .portfolio-item -->
            <div class="portfolio-item">
                <a href="img/gallary-l-3.jpg" class="gallery-item"><img src="img/gallary-3.jpg" alt="">
                </a>
            </div><!-- .portfolio-item -->
            <div class="portfolio-item">
                <a href="img/gallary-l-4.jpg" class="gallery-item"><img src="img/gallary-4.jpg" alt="">
                </a>
            </div><!-- .portfolio-item -->
            <div class="portfolio-item">
                <a href="img/gallary-l-5.jpg" class="gallery-item"><img src="img/gallary-5.jpg" alt="">
                </a>
            </div><!-- .portfolio-item -->
            <div class="portfolio-item">
                <a href="img/gallary-l-6.jpg" class="gallery-item"><img src="img/gallary-6.jpg" alt="">
                </a>
            </div><!-- .portfolio-item -->
        </div><!-- .portfolio -->
    </div><!-- .container -->
</section>
<!-- End Gallery Section -->

<!-- Start Fun Factor Section -->
<section class="fun-factor section text-center">
    <div class="container">
        <div class="row flex">
            <div class="col-sm-3">
                <div class="single-factor">
                    <i class="icofont icofont-money"></i>
                    <h3 class="counter">1200</h3>
                    <h2>DONORS</h2>
                </div>
            </div><!-- .col -->
            <div class="col-sm-3">
                <div class="single-factor">
                    <i class="icofont icofont-users-alt-2"></i>
                    <h3 class="counter">500</h3>
                    <h2>VOLUNTEERS</h2>
                </div>
            </div><!-- .col -->
            <div class="col-sm-3">
                <div class="single-factor">
                    <i class="icofont icofont-life-buoy"></i>
                    <h3 class="counter">3500</h3>
                    <h2>LIFE SAVED</h2>
                </div>
            </div><!-- .col -->
            <div class="col-sm-3">
                <div class="single-factor">
                    <i class="icofont icofont-institution"></i>
                    <h3 class="counter">200</h3>
                    <h2>INSTITUTION</h2>
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Fun Factor Section -->

<!-- Start Team Section -->
<section class="team section">
    <div class="container">
        <div class="section-header">
            <h2>OUR TEAM</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="row flex text-center">
            <div class="col-sm-3">
                <div class="team-member">
                    <div class="member-thumb">
                        <img src="img/team-1.jpg" alt="">
                        <div class="member-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">BONY SMITH</h3>
                    <span class="designation">Volunteer</span>
                </div>
            </div><!-- .col -->
            <div class="col-sm-3">
                <div class="team-member">
                    <div class="member-thumb">
                        <img src="img/team-2.jpg" alt="">
                        <div class="member-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">JHON DOE</h3>
                    <span class="designation">Volunteer</span>
                </div>
            </div><!-- .col -->
            <div class="col-sm-3">
                <div class="team-member">
                    <div class="member-thumb">
                        <img src="img/team-3.jpg" alt="">
                        <div class="member-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">LEONEL MIKE</h3>
                    <span class="designation">Volunteer</span>
                </div>
            </div><!-- .col -->
            <div class="col-sm-3">
                <div class="team-member">
                    <div class="member-thumb">
                        <img src="img/team-4.jpg" alt="">
                        <div class="member-social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-skype"></i></a>
                        </div>
                    </div>
                    <h3 class="member-name">JACKY LALIN</h3>
                    <span class="designation">Volunteer</span>
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Team Section -->

<!-- Start Event Section -->
<section class="event section" id="event">
    <div class="container">
        <div class="section-header">
            <h2>OUR EVENT</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="row flex">
            <div class="col-lg-6">
                <div class="single-event">
                    <div class="event-thumb"><img src="img/event-1.jpg" alt=""></div>
                    <div class="event-details">
                        <h3>BUILD SCHOOL FOR CHILDREN</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud alliness.</p>
                        <div class="event-location">
                            <span><i class="icofont icofont-ui-calendar"></i>Dec-11-2017</span>
                            <span><i class="icofont icofont-location-pin"></i>South Africa</span>
                        </div>
                        <div class="event-btn-group">
                            <a href="" class="t-btn t-btn-ex-small event-btn-1">Join Now</a>
                            <a href="" class="t-btn t-btn-ex-small event-btn-2">Details</a>
                        </div>
                    </div>
                </div>
            </div><!-- .col -->
            <div class="col-lg-6">
                <div class="single-event">
                    <div class="event-thumb"><img src="img/event-2.jpg" alt=""></div>
                    <div class="event-details">
                        <h3>AWARENESS FOR HEALTH CARE</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud alliness.</p>
                        <div class="event-location">
                            <span><i class="icofont icofont-ui-calendar"></i>Dec-11-2017</span>
                            <span><i class="icofont icofont-location-pin"></i>South Africa</span>
                        </div>
                        <div class="event-btn-group">
                            <a href="" class="t-btn t-btn-ex-small event-btn-1">Join Now</a>
                            <a href="" class="t-btn t-btn-ex-small event-btn-2">Details</a>
                        </div>
                    </div>
                </div>
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Event Section -->

<!-- Start Client Section -->
<div class="client section">
    <div class="container">
        <div class="client-logo">
            <a href=""><img src="img/client-1.png" alt=""></a>
            <a href=""><img src="img/client-2.png" alt=""></a>
            <a href=""><img src="img/client-3.png" alt=""></a>
            <a href=""><img src="img/client-4.png" alt=""></a>
        </div>
    </div>
</div>
<!-- End Client Section -->

<!-- Start Blog Section -->
<section class="blog home-blog section" id="blog">
    <div class="container">
        <div class="section-header">
            <h2>OUR NEWS</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <div class="row flex">
            <div class="col-sm-6">
                <div class="post">
                    <header class="entry-header">
                          <a href="blog-details-1.html" class="post-thumbnail" target="_blank"><img src="img/blog-1.jpg" alt=""></a>
                          <div class="post-details-wrap">
                            <h2 class="entry-title"><a href="blog-details-1.html" target="_blank">SAVE LIFE FOR POOR CHILDREN</a></h2>
                            <div class="byline">
                                  <span class="author"><a href="#"><i class="fa fa-user"></i> Post Admin</a></span>
                                <span class="posted-on"><span>10 Jan</span> 2017</span>
                            </div>
                          </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperi rain...</p>
                          <a href="blog-details-1.html" class="t-btn t-btn-ex-small read-more-btn" target="_blank">Read More</a>
                    </div>
                  </div><!-- .post -->
            </div><!-- .col -->
            <div class="col-sm-6">
                <div class="post">
                    <header class="entry-header">
                          <a href="blog-details-2.html" class="post-thumbnail" target="_blank"><img src="img/blog-2.jpg" alt=""></a>
                          <div class="post-details-wrap">
                            <h2 class="entry-title"><a href="blog-details-2.html" target="_blank">WE BUILD SCHOOL & HOSPITAL</a></h2>
                            <div class="byline">
                                  <span class="author"><a href="#"><i class="fa fa-user"></i> Post Admin</a></span>
                                <span class="posted-on"><span>1 Jan</span> 2017</span>
                            </div>
                          </div><!-- .post-details-wrap -->
                    </header>
                    <div class="entry-content">
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperi rain...</p>
                          <a href="blog-details-1.html" class="t-btn t-btn-ex-small read-more-btn" target="_blank">Read More</a>
                    </div>
                  </div><!-- .post -->
            </div><!-- .col -->
        </div>
    </div>
</section>
<!-- End Blog Section -->

<!-- Start Contact Section -->
<section class="contact section" id="contact">
    <div class="container">
        <div class="section-header">
            <h2>CONTACT</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
        <form action="#">
            <div class="row">
                <div class="col-sm-6">
                    <input type="text" placeholder="Enter Name">
                </div>
                <div class="col-sm-6">
                    <input type="text" placeholder="Skype ID">
                </div>
                <div class="col-sm-6">
                    <input type="email" placeholder="Enter Email">
                </div>
                <div class="col-sm-6">
                    <input type="tel" placeholder="Mobile No.">
                </div>
                <div class="col-sm-12">
                    <textarea cols="30" rows="10" placeholder="Enter Your Message"></textarea>
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
