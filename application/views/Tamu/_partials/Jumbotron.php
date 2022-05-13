<div class="container-fluid mt-2">
    <div class="jumbotron jumbotron-fluid">

    <div class="container-md hidden-mobile" style="margin-top:580px; ">
      <div class="card shadow p-3 bg-white rounded-5" id="card1" style="margin: 0px 30x 0px 30px;">
        <form action="<?= base_url('Tamu/booknow').'?id=null'; ?>" class="form-inline d-flex justify-content-center" style="margin-top:15px; margin-bottom:30px;" method="post">
          <div class="form-row">
            <div class="form-group col-md-3">
              <label for="inputEmail4">Cek In : </label>
              <input type="date" name="tgl_cekin" class="form-control rounded-lg" id="inputEmail4" placeholder="Email">
            </div>
            <div class="form-group col-md-3">
              <label for="inputPassword4">Cek Out : </label>
              <input type="date" name="tgl_cekout" class="form-control" id="inputPassword4" placeholder="Password">
            </div>
            <div class="form-group col-md-3">
              <label for="inputAddress">Jumlah Kamar :</label>
              <input type="number" name="jml_kamar" class="form-control" id="inputAddress" placeholder="Contoh : 12">
            </div>
            <div class="form-group col-md-3 mt-4 d-flex flex-row-reverse">
            <a class="nav-link btn btn-primary" href="<?= base_url('/Tamu/pesanKamar'); ?>" data-toggle="modal" data-target="#exampleModal">Pesan Sekarang</a>
          
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Peringatan !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    Silahkan Login Terlebih Dahulu
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <a href="<?= base_url('Auth/login'); ?>" type="button" class="btn btn-primary">Log In</a>
                  </div>
                </div>
              </div>
            </div>
            </div>
          </div>
        </form>
      </div>
      </div>
    </div>
    </div>