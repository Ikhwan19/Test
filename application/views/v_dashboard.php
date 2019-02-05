	<h3 >Selamat Datang <?=$this->session->userdata('nama_user')?></h3>
		<p class="panel-subtitle">ODrink</p>

		
	<div class="boss" style="width">


	<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">

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
      padding-top: 100px;
      padding-bottom: 50px;
    }
    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 200px;
      height: 300px;
    }
    .centered {
  position: absolute;
  top: 50%;
  left: 50%;
  margin-left:20px;
  margin-top:130px;
  font-size:30px;
  transform: translate(-50%, -50%);
  font-family:Deutsch Gothic;
  color:white;
  
}
  </style>
</head>
<body>
  <!-- Swiper -->
  <div class="swiper-container">
    <div class="swiper-wrapper" >
      <div class="swiper-slide" style="text-align:center;"><a href="<?= base_url('index.php/barang')?>"><img src="<?=base_url()?>assets/milktea.jpg"><p><div class="centered">MilkTea</div><p></a></div>
      <div class="swiper-slide" style="text-align:center;"><a href="<?= base_url('index.php/barang')?>"><img src="<?=base_url()?>assets/eco.jpg"><div class="centered">CheseTea</div></a></div>
      <div class="swiper-slide" style="text-align:center;"><a href="<?= base_url('index.php/barang')?>"><img src="<?=base_url()?>assets/st.jpg"><div class="centered">IcedCafeMocca</div></a></div>
      <div class="swiper-slide" style="text-align:center;"><a href="<?= base_url('index.php/barang')?>"><img src="<?=base_url()?>assets/iceblend.jpg"><div class="centered">IceBlend</div></a></div>
      <div class="swiper-slide" style=""></div>
      <div class="swiper-slide" style=""></div>
      <div class="swiper-slide" style=""></div>
      <div class="swiper-slide" style=""></div>
      <div class="swiper-slide" style=""></div>
      <div class="swiper-slide" style=""></div>
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
</html>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
          <?php if($this->session->userdata('level')=='admin'){?>
            <a href="<?=base_url('index.php/Kasir')?>" style="color: black">
            <?php }?>
              <div class="metric">
                <span class="icon"><i class="fa fa-eye"></i></span>
                <p>
                  <span class="number"><?= $user?></span>
                  <span class="title">Pegawai</span>
                </p>
              </div>
            <?php if($this->session->userdata('level')=='admin'){?>
            </a>
            <?php }?>
            </div>
            <div class="col-md-4">

            <a href="<?=base_url('index.php/Histori')?>" style="color: black">
              <div class="metric">
                <span class="icon"><i class="fa fa-shopping-bag"></i></span>
                <p>
                  <span class="number"><?= $transaksi ?></span>
                  <span class="title">penjualan</span>
                </p>
              </div>

              </a>
            </div>
            <div class="col-md-4">
            <a href="<?=base_url('index.php/barang')?>" style="color: black">
              <div class="metric">
                <span class="icon"><i class="fa fa-bar-chart"></i></span>
                <p>
                  <span class="number"><?= $barang ?></span>
                  <span class="title">barang</span>
                </p>
              </div>

              </a>
            </div>
          </div>
          
        </div>

<div class="boss" style="width">
