@extends('frontend.master')

@section('title')
    {{ 'Our Team' }}
@endsection

@section('content')
<div class="content">
    <section class="other-hero mb-4">
        <div class="container other-hero-text">
            <h1></h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>Our Team</li>
            </ul>
        </div>
    </section>

    <div class="container mt-5" style="padding-top: 60px; padding-bottom:30px">
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

</div>
@endsection
