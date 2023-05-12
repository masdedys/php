<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panel admin</title>
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
              <a class="nav-link" href="#" onclick="window.history.back()">Kembali</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
        <div class="row">
            <div class="col-md">
                <h1 class="text-center py-4">Update berita</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
              <div class="row">
                <?php
                session_start();
                include "koneksi.php";
                if(empty ($_SESSION['email']) and empty($_SESSION['password'])or $_SESSION['level'] !="admin"){
                  echo'<script>alert("anda belum login")</script>';
                  echo'<br>';
                  echo'<meta http-equiv="refresh" content="0;url=login.php">';
                }else{
                  
                    include "koneksi.php";
                    $query="select*from berita where idberita='$_GET[id]'";
                    $hasil=mysqli_query($conn,$query);
                    $data=mysqli_fetch_array($hasil);
                    echo"
                <form action=\"panel-update-berita-proses.php\" method=\"post\" target=\"_self\" enctype=\"multipart/form-data\">
                    <input type=\"hidden\" value=\"$data[idberita]\" name=\"id\" class=\"form-control\"  />
                    <div class=\"col-auto\">
                        <label for=\"input\" class=\"col-form-label\">Judul berita</label>
                    </div>
                    <div class=\"col-auto\">
                        <input type=\"text\" value=\"$data[judulberita]\" name=\"judulberita\" class=\"form-control\" placeholder=\"Masukkan Judul berita\" />
                    </div>
                    <div class=\"col-auto\">
                        <label for=\"input\" class=\"col-form-label\">Isi berita</label>
                    </div>
                    <div class=\"col-auto\">
                        <textarea class=\"form-control\" name=\"isiberita\" placeholder=\"Masukkan alamat\" id=\"floatingTextarea\">$data[isiberita]</textarea>
                    </div>
                    <div class=\"col-auto\">
                        <label for=\"input\" class=\"col-form-label\">Upload foto berita:</label>
                    </div>
                    <div class=\"col-auto\">
                        <img src=\"../assets/img/$data[fotoberita]\" class=\"img-fluid img-thumbnail mb-3\" alt=\"\" width=\"30%\" height=\"30%\">
                    </div>
                    <div class=\"input-group mb-3\">
                        <input type=\"file\" name=\"filefotoberita\" class=\"form-control\" id=\"inputGroupFile01\">
                    </div>
                    <div class=\"col-auto\">
                        <label for=\"input\" class=\"col-form-label\">Penulis</label>
                    </div>
                    <div class=\"col-auto\">
                        <input type=\"text\" value=\"$data[dibuatoleh]\" name=\"penulis\" class=\"form-control\" placeholder=\"Masukkan penulis\" />
                    </div>
                    <div class=\"col-auto\">
                        <button type=\"button\" onclick=\"window.history.back()\" class=\"mt-3 btn btn-secondary\">Batal</button>
                        <button type=\"submit\" name=\"proses\" class=\"mt-3 btn btn-primary\">Proses</button>
                    </div>
                </form>";
              }
                ?>
              </div>
            </div>
        </div>
    </div>
    <img src="" alt="" >
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
