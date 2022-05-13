
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <?php $this->load->view('Resepsionis/_partials/head.php'); ?> -->
    <title>ResepsionisHH | Data Pesanan</title>
  </head>
  <body>
    

    <table border="1%">
                
                  <tr>
                      <th>Nama Tamu</th>
                      <th>Tanggal Cek In</th>
                      <th>Tanggal Cek Out</th>
                      <th>Tipe Kamar</th>
                      <th>Jumlah Kamar</th>
                      <th>Nomor telepon</th>
                      <th>email</th>
                      <th>KodeRef</th>
                      <th>Harga</th>
                      <th>Status</th>
                  </tr>
                
                  <?php foreach($pesanan as $key => $pesan) :?>
                    <tr>
                      <td><?= $pesan->nama_tamu?></td>
                      <td><?= $pesan->tgl_cekin?></td>
                      <td><?= $pesan->tgl_cekout?></td>
                      <td><?= $pesan->id_kamar?></td>
                      <td><?= $pesan->jml_kamar?></td>
                      <td><?= $pesan->no_hp?></td>
                      <td><?= $pesan->email?></td>
                      <td><?= $pesan->RefPB?></td>
                      <td><?= $pesan->Harga?></td>
                      <td><?= $pesan->Status?></td>
                
                    </tr>
                  <?php endforeach ;?>
                  
                  
            </table>   

      <script>
		window.print();
	</script>
  </body>
</html>