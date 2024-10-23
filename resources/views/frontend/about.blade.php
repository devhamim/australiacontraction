@extends('frontend.layout.app')

@section('content')

    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">About Us</h1>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Page About Us Start -->
    <div class="page-about-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <!-- About Us Image Start -->
                    <div class="about-us-image">
                        <div class="about-us-img">
                            <figure class="reveal">
                                <img src="{{ asset('frontend') }}/images/about-us-img.png" alt="">
                            </figure>
                        </div>
                    </div>
                    <!-- About Us Image End -->
                </div>

                <div class="col-lg-7">
                    <!-- About Content Start -->
                    <div class="about-us-content">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h3 class="wow fadeInUp">about us</h3>
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Crafting structures that last a lifetime</h2>
                            <p class="wow fadeInUp" data-wow-delay="0.25s">Crafting structures that last a lifetime requires a holistic approach that integrates advanced materials, resilient design, regular maintenance, and sustainability practices. By learning from historical examples and leveraging modern technology.</p>
                        </div>
                        <!-- Section Title End -->

                        <!-- About Content Body Start -->
                        <div class="about-us-content-body wow fadeInUp" data-wow-delay="0.5s">
                            <ul>
                                <li>Comprehensive Services</li>
                                <li>Advanced Technology</li>
                                <li>Transparent Communication</li>
                            </ul>
                        </div>
                        <!-- About Content Body End -->

                        <!-- About Content Footer Start -->
                        <div class="about-us-content-footer wow fadeInUp" data-wow-delay="0.75s">
                            <div class="about-us-footer-btn">
                                <a href="{{ route('contect') }}" class="btn-default">get free quote</a>
                            </div>

                        </div>
                        <!-- About Content Footer End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page About Us End -->

	<!-- Our Company History Start -->
	<div class="our-company-history">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-6">
					<!-- Company History Image Start -->
					<div class="company-history-image">
						<div class="company-history-img">
							<figure class="image-anime reveal">
								<img src="{{ asset('frontend') }}/images/company-history-img.jpg" alt="">
							</figure>
						</div>

						<!-- Company Experience Box Start -->
						<div class="company-experience">
							<div class="company-experience-content">
								<h3><span class="counter">25</span>+</h3>
								<p>years of experience</p>
							</div>
						</div>
						<!-- Company Experience Box End -->
					</div>
					<!-- Company History Image End -->
				</div>

				<div class="col-lg-6">
					<div class="company-history-content">
						<!-- Section Title Start -->
						<div class="section-title">
							<h3 class="wow fadeInUp">our history</h3>
							<h2 class="text-anime-style-3" data-cursor="-opaque">Crafting structures that last a lifetime</h2>
						</div>
						<!-- Section Title End -->

						<!-- Company History Body Start -->
						<div class="company-history-body">
							<p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction services, including residential, commercial, and industrial projects. From initial design to final inspection, we work closely with our clients to understand their unique needs and vision. </p>

							<p class="wow fadeInUp" data-wow-delay="0.5s">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters.</p>
						</div>
						<!-- Company History Body End -->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Our Company History End -->

	<!-- Our Mission Vision Start -->
	<div class="our-mission-vision">
		<div class="container">
			<div class="row">
				<div class="col-lg-4">
					<!-- Mission Vision Item Start -->
					<div class="mission-vision-item wow fadeInUp">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="{{ asset('frontend') }}/images/icon-our-mission.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Mission Vision Content Start -->
						<div class="mission-vision-content">
							<h3>our mission</h3>
							<p>Simple actions make a difference. It starts and ends with each employee striving to work safer every single day so they can return.</p>
						</div>
						<!-- Mission Vision Content End -->
					</div>
					<!-- Mission Vision Item End -->
				</div>

				<div class="col-lg-4">
					<!-- Mission Vision Item Start -->
					<div class="mission-vision-item wow fadeInUp" data-wow-delay="0.25s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="{{ asset('frontend') }}/images/icon-our-vision.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Mission Vision Content Start -->
						<div class="mission-vision-content">
							<h3>our vision</h3>
							<p>Simple actions make a difference. It starts and ends with each employee striving to work safer every single day so they can return.</p>
						</div>
						<!-- Mission Vision Content End -->
					</div>
					<!-- Mission Vision Item End -->
				</div>

				<div class="col-lg-4">
					<!-- Mission Vision Item Start -->
					<div class="mission-vision-item wow fadeInUp" data-wow-delay="0.5s">
						<!-- Icon Box Start -->
						<div class="icon-box">
							<img src="{{ asset('frontend') }}/images/icon-our-values.svg" alt="">
						</div>
						<!-- Icon Box End -->

						<!-- Mission Vision Content Start -->
						<div class="mission-vision-content">
							<h3>our values</h3>
							<p>Simple actions make a difference. It starts and ends with each employee striving to work safer every single day so they can return.</p>
						</div>
						<!-- Mission Vision Content End -->
					</div>
					<!-- Mission Vision Item End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Our Mission Vision End -->


	<!-- What We Do Section Start -->
	 <div class="what-we-do">
		<div class="container">
			<div class="row section-row">
				<!-- Section Title Start -->
				<div class="section-title">
					<h3 class="wow fadeInUp">what we do</h3>
					<h2 class="text-anime-style-3" data-cursor="-opaque">Building the future on a foundation of excellence</h2>
					<p class="wow fadeInUp" data-wow-delay="0.25s">We specialize in a wide range of construction services, including residential, commercial, and industrial projects. From initial design to final inspection, we work closely with our clients to understand their unique needs and vision. </p>
				</div>
				<!-- Section Title End -->
			</div>

			<div class="row">
				<div class="col-lg-3 col-6">
					<!-- Company Counter Item Start -->
					<div class="company-counter-item">
						<div class="company-counter-content">
							<h3><span class="counter">99</span>%</h3>
							<p>buildings control approval rate</p>
						</div>
					</div>
					<!-- Company Counter Item End -->
				</div>

				<div class="col-lg-3 col-6">
					<!-- Company Counter Item Start -->
					<div class="company-counter-item">
						<div class="company-counter-content">
							<h3><span class="counter">320</span>+</h3>
							<p>active construction management</p>
						</div>
					</div>
					<!-- Company Counter Item End -->
				</div>

				<div class="col-lg-3 col-6">
					<!-- Company Counter Item Start -->
					<div class="company-counter-item">
						<div class="company-counter-content">
							<h3><span class="counter">200</span>+</h3>
							<p>completed projects every year</p>
						</div>
					</div>
					<!-- Company Counter Item End -->
				</div>

				<div class="col-lg-3 col-6">
					<!-- Company Counter Item Start -->
					<div class="company-counter-item">
						<div class="company-counter-content">
							<h3><span class="counter">4.253</span></h3>
							<p>million euros turnover in 2023</p>
						</div>
					</div>
					<!-- Company Counter Item End -->
				</div>
			</div>
		</div>
	 </div>
	<!-- What We Do Section End -->

@endsection
