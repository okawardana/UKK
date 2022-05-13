<!DOCTYPE html>
<html lang="en">

<head>
  <?php $this->load->view('Tamu/_partials/head'); ?>
</head>

<body>

  <!-- ======= Navbar ======= -->
  <?php $this->load->view('Tamu/_partials/navbar'); ?>

  <!-- ======= Hero Section ======= -->
  <?php $this->load->view('Tamu/_partials/hero'); ?>
  <!-- End Hero -->
  
  <main id="main">
        
    <!-- ======= Item Section ======= -->
    <section id="about" class="about">
      <div class="container">
      
        <div class="section-title">
          <span>Tipe Kamar</span>
          <h2>Tipe Kamar</h2>
          <hr>
        </div>
        
        <?php foreach ($data as $key => $kamar) :?>
        <div class="card mb-3 mt-2">
            <img src="<?= $kamar['Info_kamar']->img_room?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h2 class="card-title">Tipe <?= $kamar['Info_kamar']->Nama_room?> <button disabled="disabled" class="btn btn-outline-success btn-sm">Rp. <?= $kamar['Info_kamar']->harga?></button></h2>
                <p class="card-text mt-1">
                    Fasilitas1 :
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
                    <a href="<?= base_url('/Tamu/detailTipe').'?id='.$kamar['Info_kamar']->id;?>" class="btn btn-primary" target="_blank">Lihat Detail</a>
                </p>
            </div>
        </div>
        <?php endforeach ;?>

      </div>
           
    </section>

          </div>
          <div class="swiper-pagination"></div>
        </div>

      </div>
    </section>
    
    

  </main>
  
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php $this->load->view('Tamu/_partials/footer'); ?>
  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <?php $this->load->view('Tamu/_partials/js'); ?>

</body>

</html>
