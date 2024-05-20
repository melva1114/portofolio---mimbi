<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>
    <style>
        body {
            background-color: #ff6666; /* Warna latar belakang merah */
            font-family: Arial, sans-serif;
        }
        .container {
            margin: 100px auto;
            width: 300px;
            padding: 20px;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        input[type="text"],
        input[type="password"],
        input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #ff3333; /* Warna tombol merah */
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Halaman Login</h2>
        <form action="" method="POST">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <input type="submit" value="Login" name="login">
        </form>
    </div>

<?php
if(isset($_POST['login'])) {
    include "koneksi.php";

    // Ambil data yang dikirimkan dari form login
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa apakah username dan password sesuai
    $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // Jika data ditemukan, tentukan role pengguna
        $row = $result->fetch_assoc();
        $role = $row['role'];

        // Redirect sesuai role
        if ($role == 'admin') {
            header("Location: tampil_data.php");
        } elseif ($role == 'anggota') {
            header("Location: artikelku.php");
        } else {
            echo "Role tidak valid.";
        }
    } else {
        echo "Username atau password salah.";
    }

    $conn->close();
}
?>
</body>
</html>
