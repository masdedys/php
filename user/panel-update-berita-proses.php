<?php
    if(isset($_POST['proses'])){
        include "koneksi.php";
        $id=$_POST['id'];
        $judulberita=$_POST['judulberita'];
        $isiberita=$_POST['isiberita'];
        $penulis=$_POST['penulis'];
        $lokasifile=$_FILES['filefotoberita']['tmp_name'];
        $fotoberita=$_FILES['filefotoberita']['name'];
        
        if(empty($lokasifile)){
            $query="update berita set 
            judulberita='$judulberita',
            isiberita='$isiberita',
            dibuatoleh='$penulis'
            where idberita='$id'";
            mysqli_query($conn,$query);
            echo"<script>alert('Data berhasil diupdate')</script>";
			echo"<meta http-equiv='refresh' content='0; url=panel-tampil-berita.php'>";	
        }else{
            $query="update berita set 
            judulberita='$judulberita',
            isiberita='$isiberita',
            dibuatoleh='$penulis',
            fotoberita='$fotoberita'
            where idberita='$id'";
            mysqli_query($conn,$query);
            echo"<script>alert('Data berhasil diupdate')</script>";
			echo"<meta http-equiv='refresh' content='0; url=panel-tampil-berita.php'>";	
        }

    }
?>