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
          <table class="table table-striped mt-2 mb-4" id="myTable">
                  <thead>
                      <tr>
                      <th scope="col">Nama Kamar</th>
                      <th scope="col">Nama Fasilitas</th>
                      <th scope="col">Kategory</th>
                      <th scope="col">Image</th>
                      <th scope="col">Aksi</th>
                      </tr>
                  </thead>
                  <tbody>
                      <?php foreach ($Fk as $value) :?>
                      <tr>
                      <td width="200"><?= $value->Nama_room?></td>
                      <td width="200"><?= $value->nama_fasilitas?></td>
                      <td width="200"><?= $value->kategory?></td>
                      <td width="200"><?= $value->img?></td>
                      <td width="200">
                        <a href="<?= base_url('Admin/Ubahfkamar').'?id='.$value->id_fkamar;?>" class="btn btn-success" >Ubah</a>
                       <!-- Button trigger modal -->
                        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modal<?= $value->id_kamar?>">
                          Hapus
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="modal<?= $value->id_kamar?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                <p>
                                  Apakah Anda Yakin Ingin Menghapus Data Tersebut!!!
                                </p>
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Kembali</button>
                                <a href="<?= base_url('Admin/hapusfkamar').'?id='.$value->id_fkamar;?>" type="button" class="btn btn-primary">Yakin</a>
                              </div>
                            </div>
                          </div>
                        </div>
                        </td>
                      </tr>
                      <?php endforeach ;?>
                  </tbody>
              </table>

              <a href="<?= base_url('Admin/Tambahdatafkamar');?>" class="btn btn-primary" >Tambah Data</a>
          </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>