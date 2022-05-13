<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <style>
        .gambarProfile{
            border-radius: 50%;
            height: 35px;
            width: 35px;
        }
    </style>

    <title>Hotel Hebat | Admin</title>
  </head>
  <body>
  
<?php $this->load->view('Admin/_partials/navbar.php');?>

    <div class="container-fluid">
        <form class="row g-3" action="<?= base_url('Admin/kirimdatafhotel');?>" method="POST">
        <input type="hidden" class="form-control" id="inputPassword4" name="id" value="<?= $ufho[0]->id?>">
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" id="inputPassword4" name="nama_fasilitas" value="<?= $ufho[0]->nama_fasilitas?>">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Image</label>
            <input type="file" class="form-control" id="inputAddress2" name="img" value="<?= $ufho[0]->img?>">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Deskripsi</label>
            <input type="text" class="form-control" id="inputAddress" name="deks" value="<?= $ufho[0]->deks?>">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>