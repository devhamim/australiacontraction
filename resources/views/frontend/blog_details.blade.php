@extends('frontend.layout.app')

@section('content')

<!-- Page Header Start -->
<div class="page-header parallaxie">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3" data-cursor="-opaque">{{ $blogs->first()->title }}</h1>

                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Page Single Post Start -->
<div class="page-single-post">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Post Featured Image Start -->
                <div class="post-image">
                    <figure class="image-anime reveal">
                        <img src="{{ asset('uploads/blog') }}/{{ $blogs->first()->image }}" alt="">
                    </figure>
                </div>
                <!-- Post Featured Image Start -->

                <!-- Post Single Content Start -->
                <div class="post-content">
                    <!-- Post Entry Start -->
                    <div class="post-entry">
                        <p class="wow fadeInUp">{!! $blogs->first()->description !!}</p>
                    </div>
                    <!-- Post Entry End -->
                </div>
                <!-- Post Single Content End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Single Post End -->

@endsection
