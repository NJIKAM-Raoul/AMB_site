<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Flattern Bootstrap Template - Index</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ URL::asset('assets/img/favicon.png')}}" rel="icon">
  <link href="{{ URL::asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Muli:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ URL::asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/icofont/icofont.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/venobox/venobox.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{ URL::asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ URL::asset('assets/css/style.css')}}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Flattern - v2.1.0
  * Template URL: https://bootstrapmade.com/flattern-multipurpose-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>


@include('navbar');
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active"  style="background-image: url(assets/img/slide/slide-3.jpg);" >
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <span><img src="assets/img/logo.jpeg" alt="" style="width: 200px; display: block; margin-left: auto;
                margin-right: auto" ></span>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="#about-us" class="btn-get-started">Qui sommes nous</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item"  style="background-image: url(assets/img/a.jpg);" >
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Lorem Ipsum Dolor</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="#contact" class="btn-get-started">COntactez-nous</a></div>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url(assets/img/slide/slide-2.jpg);">
          <div class="carousel-container">
            <div class="carousel-content animate__animated animate__fadeInUp">
              <h2>Sequi ea ut et est quaerat</h2>
              <p>Ut velit est quam dolor ad a aliquid qui aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti vel. Minus et tempore modi architecto.</p>
              <div class="text-center"><a href="" class="btn-get-started">Read More</a></div>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon bx bx-left-arrow" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon bx bx-right-arrow" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

    </div>
  </section><!-- End Hero -->

  <section id="hero">
    <div class="container">
  
      <div class="section-title" data-aos="fade-up" style="padding-bottom: 40%">
        
          @foreach ($post as $posts)

            {{--  <img src="{{ Storage::disk('public')->url($post) }}" alt="" >  --}}
            <img src="{{ asset('images').'/'. $posts->image }}" alt="" style="width: 95%; height: 22%;">
          
          @endforeach
        <dir class="container">
          <p> {{$post->contenu}}</p>
        </dir>
       
      </div>
    </div>
  </section>

  {{--  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-item active" >
         @foreach ($post as $posts)

              <img src="{{ Storage::disk('public')->url($posts) }}" alt="" >
              
            @endforeach
        <div class="carousel-container">
          <div class="carousel-content animate__animated animate__fadeInUp">
            <span>
               <img src="assets/img/logo.jpeg" alt="" style="width: 200px; display: block; margin-left: auto;
              margin-right: auto" >
            </span>
            <p>Uts dolorem mollit Minus et tempore modi architecto.</p>
            <div class="text-center"><a href="#about-us" class="btn-get-started">Qui sommes nous</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>  --}}

  <main id="main">

    <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-left">
            <h3> <span>200 websites</span> this year!</h3>
            <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="#contact">Nous contacter</a>
          </div>
        </div>

      </div>
    </section><!-- End Cta Section -->
  <!-- ======= About Us Section ======= -->
  <section id="about-us" class="about-us" >
    <div class="container">

      <div class="row no-gutters">
        <div class="image col-xl-5 d-flex align-items-stretch justify-content-center justify-content-lg-start" data-aos="fade-right"></div>
        <div class="col-xl-7 pl-0 pl-lg-5 pr-lg-1 d-flex align-items-stretch">
          <div class="content d-flex flex-column justify-content-center ">
            <h3 data-aos="fade-up" style="color:rgb(220, 20, 37)" class="text-center"> <img src="assets/img/menu/qui.png" alt=""></h3>
            <p data-aos="fade-up">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Duis aute irure dolor in reprehenderit
            </p>
            <div class="row">
              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="bx bx-receipt"></i>
                <h4>Corporis voluptates sit</h4>
                <p>Consequuntur sunt aut quasi enim aliquam quae harum pariatur laboris nisi ut aliquip</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-cube-alt"></i>
                <h4>Ullamco laboris nisi</h4>
                <p>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-images"></i>
                <h4>Labore consequatur</h4>
                <p>Aut suscipit aut cum nemo deleniti aut omnis. Doloribus ut maiores omnis facere</p>
              </div>
              <div class="col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-shield"></i>
                <h4>Beatae veritatis</h4>
                <p>Expedita veritatis consequuntur nihil tempore laudantium vitae denat pacta</p>
              </div>
            </div>
          </div><!-- End .content-->
        </div>
      </div>

    </div>
  </section><!-- End About Us Section -->




 <!-- ======= Features Section ======= -->
 <section id="features" class="features" >
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2> <strong style="color:rgb(220, 20, 37);"><img src="assets/img/menu/2.png" alt=""></strong> </h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row">
      <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
        <ul class="nav nav-tabs flex-column">
          <li class="nav-item">
            <a class="nav-link active show" data-toggle="tab" href="#tab-1">
              <h4>ARCHITECTURE</h4>
             
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-toggle="tab" href="#tab-2">
              <h4>INGENIERIE ET MAITRISE D OEUVRE</h4>
              
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-toggle="tab" href="#tab-3">
              <h4>TOPOGRAPHIE-LOTISSEMENT ET EXPERTISE FONCIERE</h4>
              
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-toggle="tab" href="#tab-4">
              <h4>ENTRETIEN BATIMENT</h4>
             
            </a>
          </li>
          <li class="nav-item mt-2">
            <a class="nav-link" data-toggle="tab" href="#tab-5">
              <h4>FORMATION HSE-LOCATION DU MATERIEL-PRESTATION DE SERVICE</h4>
            
            </a>
          </li>
        </ul>
      </div>
      <div class="col-lg-7 ml-auto" data-aos="fade-left" data-aos-delay="100">
        <div class="tab-content">
          <div class="tab-pane active show" id="tab-1">
            <figure>
              <img src="assets/img/architecture.jpg" alt="" class="img-fluid" style="border-radius: 9px;">
            </figure>
            <p>vvvvvv</p>
          </div>
          <div class="tab-pane" id="tab-2">
            <figure>
              <img src="assets/img/ingenierie.png" alt="" class="img-fluid" style="height: 350px;width: 1000px;border-radius: 9px;" >
            </figure>
          </div>
          <div class="tab-pane" id="tab-3">
            <figure>
              <img src="assets/img/topographie.jpg" alt="" class="img-fluid" style="height: 350px;width: 1000px;border-radius: 9px;">
            </figure>
          </div>
          <div class="tab-pane" id="tab-4">
            <figure>
              <img src="assets/img/entretien.png" alt="" class="img-fluid" style="height: 350px;width: 700px;border-radius: 9px;">
            </figure>
          </div>
          <div class="tab-pane" id="tab-5">
            <figure>
              <img src="assets/img/features-3.png" alt="" class="img-fluid">
            </figure>
          </div>
        </div>
      </div>
    </div>

  </div>
