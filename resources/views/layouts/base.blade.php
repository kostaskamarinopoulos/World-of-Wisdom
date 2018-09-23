<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Beauty HTML5 Template</title>
<!-- 

Beauty Template

http://www.templatemo.com/tm-519-beauty

-->
  <script>
    // detect IE8 and above, and edge
    if (document.documentMode || /Edge/.test(navigator.userAgent)) {
        alert('Please use Chrome or Firefox for best browsing experience!');
    }
  </script>

  <!-- load CSS -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">  <!-- Google web font "Open Sans" -->
  <link rel="stylesheet" href="/css/bootstrap.min.css">                                      <!-- https://getbootstrap.com/ -->
  <link rel="stylesheet" href="/css/fontawesome-all.min.css">                                <!-- Font awesome -->
  <link rel="stylesheet" href="/slick/slick.css">
  <link rel="stylesheet" href="/slick/slick-theme.css">
  <link rel="stylesheet" href="/css/templatemo-style.css">                                     <!-- Templatemo style -->
  <link href="/css/style.css" rel="stylesheet" type="text/css" media="screen" />

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
  @include('partials.nav')

  <!-- Loader -->
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>

  @yield('content')

  @include('partials.footer')

  @include('cookieConsent::index')
<script src="/js/jquery-3.2.1.slim.min.js"></script>
<script src="/slick/slick.min.js"></script>
<script src="/js/animate-bg.js" type="text/javascript"></script>
<script src="/js/scripts.js" type="text/javascript"></script>
<script>

  $(function(){
    $('.tm-gallery').slick({
      dots: true,
      infinite: true,
      slidesToShow: 4,
      slidesToScroll: 2,
      responsive: [
      {
        breakpoint: 991,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 767,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 1
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
    });
  });

</script>
</body>
</html>