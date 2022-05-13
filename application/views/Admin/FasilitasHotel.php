<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <?php $this->load->view('Admin/_partials/head.php'); ?>
    <title>AdminHH | Data FasilitasHotel</title>
  </head>
  <body>
    <?php $this->load->view('Admin/_partials/navbar.php'); ?>

    <div class="card mt-3 mb-3 mr-5 ml-5 shadow">
        <div class="card-header" style="background-color:rgba(240,255,255);"> 
          <table>
              <tr>
                <td>
                  <h6 class="m-0 text-dark">DataFasilitasHotel</h6>
                </td>
              </tr>
          </table>
                              

                              
        </div>
                        
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-hover" id="myTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>No</th>
                    <th onclick="sortTable(0)">Nama Fasilitas</th>
                    <th>Gambar Fasilitas</th>
                    <th onclick="sortTable(1)">Keterangan</th>
                    <th>Aksi</th>
                  </tr>
                </thead>
                  <tbody>
                  <?php $no=1; foreach ($query as $key => $f) :?>
                    <tr>
                      <td><?= $no++?></td>
                      <td width="250"><?= $f->nama_fashotel?></td>
                      <!-- <td><?= $kamar["Info_kamar"]->nama_fasilitas?></td> -->
                      <td><img src="<?= base_url('assets/img/portfolio/').$f->gambar;?>" width="50"></td>
                      <td><?= $f->ket_fashotel?></td>
                      <td width="250">
                        <a href="<?= base_url('Admin/ubahDataFasHotel').'?id='.$f->id_fashotel?>" class="btn btn-sm btn-success"><i data-feather="edit"></i> Ubah</a>
                        <!-- <a href="#" onclick="window.print()" class="btn btn-sm btn-primary"><i data-feather="printer"></i> Cetak PDF</a> -->
                        <a href="" class="btn btn-sm btn-danger"><i data-feather="trash"></i> Hapus</a>
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
      <div class="d-flex justify-content-end mr-5">
              <a class="btn btn-sm btn-primary" id="tombol" href="<?= base_url('Admin/tambahFasHotel'); ?>"><i data-feather="plus" class="mt-2"></i></a>
      </div>
    
      <?php $this->load->view('Admin/_partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php $this->load->view('Admin/_partials/js.php'); ?>
  </body>
</html>