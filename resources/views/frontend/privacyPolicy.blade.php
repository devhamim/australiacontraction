
@extends('frontend.layout.app')

@section('content')

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Policy</h1>

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
            @if ($privacyPolicy->first()->id != null)
				<p>{!! $privacyPolicy->first()->description !!}</p>
				@endif
        </div>
    </div>
    <!-- Page Blog End -->

@endsection

