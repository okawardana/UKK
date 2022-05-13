<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../assets/css/ruang-admin.css">
    <link rel="stylesheet" href="../assets/css/ruang-admin.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php $this->load->view('Admin/_partials/head.php'); ?>
    <title>AdminHH | Data Kamar</title>
  </head>
  <body>
    <?php $this->load->view('Admin/_partials/navbar.php'); ?>
    
    <div class="container-fluid">
        <div class="card mt-4">
        <form action="<?= base_url('Admin/tambahDataKamar'); ?>" class="row g-3 mt-1 mb-3 ml-3 mr-3" method="post">
            <input type="hidden" class="form-control" name="id">
            <!-- <div class="col-md-6">
                <label for="inputState" class="form-label">Pilih Tipe Kamar</label>
                <select id="inputState" class="form-select" name="Nama_room">
                <option></option>
                    <option value="Superior">Superior</option>
                    <option value="Deluxe">Deluxe</option>
                </select>
            </div> -->
            <div class="col-md-6">
                <label for="inputKamar" class="form-label" >Masukan Tipe Kamar</label>
                <input type="text" class="form-control" id="inputKamar" name="Nama_room">
            </div>
            <div class="col-md-6">
                <label for="inputJumlah4" class="form-label">Masukan Jumlah Kamar</label>
                <input type="text" class="form-control" id="inputJumlah4" name="Stok">
            </div>
            <div class="col-md-6">
                <label for="inputImage4" class="form-label">Pilih Gambar</label>
                <input type="file" class="form-control" id="inputImage4" name="img_room">
            </div>
            <div class="col-md-6">
                <label for="inputHarga4" class="form-label">Masukan Harga Kamar</label>
                <input type="number" class="form-control" id="inputHarga4" name="harga">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Tambah</button>
            </div>
        </form>
        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php $this->load->view('Admin/_partials/js.php'); ?>
  </body>
</html>