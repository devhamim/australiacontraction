@extends('frontend.layout.app')

@section('content')

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Our Blog</h1>

					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page Blog Start -->
    <div class="page-blog">
        <div class="container">
            <div class="row">
                @foreach($blogs as $key => $blog)
                    <div class="col-lg-4 col-md-6">
                        <!-- Blog Item Start -->
                        <div class="blog-item wow fadeInUp">
                            <!-- Post Featured Image Start-->
                            <div class="post-featured-image" data-cursor-text="View">
                                <figure>
                                    <a href="{{ route('our.blog.details', $blog->slug) }}" class="image-anime">
                                        <img src="{{ asset('uploads/blog') }}/{{ $blog->image }}" alt="">
                                    </a>
                                </figure>
                            </div>
                            <!-- Post Featured Image End -->

                            <!-- post Item Content Start -->
                            <div class="post-item-content">
                                <!-- post Item Body Start -->
                                <div class="post-item-body">
                                    <h2><a href="{{ route('our.blog.details', $blog->slug) }}">{{ $blog->title }}</a></h2>
                                </div>
                                <!-- Post Item Body End-->

                                <!-- Post Item Footer Start-->
                                <div class="post-item-footer">
                                    <a href="{{ route('our.blog.details', $blog->slug) }}" class="readmore-btn">read more</a>
                                </div>
                                <!-- Post Item Footer End-->
                            </div>
                            <!-- post Item Content End -->
                        </div>
                        <!-- Blog Item End -->
                    </div>
                @endforeach
            </div>

        </div>
    </div>
    <!-- Page Blog End -->

@endsection
