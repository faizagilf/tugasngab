<html>
    <head>
        <title>Membuat otentikasi User</html>
    </head>
    <body>
        <h2>Status Registrasi</h2>
<?php
if (isset($_POST['daftar'])){
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $pwd = $_POST['pwd'];
    require("koneksi.php");
    var_dump($conn);
    $query = mysqli_query($connection, "INSERT into webuser(ide,nama,pwd) values('$id','$nama',md5('$pwd'))");
    $num = mysqli_affected_rows($connection);
    if($num>0){
        ?>
        </br>Selamat Anda sudah terdaftar di website kami.<br/>
        [<a href="login.php">Login</a>]
        <table>
            <tr>
                <td>ID</td>
                <td>:</td>
                <td><strong><?php echo $id; ?></strong></td>
            </tr>
            <tr>
                <td>Nama Lengkap</td>
                <td>:</td>
                <td><strong><?php echo $nama; ?></strong></td>
            </tr>
            <tr>
                <td>Password</td>
                <td>:</td>
                <td><strong><?php echo $pwd; ?></strong></td>
            </tr>
        </table>
        <?php
        }else{
        ?>
        </br>proses registrasi gagal. Silahkan Coba Lagi!<br/>
        [<a href="register.php">Kembali ke form register</a>]
        <?php
        }
    }
    ?>
    </body>
</html>
