<div class="site-footer">
    <div class="container">
      <div class="row" style="margin-left: 75px;">
        <div class="col-lg-4" >
          <div class="widget">
            <h3>Contact</h3>
            <address>Jln Tlogo Indah 66A Tlogomas Kec. Lowokwaru, Malang</address>
            <ul class="list-unstyled links">
              <li><a href="https://api.whatsapp.com/send?phone=628803212754">088803212754</a></li>
              <li>
                <a href="mailto:punamudecoration.id@gmail.com">punamudecoration.id@gmail.com</a>
              </li>
              <li>
                <a href="mailto:atreyamakeup@gmail.com">atreyamakeup@gmail.com</a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            {{-- <h3>Sources</h3> --}}
            <ul class="list-unstyled float-start links">
              {{-- <li><a href="#">About us</a></li>
              <li><a href="#">Services</a></li> --}}
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
        <div class="col-lg-4">
          <div class="widget">
            <h3>Links</h3>
            <ul class="list-unstyled links">
              <li><a href="{{ url('services') }}">Services</a></li>
              <li><a href="{{ url('about') }}">About us</a></li>
              <li><a href="{{ url('contact') }}">Contact us</a></li>
            </ul>

            <ul class="list-unstyled social">
              <li>
                <a href="https://instagram.com/punamudecoration.id?igshid=MzRlODBiNWFlZA=="><span class="icon-instagram"></span></a>
              </li>
            </ul>
          </div>
          <!-- /.widget -->
        </div>
        <!-- /.col-lg-4 -->
      </div>
      <!-- /.row -->

      <div class="row mt-5">
        <div class="col-12 text-center">
          <p>
            Copyright &copy;
            <script>
              document.write(new Date().getFullYear());
            </script>
            . All Rights Reserved. &mdash; Punamu Decoration
          </p>
        </div>
      </div>
    </div>
    <!-- /.container -->
  </div>
  <!-- /.site-footer -->

  <!-- Preloader -->
  <div id="overlayer"></div>
  <div class="loader">
    <div class="spinner-border" role="status">
      <span class="visually-hidden">Loading...</span>
    </div>
  </div>

  <script src="{{ asset('/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('/js/tiny-slider.js') }}"></script>
  <script src="{{ asset('/js/aos.js') }}"></script>
  <script src="{{ asset('/js/navbar.js') }}"></script>
  <script src="{{ asset('/js/counter.js') }}"></script>
  <script src="{{ asset('/js/custom.js') }}"></script>
