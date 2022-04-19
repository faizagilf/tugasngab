<?php
$dbnama = "login_user";
$host = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($host,$username,$password,$dbnama);

If (mysqli_connect_errno()){
    echo "Koneksi ke server database gagal";
    exit();
}
?>