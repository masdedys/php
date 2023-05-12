<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Berita</title>
    <link rel="shortcut icon" href="assets/img/logo-navbar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/icons-1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body class="bg-light">
    <!-- navbar -->
    <nav class="container navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand">
          <img src="assets/img/logo-navbar.png" alt="Logo" width="30" height="30" class="d-inline-block align-text-top"> 
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
              <a class="nav-link" href="#">Info Sekolah</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Lihat pendaftaran siswa</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- end navbar -->
          <div class="container">
                <?php
                include "user/koneksi.php";
                $batas=2;
                $halaman=@$_GET['halaman'];
                if(empty($halaman)){
                    $posisi=0;
                    $halaman=1;
                }else{
                    $posisi=($halaman-1)*$batas;
                }

                $no=1;
                $filter="select*from berita order by idberita desc limit $posisi,$batas";
                $query=mysqli_query($conn,$filter);
                $tampil=mysqli_num_rows($query);
                
                while($z=mysqli_fetch_array($query)){
                    $tampilberita=substr("$z[isiberita]",0,300);
                echo"
                    <div class=\"row my-5\">
                        <div class=\"col-md-4\">
                            <img class=\"img-thumbnail\" src=\"assets/img/$z[fotoberita]\" height=\"100px\" alt=\"\">
                        </div>
                        <div class=\"col-md-8\">
                            <h2>$z[judulberita]</h2>
                            <p>$tampilberita ... <a href=\"berita-sekolah-detail.php?id=$z[idberita]\">Read more</a><br></p>
                            <strong>$z[dibuatoleh], </strong><em>$z[created_at]</em>
                        </div>
                    </div>";}
                    $no++;

                    $query2=mysqli_query($conn,"select*from berita");
                    $jumlahdata=mysqli_num_rows($query2);
                    $jumlahhalaman=ceil($jumlahdata/$batas);

                    // echo"halaman:";
                    $file=$_SERVER['PHP_SELF'];
                    echo"
                    <nav aria-label\Page navigation example\">
                            <ul class=\"pagination justify-content-center\">
                    ";
                    if($halaman>1){
                        $prev=$halaman-1;
                        echo"
                            <li class=\"page-item\"><a class=\"page-link\" href=\"$file?halaman=$prev\">Previous</a></li>
                        ";
                    }else{
                        echo"
                        <li class=\"page-item disabled\"><span class=\"page-link\">Previous</span></li>
                        ";
                    }
                    for($i=1;$i<=$jumlahhalaman;$i++)
                    if($i != $halaman){
                        echo"
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"$file?halaman=$i\">$i</a>
                            </li>";}else{
                        echo"
                            <li class=\"page-item active\" aria-current=\"page\">
                                <span class=\"page-link\">$i</span>
                            </li>";}
                    if($halaman<$jumlahhalaman){
                        $next=$halaman+1;
                        echo"
                            <li class=\"page-item\">
                                <a class=\"page-link\" href=\"$file?halaman=$next\">Next</a>
                            </li>";
                            }else{
                        echo"
                            <li class=\"page-item disabled\"><span class=\"page-link\">Next</span></li>
                                ";
                            }
                            echo"</ul>
                        </nav>";
                        // echo"<a href=\"berita-sekolah.php?halaman=$i\">$i</a>";
                    
                    echo"
                    <div class=\"row my-5\">
                        <div class=\"col-md-4\">
                            <span>Total berita: <b>$jumlahdata</b></span>
                        </div>
                    </div>"
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
    <script src="assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
