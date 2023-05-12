<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Berita</title>
    <link rel="shortcut icon" href="../assets/img/logo-navbar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="../assets/icons-1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
  </head>
  <body class="bg-light">
    <!-- navbar -->
    <nav class="container navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="../assets/img/logo-navbar.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link" href="#">Info Sekolah</a>
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
        if(empty ($_SESSION['email']) and empty($_SESSION['password'])){
          echo'<script>alert("anda belum login")</script>';
          echo'<br>';
          echo'<meta http-equiv="refresh" content="0;url=login.php">';
        }else{
          echo "
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-md-12 my-5\">
                <span>Anda login sebagai: $_SESSION[level] $_SESSION[nama_sekolah]</span>
              </div>
            </div>";}?>
      <?php
      include "koneksi.php";
      $no=1;
      $filter="select*from berita order by idberita desc";
      $query=mysqli_query($conn,$filter);
      
      $tampil=mysqli_num_rows($query);
      
      while($z=mysqli_fetch_array($query)){
        $tampilberita=substr("$z[isiberita]",0,300);
      echo"
            <div class=\"row my-3\">
              <div class=\"col-md-4\">
                <img class=\"img-thumbnail\" src=\"../assets/img/$z[fotoberita]\" height=\"100px\" alt=\"\">
              </div>
              <div class=\"col-md-8\">
                <h2>$z[judulberita]</h2>
                <p>$tampilberita ... <a href=\"#\">Read more</a><br></p>
                <strong>$z[dibuatoleh], </strong><em>$z[created_at]</em>
              </div>
            </div>";}
            $no++;
          ?>
          </div>
          <section class="footer text-white p-5 bg-primary">
            <div class="container">
              <div class="row">
                <div class="col-md-4">
                  <ul>
                    <li>
                      <h5><b>LOGO</b></h5>
                    </li>
                    <li>
                      <a href="#"><i class="bi bi-facebook" style="font-size: 30px;"> </i></a>
                      <a href="#"><i class="bi bi-twitter" style="font-size: 30px;"> </i></a>
                      <a href="#"><i class="bi bi-youtube" style="font-size: 30px;"> </i></a>
                      <a href="#"><i class="bi bi-instagram" style="font-size: 30px;"> </i></a>
                    </li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li>
                      <h5><b>Informasi</b></h5>
                    </li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Tentang kami</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Publikasi</a></li>
                    <li><a href="#"><i class="bi bi-arrow-right-short"></i>Karir</a></li>
                  </ul>
                </div>
                <div class="col-md-4">
                  <ul>
                    <li>
                      <h5><b>Kontak kami</b></h5>
                    </li>
                    <li><i class="bi bi-geo-alt-fill"></i> Kantor Pusat: Jalan Perintis Kemerdekaan No. 1 Bandung 40117</li>
                    <li><i class="bi bi-telephone-fill"></i> Office Phone: 022-4230031, 4230039, 4230054</li>
                    <li><i class="bi bi-envelope"></i> Email Korespondensi Kantor Pusat: dokumen@kai.id</li>
                    <li><i class="bi bi-link"></i> Link Alamat Kantor Cabang <a href="#"> di sini</a></li>
                    <li><i class="bi bi-telephone-fill"></i> Contact Center: 121 / (021) 121</li>
                    <li><i class="bi bi-person-circle"></i> Layanan Pelanggan: cs@kai.id</li>
                  </ul>
                </div>
            </div>
            </div>
          </section>
        <div class="copyright text-center text-white p-3 bg-warning">&copy; 2023 mas_dedys, All Rights Reserved</div>             
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
