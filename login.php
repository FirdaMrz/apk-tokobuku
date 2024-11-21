<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>TOKO BUKU</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
        
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet">

    <style>
        /* Styling Background Utama */
        #login-page {
            background-image: url('assets/img/login.jpg'); /* Ganti dengan lokasi gambar Anda */
            background-size: cover; /* Menutupi seluruh halaman */
            background-position: center; /* Memusatkan gambar */
            background-repeat: no-repeat; /* Tidak mengulang gambar */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed; /* Agar tetap di tengah ketika scroll */
            width: 100%;
        }

        /* Tambahkan Overlay Warna */
        #login-page::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5); /* Warna overlay hitam transparan */
            z-index: 1; /* Letakkan di bawah form login */
        }

        .container {
            position: relative;
            z-index: 2; /* Form login di atas overlay */
            width: 100%; /* Pastikan form login tidak lebih besar dari layar */
            max-width: 400px; /* Batasi lebar form login */
        }

        /* Styling Logo */
        .logo-circle {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 10px;
        }

        /* Styling Container */
        .logo-container {
            background: rgba(255, 255, 255, 0.9); /* Warna putih transparan */
            padding: 20px;
            border-radius: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            margin-bottom: 20px;
        }

        /* Styling Form Login */
        .form-login {
            background: rgba(255, 255, 255, 0.9); /* Warna putih transparan */
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
        }

        .form-login-heading {
            background: #009688;
            color: #ffffff;
            padding: 15px;
            border-radius: 10px;
            text-align: center;
            margin-bottom: 20px;
            font-size: 20px;
        }

        .login-wrap {
            margin-top: 20px;
        }

        /* Styling Button */
        .btn-theme {
            background: #009688;
            color: #ffffff;
            border: none;
            transition: background 0.3s ease;
        }

        .btn-theme:hover {
            background: #00796b;
            color: #ffffff;
        }

        /* Mencegah Halaman di-scroll */
        html, body {
            height: 100%;
            margin: 0;
            overflow: hidden; /* Mencegah scroll */
        }
    </style>
  </head>

  <body>
    <div id="login-page">
        <div class="container">
            <!-- Form Login -->
            <form class="form-login" method="POST" action="controller/authcontroller.php?page=login">
                <div class="logo-container">
                    <img src="assets/img/logo.jpg" alt="Logo" class="logo-circle">
                    <h2 class="form-login-heading">Selamat Datang Di Toko Buku</h2>
                </div>
                <div class="login-wrap">
                    <?php
                        if(isset($_GET['status'])){
                            echo '<div class="alert alert-danger text-center">';
                            if($_GET['status'] == 'tidakaktif'){
                                echo "Akun Anda Tidak Aktif, Silahkan Hubungi Admin";
                            }
                            if($_GET['status'] == 'gagal'){
                                echo "Username Atau Password Salah!";
                            }
                            echo '</div>';
                        }
                    ?>
                    <input name="username" type="text" class="form-control" placeholder="Username" required autofocus>
                    <br>
                    <input name="password" type="password" class="form-control" placeholder="Password" required>
                    <br>
                    <button id="login-button" class="btn btn-theme btn-block" type="submit">
                        <i class="fa fa-lock"></i> LOGIN
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JS -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
  </body>
</html>
