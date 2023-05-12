<?php
    include "koneksi.php";
    $id=$_GET['id'];
    $query="delete from berita where idberita='$id'";
    $hasil=mysqli_query($conn,$query);
    if($hasil){
        header("location:panel-tampil-berita.php");
    }else{
        echo"hapus berita gagal";
    }
?>