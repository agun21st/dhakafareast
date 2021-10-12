  <!-- jQuery -->
  {{-- <script src="{{ asset('js/jquery-3.3.1.min.js') }}"></script> --}}
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <!-- Bootstrap JavaScript -->
  {{-- <script src="{{ asset('js/bootstrap.min.js') }}"></script> --}}
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js" integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd" crossorigin="anonymous"></script>
  <!-- Font Awesome JS -->
  {{-- <script src="{{ asset('js/all.min.js') }}"></script> --}}
  <!-- Counter Up -->
  <script src="{{ asset('js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('js/jquery.counterup.min.js') }}"></script>
  <!-- Magnific Popup core JS file -->
  <script src="{{ asset('js/jquery.magnific-popup.js') }}"></script>
  <!-- owl carousel slider js -->
  <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
  <!-- side nav jss -->
  {{-- <script src="{{ asset('js/mCustomScrollbar.concat.min.js') }}"></script> --}}
  <!-- Wow Js -->
  <script src="{{ asset('js/wow.min.js') }}"></script>
  <script src="{{ asset('js/dmarkcy.min.js') }}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script>
      new WOW().init();
      const observer = lozad();
      observer.observe();
  </script>
  <script type="text/javascript">
      $('.owl-carousel').owlCarousel({
          margin: 10,
          loop: false,
          navigation: false,
          nav: false,
          dots: true,
          responsive: {
              0: {
                  items: 1
              },
              1025: {
                  items: 2
              }
          }
      });
  </script>
  <script type="text/javascript">
      $(document).ready(function() {
        //   $("#sidenav").mCustomScrollbar({
        //       theme: "minimal"
        //   });

          $('#dismiss, .fullOverlay').on('click', function() {
              $('#sidenav').removeClass('active');
              $('.fullOverlay').removeClass('active');
              $('#sidenav-collapse').removeClass('open');
          });

          $('#sidenav-collapse').on('click', function() {
              $('#sidenav').addClass('active');
              $('.fullOverlay').addClass('active');
              $('.collapse.in').toggleClass('in');
              $('a[aria-expanded=true]').attr('aria-expanded', 'false');
          });
      });
  </script>
