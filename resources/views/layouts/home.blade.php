<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sushi Tangerang</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('') }}assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
    <!-- In the head section -->
    <link rel="stylesheet" href="{{ asset('vendor/sweetalert2/sweetalert2.min.css') }}">

    <!-- Before the closing body tag -->
    <script src="{{ asset('vendor/sweetalert2/sweetalert2.all.min.js') }}"></script>


    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

    <!-- =======================================================
    * Template Name: Restaurantly
    * Updated: Sep 20 2023 with Bootstrap v5.3.2
    * Template URL: https://bootstrapmade.com/restaurantly-restaurant-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>

<body>
    @if(Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    <!-- ======= Top Bar ======= -->
    <div id="topbar" class="d-flex align-items-center fixed-top">
        <div class="container d-flex justify-content-center justify-content-md-between">

            <div class="contact-info d-flex align-items-center">
                <i class="bi bi-phone d-flex align-items-center"><span>+62 813 3617 2940</span></i>
                <i class="bi bi-clock d-flex align-items-center ms-4"><span> Senin-Sabtu: 10AM - 22PM</span></i>
            </div>

            <div class="languages d-none d-md-flex align-items-center">
                <ul>
                <li>Karawaci</li>
                <li><a href="#">Tangerang</a></li>
                </ul>
            </div>
        </div>
    </div>
  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-cente">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-lg-between">

      <h1 class="logo me-auto me-lg-0"><a href="index.html">Sushi Tangerang</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto enable-smooth-scroll" href="#about">Tentang Kami</a></li>
          <li><a class="nav-link scrollto" href="#menu">Menu</a></li>
          <li><a class="nav-link scrollto" href="#specials">Spesial Menu</a></li>
          <li><a class="nav-link scrollto" href="#chefs">Chefs</a></li>
          <li><a class="nav-link scrollto" href="#gallery">Gallery</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
      <a href="#book-a-table" class="book-a-table-btn scrollto d-none d-lg-flex">Reservasi Meja</a>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">
    <div class="container position-relative text-center text-lg-start" data-aos="zoom-in" data-aos-delay="100">
      <div class="row">
        <div class="col-lg-8">
          <h1>Selamat Datang di</h1>
          <h1><span>Sushi Tangerang</span></h1>
          <h2>Menyajikan sushi terbaik selama lebih dari 7 tahun!</h2>

          <div class="btns">
            <a href="#menu" class="btn-menu animated fadeInUp scrollto">Menu Kami</a>
            <a href="#book-a-table" class="btn-book animated fadeInUp scrollto">Reservasi</a>
          </div>
        </div>
        <div class="col-lg-4 d-flex align-items-center justify-content-center position-relative" data-aos="zoom-in" data-aos-delay="200">
          <a href="https://youtu.be/wVmZD4pZ9PE?si=IkwLsowcAAxElyeO" class="glightbox play-btn"></a>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="events">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <h2>Tentang Kami</h2>
            <p>Perjalanan sushi tangerang selama 7 tahun</p>
          </div>
  
          <div class="events-slider swiper" data-aos="fade-up" data-aos-delay="100">
            <div class="swiper-wrapper">
  
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-birthday.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Tentang Sushi Tangerang</h3>
                    <p >
                        Kisah Sushi Tangerang sendiri dimulai pada akhir tahun 2015. Saat itu, Chef sushi Bambang Suherman berasal dari Tangerang sedang bermimpi untuk membuka restoran sushi tradisional yang dipadukan dengan teknologi modern. Ia menciptakan konsep kaiten sushi yang menjadi pionir dalam penggunaan ban berjalan untuk menyajikan sushi. Ketika suatu saat sukses besar di Indonesia, Sushi Tangerang berencana berekspansi ke luar negeri. Saat ini Sushi Tangerag telah berdiri lebih dari 7 Tahun.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-private.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Halal Dalam Setiap Gigitan!</h3>
                    <p class=>
                        Tahun 2023 merupakan salah satu pencapaian terbesar Sushi Tanngerang karena kami berhasil meraih sertifikasi halal grade A. Hal ini merupakan wujud kerja keras kami dalam memberikan pelayanan optimal kepada konsumen kami, sehingga konsumen lebih aman dan percaya untuk menikmati hidangan kami. Ke depan, Sushi Tanngerang akan memegang teguh komitmen untuk menerapkan sistem jaminan halal di semua gerai kami, antara lain penggunaan produk/bahan dan penyajian yang halal, serta larangan membawa makanan/minuman dari luar dan binatang peliharaan.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
              <div class="swiper-slide">
                <div class="row event-item">
                  <div class="col-lg-6">
                    <img src="assets/img/event-custom.jpg" class="img-fluid" alt="">
                  </div>
                  <div class="col-lg-6 pt-4 pt-lg-0 content">
                    <h3>Misi Kami</h3>
                    <p class="">
                        Sushi Tangerang bertujuan untuk memberikan Anda pengalaman bersantap sushi paling otentik dan profesional. Sushi Tangerang berkomitmen untuk menyediakan berbagai macam sushi bernilai uang tanpa mengurangi kualitas.
                    </p>
                    <ul>
                      <li><i class="bi bi-check-circled"></i> Menu Beragam</li>
                      <li><i class="bi bi-check-circled"></i> Ciptakan Keceriaan</li>
                      <li><i class="bi bi-check-circled"></i> Pelayanan Sehangat Ichikuma</li>
                    </ul>
                    <p>
                        Dengan memberikan pelayanan terbaik kami berharap semua pelanggan setia Sushi Tangerang dapat merasakan kenikmatan yang ada pada menu kami.
                    </p>
                  </div>
                </div>
              </div><!-- End testimonial item -->
  
            </div>
            <div class="swiper-pagination"></div>
          </div>
  
        </div>
    </section><!-- End Events Section -->

    <!-- ======= Why Us Section ======= -->
    <section id="why-us" class="why-us">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Mengapa Sushi Tangerang</h2>
          <p>Mengapa Memilih Sushi Kami ?</p>
        </div>

        <div class="row">
            <div class="col-lg-4">
                <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                    <span>
                        <img src="{{ asset('assets/img/sushi4.svg') }}" class="img-fluid mx-auto d-block"
                            style="width: 180px; border-radius: 10px;" alt="">
                    </span>
                    <h4>Lorem Ipsum</h4>
                    <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>
            </div>            

            <div class="col-lg-4">
                <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                    <span>
                        <img src="{{ asset('assets/img/sushi2.svg') }}" class="img-fluid mx-auto d-block"
                            style="width: 180px; border-radius: 10px;" alt="">
                    </span>
                    <h4>Lorem Ipsum</h4>
                    <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="box text-center" data-aos="zoom-in" data-aos-delay="100">
                    <span>
                        <img src="{{ asset('assets/img/sushi3.svg') }}" class="img-fluid mx-auto d-block"
                            style="width: 180px; border-radius: 10px;" alt="">
                    </span>
                    <h4>Lorem Ipsum</h4>
                    <p>Ulamco laboris nisi ut aliquip ex ea commodo consequat. Et consectetur ducimus vero placeat</p>
                </div>
            </div>

        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Menu Section ======= -->
    <section id="menu" class="menu section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Menu</h2>
          <p>Menu Terbaik Kami</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="menu-flters">
              <li data-filter="*" class="filter-active">All</li>
              @foreach ($categories as $category)
                <li data-filter=".{{ $category->name }}" class="{{ Request::is($category->name) ? 'filter-active' : '' }}">{{ $category->name }}</li> 
              @endforeach
              {{-- <li data-filter=".filter-starters">Starters</li>
              <li data-filter=".filter-salads">Salads</li>
              <li data-filter=".filter-specialty">Specialty</li> --}}
            </ul>
          </div>
        </div>

        {{-- Pilihan Menu --}}
        <div class="row menu-container" data-aos="fade-up" data-aos-delay="200">
            @foreach ($menus as $menu)
                @foreach ($menu->categories as $category)   
                    <div class="col-lg-6 menu-item {{ $category->name }}">
                        @if ($menu->categories)
                            <img src="{{ Storage::url($menu->image) }}" class="menu-img" alt="">
                            <div class="menu-content">
                                <a href="#">{{ $menu->name }}</a><span id="formattedPrice{{ $menu->id }}"></span>
                                <script>
                                    document.addEventListener('DOMContentLoaded', function () {
                                        var price = {{ $menu->price }};
                                        var formattedPrice = formatCurrency(price);
                                        document.getElementById('formattedPrice{{ $menu->id }}').innerText = formattedPrice;
                                    });
                            
                                    function formatCurrency(amount) {
                                        // Customize this function based on your formatting requirements
                                        var formattedAmount = 'Rp. ' + amount.toLocaleString('id-ID');
                                        return formattedAmount;
                                    }
                                </script>
                            </div>
                            <div class="menu-ingredients">
                                {{ $menu->description }}
                            </div>
                        </div>
                    @else
                            <h1>NO MENU</h1>
                    @endif
                @endforeach
            @endforeach
        </div>

      </div>
    </section><!-- End Menu Section -->

    <!-- ======= Specials Section ======= -->
    <section id="specials" class="specials">
        <div class="container" data-aos="fade-up">
            <div class="section-title">
                <h2>Category</h2>
                <p>Category Menu Kami</p>
            </div>

            <div class="row" data-aos="fade-up" data-aos-delay="100">
                <div class="col-lg-3">
                    <ul class="nav nav-tabs flex-column">
                        @foreach ($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link {{ $category->name === 'SASHIMI' ? 'active show' : '' }}" data-bs-toggle="tab" href="#tab-{{ $category->name }}" data-bs-target="#tab-{{ $category->name }}">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div class="col-lg-9 mt-4 mt-lg-0">
                    <div class="tab-content">
                        @foreach ($categories as $category)
                            <div class="tab-pane {{ $category->name === 'SASHIMI' ? 'active show' : '' }}" id="tab-{{ $category->name }}">
                                <div class="row">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>{{ $category->name }}</h3>
                                        <p class="fst-italic">{{ $category->description }}</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="{{ Storage::url($category->image) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>                    
        </div>
    </section><!-- End Specials Section -->

    <!-- ======= Book A Table Section ======= -->
    <section id="book-a-table" class="book-a-table">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Reservation</h2>
          <p>Book a Table</p>
        </div>

        <form method="POST" action="{{ route('reservations.create') }}" enctype="multipart/form-data"  >
            @csrf
            <div class="row">
                <div class="col-lg-4 col-md-6 form-group">
                    <input type="text" name="first_name" class="form-control @error('first_name') border-red @enderror" id="first_name" placeholder="First Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                    <div class="validate"></div>
                    @error('first_name')
                        <div class="text-sm text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="text" class="form-control @error('last_name') border-red @enderror" name="last_name" id="last_name" placeholder="Last Name" data-rule="last_name" data-msg="Please enter a valid email" >
                    <div class="validate"></div>
                    @error('last_name')
                        <div class="text-sm text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Please enter at least 4 chars" >
                    <div class="validate"></div>
                    @error('email')
                        <div class="text-sm text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="number" name="tel_number" class="form-control" id="tel_number" placeholder="Nomor Telepon" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    @error('tel_number')
                        <div class="text-sm text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <input type="datetime-local" class="form-control text-black bg-white" name="res_date" id="res_date" placeholder="Tanggal Reservasi" data-msg="Please enter at least 4 chars">
                    <div class="validate"></div>
                    <span class="blockquote-footer">Silahkan pilih waktu diantara jam 10:00-22:00 WIB.</span>
                    @error('res_date')
                        <div class="text-sm text-red">{{ $message }}</div>
                    @enderror
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <select name="guest_number" id="guest_number" class="form-control" style="border-radius: 0;
                    box-shadow: none;
                    font-size: 14px;
                    background: #0c0b09;
                    border-color: #625b4b;
                    color: white; height: 44px;" >
                        <option selected>Pilih Total Kursi</option>
                        <option>2</option>
                        <option>4</option>
                        <option>6</option>
                        <option>8</option>
                        <option>10</option>
                        <option>12</option>
                    </select>                    
                    {{--
                    <input type="number" class="form-control" name="guest_number" id="guest_number" placeholder="Total Kursi" data-rule="minlen:1" data-msg="Please enter at least 1 chars" value="{{ $reservation->guest_number ?? '' }}"> --}}
                    <div class="validate"></div>
                </div>
                <div class="col-lg-4 col-md-6 form-group mt-3">
                    <select name="table_id" id="table_id" class="form-control" style="border-radius: 0;
                    box-shadow: none;
                    font-size: 14px;
                    background: #0c0b09;
                    border-color: #625b4b;
                    color: white; height: 44px;">
                        @foreach ($tables as $table)
                            <option value="{{ $table->id }}">{{ $table->name }}
                                ({{ $table->guest_number }} Orang)
                            </option>
                        @endforeach
                    
                    </select>                    
                    {{--
                    <input type="number" class="form-control" name="guest_number" id="guest_number" placeholder="Total Kursi" data-rule="minlen:1" data-msg="Please enter at least 1 chars" value="{{ $reservation->guest_number ?? '' }}"> --}}
                    <div class="validate"></div>
                </div>
            </div>
            {{-- <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
                <div class="validate"></div>
            </div> --}}
            <div class="mb-3">
                {{-- @if(Session::has('success_message'))
                    <div class="alert alert-success">
                        {{ Session::has('success_message') }}
                    </div>
                @endif --}}
            </div>
            <div class="text-center">
                <button type="submit">Book a Table</button>
            </div>
        </form>

      </div>
    </section><!-- End Book A Table Section -->

    <!-- ======= Testimonials Section ======= -->
    <section id="testimonials" class="testimonials section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Testimonials</h2>
          <p>What they're saying about us</p>
        </div>

        <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
          <div class="swiper-wrapper">

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Proin iaculis purus consequat sem cure digni ssim donec porttitora entum suscipit rhoncus. Accusantium quam, ultricies eget id, aliquam eget nibh et. Maecen aliquam, risus at semper.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-1.jpg" class="testimonial-img" alt="">
                <h3>Saul Goodman</h3>
                <h4>Ceo &amp; Founder</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Export tempor illum tamen malis malis eram quae irure esse labore quem cillum quid cillum eram malis quorum velit fore eram velit sunt aliqua noster fugiat irure amet legam anim culpa.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-2.jpg" class="testimonial-img" alt="">
                <h3>Sara Wilsson</h3>
                <h4>Designer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Enim nisi quem export duis labore cillum quae magna enim sint quorum nulla quem veniam duis minim tempor labore quem eram duis noster aute amet eram fore quis sint minim.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-3.jpg" class="testimonial-img" alt="">
                <h3>Jena Karlis</h3>
                <h4>Store Owner</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Fugiat enim eram quae cillum dolore dolor amet nulla culpa multos export minim fugiat minim velit minim dolor enim duis veniam ipsum anim magna sunt elit fore quem dolore labore illum veniam.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-4.jpg" class="testimonial-img" alt="">
                <h3>Matt Brandon</h3>
                <h4>Freelancer</h4>
              </div>
            </div><!-- End testimonial item -->

            <div class="swiper-slide">
              <div class="testimonial-item">
                <p>
                  <i class="bx bxs-quote-alt-left quote-icon-left"></i>
                  Quis quorum aliqua sint quem legam fore sunt eram irure aliqua veniam tempor noster veniam enim culpa labore duis sunt culpa nulla illum cillum fugiat legam esse veniam culpa fore nisi cillum quid.
                  <i class="bx bxs-quote-alt-right quote-icon-right"></i>
                </p>
                <img src="assets/img/testimonials/testimonials-5.jpg" class="testimonial-img" alt="">
                <h3>John Larson</h3>
                <h4>Entrepreneur</h4>
              </div>
            </div><!-- End testimonial item -->

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section><!-- End Testimonials Section -->

    <!-- ======= Gallery Section ======= -->
    <section id="gallery" class="gallery">

      <div class="container" data-aos="fade-up">
        <div class="section-title">
          <h2>Gallery</h2>
          <p>Beberapa Foto Tentang Sushi Tangerang</p>
        </div>
      </div>

      <div class="container-fluid" data-aos="fade-up" data-aos-delay="100">

        <div class="row g-0">

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-1.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-1.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-2.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-2.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-3.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-3.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-4.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-4.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-5.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-5.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-6.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-6.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-7.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-7.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="gallery-item">
              <a href="assets/img/gallery/gallery-8.jpg" class="gallery-lightbox" data-gall="gallery-item">
                <img src="assets/img/gallery/gallery-8.jpg" alt="" class="img-fluid">
              </a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Gallery Section -->

    <!-- ======= Chefs Section ======= -->
    <section id="chefs" class="chefs">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Chefs</h2>
          <p>Chefs Profesional Kami</p>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="100">
              <img src="assets/img/chefs/chefs-1.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Didi Jumaidi</h4>
                  <span>Master Chef</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="200">
              <img src="assets/img/chefs/chefs-2.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Sarah Anggraini</h4>
                  <span>Patissier</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="member" data-aos="zoom-in" data-aos-delay="300">
              <img src="assets/img/chefs/chefs-3.jpg" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>William Pamungkas</h4>
                  <span>Cook</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Chefs Section -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Kontak</h2>
          <p>Hubungi Kami</p>
        </div>
      </div>

      <div data-aos="fade-up">
        <iframe style="border:0; width: 100%; height: 350px;" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d9432.63361715892!2d106.63058845375163!3d-6.272422970497689!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fb7c568398b3%3A0xa0f9cf0e9cd0d61!2sCluster%20Catalina%20Gading%20Serpong!5e0!3m2!1sid!2sid!4v1699800057648!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container" data-aos="fade-up">

        <div class="row mt-5">

          <div class="col-lg-4">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Lokasi:</h4>
                <p>Jl. Danau Ranau II No.17, gading, Kec. Serpong, Kabupaten Tangerang, Banten 15332</p>
              </div>

              <div class="open-hours">
                <i class="bi bi-clock"></i>
                <h4>Buka :</h4>
                <p>
                  Senin-Sabtu:<br>
                  10:00 AM - 22:00 PM
                </p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p>irwan3748@gmail.com</p>
              </div>

              <div class="phone">
                <i class="bi bi-phone"></i>
                <h4>Telp:</h4>
                <p>+62 813 3617 2940</p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" required>
                    </div>
                    <div class="col-md-6 form-group mt-3 mt-md-0">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                    </div>
                </div>
                <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Sujek" required>
                </div>
                <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="8" placeholder="Pesan Anda" required></textarea>
                </div>
                <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit">Send Message</button></div>
            </form>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>Sushi Tangerang</h3>
              <p>
                Jl. Danau Ranau II No.17, gading, Kec. Serpong<br>
                Kabupaten Tangerang, Banten 15332<br><br>
                <strong>Nomor Telepon:</strong> +62 813 3617 2940<br>
                <strong>Email:</strong> irwan3748@gmail.com<br>
              </p>
              <div class="social-links mt-3">
                <a href="http://www.twitter.com" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="http://www.facebook.com" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="http://www.instagram.com/irwan_tyo" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="http://www.linkedin.com/in/irwan-tyo" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Tentang Kami</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Syarat dan Ketentuan</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kebijakan Privasi</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Pelayanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Reservasi</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Spesial Menu</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Karir</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Hubungi Kami</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Informasi Lebih Lanjut</h4>
            <p>Kami akan memberikan informasi terkait Sushi Tangerang melalui email anda.</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Sushi Tangerang</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script>
    // Your SweetAlert calls go here
    Swal.fire('Hello world!');
</script>
@include('sweetalert::alert')
</body>

</html>