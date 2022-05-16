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
    <title>Hotel Hebat | Form Pemesanan</title>
  </head>
  <body>
  
  <?php $this->load->view('Tamu/_partials/navbar.php'); ?>
  <?php $this->load->view('Tamu/_partials/jumbotron.php'); ?>
<div class="container">
        <div class="row">
    <div class="cekin">
        <form action="<?= base_url('Tamu/tambahdatapemesan') ?>" method="post" class="row g-3">
        <div class="row g-3">
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Cek In" name="tgl_cekin" aria-label="Cek In" required>
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Cek Out" name="tgl_cekout" aria-label="Cek Out" required>
            </div>
            <div class="col-md-4">
                <input type="number" class="form-control" placeholder="Jumlah Kamar" name="jml_kamar" value="1" aria-label="Jumlah Kamar" required>
            </div>
        </div>
    </div>

    <h2 class="text-left mt-3 mb-3">Form Pemesanan</h2>
<input type="hidden" class="form-control" id="inputEmail4" name="id_pemesanan" required>
  <div class="col-md-12">
    <label for="inputEmail4" class="form-label">Nama Pemesan</label>
    <input type="text" class="form-control" id="inputEmail4" name="nama_pemesan" value="<?= $user->Nama?>" readonly required>
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Email</label>
    <input type="email" class="form-control"  placeholder="Masukkan Email Anda" id="inputPassword4" name="email" required>
  </div>
  <div class="col-md-12">
    <label for="inputPassword4" class="form-label">Nama Tamu</label>
    <input type="text" class="form-control" id="inputPassword4" name="nama_tamu" required>
  </div>
  <div class="col-md-4">
    <label for="inputAddress" class="form-label">Nomor HandPhone</label>
    <input type="number" class="form-control" id="inputAddress" placeholder="" name="no_hp" required>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">Pilih Kamar</label>
    <select id="inputState" class="form-select" name="id_kamar" required>
      <option selected>Pilih...</option>
    <?php foreach ($dataSelectkamar as $value) :?>
      <option value="<?= $value->id_kamar ?>"><?= $value->Nama_room ?></option>
    <?php endforeach ;?>
    </select>
  </div>

  <div class="col-md-4">
    <label for="inputState" class="form-label">PayBy</label>
    <select id="inputState" class="form-select" name="PayBy" required>
    <option selected>Pilih...</option>
      <option value="Bayar Di Tempat">Bayar Di Tempat</option>
      <option value="M-Banking">M-Banking</option>

    </select>
  </div>

  <input type="hidden" name="RefPB" value="<?= $a?>">
  <div class="col-12 mt-3 mb-3">
    <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
  </div>
</form>
</div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>