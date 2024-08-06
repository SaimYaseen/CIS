    @push('title')
        <title>Home</title>
    @endpush
    @include('layouts.header')

    @push('home')
        class="active"
    @endpush
    @include('layouts.navbar')

    <!-- .navbar -->


    </div>
    </header><!-- End Header -->
    {{-- login or profile modal --}}
    @include('layouts.modal')

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">

        <div class="info d-flex align-items-center">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 text-center">
                        <h2 data-aos="fade-down">Contractor information system</h2>
                        <p data-aos="fade-up">Connecting contractors with the right projects</p>
                        @if (!Auth::user())
                            <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started"
                                data-toggle="modal" data-target="#modelId">Get Started</a>
                        @endif
                    </div>
                </div>
            </div>
        </div>

        <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

            <div class="carousel-item active"
                style="background-image: url(assets/img/hero-carousel/hero-carousel-1.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-2.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-3.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-4.jpg)">
            </div>
            <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/hero-carousel-5.jpg)">
            </div>

            <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>

    </section><!-- End Hero Section -->

    @include('layouts.modal')

    <main id="main">

        <!-- ======= Get Started Section ======= -->
        @if (Auth::user())
            <section id="get-started" class="get-started section-bg">
                <div class="container">

                    <div class="row justify-content-between gy-4">

                        <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                            <div class="content">
                                <h3>What do you want to construct</h3>
                                <p>We value your input and would love to hear your ideas! Please take a moment to share
                                    any thoughts you have. Feel free to provide as much detail as possible to ensure we
                                    fully understand your perspective. Thank you for taking the time to contribute to
                                    our project!</p>
                            </div>
                        </div>

                        <div class="col-lg-6" data-aos="fade" id="contractForm">
                            <form action="{{ route('contract') }}" method="post" class="php-email-form1">
                                @csrf
                                <h2 class="text-center">Connect with us </h2>
                                <p></p>
                                <div class="row gy-3">

                                    <div class="col-md-6">
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            required>
                                    </div>

                                    <div class="col-md-6 ">
                                        <input type="email" class="form-control" name="email" placeholder="Email"
                                            required>
                                    </div>

                                    <div class="col-md-6">
                                        <input type="text" class="form-control" name="phone" placeholder="Phone"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="text" name="siteName" class="form-control" placeholder="Site name"
                                            required>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="form-select" aria-label="Default select example" name="service">
                                            <option selected>Services</option>
                                            <option value="Construction">Construction</option>
                                            <option value="Renovation">Renovation</option>
                                            <option value="Maintenance">Maintenance</option>
                                        </select>
                                    </div>

                                    <div class="col-md-6">
                                        <textarea class="form-control" id="address" name="siteLocation" rows="3" placeholder="Site location" required ></textarea>
                                    </div>
                                    <div class="col-md-12">
                                        <textarea class="form-control" name="contract" rows="6" placeholder="Write about your idea" required></textarea>
                                    </div>

                                    <div class="col-md-12 text-center">

                                    

                                        <button type="submit">Submit</button>
                                    </div>

                                </div>
                            </form>
                        </div><!-- End Quote Form -->

                    </div>

                </div>
            </section>
        @endif
        <!-- End Get Started Section -->

        <!-- ======= Constructions Section ======= -->
        <section id="constructions" class="constructions">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Constructions</h2>
                    <!-- <p>Nulla dolorum nulla nesciunt rerum facere sed ut inventore quam porro nihil id ratione ea sunt quis dolorem dolore earum</p> -->
                </div>

                <div class="row gy-4">

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/Bridge.jpeg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Bridge Construction</h4>
                                        <p>The accompanying image features a dynamically progressing bridge construction
                                            site. It symbolizes the collaborative efforts of contractors and the
                                            systematic
                                            approach of our Contractor Information System.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/Hotel.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Hotel Construction</h4>
                                        <p>This image encapsulates the dedication and expertise involved in constructing
                                            hotels and highlights how our system enhances the orchestration of these
                                            complex
                                            endeavors.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="300">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/House.jpg);"></div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Constructing House </h4>
                                        <p>The provided image showcases a vibrant scene of a house construction site in
                                            dynamic progress. It serves as a visual metaphor for the collective teamwork
                                            facilitated by our Contractor Information System.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
                        <div class="card-item">
                            <div class="row">
                                <div class="col-xl-5">
                                    <div class="card-bg" style="background-image: url(assets/img/restaurant.jpeg);">
                                    </div>
                                </div>
                                <div class="col-xl-7 d-flex align-items-center">
                                    <div class="card-body">
                                        <h4 class="card-title">Restaurant Construction</h4>
                                        <p>The attached image presents an animated scene of a restaurant construction
                                            site,
                                            teeming with energy and purpose. This image encapsulates the dedication
                                            emphasizing how our system plays a pivotal role in optimizing these dynamic
                                            projects.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!-- End Card Item -->

                </div>

            </div>
        </section><!-- End Constructions Section -->

        <!-- ======= Alt Services Section ======= -->
        <section id="alt-services" class="alt-services">
            <div class="container" data-aos="fade-up">

                <div class="row justify-content-around gy-4">
                    <div class="col-lg-6 img-bg" style="background-image: url(assets/img/alt-services.jpg);"
                        data-aos="zoom-in" data-aos-delay="100"></div>

                    <div class="col-lg-5 d-flex flex-column justify-content-center">
                        <h3>Maintenance and Repairing</h3>
                        <p>We also provide maintenance and repairing facility of Buildings, Homes, Plazas, and much
                            more...
                        </p>

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="100">
                            <i class="fa fa-bars flex-shrink-0"></i>
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
                            <i class="fas fa-tools flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Renovations and Upgrades</a></h4>
                                <p>Interior remodeling and renovations.
                                    Energy efficiency upgrades.
                                    Technology infrastructure upgrades.
                                    Accessibility improvements.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="300">
                            <i class="fas fa-wrench flex-shrink-0"></i>
                            <div>
                                <h4><a href="" class="stretched-link">Specialized Repairs</a></h4>
                                <p>Window and door repairs or replacements.
                                    Flooring repairs and replacements.
                                    Restoration services for historical buildings.</p>
                            </div>
                        </div><!-- End Icon Box -->

                        <div class="icon-box d-flex position-relative" data-aos="fade-up" data-aos-delay="400">
                            <i class="fas fa-truck-pickup flex-shrink-0"></i>
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

        <!-- ======= Features Section ======= -->
        <section id="features" class="features section-bg">
            <div class="container" data-aos="fade-up">

                <ul class="nav nav-tabs row  g-2 d-flex">

                    <li class="nav-item col-3">
                        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                            <h4>Reports</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                            <h4>Mobile Access</h4>
                        </a><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                            <h4>Security</h4>
                        </a>
                    </li><!-- End tab nav item -->

                    <li class="nav-item col-3">
                        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                            <h4>Support</h4>
                        </a>
                    </li><!-- End tab nav item -->

                </ul>

                <div class="tab-content">

                    <div class="tab-pane active show" id="tab-1">
                        <div class="row">
                            <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center"
                                data-aos="fade-up" data-aos-delay="100">
                                <h3>Insightful Data at Your Fingertips</h3>
                                <p class="fst-italic">
                                    Stay informed and in control with our intuitive reporting features. With real-time
                                    updates and interactive dashboards, you can
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Track progress</li>
                                    <li><i class="bi bi-check2-all"></i> Monitor trends</li>
                                    <li><i class="bi bi-check2-all"></i> Identify areas for improvement with ease </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up"
                                data-aos-delay="200">
                                <img src="assets/img/Report.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-2">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Manage Projects On-the-Go Effortlessly</h3>
                                <p class="fst-italic">
                                    Experience seamless project management wherever you are with our mobile access
                                    feature. Stay connected to your construction projects on-the-go, allowing you to
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Track progress</li>
                                    <li><i class="bi bi-check2-all"></i>communicate with team members</li>
                                    <li><i class="bi bi-check2-all"></i> access important documents effortlessly from
                                        your smartphone or tablet</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/Mobile.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-3">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>Protecting Your Data Every Step of the Way</h3>
                                <p class="fst-italic">
                                    We prioritize the security of your data above all else, implementing robust measures
                                    to safeguard against unauthorized access.
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Your sensitive information is encrypted and
                                        stored securely</li>
                                    <li><i class="bi bi-check2-all"></i> Ensuring confidentiality and integrity
                                        throughout the project lifecycle</li>
                                    <li><i class="bi bi-check2-all"></i>Our dedicated security team monitors for
                                        potential risks and vulnerabilities</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/Security.jpeg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                    <div class="tab-pane" id="tab-4">
                        <div class="row">
                            <div
                                class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                                <h3>providing any kind of support about projects and website </h3>
                                <p class="fst-italic">
                                    We give support by
                                </p>
                                <ul>
                                    <li><i class="bi bi-check2-all"></i> Email and Phone Support</li>
                                    <li><i class="bi bi-check2-all"></i> Customer Support</li>
                                    <li><i class="bi bi-check2-all"></i>Feedback and Suggestions</li>
                                </ul>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2 text-center">
                                <img src="assets/img/support.jpg" alt="" class="img-fluid">
                            </div>
                        </div>
                    </div><!-- End tab content item -->

                </div>

            </div>
        </section><!-- End Features Section -->

        <!-- ======= Our Projects Section ======= -->
        <section id="projects" class="projects">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Our Projects</h2>
                    <p>Some of our key prjoects Highlights.</p>
                </div>

                <div class="portfolio-isotope" data-portfolio-filter="*" data-portfolio-layout="masonry"
                    data-portfolio-sort="original-order">

                    <ul class="portfolio-flters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <li data-filter=".filter-remodeling">Remodeling</li>
                        <li data-filter=".filter-construction">Construction</li>
                        <li data-filter=".filter-repairs">Repairs</li>
                        <li data-filter=".filter-design">Design</li>
                    </ul><!-- End Projects Filters -->

                    <div class="row gy-4 portfolio-container" data-aos="fade-up" data-aos-delay="200">

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/remodeling-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Remodeling 1</h4> -->
                                    <p>Interior designing</p>
                                    <a href="assets/img/projects/remodeling-1.jpg" title="Remodeling 1"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/construction-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Construction 1</h4> -->
                                    <p>Roof Construction</p>
                                    <a href="assets/img/projects/construction-1.jpg" title="Construction 1"
                                        data-gallery="portfolio-gallery-construction"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/repairs-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Repairs 1</h4> -->
                                    <p>Repairing</p>
                                    <a href="assets/img/projects/repairs-1.jpg" title="Repairs 1"
                                        data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/design-1.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Design 1</h4> -->
                                    <p>Project Deign</p>
                                    <a href="assets/img/projects/design-1.jpg" title="Repairs 1"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/remodeling-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Remodeling 2</h4> -->
                                    <p>Kitchen Modelling</p>
                                    <a href="assets/img/projects/remodeling-2.jpg" title="Remodeling 2"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/construction-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Construction 2</h4> -->
                                    <p>Plaza's construction</p>
                                    <a href="assets/img/projects/construction-2.jpg" title="Construction 2"
                                        data-gallery="portfolio-gallery-construction"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/repairs-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Repairs 2</h4> -->
                                    <p>Roof Repairing</p>
                                    <a href="assets/img/projects/repairs-2.jpg" title="Repairs 2"
                                        data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/design-2.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Design 2</h4> -->
                                    <p>Planning</p>
                                    <a href="assets/img/projects/design-2.jpg" title="Repairs 2"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-remodeling">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/remodeling-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Remodeling 3</h4> -->
                                    <p>Interior Remodelling</p>
                                    <a href="assets/img/projects/remodeling-3.jpg" title="Remodeling 3"
                                        data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-construction">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/construction-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Construction 3</h4> -->
                                    <p>Site View</p>
                                    <a href="assets/img/projects/construction-3.jpg" title="Construction 3"
                                        data-gallery="portfolio-gallery-construction"
                                        class="glightbox preview-link"><i class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-repairs">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/repairs-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Repairs 3</h4> -->
                                    <p>Repairing</p>
                                    <a href="assets/img/projects/repairs-3.jpg" title="Repairs 2"
                                        data-gallery="portfolio-gallery-repairs" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                        <div class="col-lg-4 col-md-6 portfolio-item filter-design">
                            <div class="portfolio-content h-100">
                                <img src="assets/img/projects/design-3.jpg" class="img-fluid" alt="">
                                <div class="portfolio-info">
                                    <!-- <h4>Design 3</h4> -->
                                    <p>Designing </p>
                                    <a href="assets/img/projects/design-3.jpg" title="Repairs 3"
                                        data-gallery="portfolio-gallery-book" class="glightbox preview-link"><i
                                            class="bi bi-zoom-in"></i></a>
                                    <!-- <a href="project-details.html" title="More Details" class="details-link"><i class="bi bi-link-45deg"></i></a> -->
                                </div>
                            </div>
                        </div><!-- End Projects Item -->

                    </div><!-- End Projects Container -->

                </div>

            </div>
        </section><!-- End Our Projects Section -->

        <!-- ======= Testimonials Section ======= -->
        <section id="testimonials" class="testimonials section-bg">
            <div class="container" data-aos="fade-up">

                <div class="section-header">
                    <h2>Testimonials</h2>
                    <p>Some of the top user of this website with their Experiencses.</p>
                </div>

                <div class="slides-2 swiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Saul Goodman</h3>
                                    <h4>Ceo &amp; Founder</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        The contractor information system website demonstrates remarkable innovation in
                                        streamlining construction project management processes.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Sara Wilsson</h3>
                                    <h4>Designer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        This website embodies efficiency, making project coordination and communication
                                        seamless for contractors and clients alike.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Jena Karlis</h3>
                                    <h4>Store Owner</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        The effectiveness of this contractor information system website in facilitating
                                        collaboration and ensuring project success is truly commendable.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>Matt Brandon</h3>
                                    <h4>Freelancer</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        Its user-friendly interface makes navigating through project details and updates
                                        a breeze, catering to users of all technical levels.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                        <div class="swiper-slide">
                            <div class="testimonial-wrap">
                                <div class="testimonial-item">
                                    <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img"
                                        alt="">
                                    <h3>John Larson</h3>
                                    <h4>Entrepreneur</h4>
                                    <div class="stars">
                                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                            class="bi bi-star-fill"></i>
                                    </div>
                                    <p>
                                        <i class="bi bi-quote quote-icon-left"></i>
                                        With its robust features and transparent approach, this website has become a
                                        reliable companion for contractors, providing a solid foundation for project
                                        management.
                                        <i class="bi bi-quote quote-icon-right"></i>
                                    </p>
                                </div>
                            </div>
                        </div><!-- End testimonial item -->

                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </section><!-- End Testimonials Section -->
    </main><!-- End #main -->

    <!-- ======= Footer ======= -->

    @include('layouts.footer')

    <!-- End Footer -->
