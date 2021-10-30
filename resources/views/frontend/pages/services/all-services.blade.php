@extends('frontend.master')

@section('title')
{{ 'All-Services' }}
@endsection

@section('content')
<div class="content">

    <section class="other-hero mb-4" style="
    background-color: #000;
    background-image:url({{asset('backend/img/app_image/add_service/'.$add_data->cover_image)}});
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
            <h1>All Service</h1>
            <ul class="breadcrumb">
                <li><a href="{{ route('webhome') }}">Home</a></li>
                <li>All Service</li>
            </ul>
        </div>
    </section>

    <div class="container mt-5" style="padding-top: 30px">
        <div class="section-header ">
            <h2>Our Services</h2>
            <p>{{ $add_data->description }}</p>
        </div><!-- .section-header -->
    </div>

    <div class="container" style="padding-top: 30px; margin-bottom: 30px ">

        @foreach ($allservice as $data)
        <div class="card mb-3 " style="margin: 0 auto; margin-bottom:30px">
            <img class="card-img-top" src="{{asset('backend/img/app_image/service/'.$data->image)}}" alt="Card image cap">
            <div class="card-body " style="padding-top: 20px">
                <h5 class="card-title ">{{ $data->title }}</h5>
                <p class="card-text">{{ \Illuminate\Support\Str::limit($data->description, 260)  }}</p>
            </div>
            <div class="button mt-3">
                <a href="{{ route('service', $data->id) }}" class="btn btn-primary">Read Service</a>
            </div>
        </div>
        @endforeach
        <span>{{ $allservice->links() }}</span>
    </div>

</div>
@endsection


