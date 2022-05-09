<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        .gambarProfile{
            border-radius: 50%;
            height: 35px;
            width: 35px;
        }
    </style>
    <title>Hotel Hebat | Resepsionis</title>
    <script src="https://unpkg.com/feather-icons"></script>
</head>
<body>
<?php $this->load->view('Resepsionis/_partials/navbar.php'); ?>
<div class="container-fluid">
    <div class="card p-3 mt-2">
    <div class="d-flex justify-content-between">
                <div class="col-md-1.1 my-1">
                    <div class="input-group">
                        <input type="date" id="myDate" onmouseleave="functionTanggal()" class="form-control pr-5">
                        <div class="input-group-append">
                              <button class="btn btn-primary p-1" type="button" style="height:38.2px;" disabled>
                                <i data-feather="calendar"></i>
                              </button>
                            </div>
                      </div>
                    </div>
                    <div class="col-sm-1.5 my-1">
                        <div class="input-group">
                            <input type="text" class="form-control" id="myRef" onkeyup="myRef()" placeholder="Cari kode ref..">
                            <div class="input-group-append">
                              <button class="btn btn-primary p-1" type="button" style="height:38.2px;">
                                <i data-feather="search"></i>
                              </button>
                            </div>
                        </div>
                    </div>                    
                    <div class="col-sm-1.5 my-1">
                        <div class="input-group">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                            <div class="input-group-append">
                              <button class="btn btn-primary p-1" type="button" style="height:38.2px;">
                                <i data-feather="search"></i>
                              </button>
                            </div>
                        </div>
                    </div>                    
                </div>
                <div class="col-sm-1.5 my-1">
                    <div class="d-flex justify-content-between">
                    <h4 class="text-dark ml-1">Data Pesanan</h4>
                    <a href="<?= base_url('Resepsionis/cetak'); ?>" target="_blank" class="btn btn-sm btn-primary p-2"><i  class="fas fa-print"></i> Cetak PDF</a>
                    </div>
                </div>
    </div>
    </div>
</div>

<div class="container-fluid">
<table class="table table-striped mt-2 mb-4" id="myTable">
            <thead>
                <tr>
                <th scope="col">Nama Pemesan</th>
                <th scope="col">Nama Tamu</th>
                <th scope="col">Tipe Kamar</th>
                <th scope="col">Tanggal Cek In</th>
                <th scope="col">Tangal Cekout</th>
                <th scope="col">Jumlah Kamar</th>
                <th scope="col">Total Harga</th>
                <th scope="col">PayBY</th>
                <th scope="col">RefPB</th>
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($datapes as $value) :?>
                <tr>
                <th scope="row"><?= $value->nama_pemesan?></th>
                <td><?= $value->nama_tamu?></td>
                <td><?= $value->id_kamar?></td>
                <td><?= $value->tgl_cekin?></td>
                <td><?= $value->tgl_cekout?></td>
                <td><?= $value->jml_kamar?></td>
                <td><?= $value->T_harga?></td>
                <td><?= $value->PayBy ?></td>
                <td><?= $value->RefPB ?></td>
                
                <td><?= $value->Status ?></td>
                    <td>
                        <div class="d-gird">
                        <a href="<?= base_url('Resepsionis/gantistatus').'?id='.$value->id_pemesanan ?>" type="button" class="btn btn-primary d-grid">Ubah </a>
                        </div><!-- <button class="btn btn-danger">Batalkan </button> -->
                    </td>
                </tr>
                <?php endforeach ;?>
            </tbody>
        </table>
    </div>

    <?php $this->load->view('Resepsionis/_partials/js')?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>