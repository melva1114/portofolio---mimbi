<?php
// Mulai sesi jika belum dimulai
session_start();

// Hapus atau atur ulang data sesi yang berkaitan dengan login
$_SESSION = array();

// Hapus cookie sesi jika ada
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Hancurkan sesi
session_destroy();

// Redirect kembali ke halaman depan (front end)
header("Location: artikelku.php"); // Ubah "index.php" dengan halaman depan yang sesuai
exit;
?>
