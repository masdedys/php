<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>formulir foto instansi</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
  </head>
  <body class="bg-light">
    <div class="container">
        <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
      <div class="container-fluid">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="index.html">Home</a>
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
                <h1 class="text-center py-4">Formulir tambah foto</h1>
            </div>
        </div>
        <form action="foto-instansi-proses.php" method="post" target="_self" enctype="multipart/form-data">
        <div class="row mb-5">
          <div class="col-md-6">
            <div class="modal-body">
              <div class="col-auto">
                <label for="input" class="col-form-label">Nama Sekolah</label>
              </div>
              <?php
                session_start();
                include "koneksi.php";
                if(empty ($_SESSION['email']) and empty($_SESSION['password'])){
                  echo'<script>alert("anda belum login")</script>';
                  echo'<br>';
                  echo'<meta http-equiv="refresh" content="0;url=login.php">';
                }else{ echo"
              <div class=\"col-auto\">
                <input type=\"text\" name=\"namasekolah\" class=\"form-control\" value=\"$_SESSION[nama_sekolah]\" readonly />
              </div>
                ";}?>
              <div class="col-auto">
                <label for="input" class="col-form-label">Visi</label>
              </div>
            <div class="col-auto">
              <textarea class="form-control" name="visi" placeholder="Masukkan alamat" id="floatingTextarea"></textarea>
            </div>
            <div class="col-auto">
                <label for="input" class="col-form-label">Misi</label>
              </div>
            <div class="col-auto">
              <textarea class="form-control" name="misi" placeholder="Masukkan alamat" id="floatingTextarea"></textarea>
            </div>
            <div class="col-auto">
                <label for="input" class="col-form-label">Deskripsi</label>
              </div>
            <div class="col-auto">
              <textarea class="form-control" name="deskripsi" placeholder="Masukkan alamat" id="floatingTextarea"></textarea>
            </div>
            </div>

            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto gedung sekolah:</label>
            </div>
            <div class="input-group mb-3">
              <input type="file" name="filefotogedung" class="form-control" id="inputGroupFile01">
            </div>
            </div>
        <!-- <div class="col-md-6">
        <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto lapangan sekolah:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto kantin:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto ruang kelas:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto ruang komputer:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto ruang perpustakaan:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto parkir:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload foto tempat ibadah:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Upload video sekolah:</label>
            </div>
            <div class="input-group mb-3">
            <input type="file" class="form-control" id="inputGroupFile01">
            </div> -->
            <div class="col-auto">
              <a href="staff-form.php"><button type="button" class="mt-3 btn btn-secondary" data-bs-dismiss="modal">Batal</button></a>
              <button type="submit" name="proses" class="mt-3 btn btn-primary">Proses</button>
            </div>
        </div>
        </form>
      
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
