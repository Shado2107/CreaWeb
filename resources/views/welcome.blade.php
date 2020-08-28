@extends('layouts.layout')
@section('content')
<body>
  <!-- Navbar Menu  ---->
  <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand" href="#">
         <img src="images/logo_creazione.png" alt="">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa fa-bars"></i>
       </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#top">Creazione<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#testimonials">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>
  <!--- Banner Hero section ------->
  <section class="banner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <p class="promo-title">CREAZIONE STUDIO</p>
          <p class="join-title">Votre studio de création numérique et multimédia</p>
          <a href="#" class="link-play">
            <img src="svg/play.svg" alt="" class="play-btn">Demander un devis
          </a>
        </div>
          <div class="col-md-6">
            <img src="svg/undraw_email_campaign_qa8y.svg" alt="" class="img-fluid">
          </div>
      </div>
    </div>
      <!--- Background wave Hero ---->
      <img src="images/ground@-min.png" class="bottom-img" alt="">
  </section>

  <!--- Services ---->
  <section id="services">
    <div class="container text-center">
      <h3 class="title text-center">SERVICES</h3>
      <div class="row text-center">
        <div class="col-md-4 services">
          <img src="svg/undraw_website_setup_5hr2.svg" class="service-img"   alt="">
          <h4>Solution web</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="col-md-4 services">
          <img src="svg/branding.svg" class="service-img"   alt="">
          <h4>Design graphique</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="col-md-4 services">
          <img src="svg/ads.svg" class="service-img"   alt="">
          <h4>Google Ads</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="col-md-4 services">
          <img src="svg/undraw_Savings_dwkw.svg" class="service-img"   alt="">
          <h4>Infographie 3D</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="col-md-4 services">
          <img src="svg/social.svg" class="service-img"   alt="">
          <h4>Social Media</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
        <div class="col-md-4 services">
        <img src="svg/undraw_wireframing_nxyi.svg" class="service-img"   alt="">
          <h4>Hi-tech</h4>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
          </p>
        </div>
      </div>
      <button type="button" class="btn btn-primary"  name="button">Find Out More</button>
    </div>
  </section>
  <!--- About Section ------>
  <section id="about">
    <div class="container">
      <h3 class="title text-center">A Propos de nous</h3>
      <div class="row">
        <div class="col-md-6 about">
          <p class="about-title">Creazione studio</p>
          {{-- <ul>
            <li>Sint aliquam consequatur ex ex labore.</li>
            <li>Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            <li>Aspernatur consectetur omnis numquam quaerat.</li>
            <li>Et vel ut quidem alias veritatis repudiandae ut fugit.</li>
            <li>Fugit ut maxime incidunt accusantium totam repellendus eum error. </li>
            <li>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
          </ul> --}}
          <p>CREAZIONE est un <strong>studio de création numérique et multimédia créé en 2018</strong> , dont le siège se 
              trouve à lomé, quartier adidoadin non loin de l'hôtel la concorde.
              Nous sommes spécialisé en Design et graphisme 2D & 3D, fourniture de matériels de 
              création graphique et informatique, en travaux d’imprimerie, créations de site web 
              et application mobile,et la production cinématographique. Nous donnons également des 
              formations dans les secteurs informatiques et multimédia.</p>
        </div>
          <div class="col-md-6">
            <img src="svg/undraw_mobile_marketing_iqbr.svg" class="img-fluid" alt="">
          </div>
      </div>
    </div>
  </section>
  <!---  Testimonials Section  --->
  <section id="testimonials">
    <div class="container">
      <h3 class="title text-center">Portfolio</h3>
      <div class="row offset-1">
        <div class="col-md-5 testimonials">
          <p class="feedback">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
          </p>
          <img src="images/testimonials/testimonial-1.jpg"  alt="">
          <p class="user-details"><b>James</b><br>CEO at DIN</p>
        </div>
        <div class="col-md-5 testimonials">
          <p class="feedback">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,
            sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat."
          </p>
          <img src="images/testimonials/testimonial-3.jpg"  alt="">
          <p class="user-details"><b>William</b><br>Co-founder at ArtSpace</p>
        </div>
      </div>
    </div>
  </section>

@endsection
  
 