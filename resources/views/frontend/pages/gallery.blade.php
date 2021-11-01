@extends('frontend.master')

@section('title')
{{ 'Gallery' }}
@endsection

@section('header')
    @include('frontend.include.header2')
@endsection

@section('content')
    <section class="other-hero mb-4" style="
        background-color: #000;
        background-image:url({{asset('backend/img/app_image/add_gallery/'.$add_gallery->cover_image)}});
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
                <li>Gallery</li>
            </ul>
        </div>
    </section>

    <div class="container mt-5" style="padding-top: 60px; padding-bottom: 40px">
        <div class="header ">
            <div class="section-header">
                <h2>GALLERY</h2>
                <p>{{ $add_gallery->title}}</p>
            </div><!-- .section-header -->
        </div>
        <!-- Page Content -->
        <div class="container ">
            <hr class="mt-2 mb-5">
            <div class="row text-center text-lg-start mb-5">
            @foreach ( $gallery as $data)
                <div class="col-lg-3 col-md-4 col-6">
                    <a href="#" class="d-block mb-4 h-100">
                    <img class="img-fluid img-thumbnail" src="{{asset('backend/img/app_image/gallery/'.$data->images)}}" alt="">
                    </a>
                </div>
            @endforeach
            </div>
            <span>{{ $gallery->links() }}</span>
        </div>
    </div>
@endsection
