<div id="navbar">
    <nav class="navbar navbar-expand-lg navbar-dark shadow bg-dark">
    <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url('/Tamu/Beranda');?>">Hotel Hebat</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="float-end show" id="navbarColor01" style="margin-right:40px;">
          <ul class="navbar-nav mr-auto">

          <li class="nav-item active" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/fkamar'); ?>">Fasilitas</a>
            </li>
            <li class="nav-item" id="navcolor">
                <a class="nav-link" href="<?= base_url('/Tamu/Kamar/'); ?>">Tipe Kamar</a>
            </li>

            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Tamu/Formpemesanan'); ?>">Pemesanan Kamar</a>
            </li>
            <?php if (!empty($_SESSION['login']->level)) :?>
              
              <li>
              <a class="nav-link" href="<?= base_url('/Tamu/daftarpesanan'); ?>">Daftar Pesanan</a>
              </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://e7.pngegg.com/pngimages/636/141/png-clipart-computer-icons-user-s-included-miscellaneous-user-profile.png" class="gambarProfile" width="50">
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Profil</a></li>
                <li><a class="dropdown-item" href="<?= base_url('Auth/logout')?>">Log Out</a></li>
            </ul>
          </li>
          <?php endif?>
          <?php if (empty($_SESSION['login']->level)) :?>            
            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Auth/login'); ?>">Login</a>
            </li>
            <li class="nav-item" id="navcolor">
              <a class="nav-link" href="<?= base_url('/Auth/register'); ?>">Registrasi</a>
            </li>
          <?php endif?>
            
          </ul>
        </div>
        </div>
    </nav>
    </div>