    <!-- Footer ------>
    <section id="footer">
        <div class="container">
          <div class="row">
            <div class="col-md-4 footer-box">
              <img src="images/logo_creazione.png" alt="">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
              </p>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="col-md-4 footer-box">
                <p id="contact"><b>ADRESSE</b></p>
                <p><i class="fa fa-map-marker"></i>Adidoadin, 50m de l'hotel la concorde</p>
                <p><i class="fa fa-phone"></i>(+228) 70 54 10 86 | 91 77 99 59</p>
                <p><i class="fa fa-envelope-o"></i>contact@creazionestudio.com</p>
            </div>
            <div class="col-md-4 footer-box">
                {{-- <p><b>Newsletter</b></p>
                <input type="email"class="form-control" placeholder="Your Email">
                <button type="button"class="btn btn-primary" name="button">Subscribe</button> --}}

                <div id="social">
                    <p>Retrouvez nous sur les réseaux sociaux</p>
                       <div class="social-icons">
                          <a href="#" class="svg-icons"><img src="svg/facebook-logo.svg" alt=""></a>
                          <a href="#" class="svg-icons"><img src="svg/instagram_.svg" alt=""></a>
                          {{-- <a href="#" class="svg-icons"><img src="svg/twitter-logo.svg" alt=""></a> --}}
                          <a href="#" class="svg-icons"><img src="svg/whatsapp.svg" alt=""></a>
                       </div>
                </div>
            </div>
            <div class="col-md-6 ">
              <p class="copyright">Copyright © 2020| by  <a href="https://github.com/Shado2107">Creazione Studio</a></p>
            </div>
            <div class="col-md-6 text-right">
            {{-- <p class="copyright">
              <a href="#">Privacy Policy</a>
              <a href="#">Cookie Policy</a>
              <a href="#">Terms & Conditions</a>
            </p> --}}
            </div>
          </div>
          <br>
        </div>
    </section>
    <!--- Smooth Scroll js ---------->
    <script type="text/javascript" src="js/smooth-scroll.js"></script>
    <script>
	    var scroll = new SmoothScroll('a[href*="#"]');
    </script>
    <script>
      $(document).ready(function() {
        $('a.custom-selector').bootstrapGallery();
      });
      </script>
      
  </body>
</html>
