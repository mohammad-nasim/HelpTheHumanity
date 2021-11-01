@extends('frontend.master')

@section('title')
{{ 'Our Team' }}
@endsection

@section('header')
    @include('frontend.include.header2')
@endsection

@section('content')
    <section class="other-hero mb-4" style="
        background-color: #000;
        background-image:url({{asset('backend/img/app_image/add_our_team/'.$add_our_team->cover_image)}});
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
                <li>Our Team</li>
            </ul>
        </div>
    </section>

    <div class="container mt-5" style="padding-top: 60px; padding-bottom: 40px">
        <div class="header ">
            <div class="section-header">
                <h2>Our Team</h2>
                <p>{{ $add_our_team->title}}</p>
            </div><!-- .section-header -->
        </div>
        <!-- Page Content -->
        <section class="team section">
            <div class="container">
                <div class="row flex text-center">
                    @foreach ($our_team as $ourteam_data )
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
            </div>
        </section>
    </div>
@endsection
