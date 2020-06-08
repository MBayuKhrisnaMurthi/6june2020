<?php
require "functions.php";

    if (isset($_POST["login"])) {
        login($_POST);
    }

?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
            <?php if (isset($error)) : ?>
                <p style="color: red; font-style: italic;">Username atau Password anda salah</p>
            <?php endif; ?>
        <form action="" method="POST">
            <table border="1" cellpadding="10" cellspacing="0">
                <tr>
                    <td><label for="username">username</label></td>
                    <td><input type="text" name="username" id="username"></td>
                </tr>
                <tr>
                    <td><label for="password">password</label></td>
                    <td><input type="password" name="password" id="password"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><button type="submit" name="login">Masuk</button></td>
                </tr>
            </table>
        </form>
        Belum punya akun? <a href="register.php">Daftar</a>
    </body>
</html>