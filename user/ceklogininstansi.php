<?php
    include "koneksi.php";
    $email=$_POST['email'];
    $password=md5($_POST['password']);
    $query="select*from instansi where email='$email' and password='$password'";
    $login=mysqli_query($conn,$query);
    $found=mysqli_num_rows($login);
    $data=mysqli_fetch_array($login);

    if($found>0){
        if($data['level']=="admin"){
            session_start();
            $_SESSION['email']=$data['email'];
            $_SESSION['password']=$data['password'];
            $_SESSION['nama_sekolah']=$data['nama_sekolah'];
            $_SESSION['status']=$data['status'];
            $_SESSION['level']=$data['level'];

            header("location:panel-admin.php");
        }elseif($data['level']=="staff"){
            session_start();
            $_SESSION['email']=$data['email'];
            $_SESSION['password']=$data['password'];
            $_SESSION['nama_sekolah']=$data['nama_sekolah'];
            $_SESSION['status']=$data['status'];
            $_SESSION['level']=$data['level'];

            header("location:panel-staff.php");
        }else{
        echo'<script>alert("Login gagal")</script>';
        echo'<br>';
		echo'<meta http-equiv="refresh" content="0;url=form-login-instansi.php">';
        }}else{
        echo'<script>alert("Login gagal")</script>';
        echo'<br>';
		echo'<meta http-equiv="refresh" content="0;url=form-login-instansi.php">'
        ;}
?>