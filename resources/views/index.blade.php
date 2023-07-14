@extends('landingPg.layout.index')
@section('content')
  <div>
      <!-- Main Carousel Section Start -->
      <div id="main-slide" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#main-slide" data-slide-to="0" class="active"></li>
          <li data-target="#main-slide" data-slide-to="1"></li>
          <li data-target="#main-slide" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="{{ asset('landing_page/assets/img/slider/slide1.jpg') }}" alt="First slide">
            <div class="carousel-caption d-md-block">
              <h1 class="wow fadeInDown heading" data-wow-delay=".4s">Welcome</h1>
              <p class="fadeInUp wow" data-wow-delay=".6s">Find the Best Events with Eventify</p>
              <a href="#" class="fadeInLeft wow btn btn-common btn-lg" data-wow-delay=".6s">Get Ticket</a>
              <a href="#" class="fadeInRight wow btn btn-border btn-lg" data-wow-delay=".6s">Explore More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('landing_page/assets/img/slider/slide2.jpg') }}" alt="Second slide">
            <div class="carousel-caption d-md-block">
              <p class="fadeInUp wow" data-wow-delay=".6s"></p>
              <h1 class="wow bounceIn heading" data-wow-delay=".7s"> Amazing Speakers</h1>
              <a href="#" class="fadeInUp wow btn btn-border btn-lg" data-wow-delay=".8s">Learn More</a>
            </div>
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="{{ asset('landing_page/assets/img/slider/slide3.jpg') }}" alt="Third slide">
            <div class="carousel-caption d-md-block">
              <h1 class="wow fadeInUp heading" data-wow-delay=".6s">Book Your Seat Now!</h1>
              <a href="#" class="fadeInUp wow btn btn-common btn-lg" data-wow-delay=".8s">Explore</a>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#main-slide" role="button" data-slide="prev">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#main-slide" role="button" data-slide="next">
          <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      <!-- Main Carousel Section End -->

    </header>
    <!-- Header Area wrapper End -->

    <!-- About Section Start -->
    <section id="about" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Events</h1>
            </div>
          </div>
        </div>
        <div class="row" style="display: flex;">
            @foreach ($kegiatan as $kegiatans)
            <div class="about-item col-md-4" style="margin-bottom: 5px; text-align:center;" width="200px">
              <img class="img-fluid" src="{{ asset('landing_page/assets/img/about/img1.jpg') }}" alt="">
              <div class="about-text">
                <h3><a href="#">{{ $kegiatans->judul }}</a></h3>
                <p>Rp. {{ number_format($kegiatans->harga_tiket, 0) }}</p>
                <a href="{{ url('/index/detail', $kegiatans->id )}}" class="btn btn-common btn-rm">Detail</a>
              </div>
            </div>
            @endforeach
        </div>
      </div>
    </section>
    <!-- About Section End -->

    <!-- Counter Area Start-->
    <section class="counter-section section-padding">
      <div class="container">
        <div class="row">
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.3s">
              <div class="icon"><i class="lni-map"></i></div>
              <p>Wst. Java</p>
              <span>Jakarta</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.6s">
              <div class="icon"><i class="lni-timer"></i></div>
              <p>February 14 - 19, 2023</p>
              <span>09:00 AM - 05:00 PM</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="0.9s">
              <div class="icon"><i class="lni-users"></i></div>
              <p>Available Seats</p>
              <span>Hurryup! few tickets are left</span>
            </div>
          </div>
          <!-- Counter Item -->
          <div class="col-md-6 col-lg-3 col-xs-12 work-counter-widget text-center">
            <div class="counter wow fadeInRight" data-wow-delay="1.2s">
              <div class="icon"><i class="lni-coffee-cup"></i></div>
              <p>Free Lunch & Snacks</p>
              <span>Don't miss it</span>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Counter Area End-->

    <!-- Gallary Section Start -->
    <section id="gallery" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Gallery</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">"Activity Documentation"</p>
            </div>
          </div> 
        </div>
        <div class="row">
          <div class="col-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('landing_page/assets/img/gallery/img-1.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('landing_page/assets/img/gallery/img-1.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('landing_page/assets/img/gallery/img-2.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('landing_page/assets/img/gallery/img-2.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('landing_page/assets/img/gallery/img-3.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('landing_page/assets/img/gallery/img-3.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('landing_page/assets/img/gallery/img-4.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('landing_page/assets/img/gallery/img-4.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('landing_page/assets/img/gallery/img-5.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('landing_page/assets/img/gallery/img-5.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
          <div class="ccol-md-6 col-sm-6 col-lg-4">
            <div class="gallery-box">
              <div class="img-thumb">
                <img class="img-fluid" src="{{ asset('landing_page/assets/img/gallery/img-6.jpg') }}" alt="">
              </div>
              <div class="overlay-box text-center">
                <a class="lightbox" href="{{ asset('landing_page/assets/img/gallery/img-6.jpg') }}">
                  <i class="lni-plus"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center mt-3">
          <div class="col-xs-12">
            <a href="#" class="btn btn-common">Browse All</a>
          </div>
        </div>
      </div>
    </section>
    <!-- Gallary Section End -->

    <!-- Event Slides Section Start -->
    <section id="event-slides" class="section-padding">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title-header text-center">
              <h1 class="section-title wow fadeInUp" data-wow-delay="0.2s">Event Guideline</h1>
              <p class="wow fadeInDown" data-wow-delay="0.2s">"Find the Best Events with Eventify!"</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInRight" data-wow-delay="0.3s">
            <div class="video">
              <img class="img-fluid" src="{{ asset('landing_page/assets/img/about/about.jpg') }}" alt="">
            </div>
          </div>
          <div class="col-md-6 col-lg-6 col-xs-12 wow fadeInLeft" data-wow-delay="0.3s">
            <p class="intro-desc">Terima kasih telah bergabung dengan seminar-seminar yang diselenggarakan oleh Eventify. Berikut adalah panduan acara yang perlu Anda ikuti:
            </p>
            <h2 class="intro-title">Check List</h2>
            <ul class="list-specification">
              <li><i class="lni-check-mark-circle"></i> Pastikan Anda telah mendaftar dan membeli tiket acara melalui aplikasi Eventify.</li>
              <li><i class="lni-check-mark-circle"></i> Periksa detail acara, termasuk tanggal, waktu, dan lokasi Acara</li>
              <li><i class="lni-check-mark-circle"></i> Pastikan Anda membawa tiket acara atau konfirmasi pendaftaran saat menghadiri acara.</li>
              <li><i class="lni-check-mark-circle"></i> Pastikan perangkat ponsel Anda terisi daya dan dalam kondisi yang baik untuk mengabadikan Moment</li> 
            </ul>
          </div>
        </div>
      </div>
    </section>
    <!-- Event Slides Section End -->
  </div>
@endsection
