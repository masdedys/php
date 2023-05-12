<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>selamat datang</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css"> -->
    <link rel="stylesheet" href="assets/icons-1.10.5/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
  </head>
  <body>
    
    <div class="container">
        <section class="content mt-2">
            <div class="row justify-content-center">
            <?php
                include "user/koneksi.php";
                $q = strval($_GET['q']);
                $query=mysqli_query($conn,"select*from instansi where tingkat_sekolah = '".$q."' and status='aktif'");
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
                      <div class=\"col-md-4 mb-3\">
                        <div class=\"card\">
                            <img src=\"assets/img/$r[fotogedungsekolah]\" class=\"card-img-top\" alt=\"...\" height=\"200px\">
                            <div class=\"card-body\">
                              <h5 class=\"card-title text-center\">$r[nama_sekolah]</h5>
                              <p class=\"card-text\">$r[provinsi], Indonesia</p>
                              <a href=\"profil-sekolah.php?&id=$r[idinstansi]\" class=\"btn btn-primary\">Profil</a>
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
    </iframe>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="assets/js/script.js"></script>
  </body>
</html>
