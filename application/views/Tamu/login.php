<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="<?= base_url('/Tamu/cekusers'); ?>" method="POST">
        <input type="text" name="username" placeholder="Masukan Username">
        <input type="password" name="password" placeholder="Masukan Kata Sandi">
        <button type="submit">Login</button>
    </form>
</body>
</html>