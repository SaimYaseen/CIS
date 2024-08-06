@push('title')
      <title>Services</title>
      @endpush
@include('layouts.header')
      @push('services')
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

        <h2>Services</h2>
        <ol>
          <li><a href="index.html">Home</a></li>
          <li>Services</li>
        </ol>

      </div>
    </div><!-- End Breadcrumbs -->

        <!-- ======= Services Section ======= -->
        <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-header">
          <h2>Services</h2>
          <p> Crafting Custom Construction Solutions Tailored to Your Every Need.</p>
        </div>

        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-item  position-relative">
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <h3>Buildings</h3>
              <p>With decades of experience and a proven track record of successful projects. From custom designs to quality craftsmanship, trust us to turn your building dreams into reality.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-house"></i>
              </div>
              <h3>House construction</h3>
              <p>Experience the joy of building your future with us, where innovation meets tradition, and every corner of your dream house is crafted with care, turning aspirations into concrete realities.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-bridge"></i>
              </div>
              <h3>Bridges</h3>
              <p>Build bridges to your future with our expertise let us guide you across the path of innovation and reliability in bridge construction.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-building"></i>
              </div>
              <h3>Plaza construction</h3>
              <p>Elevate your vision with our plaza construction expertise, where every corner becomes a masterpiece, and every space is designed to inspire.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-toolbox"></i>
              </div>
              <h3>Maintanence</h3>
              <p>Experience worry-free maintenance construction with our proactive approach let us handle the details while you focus on what truly matters.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fas fa-road"></i>
              </div>
              <h3>Roads construction</h3>
              <p>Drive towards progress with confidence as we pave the way for safer, more efficient roads, ensuring your journey is as smooth as the quality of our construction.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="600">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="fa-solid fa-arrow-up-from-ground-water"></i>
              </div>
              <h3>Factories</h3>
              <p>Unlock the potential of your industrial vision with our tailored factory construction solutions, where innovation meets efficiency to build the foundation for your success.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="500">
            <div class="service-item position-relative">
              <div class="icon">
                <i class="bi bi-building-gear"></i>
              </div>
              <h3>Renovation</h3>
              <p>Transform your space from outdated to outstanding with our expert renovation construction services, where every detail is crafted to reflect your unique style and vision.</p>
              <a href="{{ url('service-details') }}" class="readmore stretched-link">Learn more <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

        </div> 
      </div>
    </section><!-- End Services Section -->
    
    <!-- ======= Alt Services Section ======= -->
    <section id="alt-services" class="alt-services">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>

          <div class="col-lg-5 d-flex flex-column justify-content-center">
          <h3>Maintenance and Repairing</h3>
          <p>
            We also provide maintenance and repairing facility of Buildings, Homes, Plazas, and much more...
          </p>
          <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Routine Maintenance</a></h4>
                <p>HVAC system checks and maintenance.
                   Plumbing inspections and repairs.
                   Electrical system inspections.
                   Roof inspections and repairs.
                   Painting and touch-ups.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Renovations and Upgrades</a></h4>
                <p>Interior remodeling and renovations.
                    Energy efficiency upgrades.
                    Technology infrastructure upgrades.
                    Accessibility improvements.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Specialized Repairs</a></h4>
                <p>Window and door repairs or replacements.
                    Flooring repairs and replacements.
                    Restoration services for historical buildings.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Emergency Repairs</a></h4>
                <p>Immediate response to critical issues like water leaks or electrical failures.
                    Emergency HVAC repairs.
                    Structural repairs in case of damage or safety concerns.</p>
              </div>
            </div><!-- End Icon Box -->

          </div>
        </div>

      </div>
    </section><!-- End Alt Services Section -->

    <!-- ======= Alt Services Section 2 ======= -->
    <section id="alt-services-2" class="alt-services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
          <div class="col-lg-5 d-flex flex-column justify-content-center">
            <h3>Complementary Services</h3>
            <p>Discover a range of additional solutions designed to complement and elevate your construction projects.</p>

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
              <i class="bi bi-easel flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Consulting Services </a></h4>
                <p>Navigate complex construction landscapes with confidence, supported by our consulting services and proven industry expertise.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="200">
              <i class="bi bi-patch-check flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Training and Education </a></h4>
                <p>Maximize the potential of your team with our training and education offerings, fostering a culture of continuous learning and improvement</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Custom Development</a></h4>
                <p>From concept to execution, our custom development services offer personalized solutions that adapt to your evolving needs.</p>
              </div>
            </div><!-- End Icon Box -->

            <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
              <i class="bi bi-brightness-high flex-shrink-0"></i>
              <div>
                <h4><a href="" class="stretched-link">Project Management Assistance</a></h4>
                <p>Optimize your project workflows and achieve your goals efficiently with our tailored project management assistance solutions.</p>
              </div>
            </div><!-- End Icon Box -->
          </div>

          <div class="col-lg-6 img-bg" style="background-image: url(assets/img/constructions-1.jpg);" data-aos="zoom-in" data-aos-delay="100"></div>
        </div>

      </div>
    </section><!-- End Alt Services Section 2 -->

    
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.footer')
  <!-- End Footer -->