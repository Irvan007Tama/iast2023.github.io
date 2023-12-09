<?php
// session_start();

// require 'function.php';

// if( isset($_POST["btnlogin"] ) ) {

//     $username = $_POST["username"];
//     $password = $_POST["password"];

//     $result = mysqli_query($conn, "SELECT * FROM tb_pengguna WHERE username = '$username'");
//     $cek = mysqli_num_rows($result);
//     //cek username
//     if( $cek > 0 ) {

//         //cek password
//         $row = mysqli_fetch_assoc($result);
        
//         if(password_verify($password, $row["password"]) ) {

//             // cek apakah username adalah "admin" atau "pusat"
//             if ($username === "admin") {
//                 // set session untuk admin
//                 $_SESSION["admin"] = true;
//                 echo "<script>
//                     alert('Login Berhasil sebagai Admin');
//                     window.location.href = 'admutama.php';
//                 </script>";
//                 exit;
//             } elseif ($username === "pusat") {
//                 // set session untuk pusat
//                 $_SESSION["pusat"] = true;
//                 echo "<script>
//                     alert('Login Berhasil sebagai Pusat');
//                     window.location.href = 'pusatutama.php';
//                 </script>";
//                 exit;
//             } else {
//                 $_SESSION['username']= $username;
//                 $_SESSION["login"] = true;
//                 // set session untuk pengguna non-admin dan non-pusat
//                 echo "<script>
//                     alert('Login Berhasil');
//                     window.location.href = 'alumniutama.php';
//                 </script>";
//                 exit;
//             }
//         } else {
//             echo "<script>
//                 alert('Username / Password Tidak Sesuai');
//             </script>";
//         } 
//     } else {
//         echo "<script>
//                 alert('Username / Password Tidak Sesuai');
//             </script>";
//     }
// }

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="stylelogin.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Halaman Login User</title>
</head>

<body>
    <div class="login-container">
        <div class="login-header">
            <img src="icon/iastfix.png" alt="Logo" class="logo">
            <h2>Form Login</h2>
        </div>
        <hr style="background-color: gray; border: 1px solid#000;">
        <form action="" method="post"  class="login-form" >
            <input type="text" placeholder="Username" name="username" id="username" required>
            <input type="password" placeholder="Password" name="password" id="password" required>
            <button class="btn btn-success mt-3" type="submit" name="btnlogin">LOGIN</button>
        </form>
        <div class="login-footer">
            <p>Belum Punya Akun? <a href="registrasi.php">Buat Akun Baru</a></p>
        </div>
    </div>
</body>

</html>