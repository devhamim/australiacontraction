<footer class="main-footer">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-12">
                <!-- About Footer Start -->
                <div class="about-footer">
                    <!-- Footer Logo Start -->
                    <div class="footer-logo">

                        @if ($setting->first()->footer_logo != null)
                            <figure>
                                <img src="{{ asset('uploads/setting') }}/{{ $setting->first()->footer_logo }}" alt="logo-img">
                            </figure>
                        @endif
                    </div>
                    <!-- Footer Logo End -->

                    <!-- Footer Content Start -->
                    <div class="footer-content">
                        @if ( $setting->first()->about != null)
                            <p>{{ $setting->first()->about }}</p>
                        @endif
                    </div>
                    <!-- Footer Content End -->
                </div>

                <!-- About Footer End -->
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <!-- Footer Links Start -->
                <div class="footer-links">
                    <h3>Useful Links</h3>
                    <ul>
                        <li><a href="{{ route('contect') }}">Contact</a></li>
                        <li><a href="{{route('career')}}">Career</a></li>
                        <li><a href="{{ route('our.privacy.policy') }}">Privacy Policy</a></li>
                        <li><a href="{{ route('our.privacy.policy') }}">Terms and Conditions</a></li>
                    </ul>
                </div>
                <!-- Footer Links End -->
            </div>

            <div class="col-lg-4 col-md-4 col-12">
                <!-- Footer Contact Info Box Start -->
                <div class="footer-links footer-contact-box">
                    <h3>contact us</h3>
                    <!-- Info Box Start -->
                    <div class="footer-info-box">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend') }}/images/icon-mail.svg" alt="">
                        </div>
                        <!-- Icon Box End -->
                        <p>{{ $setting->first()->email }}</p>
                    </div>
                    <!-- Info Box End -->

                    <!-- Info Box Start -->
                    <div class="footer-info-box">
                        <!-- Icon Box Start -->
                        <div class="icon-box">
                            <img src="{{ asset('frontend') }}/images/icon-location.svg" alt="">
                        </div>
                        <!-- Icon Box End -->
                        <p>{{ $setting->first()->address }}</p>
                    </div>
                    <!-- Info Box End -->
                </div>
                <!-- Footer Contact Info Box End -->
            </div>
        </div>

        <!-- Footer Copyright Section Start -->
        <div class="footer-copyright">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-7">
                    <!-- Footer Copyright Start -->
                    <div class="footer-copyright-text">
                        @if ($setting->first()->footer != null)
                            <p>{{ $setting->first()->footer }}</p>
                        @endif
                    </div>
                    <!-- Footer Copyright End -->
                </div>

                {{-- <div class="col-lg-6 col-md-5">
                    <!-- Footer Social Link Start -->
                    <div class="footer-social-links">
                        <ul>

                            <li><a href="{{ $setting->first()->instagram }}"><i class="fa-brands fa-instagram"></i></a></li>
                            <li><a href="{{ $setting->first()->facebook }}"><i class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a href="{{ $setting->first()->twitter }}"><i class="fa-brands fa-x-twitter"></i></a></li>
                            <li><a href="{{ $setting->first()->linkedin }}"><i class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer Social Link End -->
                </div> --}}
            </div>
        </div>
        <!-- Footer Copyright Section End -->
    </div>
</footer>
