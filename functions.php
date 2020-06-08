<?php
$conn = mysqli_connect("localhost", "root", "", "6juni2020");

//stripslasher penghilang kata (/), strtolower untuk memperkecil string font
//mysqli_real_escape_string memperbolehkan icon / . $ dll

function register($data){
    global $conn;
    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn,$data["password2"]);

    //cek username sudah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
    if (mysqli_num_rows($result)) {
        echo "<script>
            alert('nama username sudah digunakan');
        </script>";
        return false;
    }

    //cek password == pasword2 sudah sama
    if ($password !== $password2) {
        echo "<script>
            alert('password tidak sama');
        </script>";
        return false;
    }

    //enkripsi password
    $password = password_hash($password, PASSWORD_DEFAULT);
    
    //simpan ke database
    mysqli_query($conn, "INSERT INTO users VALUES('','$username','$password')");
    return mysqli_affected_rows($conn);
}
 
?>