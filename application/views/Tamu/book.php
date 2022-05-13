<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <?php $this->load->view('Tamu/_partials/head.php'); ?>
    <title>HotelHebat | Pesanan</title>
  </head>
  <body>
    <?php $this->load->view('Tamu/_partials/navbar.php'); ?>
    <div class="container-fluid mt-2">
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
        </div>
      </div>
    </div>

    <section class="booking">
      <div class="container">
      
        <div class="section-title ml-5 mr-5">
          <h2 class="text-center">Form Pemesanan</h2>
        </div>
    
        <div class="container-fluid" style="margin-bottom:45px;">
            <div class="card mt-3 mr-5 ml-5">
            <form action="<?= base_url('Tamu/prosBook');?>" class="mt-3 mr-3 ml-3 mb-3" method="POST">
            <?php if(!empty($data['datakiriman'])) :?>
                <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                          <p class="mb-1">Tanggal Cek In</p>
                          <input class="form-control" type="date" name="tgl_cekin" placeholder="tgl_cekin" value="<?= $data['datakiriman']['tgl_cekin'] ?>" required>
                        </div>

                        <div class="col-md-4">
                          <p class="mb-1">Tanggal Cek Out</p>
                          <input class="form-control" type="date" name="tgl_cekout" placeholder="tgl_cekout" value="<?= $data['datakiriman']['tgl_cekout'] ?>" required>
                        </div>

                        <div class="col-md-4">
                          <p class="mb-1">Jumlah Kamar</p>
                          <input class="form-control" type="number" name="jml_kamar" placeholder="jumlahkamar" value="<?= $data['datakiriman']['jml_kamar'] ?>" required>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                      <p class="mt-3">Nama Pemesan</p>    
                      <input class="form-control" type="text" name="nama_pemesan" placeholder="nama_pemesan" value="<?= $data['user']->Nama?>" readonly>
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">E-mail</p>
                      <input class="form-control" type="email" name="email" placeholder="Contoh : Nusaklmn@gmail.com" required>
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Nama Tamu</p>
                      <input class="form-control" type="text" name="nama_tamu" placeholder="nama tamu" required>
                  
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Nomor Telp/Wa</p>
                      <input class="form-control" type="number" name="no_hp" placeholder="no_hp" value="<?= $data['user']->nowa?>" required>
                      
                      
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Tipe Kamar</p>
                      <select class="form-control" name="id_kamar" required>
                          <option>Pilih Kamar...</option>
                          <option value="1">Superior</option>
                          <option value="2">deluxe</option>
                          <option value="4">Family</option>
                          <option value="5">Exterior</option>

                      </select><br>
                      
                  </div>
                  <div class="col-md-6">
                    <!--<p>Harga</p> 
                          <input class="form-control" type="text" name="Harga" placeholder="Harga"> -->
                          <p class="mt-3">PayBay</p>
                      <select class="form-control" name="PayBay" required>
                          <option value="Bayar Di Tempat">Bayar Di Tempat</option>
                          <option value="Transfer Bank">Transfer Bank</option>
                      </select><br>
                    
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
                      <!--<p>PayEND</p> 
                          <input class="form-control" type="text" name="PayEND" placeholder="PayEND"> -->
                      <!--<p>Nomor_Kamar</p> 
                          <input class="form-control" type="text" name="Nomor_Kamar" placeholder="Nomor_Kamar"> -->
                      <!-- <p class="mt-2">RefPBs</p>
                      <input class="form-control" type="text" name="RefPBs" placeholder="RefPBs"> -->
                  </div>
                </div>
                <?php elseif (empty($data['DataKamById'])) :?>
                  <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-4">
                          <p class="mb-1">Tanggal Cek In</p>
                          <input class="form-control" type="date" name="tgl_cekin" placeholder="tgl_cekin"  required>
                        </div>

                        <div class="col-md-4">
                          <p class="mb-1">Tanggal Cek Out</p>
                          <input class="form-control" type="date" name="tgl_cekout" placeholder="tgl_cekout"  required>
                        </div>

                        <div class="col-md-4">
                          <p class="mb-1">Jumlah Kamar</p>
                          <input class="form-control" type="number" name="jml_kamar" placeholder="jumlahkamar"  required>
                        </div>
                    </div>
                  </div>

                  <div class="col-md-6">
                      <p class="mt-3">Nama Pemesan</p>    
                      <input class="form-control" type="text" name="nama_pemesan" placeholder="nama_pemesan" value="<?= $data['user']->Nama?>" readonly>
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">E-mail</p>
                      <input class="form-control" type="email" name="email" placeholder="Contoh : Nusaklmn@gmail.com" required>
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Nama Tamu</p>
                      <input class="form-control" type="text" name="nama_tamu" placeholder="nama tamu" required>
                  
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Nomor Telp/Wa</p>
                      <input class="form-control" type="number" name="no_hp" placeholder="no_hp" value="<?= $data['user']->nowa?>" required>
                      
                      
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Tipe Kamar</p>
                      <select class="form-control" name="id_kamar" required>
                          <option>Pilih Kamar...</option>
                          <option value="1">Superior</option>
                          <option value="2">deluxe</option>
                          <option value="4">Family</option>
                          <option value="5">Exterior</option>

                      </select><br>
                      
                  </div>
                  <div class="col-md-6">
                    <!--<p>Harga</p> 
                          <input class="form-control" type="text" name="Harga" placeholder="Harga"> -->
                          <p class="mt-3">PayBay</p>
                      <select class="form-control" name="PayBay" required>
                          <option value="Bayar Di Tempat">Bayar Di Tempat</option>
                          <option value="Transfer Bank">Transfer Bank</option>
                      </select><br>
                    
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
                      <!--<p>PayEND</p> 
                          <input class="form-control" type="text" name="PayEND" placeholder="PayEND"> -->
                      <!--<p>Nomor_Kamar</p> 
                          <input class="form-control" type="text" name="Nomor_Kamar" placeholder="Nomor_Kamar"> -->
                      <!-- <p class="mt-2">RefPBs</p>
                      <input class="form-control" type="text" name="RefPBs" placeholder="RefPBs"> -->
                  </div>
                </div>
                <?php else : ?>
                  <div class="row">
                  <div class="col-md-12">
                    <div class="row">
                      
                        <div class="col-md-4">
                          <p class="mb-1">Tanggal Cek In</p>
                          <input class="form-control" type="date" name="tgl_cekin" placeholder="tgl_cekin" required>
                        </div>

                        <div class="col-md-4">
                          <p class="mb-1">Tanggal Cek Out</p>
                          <input class="form-control" type="date" name="tgl_cekout" placeholder="tgl_cekout" required>
                        </div>

                        <div class="col-md-4">
                          <p class="mb-1">Jumlah Kamar</p>
                          <input class="form-control" type="number" name="jml_kamar" placeholder="jumlahkamar" required>
                        </div>
                      
                    </div>
                  </div>
                  <div class="col-md-6">
                      <p class="mt-3">Nama Pemesan</p>    
                      <input class="form-control" type="text" name="nama_pemesan" placeholder="nama_pemesan" value="<?= $data['user']->Nama?>" readonly>
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">E-mail</p>
                      <input class="form-control" type="email" name="email" placeholder="Contoh : Nusaklmn@gmail.com" required>
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Nama Tamu</p>
                      <input class="form-control" type="text" name="nama_tamu" placeholder="nama tamu" required>
                  
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Nomor Telp/Wa</p>
                      <input class="form-control" type="number" name="no_hp" placeholder="no_hp" value="<?= $data['user']->nowa?>" required>
                      
                      
                  </div>
                  <div class="col-md-6">
                  <p class="mt-3">Tipe Kamar</p>
                      <select class="form-control" name="id_kamar" required>
                          <option value="<?= $data['DataKamById'][0]->id_kamar?>"><?= $data['DataKamById'][0]->Nama_room?></option>
                          <?php foreach($data['Kamar'] as $key => $item) : ?>
                          <option value="<?= $item->id_kamar?>"><?= $item->Nama_room?></option>
                          <?php endforeach ;?>
                      </select><br>
                      
                  </div>
                  <div class="col-md-6">
                    <!--<p>Harga</p> 
                          <input class="form-control" type="text" name="Harga" placeholder="Harga"> -->
                          <p class="mt-3">PayBay</p>
                      <select class="form-control" name="PayBay" required>
                          <option value="Bayar Di Tempat">Bayar Di Tempat</option>
                          <option value="Transfer Bank">Transfer Bank</option>
                      </select><br>
                    
                  </div>
                  <div class="col-md-6">
                    <button type="submit" class="btn btn-primary">Konfirmasi Pemesanan</button>
                      <!--<p>PayEND</p> 
                          <input class="form-control" type="text" name="PayEND" placeholder="PayEND"> -->
                      <!--<p>Nomor_Kamar</p> 
                          <input class="form-control" type="text" name="Nomor_Kamar" placeholder="Nomor_Kamar"> -->
                      <!-- <p class="mt-2">RefPBs</p>
                      <input class="form-control" type="text" name="RefPBs" placeholder="RefPBs"> -->
                  </div>
                </div>

                <?php endif;?>
            </form>
            </div>
        
    </div>
    </div>
    </section>
    <?php $this->load->view('Tamu/_partials/footer.php'); ?>

    <?php $this->load->view('Tamu/_partials/js.php'); ?>
  </body>
</html>