@extends('layouts.layout')
@section('content')
     <!-- Navbar Menu  ---->
 
  <!--- Banner Hero section ------->
 
  <!--- About Section ------>
  <section id="about">
    <div class="container">
      <h3 class="title text-center">Contactez-nous</h3>
      <div class="row">
        <div class="col-md-6 about">
          <p class="about-title">Creazione studio</p>
          <ul>
            <li>Adresse:</li>
            <li>Téléphone: </li>
            <li>Mail:</li>
          </ul>
          {{-- <p>CREAZIONE est un <strong>studio de création numérique et multimédia créé en 2018</strong> , dont le siège se 
              trouve à lomé, quartier adidoadin non loin de l'hôtel la concorde.
              Nous sommes spécialisé en Design et graphisme 2D & 3D, fourniture de matériels de 
              création graphique et informatique, en travaux d’imprimerie, créations de site web 
              et application mobile,et la production cinématographique. Nous donnons également des 
              formations dans les secteurs informatiques et multimédia.</p> --}}
        </div>
          <div class="col-md-6">
            <img src="svg/undraw_mobile_marketing_iqbr.svg" class="img-fluid" alt="">
          </div>
      </div>
    </div>
  </section>
  <!---  Testimonials Section  --->
 
@endsection