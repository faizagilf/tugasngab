<html>
    <head>
        <title>Membuat otentikasi user</title>
    </head>
    <body>
        <h2> Form registrasi User</h2>
        <form action="do_register.php" method="post">
            <table>
                <tr>
                    <td>ID user</td>
                    <td><input type="textfield" name="id"
                    maxlength="15" size="15"/></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><input type="textfield" name="nama"
                    maxlength="25" size="25"/></td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="pwd"
                    maxlength="15" size="25"/></td>
                </tr>
                <tr>
                    <td>$nbsp;</td>
                    <td><input type="Submit" name="daftar"
                    value="Daftar"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>