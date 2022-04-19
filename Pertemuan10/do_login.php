<html>
    <head>
        <title>Membuat otentikasi user</title>
    </head>
    <body>
        <?php
        if(isset($_POST['login'])){
            $id = $_POST['ide'];
            $pwd = $_POST['pwd'];

        include('koneksi.php');

        $query = "select nama from webuser".
        "where id='$id' and pwd=md5('pwd')";
        $result = mysqli_query($conn,$query);
        $num = mysqli_num_rows($result);

        if($num==1){
            ist($nama=mysqli_fetch_array($result)
        ?>
        <h2>Secret Area</h2>
        Selamat Datang,
        <strong><?php echo $nama; ?></strong><br/>

        Ini adalah halaman yang dapat diakses oleh user yang telah terdaftar di dalam Website.
        <?
        }else{
            header("location: localhost/tugas/SetelahUts/Pertemuan10/login.php");
        }
        }
        ?>
    </body>
</html>