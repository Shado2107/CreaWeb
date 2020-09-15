 <!-- Navbar Menu  ---->
 <section id="nav-bar">
    <nav class="navbar navbar-expand-lg navbar-light">
       <a class="navbar-brand" href="#">
         <img src="images/logo_creazione.png" width="" alt="">
       </a>
       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
         <i class="fa fa-bars"></i>
       </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href=" {{ route('home') }} ">Creazione<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#services">Services</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#about">A propos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{ route('portfolio') }} ">Portfolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=" {{route('contact')}} ">Contact</a>
          </li>
        </ul>
      </div>
    </nav>
  </section>