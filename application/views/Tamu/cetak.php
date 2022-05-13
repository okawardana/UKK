<?php
$dateStart= '2022-04-03';
$dateExpired = date('Y-m-d', strtotime($dateStart. ' + 3 days'));
$dateExpired2 = date('Y-m-d', strtotime($dateStart. ' + 1 days'));
// var_dump($dateExpired);
$status = "Cek In";

// if(strtotime($dateStart)<strtotime('-1 days')){
//    $status = "INACTIVE";


// }

// if(strtotime($dateStart)<strtotime('-1 days')){
//    $status = "DORMANT";
   
// }

if ($dateExpired == '2022-04-06') {
  echo 'CekOut';
}

echo $status;
?>
<!doctype html>
<html lang="en">
  <head>
    <?php $this->load->view('Tamu/_partials/head.php'); ?>
  </head>
  <body>

    <div class="mt-5" id="Booklist">
            <div class="card mb-5">
            <!-- <img src="" class="card-img-top" alt="..."> -->
            <div class="card-body">
                <h2 class="text-center card-title">LIST BOOKING ANDA</h2>
                <!-- <a href="#" target="_blank" onclick="window.print()" class="btn btn-sm btn-primary"><i  class="fas fa-print"></i> Cetak PDF</a> -->
                <p class="card-text">
                    kode Booking anda : 
                </p>
                <p>

                </p>
                <p class="card-text">
                <a href="#" onclick="window.print()" class="btn btn-sm btn-primary"><i  class="fas fa-print"></i> Cetak PDF</a>
                </p>
            </div>
        </div>
    </div>

<?php $this->load->view('Tamu/_partials/js.php'); ?>
  </body>
</html>