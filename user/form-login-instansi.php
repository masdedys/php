<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Login instansi</title>
    <link rel="shortcut icon" href="../assets/img/logo-navbar.png" type="image/x-icon">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" /> -->
    <link rel="stylesheet" href="../assets/bootstrap-5.3.0-alpha3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
  <body class="bg-primary">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
            <section class="login mt-5">
                <form class="px-5 py-5 bg-light rounded" method="post" action="ceklogininstansi.php">
                    <div class="mb-3">
                        <h3 class="text-center">FORM LOGIN</h3>
                        <h5 class="text-center">INSTANSI</h5>
                        <p class="text-center"><img src="../assets/img/logo-navbar.png" width="20%" height="20%" alt=""></p>
                      </div>
                    <div class="mb-3">
                      <input type="email" name="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="Masukkan email">
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" name="password" placeholder="Masukkan password" id="pwd" class="form-control" aria-describedby="button-addon2">
                        <button class="btn btn-outline-secondary" onclick="change()" type="button" id="mybutton"><i class="bi bi-eye-fill"></i></button>
                    </div>

                    <div class="mb-3">
                      <a href="#">Lupa password</a>
                    </div>
                    <div class="d-grid gap-2 mb-3">
                        <button class="btn btn-primary" name="proses" type="submit">Login</button>
                    </div>
                    <div class="mb-3">
                        <span>Belum punya akun? <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">Daftar sekarang</a></span>
                    </div>
                    <div class="mb-3 text-center">
                       <a href="../index.php">Home</a>
                    </div>
                  </form>
            </section>

            <!-- modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h1 class="modal-title fs-5" id="exampleModalLabel">Registrasi Instansi</h1>
                      <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form action="registrasi-instansi-proses.php" method="post" target="_self">
                            <div class="col-auto">
                                <label for="input" class="col-form-label">Nama Sekolah</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="validasi" name="namasekolah" class="form-control" placeholder="Masukkan Nama Sekolah" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Tingkat sekolah</label>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" id="validasi" name="tingkatsekolah" aria-label="Default select example">
                                <option selected>Pilih Tingkat</option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="SMK">SMK</option>
                                <option value="Universitas">Universitas</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Email</label>
                            </div>
                            <div class="col-auto">
                                <input type="email" id="validasi" name="email" class="form-control" placeholder="Masukkan Email" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Kepala Sekolah</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="validasi" name="kepalasekolah" class="form-control" placeholder="Masukkan Nama Kepala Sekolah" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Provinsi</label>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" id="validasi" name="provinsi" aria-label="Default select example">
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
                                <input type="text" id="validasi" name="telepon" class="form-control" placeholder="Masukkan Nomor Telp." />
                            </div>
                            <div class="col-auto">
                                <label for="input" class="col-form-label">Tahun berdiri</label>
                            </div>
                            <div class="col-auto">
                                <input type="number" id="validasi" name="tahunberdiri" class="form-control" placeholder="Masukkan tahun" min="2000" max="2010" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Status Sekolah</label>
                            </div>
                            <div class="col-auto">
                                <select class="form-select" id="validasi" name="statussekolah" aria-label="Default select example">
                                    <option selected>Pilih Status</option>
                                    <option value="A">Akreditasi A</option>
                                    <option value="B">Akreditasi B</option>
                                    <option value="C">Akreditasi C</option>
                                </select>
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Standar Sekolah</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="standarsekolah" class="form-control" placeholder="Masukkan standar sekolah" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">NSS</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" name="nss" class="form-control" placeholder="Masukkan NSS" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">NPSN</label>
                            </div>
                            <div class="col-auto">
                                <input type="text" id="validasi" name="npsn" class="form-control" placeholder="Masukkan NPSN" />
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Alamat</label>
                            </div>
                            <div class="col-auto">
                                <textarea class="form-control" id="validasi" name="alamat" placeholder="Masukkan alamat" id="floatingTextarea"></textarea>
                            </div>
                            <div class="col-auto">
                                <label for="input" id="validasi" class="col-form-label">Password</label>
                            </div>
                            <div class="col-auto">
                                <input type="password" id="validasi" name="password" class="form-control" placeholder="Masukkan password" />
                            </div>
                            <div class="col-auto">
                                <input type="password" id="validasi" class="mt-3 form-control" placeholder="Ulangi password" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                                <button type="submit" name="proses" id="proses" class="btn btn-primary" disabled="disabled">Daftar</button> 
                            </div>   
                      </form>                
                    
                  </div>
                  </div>
                </div>
              </div>
              
            <!-- end modal -->
        </div>
    </div>
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script> -->
    <script src="../assets/bootstrap-5.3.0-alpha3-dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
    <script>
        function change(){
            var btn=document.getElementById('pwd').type;
            
            if(btn=='password'){
                document.getElementById('pwd').type='text';
                document.getElementById('mybutton').innerHTML='<i class="bi bi-eye-slash-fill"></i>';
            }else{
                document.getElementById('pwd').type='password';
                document.getElementById('mybutton').innerHTML='<i class="bi bi-eye-fill"></i>';
            }
        }

        (function() {
    $('form > input#validasi').keyup(function() {
        var empty = false;
        $('form > input').each(function() {
            if ($(this).val() == '') {
                empty = true;
            }
        });

        if (empty) {
            $('#proses').attr('disabled', 'disabled');
        } else {
            $('#proses').removeAttr('disabled');
        }
    });
})()
    </script>
</body>
</html>
