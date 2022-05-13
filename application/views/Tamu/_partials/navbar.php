<?php if(empty($_SESSION['user']->level)) :?>
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
<?php else :?>
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
<?php endif ;?>
