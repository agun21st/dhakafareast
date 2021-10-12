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

    @include('includes.fw')

</head>

<body class="body-wrapper">
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
</body>

</html>
