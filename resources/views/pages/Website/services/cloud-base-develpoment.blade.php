@extends('layouts.website.website-default')
<link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap4.min.css">
@section('content')
@include('includes.website.navbar')
<main class="main">
    <section id="hero" class="hero section dark-background" style="min-height: 50vh !important;margin-bottom: 20%;">
        <div class="image-background">
            <img src="assets/img/hero-bg.jpg" alt="Hero Image" id="hero-image">
        </div>
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-7 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="zoom-out">
                    <h1 class="fs-1"><span>Cloud Based Development</span></h1>
                    <p>
                        Designed to optimize your business performance.
                    </p>
                    
                    <div class="d-flex mt-4">
                        <a href="#contact" class="btn-get-started fw-bold rounded-pill">Get a Quote</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Service Details Section -->

    <section id="service-details" class="service-details section">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <img src="assets/img/services.jpg" alt="" class="img-fluid services-img ">

                </div>
                <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                    <h3>Cloud Based Development</h3>
                    <p>
                        <strong>Experience</strong> a wide range of cloud-based solutions at BinaryBrix, designed to
                            optimize your business performance.
                            Our services encompass Software as a
                        Service (SaaS), Platform as a Service (PaaS), and complete or partial
                        migration to public, private, or hybrid cloud networks. Our task-oriented team of experts is dedicated to providing consultation, design, development, secure deployment, and ongoing monitoring for all your cloud computing needs.
                    </p>
                    <p>
                        <strong>
                            Our Cloud-Based Solutions Include:

                        </strong>
                    </p>
                    <ul>
                        <li><i class="bi bi-check-circle"></i> <span>Scalable and flexible SaaS and PaaS implementations to enhance business operations.</span>
                        </li>
                        <li><i class="bi bi-check-circle"></i> <span>Smooth migration to public, private, or hybrid cloud environments tailored to your needs.</span></li>
                        <li><i class="bi bi-check-circle"></i> <span>Comprehensive support from design and development to secure deployment and monitoring.</span>
                        </li>
                    </ul>
                    <p>
                        Optimize your business with our expert cloud-based solutions. Partner with BinaryBrix to achieve seamless cloud integration and enhanced performance.
                    </p>
                    <p>
                        <strong>Contact us today!</strong> We're here to help you leverage the power of cloud technology. Request a quote now and start your journey with BinaryBrix.
                    </p>
                </div>

            </div>

        </div>

    </section><!-- /Service Details Section -->

    {{-- Other services --}}

    <section id="services" class="services section ">
        <div class="container section-title" data-aos="fade-up">
          <h2>Our Other Services</h2>
          <p><span>How Can We Empower </span> <span class="description-title">Your Business ?</span></p>


        </div>

        <div class="container">

          <div class="row gy-4 justify-content-center">

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-gear"></i>
                      </div>
                      <a href="{{ route('custom-software') }}" class="stretched-link">
                          <h3 class="color-blue">Custom Software Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-browser-chrome"></i>
                      </div>
                      <a href="{{ route('web-application') }}" class="stretched-link">
                          <h3>Web Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-phone"></i>
                      </div>
                      <a href="{{ route('mobile-application') }}" class="stretched-link">
                          <h3>Mobile Application Development</h3>
                      </a>
                  </div>
              </div>

              {{-- <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-cloud"></i>
                      </div>
                      <a href="{{ route('cloud-based') }}" class="stretched-link">
                          <h3>Cloud Based Development</h3>
                      </a>
                  </div>
              </div> --}}

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-tools"></i>
                      </div>
                      <a href="{{ route('dev-ops') }}" class="stretched-link">
                          <h3>Devops Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-cart"></i> <!-- Icon for E-commerce Development -->
                      </div>
                      <a href="{{ route('e-commerce') }}" class="stretched-link">
                          <h3>E-commerce Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-palette"></i> <!-- Icon for UI/UX Design and Development -->
                      </div>
                      <a href="{{ route('ui-ux-design') }}" class="stretched-link">
                          <h3>UI/UX Design and Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-wifi"></i> <!-- Icon for IoT Development -->
                      </div>
                      <a href="{{ route('iot-development') }}" class="stretched-link">
                          <h3>IoT Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-controller"></i> <!-- Icon for Games Development -->
                      </div>
                      <a href="{{ route('high-tech-game') }}" class="stretched-link">
                          <h3>Games Development</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-robot"></i> <!-- Icon for Games Development -->
                      </div>
                      <a href="{{ route('machine-learning') }}" class="stretched-link">
                          <h3>AI and Machine Learning</h3>
                      </a>
                  </div>
              </div>

              <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-item position-relative">
                      <div class="icon">
                          <i class="bi bi-check-circle"></i> <!-- Icon for QA and Testing -->
                      </div>
                      <a href="{{ route('expert-qa-testing') }}" class="stretched-link">
                          <h3>QA and Testing</h3>
                      </a>
                  </div>
              </div>
          </div>

      </div>
      <br>

    @include('includes.website.contact')

</main>
@endsection

@section('admininsertjavascript')
@endsection
