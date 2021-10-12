<!DOCTYPE html>
<html lang="en">

<head class="no-js" lang="en">
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PJLD5FR');</script>
    <!-- End Google Tag Manager -->

    @include('includes.head')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"

</head>

<body class="body-wrapper">
  <menu class="animate__animated animate__bounce animate__infinite animate__slower">
    <a href="" target="_blank" class="action"><i class="fab fa-pinterest"></i></a>
    <a href="https://www.linkedin.com/company/dhaka-fareast-ltd" target="_blank" class="action"><i class="fab fa-linkedin-in"></i></a>
    <a href="#" class="action"><i class="fab fa-twitter"></i></a>
    <a href="https://www.facebook.com/Dhaka-Fareast-Limited-979943828705519" target="_blank" class="action"><i class="fab fa-facebook"></i></a>
    <a href="#" target="_blank" class="action"><i class="fab fa-instagram"></i></a>
    <!--<a href="#" class="trigger"><i class="fas fa-plus"></i></a>-->
    <a href="https://wa.me/+8801955600200" target="_blank" class="trigger"><i class="fab fa-whatsapp"></i></a>
</menu>
  <div class="dhakaLoad">
    <div class="dhakaLoader">
      <div class="spin"></div>
      <div class="loading">
          <img src="/images/slider/logo.webp" alt="Dhaka Far East Site Logo"/>
      </div>
    </div>
  </div>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PJLD5FR"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class="inner-body">

    @include('includes.header')

    <!-- Headline Section Ends -->
        @yield('all-stories')

</div>

    @include('includes.footer')
    @yield('scripts')
    <script type="text/javascript">
        $(window).on('load', function() {
            $('.dhakaLoad').addClass('complete')
        })
      </script>
      <script type="text/javascript">
      $(document).ready(function () {
      $("html").niceScroll({
        cursorcolor:"crimson",
        cursorwidth:"10px"
      });
            // $("#sidenav").mCustomScrollbar({
            //     theme: "minimal"
            // });

            $('#dismiss, .fullOverlay').on('click', function () {
                $('#sidenav').removeClass('active');
                $('.fullOverlay').removeClass('active');
                $('#sidenav-collapse').removeClass('open');
            });

            $('#sidenav-collapse').on('click', function () {
                $('#sidenav').addClass('active');
                $('.fullOverlay').addClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>

    <script type='application/ld+json'> 
        {
          "@context": "http://www.schema.org",
          "@type": "LocalBusiness",
          "name": "Dhaka Fareast Ltd.",
          "url": "https://dhakafareast.com/",
          "sameAs": [
            "https://www.facebook.com/Dhaka-Fareast-Limited-979943828705519",
            "https://www.linkedin.com/company/2679705"
          ],
          "logo": "https://dhakafareast.com/storage/settings/April2019/2A7FAEnR5p8ioOeoGtUN.png",
          "image": "http://dhakafareast.com/images/garments-img2.jpg",
          "description": "Established in 2011, DHAKA FAREAST LTD is one of the best private label clothing manufacturers, suppliers, exporters, and a leading custom-made plain t-shirts producer in Bangladesh with sales-network in Canada, France, Germany, Italy, Spain, Australia, Malaysia, Kuwait, Qatar, Saudi Arabia, UAE, and the United States.",
          "address": {
            "@type": "PostalAddress",
            "streetAddress": "Flat : C & G, House: 202, Road: 02 , DOHS",
            "addressLocality": "Baridhara",
            "addressRegion": "Dhaka",
            "postalCode": "1206",
            "addressCountry": "Bangladesh"
          },
          "geo": {
            "@type": "GeoCoordinates",
            "latitude": "23.8147896",
            "longitude": "90.4107985"
          },
          "hasMap": "https://www.google.com/maps/place/Dhaka+Fareast+LTD/@23.8147896,90.4107985,17.26z/data=!4m5!3m4!1s0x3755c1480dd99629:0xdfd6f6a51489d4f7!8m2!3d23.8148172!4d90.4134266",
          "openingHours": "Mo, Tu, We, Th, Fr, Sa, Su 24 Hour",
          "contactPoint": {
            "@type": "ContactPoint",
            "contactType": "Customer Service",
            "telephone": "+88028416120"
          }
        }
    </script>
    <script>
      const trigger = document.querySelector("menu > .trigger");
      trigger.addEventListener('mouseenter', (e) => {
          e.currentTarget.parentElement.classList.add("openMenu");
          e.currentTarget.parentElement.classList.remove("animate__animated")
          var self = this;
          setTimeout(function(){
              const trigger = document.querySelector("menu");
              trigger.classList.remove("openMenu");
              trigger.classList.add("animate__animated")
          }, 6000);
      });
      trigger.addEventListener('click', (e) => {
          var isClickInside = trigger.contains(e.target);
          e.currentTarget.parentElement.classList.remove("openMenu")
          e.currentTarget.parentElement.classList.add("animate__animated")
      });
  </script>
</body>

</html>
