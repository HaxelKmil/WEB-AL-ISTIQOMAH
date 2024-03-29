<?php

$site_name = get_setting_value('_site_name');
$location = get_setting_value('_location');
$site_description = get_setting_value('_site_description');
$Telepon = get_setting_value('_Telepon');
$email = get_setting_value('_Email');
$Desainby = get_setting_value('_Desainby');

// $Guru = get_section_data('Guru');
$guru = get_partner();
// $fasilitas = get_fasilitas_data('fasilitas');
$fasilitas = get_fasilitas();





$jumbotron = get_section_data('JUMBOTRON');
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>{{ $site_name }}</title>
    <meta content="" name="description" />
    <meta content="" name="keywords" />
                        
    <!-- Favicons -->
    <link href="assets/img/logo1.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link
      href="assets/vendor/bootstrap/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      href="assets/vendor/bootstrap-icons/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link
      href="assets/vendor/glightbox/css/glightbox.min.css"
      rel="stylesheet"
    />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- =======================================================
  * Template Name: Arsha - v4.3.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
  </head>

  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
        <h3 class="logo me-auto"><a href="index.html"><img src="assets/img/logo1.png" width="40"></a></h3>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

        <nav id="navbar" class="navbar mr-5">
          <ul>
            <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
            <li><a class="nav-link scrollto" href="#about">About Us</a></li>
            <!-- <li><a class="nav-link scrollto" href="#services">Services</a></li> -->
            <li>
              <a class="nav-link scrollto" href="#portfolio">facility</a>
            </li>
            <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
            <li>
              <a class="getstarted scrollto" href="#about">PAUD-TPQ</a>
            </li>
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav>
        <!-- .navbar -->
      </div>
    </header>
    <!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="align-items-center"  style="background-image: url('{{Storage::url($jumbotron->thumbnail)}}');">
      <div class="container">
        <div class="row">
          <div
            class=" text-center pt-4 pt-lg-0 order-2 order-lg-1"
            data-aos="fade-up"
            data-aos-delay="200"
          >
            <h1>{{ $jumbotron->title }}</h1>
            <h2>
              {!! $jumbotron->content !!}
            </h2>
            <div class=" justify-content-center justify-content-lg-start">
              <a href="#about" class="btn-get-started scrollto">Start</a>
              <!-- <a
                href="https://www.youtube.com/watch?v=jDDaplaOz7Q"
                class="glightbox btn-watch-video"
                ><i class="bi bi-play-circle"></i><span>Watch Video</span></a
              > -->
            </div>
          </div>
          <div
            class="col-lg-6 order-1 order-lg-2 hero-img"
            data-aos="zoom-in"
            data-aos-delay="200"
          >
            <!-- <img src="{{Storage::url($jumbotron->thumbnail)}}" class="img-fluid animated" alt=""/> -->
          </div>
        </div>
      </div>
    </section>
    <!-- End Hero -->

      <!-- ======= About Us Section ======= -->
      <section id="about" class="about">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>About Us</h2>
          </div>

          <div class="row content">
            <div class="col-lg-6">
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <ul>
                <li>
                  <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                  aliquip ex ea commodo consequat
                </li>
                <li>
                  <i class="ri-check-double-line"></i> Duis aute irure dolor in
                  reprehenderit in voluptate velit
                </li>
                <li>
                  <i class="ri-check-double-line"></i> Ullamco laboris nisi ut
                  aliquip ex ea commodo consequat
                </li>
              </ul>
            </div>
            <div class="col-lg-6 pt-4 pt-lg-0">
              <p>
                Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                aute irure dolor in reprehenderit in voluptate velit esse cillum
                dolore eu fugiat nulla pariatur. Excepteur sint occaecat
                cupidatat non proident, sunt in culpa qui officia deserunt
                mollit anim id est laborum.
              </p>
              <a href="#why-us" class="btn-get-started scrollto">NEXT</a>
            </div>
          </div>
        </div>
      </section>
      <!-- End About Us Section -->

      <!-- ======= Why Us Section ======= -->
      <section id="why-us" class="why-us section-bg">
        <div class="container-fluid" data-aos="fade-up">
          <div class="row">
            <div
              class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch order-2 order-lg-1"
            >
              <div class="content">
                <h1>
                  Program Unggulan
                </h1>
              </div>

              <div class="accordion-list">
                <ul>
                  <li>
                    <a
                      data-bs-toggle="collapse"
                      class="collapse"
                      data-bs-target="#accordion-list-1"
                      ><span>01</span> Pembiasaan Sholat duha berjama'ah <i class="bx bx-chevron-down icon-show"></i
                      ><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div
                      id="accordion-list-1"
                      class="collapse show"
                      data-bs-parent=".accordion-list"
                    >
                      <p>
                        Anak-anak PAUD yang diajarkan dan dibiasakan untuk melaksanakan 
                        sholat Duha berjama'ah menumbuhkan kecintaan mereka pada ibadah, 
                        membentuk kebiasaan positif sejak dini, dan menciptakan suasana 
                        kebersamaan yang penuh keberkahan di lingkungan pendidikan mereka.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-list-2"
                      class="collapsed"
                      ><span>02</span> Hafalan Surat Pendek dan Do'a Harian <i class="bx bx-chevron-down icon-show"></i
                      ><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div
                      id="accordion-list-2"
                      class="collapse"
                      data-bs-parent=".accordion-list"
                    >
                      <p>
                        Proses hafalan surat pendek dan doa harian yang diarahkan pada anak 
                        PAUD tidak hanya memperkaya hafalan mereka, tetapi juga membentuk 
                        kebiasaan positif serta mengajarkan nilai-nilai keagamaan yang penting 
                        sejak usia dini.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-list-3"
                      class="collapsed"
                      ><span>03</span> Outing Class <i class="bx bx-chevron-down icon-show"></i
                      ><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div
                      id="accordion-list-3"
                      class="collapse"
                      data-bs-parent=".accordion-list"
                    >
                      <p>
                        Outing Class bagi anak-anak PAUD menjadi pengalaman berharga yang tidak 
                        hanya memperluas pengetahuan mereka tentang lingkungan sekitar, tetapi 
                        juga memberikan kesempatan untuk meningkatkan keterampilan sosial, kreativitas
                        , dan kecintaan pada belajar melalui kegiatan yang menyenangkan di luar ruangan.
                      </p>
                    </div>
                  </li>
                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-list-4"
                      class="collapsed"
                      ><span>04</span> Percobaan Sains <i class="bx bx-chevron-down icon-show"></i
                      ><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div
                      id="accordion-list-4"
                      class="collapse"
                      data-bs-parent=".accordion-list"
                    >
                      <p>
                        Anak-anak PAUD yang dilibatkan dalam percobaan sains mengalami kegembiraan 
                        dan keheranan saat mereka berpartisipasi dalam kegiatan eksperimen, membantu 
                        mereka memahami konsep dasar sains dengan cara yang interaktif dan menyenangkan.
                      </p>
                    </div>
                  </li>

                  <li>
                    <a
                      data-bs-toggle="collapse"
                      data-bs-target="#accordion-list-5"
                      class="collapsed"
                      ><span>05</span> Kegiatan Wisuda <i class="bx bx-chevron-down icon-show"></i
                      ><i class="bx bx-chevron-up icon-close"></i
                    ></a>
                    <div
                      id="accordion-list-5"
                      class="collapse"
                      data-bs-parent=".accordion-list"
                    >
                      <p>
                        Kegiatan wisuda anak PAUD menjadi momen bersejarah di mana keceriaan dan 
                        kebanggaan terpancar dari wajah mereka. Dalam suasana yang penuh kebahagiaan, 
                        anak-anak PAUD merayakan pencapaian kecil mereka dan melangkah menuju tahap 
                        berikutnya dengan semangat yang penuh semangat dan antusias.
                      </p>
                    </div>
                  </li>
                </ul>
              </div>
            </div>

            <div
              class="col-lg-4 align-items-stretch order-1 order-lg-2 img"
              style="background-image: url('assets/img/wisuda.jpg')"   
              data-aos="zoom-in"
              data-aos-delay="150"
            >
              &nbsp;
            </div>
          </div>
        </div>
      </section>
      <!-- End Why Us Section -->

      <!-- ======= Portfolio Section ======= -->
      <section id="portfolio" class="portfolio">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>facility</h2>
            <p>
              Berikut ini adalah fasilitas dari PAUD Al-Istiqomah, yang didesain dan diurus 
              dengan sepenuh dedikasi untuk menciptakan lingkungan belajar yang nyaman bagi 
              anak-anak di lembaga ini.
            </p>
          </div>

          <div
          class="row portfolio-container"
          @php
              $i=1;
          @endphp
          @foreach ($fasilitas as $item)            
            {{-- data-aos="fade-up"
            data-aos-delay="200" --}}
          >
            <div class="col-lg-4 col-md-6 portfolio-item filter-app">
              <div class="portfolio-img">
                <img
                  src="{{Storage::url($item->thumbnail)}}"
                  class="img-fluid"
                  alt=""
                  />
                </div>
                <div class="portfolio-info">
                  <h4>{{ $item->title }}</h4>
                <p>{!! $item->content !!}</p>
                <a
                href="{{Storage::url($item->thumbnail)}}"
                data-gallery="portfolioGallery"
                class="portfolio-lightbox preview-link"
                title="{{ $item->title }}"
                ><i class="bx bx-plus"></i
                  ></a>
                  <a
                  href="portfolio-details.html"
                  class="details-link"
                  title="More Details"
                  ><i class="bx bx-link"></i
                    ></a>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- End Portfolio Section -->

      <!-- ======= Awal guru ======= -->
      <section id="team" class="team section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Teacher</h2>
            <p>
              Guru PAUD Al-Istiqomah menciptakan lingkungan belajar nyaman
               bagi anak-anak usia dini. Dengan kelembutan dan kecerdasan pedagoginya, beliau mengintegrasikan nilai-nilai
                islami, membantu membentuk generasi muda berkualitas dan berakhlak mulia.
            </p>
          </div>

          <div class="row">
            @php
                $i=1;
            @endphp
            @foreach ($guru as $item)
            <div class="col-lg-6">
              <div
                class="member d-flex align-items-start"
                data-aos="zoom-in"
                data-aos-delay="100"
              >
                <div class="pic">
                  <img
                    src="{{Storage::url($item->thumbnail)}}"
                    class="img-fluid"
                    alt=""
                  />
                </div>
                <div class="member-info">
                  <h4>{{ $item->title }}</h4>
                  <span>{!! $item->content !!}</span>
                  <p>
                    {{ $item->link }} 
                  </p>
                  <div class="social">
                    <a href=""><i class="ri-twitter-fill"></i></a>
                    <a href=""><i class="ri-facebook-fill"></i></a>
                    <a href=""><i class="ri-instagram-fill"></i></a>
                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </section>
      <!-- akhir guru -->

      {{-- <!-- ======= Pricing Section ======= -->
      <section id="pricing" class="pricing">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Pembayaran</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-4" data-aos="fade-up" data-aos-delay="100">
              <div class="box">
                <h3>Free Plan</h3>
                <h4><sup>$</sup>0<span>per month</span></h4>
                <ul>
                  <li>
                    <i class="bx bx-check"></i> Quam adipiscing vitae proin
                  </li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li>
                    <i class="bx bx-check"></i> Nulla at volutpat diam uteera
                  </li>
                  <li class="na">
                    <i class="bx bx-x"></i>
                    <span>Pharetra massa massa ultricies</span>
                  </li>
                  <li class="na">
                    <i class="bx bx-x"></i>
                    <span>Massa ultricies mi quis hendrerit</span>
                  </li>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>

            <div
              class="col-lg-4 mt-4 mt-lg-0"
              data-aos="fade-up"
              data-aos-delay="200"
            >
              <div class="box featured">
                <h3>Business Plan</h3>
                <h4><sup>$</sup>29<span>per month</span></h4>
                <ul>
                  <li>
                    <i class="bx bx-check"></i> Quam adipiscing vitae proin
                  </li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li>
                    <i class="bx bx-check"></i> Nulla at volutpat diam uteera
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Pharetra massa massa ultricies
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Massa ultricies mi quis
                    hendrerit
                  </li>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>

            <div
              class="col-lg-4 mt-4 mt-lg-0"
              data-aos="fade-up"
              data-aos-delay="300"
            >
              <div class="box">
                <h3>Developer Plan</h3>
                <h4><sup>$</sup>49<span>per month</span></h4>
                <ul>
                  <li>
                    <i class="bx bx-check"></i> Quam adipiscing vitae proin
                  </li>
                  <li><i class="bx bx-check"></i> Nec feugiat nisl pretium</li>
                  <li>
                    <i class="bx bx-check"></i> Nulla at volutpat diam uteera
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Pharetra massa massa ultricies
                  </li>
                  <li>
                    <i class="bx bx-check"></i> Massa ultricies mi quis
                    hendrerit
                  </li>
                </ul>
                <a href="#" class="buy-btn">Get Started</a>
              </div>
            </div>
          </div>
        </div>
      </section> --}}
      <!-- End Pricing Section -->

      <!-- ======= Frequently Asked Questions Section ======= -->
      <!-- <section id="faq" class="faq section-bg">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Frequently Asked Questions</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="faq-list">
            <ul>
              <li data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  class="collapse"
                  data-bs-target="#faq-list-1"
                  >Non consectetur a erat nam at lectus urna duis?
                  <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-1"
                  class="collapse show"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id
                    volutpat lacus laoreet non curabitur gravida. Venenatis
                    lectus magna fringilla urna porttitor rhoncus dolor purus
                    non.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-2"
                  class="collapsed"
                  >Feugiat scelerisque varius morbi enim nunc?
                  <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-2"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Dolor sit amet consectetur adipiscing elit pellentesque
                    habitant morbi. Id interdum velit laoreet id donec ultrices.
                    Fringilla phasellus faucibus scelerisque eleifend donec
                    pretium. Est pellentesque elit ullamcorper dignissim. Mauris
                    ultrices eros in cursus turpis massa tincidunt dui.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-3"
                  class="collapsed"
                  >Dolor sit amet consectetur adipiscing elit?
                  <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-3"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Eleifend mi in nulla posuere sollicitudin aliquam ultrices
                    sagittis orci. Faucibus pulvinar elementum integer enim. Sem
                    nulla pharetra diam sit amet nisl suscipit. Rutrum tellus
                    pellentesque eu tincidunt. Lectus urna duis convallis
                    convallis tellus. Urna molestie at elementum eu facilisis
                    sed odio morbi quis
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-4"
                  class="collapsed"
                  >Tempus quam pellentesque nec nam aliquam sem et tortor
                  consequat? <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-4"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Molestie a iaculis at erat pellentesque adipiscing commodo.
                    Dignissim suspendisse in est ante in. Nunc vel risus commodo
                    viverra maecenas accumsan. Sit amet nisl suscipit adipiscing
                    bibendum est. Purus gravida quis blandit turpis cursus in.
                  </p>
                </div>
              </li>

              <li data-aos="fade-up" data-aos-delay="500">
                <i class="bx bx-help-circle icon-help"></i>
                <a
                  data-bs-toggle="collapse"
                  data-bs-target="#faq-list-5"
                  class="collapsed"
                  >Tortor vitae purus faucibus ornare. Varius vel pharetra vel
                  turpis nunc eget lorem dolor?
                  <i class="bx bx-chevron-down icon-show"></i
                  ><i class="bx bx-chevron-up icon-close"></i
                ></a>
                <div
                  id="faq-list-5"
                  class="collapse"
                  data-bs-parent=".faq-list"
                >
                  <p>
                    Laoreet sit amet cursus sit amet dictum sit amet justo.
                    Mauris vitae ultricies leo integer malesuada nunc vel.
                    Tincidunt eget nullam non nisi est sit amet. Turpis nunc
                    eget lorem dolor sed. Ut venenatis tellus in metus vulputate
                    eu scelerisque.
                  </p>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </section> -->
      <!-- End Frequently Asked Questions Section -->

      <!-- ======= Contact Section ======= -->
      <section id="contact" class="contact">
        <div class="container" data-aos="fade-up">
          <div class="section-title">
            <h2>Contact</h2>
            <p>
              Magnam dolores commodi suscipit. Necessitatibus eius consequatur
              ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam
              quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea.
              Quia fugiat sit in iste officiis commodi quidem hic quas.
            </p>
          </div>

          <div class="row">
            <div class="col-lg-5 d-flex align-items-stretch">
              <div class="info">
                <div class="address">
                  <i class="bi bi-geo-alt"></i>
                  <h4>Lokasi:</h4>
                  <p>{{ $location }}</p>
                </div>

                <div class="email">
                  <i class="bi bi-envelope"></i>
                  <h4>Email:</h4>
                  <p>{{ $location }}</p>
                </div>

                <div class="phone">
                  <i class="bi bi-phone"></i>
                  <h4>Telpon:</h4>
                  <p>{{ $Telepon }}</p>
                </div>

                <iframe
                  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                  frameborder="0"
                  style="border: 0; width: 100%; height: 290px"
                  allowfullscreen
                ></iframe>
              </div>
            </div>

            <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">
              <form
                action="forms/contact.php"
                method="post"
                role="form"
                class="php-email-form"
              >
                <div class="row">
                  <div class="form-group col-md-6">
                    <label for="name">Nama</label>
                    <input
                      type="text"
                      name="name"
                      class="form-control"
                      id="name"
                      required
                    />
                  </div>
                  <div class="form-group col-md-6">
                    <label for="name">Email</label>
                    <input
                      type="email"
                      class="form-control"
                      name="email"
                      id="email"
                      required
                    />
                  </div>
                </div>
                <div class="form-group">
                  <label for="name">Subjek</label>
                  <input
                    type="text"
                    class="form-control"
                    name="subject"
                    id="subject"
                    required
                  />
                </div>
                <div class="form-group">
                  <label for="name">Pesan</label>
                  <textarea
                    class="form-control"
                    name="message"
                    rows="10"
                    required
                  ></textarea>
                </div>
                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">
                    Your message has been sent. Thank you!
                  </div>
                </div>
                <div class="text-center">
                  <button type="submit">Send</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- End Contact Section -->
    </main>
    <!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
      <!-- <div class="footer-newsletter">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h4>Join Our Newsletter</h4>
              <p>
                Tamen quem nulla quae legam multos aute sint culpa legam noster
                magna
              </p>
              <form action="" method="post">
                <input type="email" name="email" /><input
                  type="submit"
                  value="Subscribe"
                />
              </form>
            </div>
          </div>
        </div>
      </div> -->

      <div class="footer-top">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 footer-contact">
              <h3>{{ $site_name }}</h3>
              <p>
                {{ $location}}<br>
                              <br>
                <strong>Phone:</strong>  {{ $Telepon }}<br />
                <strong>Email:</strong> {{ $email }}<br />
              </p>
            </div>

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Useful Links</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Home</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#about">About Us</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#portfolio">facility</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#contact">Contact</a>
                </li>
                {{-- <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Privacy policy</a>
                </li> --}}
              </ul>
            </div>

            {{-- <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Services</h4>
              <ul>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Web Design</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Web Development</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Product Management</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i> <a href="#">Marketing</a>
                </li>
                <li>
                  <i class="bx bx-chevron-right"></i>
                  <a href="#">Graphic Design</a>
                </li>
              </ul>
            </div> --}}

            <div class="col-lg-3 col-md-6 footer-links">
              <h4>Our Social Networks</h4>
              <p>
                <!-- {!! $site_description !!} -->
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"
                  ><i class="bx bxl-instagram"></i
                ></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="container footer-bottom clearfix">
        <div class="copyright">
          &copy; Copyright <strong><span>{{ $site_name}}</span></strong
          >.
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/ -->
          Designed by <a href="https://bootstrapmade.com/">{{ $Desainby }}</a>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <div id="preloader"></div>
    <a
      href="#"
      class="back-to-top d-flex align-items-center justify-content-center"
      ><i class="bi bi-arrow-up-short"></i
    ></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>
  </body>
</html>