</section><!-- End Features Section -->




 <!-- ======= Nos Réalisations ======= -->
 <section id="team" class="team ">
  <div class="container">

    <div class="section-title" data-aos="fade-up">
      <h2> <strong style="font-size: 35px;"><img src="assets/img/menu/3.png" alt=""></strong></h2>
      <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
    </div>

    <div class="row ">

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up">
          <div class="member-img">
            <img src="assets/img/team/team-1.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Walter White</h4>
            <span>Chief Executive Officer</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="100">
          <div class="member-img">
            <img src="assets/img/team/team-2.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Sarah Jhonson</h4>
            <span>Product Manager</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="assets/img/team/team-3.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>William Anderson</h4>
            <span>CTO</span>
          </div>
        </div>
      </div>

      <div class="col-lg-3 col-md-6 d-flex align-items-stretch">
        <div class="member" data-aos="fade-up" data-aos-delay="300">
          <div class="member-img">
            <img src="assets/img/team/team-4.jpg" class="img-fluid" alt="">
            <div class="social">
              <a href=""><i class="icofont-twitter"></i></a>
              <a href=""><i class="icofont-facebook"></i></a>
              <a href=""><i class="icofont-instagram"></i></a>
              <a href=""><i class="icofont-linkedin"></i></a>
            </div>
          </div>
          <div class="member-info">
            <h4>Amanda Jepson</h4>
            <span>Accountant</span>
          </div>
        </div>
      </div>

    </div>

  </div>
</section><!-- End Our Team Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

      

        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up">
              <div class="icon"><i class="icofont-computer"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <div class="icon"><i class="icofont-chart-bar-graph"></i></div>
              <h4 class="title"><a href="">Dolor Sitema</a></h4>
              <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-earth"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <div class="icon"><i class="icofont-image"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="300">
              <div class="icon"><i class="icofont-settings"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="icon-box" data-aos="fade-up" data-aos-delay="400">
              <div class="icon"><i class="icofont-tasks-alt"></i></div>
              <h4 class="title"><a href="">Eiusmod Tempor</a></h4>
              <p class="description">Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi</p>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio" >
      <div class="container">

        <div class="section-title " data-aos="fade-up">
          <h2> <strong class="text-white" style="font-size: 35px;"><img src="assets/img/menu/4.png" alt=""></strong></h2>
        </div>

       

        <div class="row portfolio-container" data-aos="fade-up">

         

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="assets/img/partenaire.jpeg" class="img-fluid" alt="" style="border-radius: 20px;">
            <div class="portfolio-info">
              <h4>TAGUS DRONE</h4>
              <p>www.tagusdrone.com</p>
              <a href="{{ URL::asset('assets/img/partenaire.jpeg" data-gall="portfolioGallery" class="venobox preview-link" title="Web 3"><i class="bx bx-plus"></i></a>
              <a href="tagusdrone.com" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Contact Section ======= -->

    <section id="contact" class="contact">
      <div class="container">
        <div class="section-title" data-aos="fade-up">
          <h2> <strong style="color:rgb(220, 20, 37);font-size: 35px;"><img src="assets/img/menu/5.png" alt=""></strong></h2>
        </div>

        <div class="row justify-content-center" data-aos="fade-up">

          <div class="col-lg-10">

            <div class="info-wrap">
              <div class="row">
                <div class="col-lg-4 info">
                  <i class="icofont-google-map"></i>
                  <h4>Location:</h4>
                  <p>Sable-Bonamoussadi</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-envelope"></i>
                  <h4>Email:</h4>
                  <p>africamodernbuilding@gmail.com</p>
                </div>

                <div class="col-lg-4 info mt-4 mt-lg-0">
                  <i class="icofont-phone"></i>
                  <h4>Call:</h4>
                  <p>(+237)233 47 93 57 <br>(+237) 691 944 084</p>
                </div>
              </div>
            </div>

          </div>

        </div>

      

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  @include('footer');

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/jquery/jquery.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery-sticky/jquery.sticky.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/venobox/venobox.min.js"></script>
  <script src="assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>