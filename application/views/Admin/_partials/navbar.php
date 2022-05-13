<!-- <nav class="navbar navbar-expand-lg navbar-light mt-5 ml-5 mr-5 rounded shadow" style="background-color:rgba(240,255,255);">
<div class="container-fluid">
<a class="navbar-brand" href="#">
    <img src="../assets/img/Hotel.png" class="d-inline-block align-top" style=" height:40px; margin-left:40px;" alt="">
    Hotel Hebat
  </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="dropdown">
    <button class="btn btn-default dropdown-toggle" type="button" id="menu1" data-toggle="dropdown">
     <img src="http://placehold.it/350x150">
       <span class="caret"></span>
    </button>
    <ul class="dropdown-menu" role="menu" aria-labelledby="menu1">
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Menu item 1</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Menu item 2</a></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Menu item 3</a></li>
      <li role="presentation" class="divider"></li>
      <li role="presentation"><a role="menuitem" tabindex="-1" href="#">Menu item 4</a></li>
    </ul>
  </div>
    <div class="navbar-collapse collapse show" id="navbarColor01" style="margin-right:40px;">
      <ul class="navbar-nav mr-auto">
      </ul>
      <div class="form-inline">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active" id="navcolor">
          <a class="nav-link" href="<?= base_url('/Admin/kamar'); ?>">Kamar<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item" id="navcolor">
          <a class="nav-link" href="<?= base_url('/Admin/FasilitasKamar'); ?>">FasilitasKamar</a>
        </li>
        <li class="nav-item" id="navcolor">
          <a class="nav-link" href="<?= base_url('/Admin/FasilitasHotel'); ?>">FasilitasHotel</a>
        </li>
        <div class="dropdown" >
        <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
        <img src="../assets/img/default.png" class=" rounded-circle" style="width:30px; height:30px;">
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
</nav> -->
<div class="mt-2 mr-3 ml-3 p-3" id="navbar">
    <nav class="navbar navbar-expand-lg navbar-light mt-3 shadow p-3" style="background-color:rgba(255, 157, 0, 0.5);">
    <div class="container-fluid">
    <a class="navbar-brand" href="#">
        <img src="<?= base_url('assets/img/Hotel.png'); ?>" class="d-inline-block align-top" style=" height:40px; margin-left:40px;" alt="">

      </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="true" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse collapse show" id="navbarColor01" style="margin-right:40px;">
          <ul class="navbar-nav mr-auto">
          </ul>
          <div class="form-inline">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active" id="navcolor">
                <a class="nav-link" href="<?= base_url('/Admin/kamar'); ?>">Kamar<span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item" id="navcolor">
                <a class="nav-link" href="<?= base_url('/Admin/FasilitasKamar'); ?>">FasilitasKamar</a>
              </li>
              <li class="nav-item" id="navcolor">
                <a class="nav-link" href="<?= base_url('/Admin/FasilitasHotel'); ?>">FasilitasHotel</a>
              </li>
              <div class="dropdown" >
              <button class="btn dropdown-toggle" type="button" id="menu1" data-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
              <img src="../assets/img/default.png" class=" rounded-circle" style="width:30px; height:30px;">
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