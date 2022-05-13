
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
    <?php $this->load->view('Resepsionis/_partials/head.php'); ?>
    <script src="https://unpkg.com/feather-icons"></script>
    <title>ResepsionisHH | Data Pesanan</title>
  </head>
  <body>
    <?php $this->load->view('Resepsionis/_partials/navbar.php'); ?>
    
    <div class="card mt-3 mb-3 mr-5 ml-5">
      
        <div class="card-header" style="background-color:#FFF;">  
        <table>
                <div class="d-flex justify-content-between">
                <div class="col-md-1.1 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
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
                </div>
                <div class="d-flex justify-content-between">
                <h4 class="text-dark ml-1">Data Pesanan</h4>
                <a href="<?= base_url('Resepsionis/cetak'); ?>" target="_blank" class="btn btn-sm btn-primary p-2"><i  class="fas fa-print"></i> Cetak PDF</a>
                </div>
                <!-- <div class="d-flex justify-content-between"> -->
                  <!-- <tr>
                    <td>
                      <h6 class="text-dark">Data Pesanan</h6>
                    </td>
                  </tr> -->
                <!-- </div> -->
              
          </table>
                              

                              
        </div>
                        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="myTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th onclick="sortTable(0)">Nama Tamu</th>
                      <th onclick="sortTable(1)">Tanggal Cek In</th>
                      <th onclick="sortTable(2)">Tanggal Cek Out</th>
                      <th>Tipe Kamar</th>
                      <th>Jumlah Kamar</th>
                      <th>Nomor telepon</th>
                      <th>email</th>
                      <th>KodeRef</th>
                      <th>Harga</th>
                      <th>Status</th>
                      <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php foreach($pesanan as $key => $pesan) :?>
                    <tr>
                      <td width="150"><?= $pesan->nama_tamu?></td>
                      <td><?= $pesan->tgl_cekin?></td>
                      <td><?= $pesan->tgl_cekout?></td>
                      <td><?= $pesan->id_kamar?></td>
                      <td><?= $pesan->jml_kamar?></td>
                      <td><?= $pesan->no_hp?></td>
                      <td><?= $pesan->email?></td>
                      <td><?= $pesan->RefPB?></td>
                      <td><?= $pesan->Harga?></td>
                      <td><?= $pesan->Status?></td>
                      
                      <td width="50">
                        <a href="<?= base_url('Resepsionis/ubahDataPesanan').'?id='.$pesan->id;?>" class="btn btn-sm btn-success"><i class="fas fa-edit"></i> Ubah</a>
                      </td>
                    </tr>
                  <?php endforeach ;?>
                  </tbody>
                  
            </table>
            
          </div>
          
        </div>
        <nav aria-label="...">
          <ul class="pagination ml-4">
            <li class="page-item disabled">
              <a class="page-link" href="#" tabindex="-1">Previous</a>
            </li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item active">
              <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
            </li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item">
              <a class="page-link" href="#">Next</a>
            </li>
          </ul>
        </nav>
      </div>

    <!-- <div class="row"> -->
            <!-- Datatables -->
            <!-- <div class="col-lg-12">
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold">DataPesanan</h6>
                </div>
                <div class="table-responsive p-3">
                <div class="d-flex justify-content-between">
                <div class="col-md-1.1 my-1">
                    <label class="sr-only" for="inlineFormInputGroupUsername">Username</label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                        <div class="input-group-text"><i data-feather="calendar"></i></div>
                        </div>
                        <input type="date" id="myDate" onmouseleave="functionTanggal()" class="form-control">
                    </div>
                    </div>
                    <div class="col-sm-1.5 my-1">
                        <div class="input-group">
                            <input type="text" class="form-control" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                        </div>
                    </div>                    
                </div>
                </div>  
                <table class="table table-striped table-bordered" id="myTable">
                    <thead class="thead-light">
                      <tr>
                        <th onclick="sortTable(0)">Nama Tamu</th>
                        <th onclick="sortTable(1)">Tanggal Cek In</th>
                        <th onclick="sortTable(2)">Tanggal Cek Out</th>
                        <th>Aksi</th>
                      </tr>
                    </thead>
                        <?php foreach($pesanan as $key => $pesan) :?>
                        
                                <tr>
                                    <td><?= $pesan->nama_tamu?></td>
                                    <td><?= $pesan->tgl_cekin?></td>
                                    <td><?= $pesan->tgl_cekout?></td>
                                    <td>a</td>
                                </tr>
                                
                        <?php endforeach ;?>
                  </table>
                </div> 
              </div>
              <div class="d-flex justify-content-end mr-3">
              <a class="btn btn-sm btn-primary" id="tombol" href="<?= base_url('Admin/tambahKamar'); ?>"><i data-feather="plus" class="mt-2"></i></a>
              </div>
            </div>
          </div> -->

          <?php $this->load->view('Admin/_partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php $this->load->view('Resepsionis/_partials/js.php'); ?>
  </body>
</html>