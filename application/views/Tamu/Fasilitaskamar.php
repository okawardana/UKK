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
    <title>Hello, world!</title>
  </head>
  <body>
  
  <?php $this->load->view('Tamu/_partials/navbar.php'); ?>
  <?php $this->load->view('Tamu/_partials/jumbotron.php'); ?>

    

    <div class="container">
        <div class="d-flex flex-row-center bd-highlight mb-3" style="margin-top:120px;">
          <div class="section-title mb-5">
            <h2 class=" mb-4">Fasilitas Hotel</h2>
            <!-- <div class="card"> -->
              <div class="row">
                    <?php foreach ($fashotel as $fasilitas):?>
                    <div class="col-sm-4">
                      <div class="card">
                      <div class="card-body">
                      <h5 class="card-title"><?=$fasilitas->nama_fasilitas?></h5>
                      </div>
                      <img src="<?= $fasilitas->img?>" class="card-img-bottom" alt="...">
                      </div>
                    </div>
                    <?php endforeach;?>
                </div>
            <!-- </div> -->
          </div>
      </div>
  </div>

  <div class="container">
        <div class="d-flex flex-row-center bd-highlight mb-3" style="margin-top:120px;">
          <div class="section-title mb-5">
            <h2 class=" mb-4">Fasilitas Kamar</h2>
            <!-- <div class="card"> -->
              <div class="row">
                    <?php foreach ($faskamar as $fasilitas):?>
                    <div class="col-sm-4">
                      <div class="card">
                      <div class="card-body">
                      <h5 class="card-title"><?=$fasilitas->nama_fasilitas?></h5>
                      </div>
                      <img src="<?= $fasilitas->img?>" class="card-img-bottom" alt="...">
                      </div>
                    </div>
                    <?php endforeach;?>
                </div>
            <!-- </div> -->
          </div>
      </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>
