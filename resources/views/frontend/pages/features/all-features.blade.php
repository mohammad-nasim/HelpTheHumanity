@extends('frontend.master')

@section('title')
    {{ 'All-Features' }}
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
            <h1>All Features</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('webhome') }}">Home</a></li>
                <li>All Features</li>
            </ul>
        </div>
    </section>

    <div class="container mt-5" style="padding-top: 30px">
        <div class="section-header ">
            <h2>{{ $add_data->title }}</h2>
            <p>{{ $add_data->description }}</p>
        </div><!-- .section-header -->
    </div>

    <div class="container" style="padding-top: 30px; margin-bottom: 30px ">
        @foreach ($allfeatures as $data)
        <div class="card mb-3 " style="margin: 0 auto; margin-bottom:30px;">
            <img class="card-img-top" style="width: 366px;height:244px" src="{{asset('backend/img/app_image/feature_section/'.$data->image)}}" alt="Card image cap" width="366px" height="244px">
            <div class="card-body " style="padding-top: 20px">
                <h5 class="card-title ">{{ $data->title }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($data->description, 260)  }}</p>
            </div>
            <div class="button mt-3">
                <a href="{{ route('feature', $data->id)  }}" class="btn btn-primary">Read Feature</a>
            </div>
        </div>
        @endforeach

        <span>{{ $allfeatures->links() }}</span>
    </div>
</div>
@endsection
