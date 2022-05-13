                
<!DOCTYPE html>
<html lang="en">
<head>
<title>HotelHebat | Fasilitas</title>
  <?php $this->load->view('Tamu/_partials/head.php'); ?>
</head>
<body>
<!-- Navbar -->
<?php $this->load->view('Tamu/_partials/navbar.php'); ?>
<div class="container-fluid mt-2">
<div class="jumbotron jumbotron-fluid">
  <div class="container">
  </div>
</div>
</div>

    <div class="container">
        <div class="section-title">
        <h2 class="text-center" style="color: #778899;">Fasilitas Kamar & Hotel</h2>
            <hr>
            <h4>Fasilitas Kamar Yang tersedia</h4>
            <div class="row mt-4">
                <?php foreach ($data['F_kamar'] as $key => $kamar) :?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <img src="<?= base_url('assets/img/Fasilitas/').$kamar->img; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center;"><?= $kamar->nama_fasilitas?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach ;?>
            </div>
            <h4>Fasilitas Hotel Yang tersedia</h4>
            <div class="row mt-4">

                <?php foreach ($data['F_Hotel'] as $key => $hotel) :?>
                <div class="col-md-4 mb-3">
                    <div class="card">
                    <img src="<?= base_url('assets/img/Fasilitas/').$hotel->gambar; ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title" style="text-align:center;"><?= $hotel->nama_fashotel?></h5>
                        </div>
                    </div>
                </div>
                <?php endforeach ;?>
                
            </div>
        </div>
    </div>

    

    <?php $this->load->view('Tamu/_partials/footer.php'); ?>

    <?php $this->load->view('Tamu/_partials/js.php'); ?>
</body>
</html>