@extends('frontend.master')

@section('title')
{{ 'All-Services' }}
@endsection

@section('content')
<div class="content">
    <section class="other-hero mb-4">
        <div class="container other-hero-text">
            <h1>All Services</h1>
            <ul class="breadcrumb">
                <li><a href="index.html">Home</a></li>
                <li>All Services</li>
            </ul>
        </div>
    </section>

    <div class="container mt-5" style="padding-top: 30px">
        <div class="section-header ">
            <h2>Our Services</h2>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                rem aperiam, eaque ipsa quaes.</p>
        </div><!-- .section-header -->
    </div>

    <div class="container" style="padding-top: 30px; margin-bottom: 30px ">
        <div class="card mb-3 " style="margin: 0 auto; margin-bottom:30px">
            <img class="card-img-top" src="img/gallary-4.jpg" alt="Card image cap">
            <div class="card-body " style="padding-top: 20px">
                <h5 class="card-title ">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
            <div class="button mt-3">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
        <div class="card mb-3" style="margin-bottom:30px">
            <img class="card-img-top" src="img/gallary-4.jpg" alt="Card image cap">
            <div class="card-body" style="padding-top: 20px; ">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
            <div class="button mt-3">
                <a href="#" class="btn btn-primary">Go Nasimwhere</a>
            </div>
        </div>
        <div class="card mb-3">
            <img class="card-img-top" src="img/gallary-4.jpg" alt="Card image cap">
            <div class="card-body" style="padding-top: 20px">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional
                    content. This content is a little bit longer.</p>
            </div>
            <div class="button mt-3">
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
        </div>
    </div>

</div>
@endsection


