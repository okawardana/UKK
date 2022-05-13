<!DOCTYPE html>
<html lang="en">
<head>
<title>HotelHebat | Kamar</title>
    <?php $this->load->view('Tamu/_partials/head.php'); ?>
</head>
<body >
<!-- Navbar -->
<?php $this->load->view('Tamu/_partials/navbar.php'); ?>
<!-- End Navbar -->

<?php $this->load->view('Tamu/_partials/jumbotron.php'); ?>

    <?php if(empty($_SESSION['user']->level)) :?>

    <div class="container-fluid" style="margin-top:120px;">
        <div class="section-title">
            <h2 class="text-center" style="color: #778899;">Tipe Kamar yang Tersedia</h2>
            <hr style="margin-left:830px; margin-right:830px; margin-bottom:50px; background-color: #778899;">
        </div>
        
        <div class="row">
                <?php foreach ($data as $key => $kamar) :?>
            <!-- <div class="container"> -->
                <div class="col-md-6 mb-5">
                <div class="card">
                    <div class="card-body p-0 d-flex flex-column">
                        <div class="row h-100">
                            <div class="col-sm-6 d-flex flex-column">
                                <h3 class="card-title ml-5 mt-5 mb-4"><?= $kamar['Info_kamar']->Nama_room?></h3>
                                <p class="ml-5">
                                The 77 sqm GranDhika Suites offers spacious rooms with separated living room for privacy or informal meetings. To make it more spacious, connecting rooms are also available.
                                </p>
                                <div class="mt-auto ml-5 mb-5 d-flex justify-content-end">
                                    <a href="<?= base_url('/Tamu/detailTipe').'?id='.$kamar['Info_kamar']->id_kamar;?>" class="btn mt-auto">Detail Kamar <i data-feather="book-open"></i></a
                                    >
                                    <a class="nav-link btn" href="<?= base_url('/Tamu/pesanKamar'); ?>" data-toggle="modal" data-target="#exampleModal">Booking Sekarang <i data-feather="arrow-right-circle"></i></a>
          
                                    <!-- Modal -->
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Peringatan !!</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            </div>
                                            <div class="modal-body">
                                                Silahkan Login Terlebih Dahulu
                                            </div>
                                            <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <a href="<?= base_url('Auth/login'); ?>" type="button" class="btn btn-primary">Log In</a>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <!-- <a href="<?= base_url('/Tamu/booknow').'?id='.$kamar['Info_kamar']->id_kamar;?>" class="btn mt-auto">Booking Sekarang <i data-feather="arrow-right-circle"></i></a> -->
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <img src="<?= base_url('assets/img/TipeKamar/').$kamar['Info_kamar']->img_room; ?>" class="card-img img-fluid" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            <!-- </div> -->
            <?php endforeach ;?>
            </div>

    </div>
    <?php else :?>
        <div class="container-fluid" style="margin-top:120px;">
        <div class="section-title">
            <h2 class="text-center" style="color: #778899;">Tipe Kamar yang Tersedia</h2>
            <hr style="margin-left:830px; margin-right:830px; margin-bottom:50px; background-color: #778899;">
        </div>
        
        <div class="row">
        <?php foreach ($data as $key => $kamar) :?>
            <div class="container">
                <div class="col-md-6 mb-5">
                    <div class="card">
                        <div class="card-body p-0 d-flex flex-column">
                            <div class="row h-100">
                                <div class="col-sm-6 d-flex flex-column">
                                    <h3 class="card-title ml-5 mt-5 mb-4"><?= $kamar['Info_kamar']->Nama_room?></h3>
                                    <p class="ml-5">
                                    The 77 sqm GranDhika Suites offers spacious rooms with separated living room for privacy or informal meetings. To make it more spacious, connecting rooms are also available.
                                    </p>
                                    <div class="mt-auto ml-5 mb-5 d-flex justify-content-end">
                                        <a href="<?= base_url('/Tamu/detailTipe').'?id='.$kamar['Info_kamar']->id_kamar;?>" class="btn mt-auto">Detail Kamar <i data-feather="book-open"></i></a>
                                        <a class="nav-link btn" href="<?= base_url('/Tamu/pesanKamar'); ?>" data-toggle="modal" data-target="#exampleModal">Booking Sekarang <i data-feather="arrow-right-circle"></i></a>
                                </div>
                            </div>
                            <div class="col-sm-6 text-right">
                                <img src="<?= base_url('assets/img/TipeKamar/').$kamar['Info_kamar']->img_room; ?>" class="card-img img-fluid" alt=""/>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
            
        <!-- <div class="card mb-5 mt-5">
            <img src="<?= $kamar['Info_kamar']->img_room?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Tipe <?= $kamar['Info_kamar']->Nama_room?> <button disabled="disabled" class="btn btn-outline-success btn-sm">Rp. <?= $kamar['Info_kamar']->harga?></button></h2>
                <p class="card-text mt-1">
                    Fasilitas :
                </p>
                <p>
                    <ul>
                        <?php if(!empty($kamar['F_kamar'])) :?>
                            <?php foreach ($kamar['F_kamar'] as $key2 => $F) :?>
                                <li>
                                    <?= $F->nama_fasilitas ?>
                                </li>
                            <?php endforeach ;?>
                        <?php endif ;?>
                    </ul>
                    <ul>
                    </ul>
                </p>
                <p class="card-text">
                    <a href="<?= base_url('/Tamu/detailTipe').'?id='.$kamar['Info_kamar']->id_kamar;?>" class="btn btn-primary" target="_blank">Lihat Detail</a>
                </p>
            </div>
        </div> -->
        <?php endforeach ;?>
    </div>
    <?php endif ;?>

    <!-- footer -->
    <?php $this->load->view('Tamu/_partials/footer.php'); ?>
    
    <?php $this->load->view('Tamu/_partials/js.php'); ?>
</body>
</html>




