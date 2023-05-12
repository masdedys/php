<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panel staff</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
  </head>
  <body class="bg-light">
    <div class="container">
        <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
        <img src="../assets/img/logo-navbar.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita.php">Berita</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../index.php" target=\"_blank\">Info Sekolah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lihat pendaftaran siswa</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <?php
        session_start();
        include "koneksi.php";
        if(empty ($_SESSION['email']) and empty($_SESSION['password'])or $_SESSION['level'] !=="staff"){
          echo'<script>alert("anda belum login")</script>';
          echo'<br>';
          echo'<meta http-equiv="refresh" content="0;url=login.php">';
        }else{
          echo "<div class=\"row\">
                  <div class=\"col-md\">
                     <h1 class=\"text-center py-4\">Selamat datang staff </h1>
                     <h3 class=\"text-center py-4\">$_SESSION[nama_sekolah]</h3>
                     <p>Status akun anda *:  $_SESSION[status] </p>
                     <p>*Apabila status akun anda tidak_aktif, silahkan konfirmasi ke admin web. Terima kasih</p>
                  </div>
                </div>
                <div class=\"row\">
                  <div class=\"col-md\">
                    <a href=\"foto-instansi.php\"><button class=\"btn btn-primary\">Tambah foto instansi</button></a>
                  </div>
                </div>
              ";}
          ?> 
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
