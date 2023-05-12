<?php
    if(isset($_POST['proses'])){
        session_start();
        include 'koneksi.php';
        if(empty ($_SESSION['email']) and empty($_SESSION['password'])or $_SESSION['level'] !="admin"){
            echo'<script>alert("anda belum login")</script>';
            echo'<br>';
            echo'<meta http-equiv="refresh" content="0;url=login.php">';
        }else{
        $judulberita=$_POST['judulberita'];
        $isiberita=$_POST['isiberita'];
        $penulis=$_POST['penulis'];

        $lokasifile=$_FILES['filefotoberita']['tmp_name'];
        $filefotoberita=$_FILES['filefotoberita']['name'];
        // $tipefile=$_FILES['filefotogedung']['type'];

        // $acak=rand(1,99);
        // $namafileunik=$acak.$filefotogedung;

        $folder="../assets/img/$filefotoberita";
        
        if(move_uploaded_file($lokasifile,"$folder")){
            echo'<script>alert("foto berhasil diupload")</script>';
        }

        $berita="insert into berita (idberita,judulberita,isiberita,fotoberita,dibuatoleh,created_at) 
        values (null,'$judulberita','$isiberita','$filefotoberita','$penulis',null)";

        $hasil=mysqli_query($conn, $berita);

        if($hasil>0){
            echo'<script>alert("Data berhasil disimpan")</script>';
			echo'<br>';
			echo'<meta http-equiv="refresh" content="0;url=panel-admin.php">';	
        }else{
            echo'<script>alert("Data gagal disimpan")</script>';
			echo'<br>';
			echo'<meta http-equiv="refresh" content="0;url=panel-admin.php">';
        }

    } }
?>