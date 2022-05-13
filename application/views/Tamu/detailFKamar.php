<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php $this->load->view('Tamu/_partials/head.php'); ?>
    <title>HotelHebat | Detail Kamar</title>
  </head>
  <body>
  <?php $this->load->view('Tamu/_partials/navbar.php'); ?>

    <div class="container-fluid mt-5">
        <?php foreach ($data['DataKamById'] as $key => $kamar) :?>
            
            <div class="card mb-3 mr-5 ml-5">
            <img src="<?= base_url('assets/img/TipeKamar/').$kamar->img_room;?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?= $kamar->Nama_room;?> <button type="submit" class="btn btn-success">Rp.<?= $kamar->harga;?></button> </h5>
                <p class="card-text">
                    fasilitas :
                </p>
  
                    <?php if (!empty($data['DataFasById'])) : ?>
                        <div class="row">
                        <?php foreach ($data['DataFasById'] as $key1 => $fasilitas) :?>
                            
                                <div class="col-md-4 mb-3">
                                    <div class="card">
                                    <img src="<?= base_url('assets/img/Fasilitas/').$fasilitas->img; ?>" class="card-img-top" alt="...">
                                        <div class="card-body">
                                            <h5 class="card-title" style="text-align:center;"><?= $fasilitas->nama_fasilitas?></h5>
                                        </div>
                                    </div>
                                </div>
                            
                        <?php endforeach ;?>
                        </div>
                    <?php endif ;?>
                    
                <button type="submit" onclick="goBack()" class="btn btn-primary">Kembali</button>
            </div>
        
        </div>
        <?php endforeach ;?>
        
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php $this->load->view('Tamu/_partials/js.php'); ?>
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>