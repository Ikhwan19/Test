<div class="main">
<link href="<?=base_url()?>https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"rel="stylesheet">
<link rel="stylesheet" href="<?=base_url()?>assets/css/kategori.css">
<div class="main-content">
<div class="container">
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<div class="box">
<div class="imgbox">
<img src="<?=base_url()?>assets/img/wads.jpg" class="img-responsive" style="height:400px;width:100%;">
</div>
<div class="conten">
<h3>ODrInk</h3>
<p>Minum 1 || Harga = 15K</p>
<a href="#beli" class"btn btn-default btnD" data-toggle="modal">Beli</a>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="box">
<div class="imgbox">
<img src="<?=base_url()?>assets/img/wads.jpg" class="img-responsive" style="height:400px;width:100%;">
</div>
<div class="conten">
<h3>ODrInk</h3>
<p>Minum 1 || Harga = 15K</p>
<a href="#beli" class"btn btn-default btnD" data-toggle="modal">Beli</a>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="box">
<div class="imgbox">
<img src="<?=base_url()?>assets/img/wads.jpg" class="img-responsive" style="height:400px;width:100%;">
</div>
<div class="conten">
<h3>ODrInk</h3>
<p>Minum 1 || Harga = 15K</p>
<a href="#beli" class"btn btn-default btnD" data-toggle="modal">Beli</a>
</div>
</div>
</div>
</section>
<section>
<div class="container-fluid">
<div class="row">
<div class="col-sm-3">
<div class="box">
<div class="imgbox">
<img src="<?=base_url()?>assets/img/wads.jpg" class="img-responsive" style="height:400px;width:100%;">
</div>
<div class="conten">
<h3>ODrInk</h3>
<p>Minum 1 || Harga = 15K</p>
<a href="#beli" class"btn btn-default btnD" data-toggle="modal">Beli</a>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="box">
<div class="imgbox">
<img src="<?=base_url()?>assets/img/wads.jpg" class="img-responsive" style="height:400px;width:100%;">
</div>
<div class="conten">
<h3>ODrInk</h3>
<p>Minum 1 || Harga = 15K</p>
<a href="#beli" class"btn btn-default btnD" data-toggle="modal">Beli</a>
</div>
</div>
</div>
<div class="col-sm-3">
<div class="box">
<div class="imgbox">
<img src="<?=base_url()?>assets/img/wads.jpg" class="img-responsive" style="height:400px;width:100%;">
</div>
<div class="conten">
<h3>ODrInk</h3>
<p>Minum 1 || Harga = 15K</p>
<a href="#beli" class"btn btn-default btnD" data-toggle="modal">Beli</a>
</div>
</div>
</div>

</section>
<?php if($this->session->flashdata('pesan')!=null): ?>
<div class="alert alert-danger">
<?= $this->session->flashdata('pesan');?></div>
<?php endif ?>
<div class="modal fade" id="beli">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal"><span aria-hiden="true">&times;</span><span class="sr-only">Close</span></button>
<h4 class="modal-title">Form Pembelian</h4>
</div>
<div class="modal-body">
	<form action="<?=base_url('index.php/Pembelian/simpan_pembelian')?>" method="post"></form>
	<label for="">Username</label>
	<input type="text" name="username" class="form-control" placeholder="Masukkan Username"id=""><br>
	<label for="">Nama Barang</label>
	<input type="text" name="nama_barang" class="form-control" placeholder="Masukkan nama barang"id=""><br>
	<label for="">Banyak barang</label>
	<input type="text" name="banyak_barang" class="form-control" placeholder="Masukkan banyak barang"id=""><br>
	<label for="">Alamat pengiriman</label>
	<input type="text" name="Alamat" class="form-control" placeholder="Masukkan Username"id=""><br>
	<label for="">Pembayaran</label>
	<input type="text" name="pembayaran" class="form-control" placeholder="Masukkan metode pembayaran anda"id=""><br>
	<input type="submit" name="simpan" value="Kirim" class="btn btn-success">
	</form>
	</div>
	</div>
	</div>
	</div>