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
        <form class="row g-3" action="<?= base_url('Admin/kirimdatafkamar');?>" method="POST">
        <input type="hidden" class="form-control" id="inputPassword4" name="id_fkamar" value="<?= $ufk[0]->id_fkamar?>">
        <div class="col-md-4">
            <label for="inputState" class="form-label">Nama Kamar</label>
            <select id="inputState" class="form-select" name="id_kamar" >
            <option value="<?= $ufk[0]->id_kamar?>" selected><?= $ufk[0]->Nama_room?></option>
            <?php foreach($dataSelectkamar as $kamar) :?>
            <option value="<?= $kamar->id_kamar?>"><?= $kamar->Nama_room?></option>
            <?php endforeach ;?>
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Nama Fasilitas</label>
            <input type="text" class="form-control" id="inputPassword4" name="nama_fasilitas" value="<?= $ufk[0]->nama_fasilitas?>">
        </div>
        <div class="col-12">
            <label for="inputAddress" class="form-label">Kategori</label>
            <input type="text" class="form-control" id="inputAddress" name="kategory" value="<?= $ufk[0]->kategory?>">
        </div>
        <div class="col-12">
            <label for="inputAddress2" class="form-label">Image</label>
            <input type="file" class="form-control" id="inputAddress2" name="img" value="<?= $ufk[0]->img?>">
        </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Simpan</button>
        </div>
        </form>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>