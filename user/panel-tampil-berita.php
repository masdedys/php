<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Panel admin</title>
    <link rel="shortcut icon" href="../assets/img/logo-navbar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css" />
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.js"></script>
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
              <a class="nav-link" href="panel-admin.php">Kembali</a>
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
            <div class="col-md">
                <?php
                session_start();
                include "koneksi.php";
                if(empty ($_SESSION['email']) and empty($_SESSION['password'])or $_SESSION['level'] !="admin"){
                  echo'<script>alert("anda belum login")</script>';
                  echo'<br>';
                  echo'<meta http-equiv="refresh" content="0;url=login.php">';
                }else{
                    include "koneksi.php";
                    $query="SELECT * FROM berita order by idberita desc"; 
                    $hasil=mysqli_query($conn,$query);
                    $total=mysqli_num_rows($hasil);
                    $no=1;
                    echo"
                <table id=\"example\" class=\"display\">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Judul Berita</th>
                            <th>Proses</th>
                        </tr>
                    </thead>
                    <tbody>";
                    while($data=mysqli_fetch_array($hasil)){
                        echo"
                        <tr>
                            <td>$no</td>
                            <td>$data[judulberita]</td>
                            <td>
                            <a href=\"panel-update-berita.php?id=$data[idberita]\">Edit</a>
                            <a href=\"panel-hapus-berita.php?id=$data[idberita]\" onClick=\"return confirm('Yakin mau dihapus?')\">Hapus</a>
                            </td>
                        </tr>";
                        $no++;
                    }
                    echo "</tbody>
                </table>";}?>
            </div>
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
  </body>
</html>
