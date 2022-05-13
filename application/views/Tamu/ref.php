<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('Tamu/_partials/head.php'); ?>
    <title>Hello, world!</title>
  </head>
  <body>
    <?php $this->load->view('Tamu/_partials/navbar.php'); ?>

    <div class="mt-5" id="Booklist">
            <div class="card mb-5">
            <!-- <img src="" class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h2 class="text-center card-title">LIST BOOKING ANDA</h2>
                <!-- <a href="#" target="_blank" onclick="window.print()" class="btn btn-sm btn-primary"><i  class="fas fa-print"></i> Cetak PDF</a> -->
                <p class="card-text">
                    kode Booking anda : 
                </p>
                <p>
                    <div class="row">
                        <?php foreach($data['book'] as $key => $item) :?>
                                <div class="col-md-3 mb-3">
                                    <div class="card">
                                        <img src="<?= base_url('assets/img/TipeKamar/').$item->img_room; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align:center;"><?= $item->Nama_room?> x <?= $item->jml_kamar?> Kamar</h5>
                                            <P>Nama Tamu : <?= $item->nama_tamu?></P>
                                            <p>Tanggal Cek-in : <?= $item->tgl_cekin?></p>
                                            <p>Tanggal Cek-out : <?= $item->tgl_cekout?></p>
                                            <p>Pay By : <?= $item->PayBay?></p>
                                            <p>Status : 
                                                <?php if ($item->PayEND != 0) {
                                                    $pesan='belum Dibayar';
                                                    } else {
                                                        $pesan='sudah dibayar';
                                                    } echo $pesan;
                                                ?>
                                            </p>
                                            <p>
                                                <strong>
                                                CODEBOOKING : <?= $item->RefPB?>
                                                </strong>
                                            </p>
                                            <a href="<?= base_url('/Tamu/cetak').'?id='.$item->id;?>" class="btn btn-success">Cetak PDF</a>
                                        </div>
                                    </div>
                                </div>
                        <?php endforeach ;?>
                    </div>
                </p>
                <p class="card-text">
                    <!-- <a href="<?= base_url('/Tamu/booknow').'?id='.$kamar['Info_kamar']->id;?>" class="btn btn-primary">Booking Sekarang</a> -->
                </p>
            </div>
        </div>
    </div>
    <?php $this->load->view('Tamu/_partials/footer.php'); ?>

<?php $this->load->view('Tamu/_partials/js.php'); ?>
  </body>
</html>