<?php
    if(isset($_POST['proses'])){
        include 'koneksi.php';

        $namasekolah=$_POST['namasekolah'];
        $tingkatsekolah=$_POST['tingkatsekolah'];
        $email=$_POST['email'];
        $kepalasekolah=$_POST['kepalasekolah'];
        $provinsi=$_POST['provinsi'];
        $telepon=$_POST['telepon'];
        $tahunberdiri=$_POST['tahunberdiri'];
        $statussekolah=$_POST['statussekolah'];
        $standarsekolah=$_POST['standarsekolah'];
        $nss=$_POST['nss'];
        $npsn=$_POST['npsn'];
        $alamat=$_POST['alamat'];
        $password=md5(($_POST['password']));

        $input_data_instansi="insert into instansi 
        (idinstansi,nama_sekolah,tingkat_sekolah,email,kepala_sekolah,provinsi,telepon,tahun_berdiri,status_sekolah,standar_sekolah,nss,npsn,alamat,password,created_at,status) values
        (null,'$namasekolah','$tingkatsekolah','$email','$kepalasekolah','$provinsi','$telepon',$tahunberdiri,'$statussekolah','$standarsekolah','$nss','$npsn','$alamat','$password',null,'tidak_aktif')";
        $hasil=mysqli_query($conn, $input_data_instansi);

        if($hasil>0){
            echo'<script>alert("Data berhasil disimpan, untuk proses pembuatan akun lebih cepat silahkan hubungi admin")</script>';
			echo'<br>';
			echo'<meta http-equiv="refresh" content="0;url=login.php">';	
        }else{
            echo'<script>alert("Data gagal disimpan")</script>';
			echo'<br>';
			echo'<meta http-equiv="refresh" content="0;url=login.php">';
        }

    } 
?>