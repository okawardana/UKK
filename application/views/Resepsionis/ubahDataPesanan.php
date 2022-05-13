
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
        
            <form action="<?= base_url('Resepsionis/storeDataPesanan').'?id='.$_GET['id']; ?>" class="row g-3 mt-1 mb-3 ml-3 mr-3" method="post">
                <input type="hidden" class="form-control" name="id" value="<?= $data[0]->id ?>">
                <center>
                <div class="col-md-2">
                    <label for="inputState" class="form-label">Status</label>
                    <select id="inputState" class="form-select" name="Status">
                    <option value="<?= $data[0]->Status ?>" selected> <?= $data[0]->Status ?></option>
                            <option value="Cek in">Cek in</option>
                            <option value="Cek Out">Cek Out</option>
                    </select>
                </div>  
                
                
                <div class="col-12 mt-3">
                    <button type="submit" class="btn btn-primary">Ubah</button>
                </div>
                </center>
            </form>
            
            </div>
          
        </div>
      </div>

          <?php $this->load->view('Admin/_partials/footer.php'); ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php $this->load->view('Resepsionis/_partials/js.php'); ?>
  </body>
</html>