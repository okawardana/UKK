
<!DOCTYPE html>
<html lang="en">
<head>
<title>HotelHebat | Home</title>
  <?php $this->load->view('Tamu/_partials/head.php'); ?>
</head>
<body>
<?php if (empty($_SESSION['user']->level)):?>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-info">
  <a class="navbar-brand" href="#">Hotel Hebat</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="<?= base_url('/Tamu/Home'); ?>">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/Tamu/formpemesanan'); ?>">Kamar</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= base_url('/Tamu/Fasilitas'); ?>">Fasilitas</a>
      </li>
      <a class="nav-link btn" href="<?= base_url('/Tamu/pesanKamar'); ?>" data-toggle="modal" data-target="#exampleModal">Pesan</a>
    </ul>
    
  </div>
  <ul class="navbar-nav d-flex justify-content-end">
  <li class="nav-link" id="navcolor" style="margin-top:7px;">
      <a class="btn-sm btn-info" type="submit" href="<?= base_url('Auth/login'); ?>" style="padding: .5rem 1rem; border-radius:20px;">Log In</a>
    </li>
  </ul>
</nav>

    <div class="container-fluid mt-2">
    <div class="jumbotron jumbotron-fluid">

    <div class="container-md hidden-mobile" style="margin-top:580px; ">
      <div class="card shadow p-3 bg-white rounded-5" id="card1" style="margin: 0px 30x 0px 30px;">
        <form action="<?= base_url('Tamu/booknow').'?id=null'; ?>" class="form-inline d-flex justify-content-center" style="margin-top:15px; margin-bottom:30px;" method="post">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Cek In : </label>
              <input type="date" name="tgl_cekin" class="form-control rounded-lg" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">Cek Out : </label>
              <input type="date" name="tgl_cekout" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-3">
              <label for="inputAddress">Jumlah Kamar :</label>
              <input type="number" name="jml_kamar" class="form-control" id="inputAddress" placeholder="Contoh : 12">
            </div>
            <div class="form-group col-md-3 mt-4 d-flex flex-row-reverse">
            <a class="nav-link btn btn-primary" href="<?= base_url('/Tamu/pesanKamar'); ?>" data-toggle="modal" data-target="#exampleModal">Pesan Sekarang</a>
          
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
                    Login Terlebih Dahulu
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('Auth/login'); ?>" type="button" class="btn btn-primary">Log In</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>


      <div class="container">
        <div class="d-flex flex-row-center bd-highlight mb-3" style="margin-top:120px;">
          <div class="section-title mb-5">
            <h2 class="text-center mb-4"  style="color: #778899;">Hotel Hebat Online Reservation</h2>
            <p class="text-center">
            Nikmati Hotel dengan Nuansa Alam yang Sejuk.Melihat Matahari Tenggelam Dengan Berenang Dikolam Renang yang Sudah Disediakan.Convention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Indonesia, mampu mengakomodasi hingga 1.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi  ataupun mewujudkan acara pernikahan yang mewah
            </p>
          </div>
      </div>
  </div>
<!-- footer -->
<?php $this->load->view('Tamu/_partials/footer.php'); ?>

<?php $this->load->view('Tamu/_partials/js.php'); ?>
<?php else :?>
  <!-- Navbar -->
  <div class="mt-2" id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light mt-3 shadow bg-info">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">Hotel Hebat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse show" id="navbarColor01" style="margin-right:40px;">
          <ul class="navbar-nav mr-auto">
          <li class="nav-item active" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/Home'); ?>">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/formpemesanan'); ?>">Kamar</a>
            </li>
            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/Fasilitas'); ?>">Fasilitas</a>
            </li>
            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/pesanKamar'); ?>">Pesan</a>
            </li>
            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/ref'); ?>">List Booking</a>
            </li>
          </ul>
          <div class="form-inline">
          <ul class="navbar-nav mr-auto">
            
            <div class="dropdown" >
            <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
            <img src="<?= base_url('assets/img/default.png'); ?>" class=" rounded-circle" style="width:30px; height:30px;">
                <span class="caret"></span>
            </button>
            <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="defaultDropdown">
              <li><a class="dropdown-item" href="#">Profile</a></li>
              <li><a class="dropdown-item" href="#">Tentang Kami</a></li>
              <div class="dropdown-divider"></div>
              <li>
                <a href="<?= base_url('Tamu/logout'); ?>" class="dropdown-item" data-target="#bs-example-modal">Log Out <i data-feather="log-out"></i></a>
              </li>
              
            </ul>
            </div>
          </ul>
          </div>
        </div>
        </div>
    </nav>
    </div>

    <div class="container-fluid mt-2">
    <div class="jumbotron jumbotron-fluid">

    <div class="container-md hidden-mobile" style="margin-top:580px; ">
      <div class="card shadow p-3 bg-white rounded-5" id="card1" style="margin: 0px 30x 0px 30px;">
        <form action="<?= base_url('Tamu/booknow').'?id=null'; ?>" class="form-inline d-flex justify-content-center" style="margin-top:15px; margin-bottom:30px;" method="post">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Cek In : </label>
              <input type="date" name="tgl_cekin" class="form-control rounded-lg" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">Cek Out : </label>
              <input type="date" name="tgl_cekout" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-3">
              <label for="inputAddress">Jumlah Kamar :</label>
              <input type="number" name="jml_kamar" class="form-control" id="inputAddress" placeholder="Contoh : 12">
            </div>
            <div class="form-group col-md-3 mt-4 d-flex flex-row-reverse">
              <button type="submit" class="btn btn-primary">Pesan Sekarang</button>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>


      <div class="container">
        <div class="d-flex flex-row-center bd-highlight mb-3" style="margin-top:120px;">
          <div class="section-title mb-5">
            <h2 class="text-center mb-4"  style="color: #778899;">Hotel Hebat Online Reservation</h2>
            <p class="text-center">
            Nikmati Hotel dengan Nuansa Alam yang Sejuk.Melihat Matahari Tenggelam Dengan Berenang Dikolam Renang yang Sudah Disediakan.Convention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Indonesia, mampu mengakomodasi hingga 1.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi  ataupun mewujudkan acara pernikahan yang mewah
            </p>
          </div>

      </div>
  </div>
  <!-- footer -->
  <?php $this->load->view('Tamu/_partials/footer.php'); ?>

  <?php $this->load->view('Tamu/_partials/js.php'); ?>
<?php endif ;?>
</body>
</html>


