<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>selamat datang</title>
    <link rel="shortcut icon" href="assets/img/logo-navbar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="assets/icons-1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">  
  </head>
  <body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/img/logo-navbar.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-bs-toggle="modal" data-bs-target="#exampleModal" href="#">Kontak</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="berita-sekolah.php">Berita</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"> Login </a>
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="user/form-login-instansi.php">Login instansi</a></li>
                <li><a class="dropdown-item" href="user/registrasi-instansi.php">Pendaftaran Instansi</a></li>
              </ul>
            </li>
          </ul>
          <form class="d-flex" role="search" method="get">
            <input class="form-control me-2" name="cari" type="search" placeholder="Search" aria-label="Search" />
            <select class="form-control form-select me-2" name="cari1" aria-label="Default select example">
                  <option selected value="">Pilih Tingkat</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="SMK">SMK</option>
                  <option value="Universitas">Universitas</option>
            </select>
            <select class="form-control form-select me-2" name="cari2" aria-label="Default select example">
                  <option selected value="">Pilih Provinsi</option>
                  <option value="Aceh">Aceh</option>
                  <option value="Riau">Riau</option>
                  <option value="DKI Jakarta">DKI Jakarta</option>
                  <option value="Jawa Barat">Jawa Barat</option>
            </select>
            <button class="btn btn-primary" onclick="window.location.reload()" type="submit" name="pencarian">Cari</button>
          </form>
          <!-- <?php
              if(isset($_GET['cari'])){
                $cari=$_GET['cari'];
                echo "<b>hasil pencarian : ".$cari."</b>";
              }
          ?> -->
        </div>
      </div>
    </nav>
    <!-- end Navbar -->
    <!-- contact modal -->
    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Kontak</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <ul>
                <li><i class="bi bi-geo-alt-fill"></i> Kantor Pusat: Jalan Perintis Kemerdekaan No. 1 Bandung 40117</li>
                <li><i class="bi bi-telephone-fill"></i> Office Phone: 022-4230031, 4230039, 4230054</li>
                <li><i class="bi bi-envelope"></i> Email Korespondensi Kantor Pusat: dokumen@kai.id</li>
                <li><i class="bi bi-link"></i> Link Alamat Kantor Cabang <a href="#"> di sini</a></li>
                <li><i class="bi bi-telephone-fill"></i> Contact Center: 121 / (021) 121</li>
                <li><i class="bi bi-person-circle"></i> Layanan Pelanggan: cs@kai.id</li>
                </ul>    
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
    <!-- end contact modal -->
    <div class="container">
        <!-- menu -->
        <section class="menu mt-5">
            <div class="row text-center">
                  <div class="col-md mb-2 me-2">
                    <button class="btn-icon-search" onclick="showUser(this.value)" name="tingkat_sekolah" value="SD"><img class="img-thumbnail" src="assets/img/logo-sd.png" width="50px" height="70px" alt="SD" srcset="" title="SD"></button>
                  </div>
                  <div class="col-md mb-2 me-2">
                    <button class="btn-icon-search" onclick="showUser(this.value)" name="tingkat_sekolah" value="SMP"><img class="img-thumbnail" src="assets/img/logo-smp.png" width="50px" height="70px" alt="SMP" srcset="" title="SMP"></button>
                  </div>
                  <div class="col-md mb-2 me-2">
                    <button class="btn-icon-search" onclick="showUser(this.value)" name="tingkat_sekolah" value="SMA" ><img class="img-thumbnail" src="assets/img/logo-sma.png" width="50px" height="70px" alt="SMA" srcset="" title="SMA"></button>
                  </div>
                  <div class="col-md mb-2 me-2">
                    <button class="btn-icon-search" onclick="showUser(this.value)" name="tingkat_sekolah" value="SMK"><img class="img-thumbnail" src="assets/img/logo-sma.png" width="50px" height="70px" alt="SMK" srcset="" title="SMK"></button>
                  </div>
                  <div class="col-md mb-2">
                    <button class="btn-icon-search" onclick="showUser(this.value)" name="tingkat_sekolah" value="Universitas"><img class="img-thumbnail my-1" src="assets/img/logo-ui.png" width="50px" height="70px" alt="Universitas" srcset="" title="Universitas"></button>
                  </div>      
                <div id="txtHint"></div>
            </div>
        </section>
        <section class="content mt-2">
            <div class="row justify-content-center">
            <?php
                include "user/koneksi.php";

                if(isset($_GET['pencarian'])){
                  $cari=$_GET['cari'];
                  $cari1=$_GET['cari1'];
                  $cari2=$_GET['cari2'];
                  
                  $pencarian=$cari .' '. $cari1 .' '. $cari2;
                 
                  echo "<h5 class=\"text-center\">$pencarian</h5>";
                  echo "<br>";

                  $query=mysqli_query($conn,"select*from instansi where 
                  status='aktif' and
                  nama_sekolah like '%".$cari."%' and
                  tingkat_sekolah like '%".$cari1."%' and
                  provinsi like '%".$cari2."%'");
                }else{
                  $query=mysqli_query($conn,"select*from instansi where status='aktif'");
                }

                  // if(isset($_GET['cari'])){
                  //   $cari=$_GET['cari'];
                  //   $query=mysqli_query($conn,"select*from instansi where nama_sekolah like '%".$cari."%'");
                  // }else{
                  //   $query=mysqli_query($conn,"select*from instansi");
                  // }
                  $kolom=0;
                  $i=0;
                  while($r=mysqli_fetch_array($query)){
                    if($i>=$kolom){
                      echo"
                      <div class=\"col-md-4 mb-3\" id=\"card-tersembunyi\">
                          <div class=\"card\" >
                            <img src=\"assets/img/$r[fotogedungsekolah]\" class=\"card-img-top\" alt=\"...\" height=\"200px\">
                            <div class=\"card-body\">
                              <h5 class=\"card-title text-center\">$r[nama_sekolah]</h5>
                              <p class=\"card-text\">$r[provinsi], Indonesia</p>
                              <a href=\"profil-sekolah.php?id=$r[idinstansi]\" class=\"btn btn-primary\">Profil</a>
                            </div>
                          </div>
                      </div>";
                      $i=0;
                  }
                  $i++;
                }
              ?>
              </div>
            </div>
        </section>
        <!-- end menu -->
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
    <script src="assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
    
    <script>
      function showUser(str) {
        if (str == "") {
          document.getElementById("txtHint").innerHTML = "";
          return;
        } else {
          var xmlhttp = new XMLHttpRequest();
          xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
              document.getElementById("txtHint").innerHTML = this.responseText;
            }
          };
          xmlhttp.open("GET","getuser.php?q="+str,true);
          xmlhttp.send();
        }
      }
    </script>
  </body>
</html>
