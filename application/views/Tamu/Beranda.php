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
    <title>Hotel Hebat | Beranda</title>
  </head>
  <body>
  
  <?php $this->load->view('Tamu/_partials/navbar.php'); ?>
  <?php $this->load->view('Tamu/_partials/jumbotron.php'); ?>
<div class="container">
    <div class="cekin">
        <form action="" method="post">
        <div class="row g-3">
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Cek In" aria-label="Cek In">
            </div>
            <div class="col-md-4">
                <input type="date" class="form-control" placeholder="Cek Out" aria-label="Cek Out">
            </div>
            <div class="col-md-4">
                <input type="text" class="form-control" placeholder="Jumlah Kamar" aria-label="Jumlah Kamar">
            </div>
            <div class="col-md-12">
                <a href="" type="submit" class="btn btn-primary col-12">Pesan</a>
            </div>
        </div>
        </form>
    </div>
</div>
    
    <div class="container">
        <div class="d-flex flex-row-center bd-highlight mb-3" style="margin-top:120px;">
          <div class="section-title mb-5">
            <h2 class="text-center mb-4">Tentang Kami</h2>
            <p class="text-center">
            Nikmati Hotel dengan Nuansa Alam yang Sejuk.Melihat Matahari Tenggelam Dengan Berenang Dikolam Renang yang Sudah Disediakan.Convention Center
            kami, dilengkapi pelayanan lengkap dengan ruang konvensi terbesar di Indonesia, mampu mengakomodasi hingga 1.000
            delegasi. Manfaatkan ruang penyelenggaraan konvensi  ataupun mewujudkan acara pernikahan yang mewah
            </p>
          </div>
      </div>
  </div>

  <div class="container">
        <div class="row">
            <p class=" text-center mb-4">Copyright &copy; 2022 All Rights Reserved by Oka Wardana
            </p>
          </div>
          </div>
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>