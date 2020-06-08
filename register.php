<?php
require "functions.php";

if (isset($_POST["register"])) {
    if (register($_POST) > 0) {
        echo "<script>
            alert('data berhasil ditambah');
            document.location.href='login.php';
        </script>";
    }else{
        echo "<script>
        alert('data gagal ditambah');
    </script>";
    }
}
?>
<html>
    <head>
        <title>Register</title>
    </head>
    <body>
        <h1>Register</h1>
        <form action="" method="POST">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <td><label for="username">Username</label></td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">Password</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td><label for="password">Repeat Password</label></td>
                    <td><input type="password" name="password2" id="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="register">Save</button></td>
                </tr>
            </table>
        </form>
        sudah punya akun? <a href="login.php">Masuk</a>
    </body>
</html>