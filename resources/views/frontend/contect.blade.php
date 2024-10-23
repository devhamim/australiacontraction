@extends('frontend.layout.app')
@section('content')
    <!-- Page Header Start -->
	<div class="page-header parallaxie">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<!-- Page Header Box Start -->
					<div class="page-header-box">
						<h1 class="text-anime-style-3" data-cursor="-opaque">Contact Us</h1>
					</div>
					<!-- Page Header Box End -->
				</div>
			</div>
		</div>
	</div>
	<!-- Page Header End -->

    <!-- Contact Information Section Start -->
    <div class="contact-information">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend') }}/images/icon-mail.svg" alt="">
                        </div>
                        <div class="contact-info-body">
                            <h3>write to us</h3>
                            <p>{{ $settings->first()->email }}</p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>

                <div class="col-md-6">
                    <!-- Contact Info Item Start -->
                    <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                        <div class="icon-box">
                            <img src="{{ asset('frontend') }}/images/icon-location.svg" alt="">
                        </div>
                        <div class="contact-info-body">
                            <h3>visit us</h3>
                            <p>{{ $settings->first()->address }}</p>
                        </div>
                    </div>
                    <!-- Contact Info Item End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Information Section End -->

    <!-- Page Contact Us Start -->
    <div class="contact-us page-contact-us">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8 col-md-7">
                    <!-- Contact Form start -->
                    <div class="contact-form wow fadeInUp" data-wow-delay="0.5s">
                        <!-- Section Title Start -->
                        <div class="section-title">
                            <h2 class="text-anime-style-3" data-cursor="-opaque">Ready to get started? let's chat.</h2>
                            <p>Please fill out the form below, and a member of our team will get back to you as soon as possible.</p>
                        </div>
                        <!-- Section Title End -->

                        <form method="POST" action="{{ route('customerMessage.store') }}">
							@csrf
                            <div class="row">
                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" name="name" class="form-control" id="name" placeholder="Enter Your name" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <input type="email" name="email" class="form-control" id="email" placeholder="Enter Your email" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone number" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-6 mb-3">
                                    <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" required="">
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="form-group col-md-12 mb-4">
                                    <textarea name="message" class="form-control" id="msg" rows="3" placeholder="Message" required=""></textarea>
                                    <div class="help-block with-errors"></div>
                                </div>

                                <div class="col-md-12">
                                    <button type="submit" class="btn-default">submit</button>
                                    <div id="msgSubmit" class="h3 hidden"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <!-- Contact Form end -->
                </div>

                <div class="col-lg-4 col-md-5">
                    <!-- Contact Sidebar Start -->
                    <div class="contact-sidebar page-contact-sidebar wow fadeInUp" data-wow-delay="0.5s">
                        <div class="contact-social-list">
                            <h3>follow us</h3>
                            <ul>
                                <li><a href="#"><i class="fa-brands fa-instagram"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-x-twitter"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-github"></i></a></li>
                                <li><a href="#"><i class="fa-brands fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                        <!-- Contact Info Image Start -->
                        <div class="contact-info-image">
                            <figure>
                                <img src="{{ asset('frontend') }}/images/contact-info-img.png" alt="">
                            </figure>
                        </div>
                        <!-- Contact Info Image End -->
                    </div>
                    <!-- Contact Sidebar End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Page Contact Us End -->

    <!-- Googme Map Start -->
    <div class="google-map">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Google Map Iframe Start -->
                    <div class="google-map-iframe">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d216317.8771508678!2d133.19031318531862!3d-32.09718212771963!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2ab6fbcdece9fb1b%3A0x4033654628f1880!2zQ2hhcnJhIOCmuOCmvuCmieCmpSDgpoXgprjgp43gpp_gp43gprDgp4fgprLgpr_gp5_gpr4gNTY5MCwg4KaF4Ka44KeN4Kaf4KeN4Kaw4KeH4Kay4Ka_4Kav4Ka84Ka-!5e0!3m2!1sbn!2sbd!4v1729368169235!5m2!1sbn!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <!-- Google Map Iframe End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Googme Map End -->
@endsection
