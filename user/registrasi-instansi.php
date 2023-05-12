<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Registrasi instansi form</title>
    <link rel="shortcut icon" href="../assets/img/logo-navbar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css" />
  </head>
  <body class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-md">
          <h1 class="text-center py-4">Registrasi Instansi</h1>
        </div>
      </div>
      <form action="registrasi-instansi-proses.php" method="post" target="_self">
        <div class="row mb-5">
          <div class="col-md-6">
              <div class="col-auto">
                <label for="input" class="col-form-label">Nama Sekolah</label>
              </div>
              <div class="col-auto">
                <input type="text" name="namasekolah" class="form-control" placeholder="Masukkan Nama Sekolah" />
              </div>
              <div class="col-auto">
                <label for="input" class="col-form-label">Tingkat sekolah</label>
              </div>
              <div class="col-auto">
                <select class="form-select" name="tingkatsekolah" aria-label="Default select example">
                  <option selected>Pilih Tingkat</option>
                  <option value="SD">SD</option>
                  <option value="SMP">SMP</option>
                  <option value="SMA">SMA</option>
                  <option value="SMK">SMK</option>
                  <option value="Universitas">Universitas</option>
                </select>
              </div>
              <div class="col-auto">
                <label for="input" class="col-form-label">Email</label>
              </div>
              <div class="col-auto">
                <input type="email" name="email" class="form-control" placeholder="Masukkan Email" />
              </div>
              <div class="col-auto">
                <label for="input" class="col-form-label">Kepala Sekolah</label>
              </div>
              <div class="col-auto">
                <input type="text" name="kepalasekolah" class="form-control" placeholder="Masukkan Nama Kepala Sekolah" />
              </div>
              <div class="col-auto">
                <label for="input" class="col-form-label">Provinsi</label>
              </div>
              <div class="col-auto">
                <select class="form-select" name="provinsi" aria-label="Default select example">
                  <option selected>Pilih Provinsi</option>
                  <option value="Aceh">Aceh</option>
                  <option value="Riau">Riau</option>
                  <option value="DKI Jakarta">DKI Jakarta</option>
                  <option value="Jawa Barat">Jawa Barat</option>
                </select>
              </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">No. Telp.</label>
            </div>
            <div class="col-auto">
              <input type="text" name="telepon" class="form-control" placeholder="Masukkan Nomor Telp." />
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Tahun berdiri</label>
            </div>
            <div class="col-auto">
              <input type="number" name="tahunberdiri" class="form-control" placeholder="Masukkan tahun" min="2000" max="2010" />
            </div>
          </div>
          <div class="col-md-6">
            <div class="col-auto">
              <label for="input" class="col-form-label">Status Sekolah</label>
            </div>
            <div class="col-auto">
              <select class="form-select" name="statussekolah" aria-label="Default select example">
                <option selected>Pilih Status</option>
                <option value="A">Akreditasi A</option>
                <option value="B">Akreditasi B</option>
                <option value="C">Akreditasi C</option>
              </select>
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Standar Sekolah</label>
            </div>
            <div class="col-auto">
              <input type="text" name="standarsekolah" class="form-control" placeholder="Masukkan standar sekolah" />
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">NSS</label>
            </div>
            <div class="col-auto">
              <input type="text" name="nss" class="form-control" placeholder="Masukkan NSS" />
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">NPSN</label>
            </div>
            <div class="col-auto">
              <input type="text" name="npsn" class="form-control" placeholder="Masukkan NPSN" />
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Alamat</label>
            </div>
            <div class="col-auto">
              <textarea class="form-control" name="alamat" placeholder="Masukkan alamat" id="floatingTextarea"></textarea>
            </div>
            <div class="col-auto">
              <label for="input" class="col-form-label">Password</label>
            </div>
            <div class="col-auto">
              <input type="password" name="password" class="form-control" placeholder="Masukkan password" />
            </div>
            <div class="col-auto">
              <input type="password" class="mt-3 form-control" placeholder="Ulangi password" />
            </div>
            <div class="col-auto">
              <a href="../index.php"><button type="button" class="mt-3 btn btn-secondary">Batal</button></a>
              <button type="submit" name="proses" class="mt-3 btn btn-primary">Daftar</button>
            </div>
          </div>
        </div>
      </form>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
