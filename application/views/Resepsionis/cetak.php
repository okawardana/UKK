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
    <title>Hotel Hebat</title>
  </head>
  <body>

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
                </tr>
                <?php endforeach ;?>
            </tbody>
        </table>
    </div>
    
        <script>window.print()</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>   
  </body>
</html>