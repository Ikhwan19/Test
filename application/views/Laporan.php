
  <!-- Link Swiper's CSS -->
  <link rel="stylesheet" href="<?=base_url()?>assets/css/swiper.min.css">

  <!-- Demo styles -->
  <style>
    body {
      background: #fff;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color:#000;
      margin: 0;
      padding: 0;
    }
    .swiper-container {
      width: 100%;
      padding-top: 50px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
      height: 300px;
    }
  </style>

<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide" style="background-image:url(iceblend.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(milktea.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(mojito.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(mojito.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(smotie.jpg)"></div>
      <div class="swiper-slide" style="background-image:url(macchiatio.jpg)"></div>
      <div class="swiper-slide" style="background-image:url()"></div>
      <div class="swiper-slide" style="background-image:url()"></div>
      <div class="swiper-slide" style="background-image:url()"></div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
  </div>

  <!-- Swiper JS -->
  <script src="<?=base_url()?>assets/js/swiper.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper('.swiper-container', {
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows : true,
      },
      pagination: {
        el: '.swiper-pagination',
      },
    });
  </script>
</body>