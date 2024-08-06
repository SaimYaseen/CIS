@push('title')
    <title>Contact</title>
@endpush
@include('layouts.header')
@push('contact')
    class="active"
@endpush
@include('layouts.navbar')<!-- .navbar -->

</div>
</header><!-- End Header -->
@include('layouts.modal')

<main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
        <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

            <h2>Contact</h2>
            <ol>
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
            </ol>

        </div>
    </div><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container" data-aos="fade-up" data-aos-delay="100">

            <div class="row gy-4">
                <div class="col-lg-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-map"></i>
                        <h3>Our Address</h3>
                        <p>Lahore, Pakistan</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-envelope"></i>
                        <h3>Email Us</h3>
                        <p>CIS@gmail.com</p>
                    </div>
                </div><!-- End Info Item -->

                <div class="col-lg-3 col-md-6">
                    <div class="info-item  d-flex flex-column justify-content-center align-items-center">
                        <i class="bi bi-telephone"></i>
                        <h3>Call Us</h3>
                        <p>+92 333 4475755 <br>
                            +92 324 7900 527
                        </p>
                    </div>
                </div><!-- End Info Item -->

            </div>

            <div class="row gy-4 mt-1">

                <div class="col-lg-6 ">
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe> --}}
                    <iframe src="https://maps.google.com/maps?q=31.574602118942668, 74.40759849999999&z=15&output=embed"
                        width="100%" height="384" frameborder="0" style="border:0;" allowfullscreen></iframe>
                </div><!-- End Google Maps -->


                <div class="col-lg-6" id="contactForm">
                    <form action="{{route('message')}}" method="post" role="form" class="php-email-form1">
                      @csrf
                        <div class="row gy-4">
                            <div class="col-lg-6 form-group">
                                <input type="text" name="name" class="form-control" id="name"
                                    placeholder="Your Name" required>
                            </div>
                            <div class="col-lg-6 form-group">
                                <input type="email" class="form-control" name="email" id="email"
                                    placeholder="Your Email" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject"
                                placeholder="Subject" required>
                        </div>
                        <div class="form-group ">
                            <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                        </div>
                        <div class="my-3 text-center">
                            @if (session()->has('success_message_message'))
                                <p class="text-success">{{ session()->get('success_message_message') }}</p> <br>
                            @endif
                        </div>
                            <div class="text-center"><button type="submit">Send Message</button></div>
                    </form>
                </div><!-- End Contact Form -->

            </div>

        </div>
    </section><!-- End Contact Section -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->
@include('layouts.footer')
<!-- End Footer -->
