<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Profil Sekolah</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="assets/icons-1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css"/>

  </head>
  <body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">
          <img src="assets/img/logo-navbar.png" alt="Logo" width="60" height="24" class="d-inline-block align-text-top">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#fasilitas">Fasilitas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#lokasi">Lokasi</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
    <div class="container">
      <!-- fasilitas -->
      <section class="fasilitas pt-4" id="fasilitas">
        <?php 
          include "user/koneksi.php";
          $filter="select*from instansi where idinstansi=$_GET[id]";
          $query=mysqli_query($conn,$filter);
          $tampil=mysqli_fetch_array($query);
          echo"
          <h1 class=\"text-center m-5\">Fasilitas</h1>
          <div class=\"row\">
            <div class=\"col-md-6 mb-3\">
              <div class=\"profil-gedung row\">
                <div class=\"col-md-12 mb-3\">
                  <img src=\"assets/img/$tampil[fotogedungsekolah]\" class=\"img-fluid img-thumbnail\" alt=\"foto gedung sekolah\" />
                </div>
              </div>
              <div class=\"row\">
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[lapangansekolah]\" data-fancybox=\"gallery\" data-caption=\"Lapangan Sekolah\">
                    <img src=\"assets/img/$tampil[lapangansekolah]\" class=\"img-fluid img-thumbnail\" alt=\"lapangan sekolah\"/>
                  </a>
                </div>
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[kantin]\" data-fancybox=\"gallery\" data-caption=\"Kantin\">
                    <img src=\"assets/img/$tampil[kantin]\" class=\"img-fluid img-thumbnail\" alt=\"kantin\"  />
                  </a>
                </div>
                </div>
            </div>
            <div class=\"profil-comp col-md-6 mb-3\">
              <div class=\"row d-flex justify-content-start\">
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[ruangkelas]\" data-fancybox=\"gallery\" data-caption=\"Ruang Kelas\">
                    <img src=\"assets/img/$tampil[ruangkelas]\" class=\"img-fluid img-thumbnail\" alt=\"ruang kelas\" />
                  </a>
                </div>
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[ruangkomputer]\" data-fancybox=\"gallery\" data-caption=\"Lab Komputer\">
                    <img src=\"assets/img/$tampil[ruangkomputer]\" class=\"img-fluid img-thumbnail\" alt=\"ruang komputer\"/>
                  </a>
                </div>
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[perpustakaan]\" data-fancybox=\"gallery\" data-caption=\"Perpustakaan\">
                    <img src=\"assets/img/$tampil[perpustakaan]\" class=\"img-fluid img-thumbnail\" alt=\perpustakaan\"/>
                  </a>
                </div>
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[parkir]\" data-fancybox=\"gallery\" data-caption=\"Parkir\">
                    <img src=\"assets/img/$tampil[parkir]\" class=\"img-fluid img-thumbnail\" alt=\"parkir\"/>
                  </a>
                </div>
                <div class=\"col-md-6 mb-3\">
                  <a href=\"assets/img/$tampil[tempatibadah]\" data-fancybox=\"gallery\" data-caption=\"Tempat Ibadah\">
                    <img src=\"assets/img/$tampil[tempatibadah]\" class=\"img-fluid img-thumbnail\" alt=\"tempat ibadah\" />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </section>
        <!-- end fasilitas -->
        <!-- content profile -->
        <section class=\"profil pt-4\" id=\"profil\">
          <h1 class=\"text-center m-5\">Profil</h1>
            <div class=\"row\">
              <div class=\"col-md-2\"></div>
              <div class=\"col-md-8\">
              <table class=\"table\">
              <thead>
                <tr>
                  <th scope=\"col\">Nama sekolah</th>
                  <th scope=\"col\">$tampil[nama_sekolah]</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope=\"col\">Email</th>
                  <th scope=\"col\">$tampil[email]</th>
                </tr>
                <tr>
                  <th scope=\"col\">Kepala sekolah</th>
                  <th scope=\"col\">$tampil[kepala_sekolah]</th>
                </tr>
                <tr>
                  <th scope=\"col\">Provinsi</th>
                  <th scope=\"col\">$tampil[provinsi]</th>
                </tr>
                <tr>
                  <th scope=\"col\">Telepon</th>
                  <th scope=\"col\">$tampil[telepon]</th>
                </tr>
                <tr>
                  <th scope=\"col\">Tahun Berdiri</th>
                  <th scope=\"col\">$tampil[tahun_berdiri]</th>
                </tr>
                <tr>
                  <th scope=\"col\">Status Sekolah</th>
                  <th scope=\"col\">$tampil[status_sekolah]</th>
                </tr>
                <tr>
                  <th scope=\"col\">Standar Sekolah</th>
                  <th scope=\"col\">$tampil[standar_sekolah]</th>
                </tr>
                <tr>
                  <th scope=\"col\">NSS</th>
                  <th scope=\"col\">$tampil[nss]</th>
                </tr>
                <tr>
                  <th scope=\"col\">NPSN</th>
                  <th scope=\"col\">$tampil[npsn]</th>
                </tr>
              </tbody>
            </table>
              </div>
              <div class=\"col-md-2\"></div>
            </div>
          <h2 class=\"text-center p-4\">Visi</h2>
          <p class=\"text-center\">
          $tampil[visi]
          </p>
          <h2 class=\"text-center p-4\">Misi</h2>
          <p>
          $tampil[misi]
          </p>
          <h2 class=\"text-center p-4\">Deskripsi</h2>
          <p>
          $tampil[deskripsi]
          </p>
        </section>
          
          ";
        ?>     
      <!-- end profil -->
      <section class="lokasi py-4" id="lokasi">
        <h1 class="text-center m-5">Lokasi</h1>
        <?php 
          include "user/koneksi.php";
          $filter="select*from instansi where idinstansi=$_GET[id]";
          $query=mysqli_query($conn,$filter);
          $tampil=mysqli_fetch_array($query);
          echo"
          <div class=\"container\">
              <div class=\"row\">
              <div class=\"col-md-6 maps\">
                $tampil[lokasi]
              </div>
              <div class=\"col-md-6\">
                <h3>Alamat</h3>
                $tampil[alamat]
              </div>
            </div>
              </div>
      </section>";
      ?>  
    </div>
    <section class="footer text-white p-5 bg-primary">
        <div class="container">
          <div class="row">
            <div class="col-md-4">
              <ul>
                <li>
                  <h3><b>LOGO</b></h3>
                </li>
                <li>
                  <a href="#"><h5><i class="bi bi-facebook"> Facebook</i></h5></a>
                  <a href="#"><h5><i class="bi bi-twitter"> Twitter</i></h5></a>
                  <a href="#"><h5><i class="bi bi-youtube"> Youtube</i></h5></a>
                  <a href="#"><h5><i class="bi bi-instagram"> Instagram</i></h5></a>
                </li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <li>
                  <h3><b>Informasi</b></h3>
                </li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i>Tentang kami</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i>Publikasi</a></li>
                <li><a href="#"><i class="bi bi-arrow-right-short"></i>Karir</a></li>
              </ul>
            </div>
            <div class="col-md-4">
              <ul>
                <li>
                  <h3><b>Kontak kami</b></h3>
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
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/l10n/de.umd.js"></script>
    <script>
      Fancybox.bind("[data-fancybox]", {
        // Your custom options
      });
    </script>
  </body>
</html>
