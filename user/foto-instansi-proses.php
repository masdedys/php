<?php
    if(isset($_POST['proses'])){
        include 'koneksi.php';

        $namasekolah=$_POST['namasekolah'];
        $visi=$_POST['visi'];
        $misi=$_POST['misi'];
        $deskripsi=$_POST['deskripsi'];

        $lokasifile=$_FILES['filefotogedung']['tmp_name'];
        $filefotogedung=$_FILES['filefotogedung']['name'];
        // $tipefile=$_FILES['filefotogedung']['type'];

        // $acak=rand(1,99);
        // $namafileunik=$acak.$filefotogedung;

        $folder="../assets/img/$filefotogedung";
        
        if(move_uploaded_file($lokasifile,"$folder")){
            echo'<script>alert("Data berhasil diupload")</script>';
        }

        $update_data_foto_instansi="update instansi set 
        visi='$visi', 
        misi='$misi', 
        deskripsi='$deskripsi', 
        fotogedungsekolah='$filefotogedung' 
        where nama_sekolah='$namasekolah'";

        $hasil=mysqli_query($conn, $update_data_foto_instansi);

        if($hasil>0){
            echo'<script>alert("Data berhasil disimpan")</script>';
			echo'<br>';
			echo'<meta http-equiv="refresh" content="0;url=login.php">';	
            session_start();
            session_destroy();
        }else{
            echo'<script>alert("Data gagal disimpan")</script>';
			echo'<br>';
			echo'<meta http-equiv="refresh" content="0;url=login.php">';
            session_start();
            session_destroy();
        }

    } 
?>