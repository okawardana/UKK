              <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        #Test{
            margin:0 20px 0 20px ;
            text-align:center;
        }
        .gambarProfile{
            border-radius: 50%;
            height: 35px;
            width: 35px;
        }
    </style>
    <title>Hello, world!</title>
  </head>
  <body>

    <?php if (empty($_SESSION['login']->level)) :?>
  <?php $this->load->view('Tamu/_partials/navbar.php'); ?>
    <div class="container">
        <?php foreach ($data as $key => $kamar): ?> 
        <div class="card mb-3">
        <img src="<?=$kamar['info_kamar']->img_room?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=$kamar['info_kamar']->Nama_room?></h5>
            <p class="card-text">
            Fasilitas:
            </p>
            <p>
            <ul>
            <?php if(!empty($kamar['f_kamar'])) :?>
            <?php foreach ($kamar['f_kamar'] as $key2 => $F): ?>
                <li><?=$F->nama_fasilitas?></li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
            </p>

            <a href="<?= base_url('Auth/login') ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Booking</a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Anda Belum Login</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Silahkan Login Terlebih Dahulu
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <a href="<?= base_url('Auth/login')?>" class="btn btn-primary">Login</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        </div>
        <?php endforeach ?>

    </div>

<?php else:?>

    <?php $this->load->view('Tamu/_partials/navbar.php'); ?>
    <div class="container">
        <?php foreach ($data as $key => $kamar): ?> 
        <div class="card mb-3">
        <img src="<?=$kamar['info_kamar']->img_room?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title"><?=$kamar['info_kamar']->Nama_room?></h5>
            <p class="card-text">
            Fasilitas:
            </p>
            <p>
            <ul>
            <?php if(!empty($kamar['f_kamar'])) :?>
            <?php foreach ($kamar['f_kamar'] as $key2 => $F): ?>
                <li><?=$F->nama_fasilitas?></li>
                <?php endforeach;?>
                <?php endif;?>
            </ul>
            </p>

            <a href="<?= base_url('Auth/login') ?>" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Booking</a>

          <!-- Modal -->
          <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabel">Silahkan Melanjutkan</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                  Silahkan Memesanan Kamar
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                  <a href="<?= base_url('Auth/login').'?id_kamar='.$kamar['info_kamar']->id_kamar?>" class="btn btn-primary">Pesan sekarang</a>
                </div>
              </div>
            </div>
          </div>

        </div>
        </div>
        <?php endforeach ?>

    </div>
    
<?php endif;?>

  

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>