<!DOCTYPE html>
<html lang="en">
<head>
    <title>Hotel Hebat</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->  
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/vendor/bootstrap/css/bootstrap.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/fonts/font-awesome-4.7.0/css/font-awesome.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/fonts/Linearicons-Free-v1.0.0/icon-font.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/vendor/animate/animate.css');?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/vendor/css-hamburgers/hamburgers.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/vendor/animsition/css/animsition.min.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/vendor/select2/select2.min.css');?>">
<!--===============================================================================================-->  
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/vendor/daterangepicker/daterangepicker.css');?>">
<!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/css/util.css');?>">
    <link rel="stylesheet" type="text/css" href="<?= base_url('assets/Login_v16/css/main.css');?>">
<!--===============================================================================================-->
</head>
<body>
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url(<?= base_url('assets/Login_v16/images/Loginhotel.jpg');?>);">
            <div class="wrap-login100 p-t-30 p-b-50">
                <span class="login100-form-title p-b-41">
                    Silahkan Register
                </span>
                <form action="<?= base_url('Auth/addusers')?>" class="login100-form validate-form p-b-30 p-t-5" method="POST">

                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="username" placeholder="Username">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="text" name="Nama" placeholder="Nama Lengkap">
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="date" name="tgllahir" placeholder="Masukkan Tanggal Lahir">
                        <span class="focus-input100" data-placeholder="&#xe836;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="number" name="no_telp" placeholder="Masukkan No.Telp">
                        <span class="focus-input100" data-placeholder="&#xe830;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <input class="input100" type="password" name="password" placeholder="Masukkan Password">
                        <span class="focus-input100" data-placeholder="&#xe80f;"></span>
                    </div>
                    <div class="wrap-input100 validate-input">
                        <select class="input100" type="text" name="Jenis_Kelamin" placeholder="Masukkan Jenis Kelamin">
                           <option selected>Pilih...</option>
                              <option>Perempuan</option>
                              <option>Laki-Laki</option>
                        </select>
                        <span class="focus-input100" data-placeholder="&#xe82a;"></span>
                    </div>

                    <div class="container-login100-form-btn m-t-32 mb-2">
                        <button class="login100-form-btn">
                            Registrasi
                        </button>
                    </div><br>
                    <p class="text-center" style="font-size: 12px;">Sudah Memiliki Akun<a href="<?= base_url('Auth/login'); ?>"  style="font-size: 12px;" class="text-danger">
                        Silahkan Login
                    </a></p>
                

                </form>
            </div>
        </div>
    </div>
    

    <div id="dropDownSelect1"></div>
    
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/vendor/jquery/jquery-3.2.1.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/vendor/animsition/js/animsition.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/vendor/bootstrap/js/popper.js');?>"></script>
    <script src="<?= base_url('assets/Login_v16/vendor/bootstrap/js/bootstrap.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/vendor/select2/select2.min.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/vendor/daterangepicker/moment.min.js');?>"></script>
    <script src="<?= base_url('assets/Login_v16/vendor/daterangepicker/daterangepicker.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/vendor/countdowntime/countdowntime.js');?>"></script>
<!--===============================================================================================-->
    <script src="<?= base_url('assets/Login_v16/js/main.js');?>"></script>

</body>
</html>