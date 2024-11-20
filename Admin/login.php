<?php
session_start();
require 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Gunakan prepared statement
    $query_sql = "SELECT * FROM tbl_users WHERE email = ?";
    $stmt = mysqli_prepare($conn, $query_sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if ($result) {
        if ($user = mysqli_fetch_assoc($result)) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Login berhasil
                $_SESSION['email'] = $user['email'];
                $_SESSION['user_email'] = $user['email'];
                header("Location: dashboard.php");
                exit();
            } else {
                $error = "Password salah";
            }
        } else {
            $error = "Email tidak ditemukan";
        }
    } else {
        $error = "Error pada query: " . mysqli_error($conn);
    }

    if (isset($error)) {
        echo "<center><h1>$error. Silahkan Coba Login Kembali.</h1>
              <button><strong><a href='login.html'>Login</a></strong></button></center>";
    }
}
?>
