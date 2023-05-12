<?php
    session_start();
    session_destroy();
    echo'<script>alert("anda telah keluar sistem")</script>';
    echo'<br>';
	echo'<meta http-equiv="refresh" content="0;url=../index.php">';
?>