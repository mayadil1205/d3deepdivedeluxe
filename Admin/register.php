<?php
require 'koneksi.php';

$fullname = mysqli_real_escape_string($conn, $_POST["fullname"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$institution = mysqli_real_escape_string($conn, $_POST["institution"]);
$email = mysqli_real_escape_string($conn, $_POST["email"]);
$password = password_hash($_POST["password"], PASSWORD_DEFAULT); // Hash password

$query_sql = "INSERT INTO tbl_users (fullname, username, institution, email, password)
              VALUES ('$fullname', '$username', '$institution', '$email', '$password')";

if (mysqli_query($conn, $query_sql)) {
    header("Location: login.html");
    exit; // Tambahkan exit setelah header untuk mencegah eksekusi lebih lanjut
} else {
    echo "Pendaftaran Gagal: " . mysqli_error($conn); // Perbaiki ke mysqli_error
}
?>
