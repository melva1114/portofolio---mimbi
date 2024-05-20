<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <style>
        .container {
  padding: 60px 80px;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}
h1{
    font-size: 80px;
}

        .card {
            width: 300px;
            margin: 30px;
            border: 1px solid #ccc;
            padding: 10px;
        }
        .card img {
            width: 100%;
            border-radius: 5px;
            cursor: pointer; 
        }
        .navbar {
  width: 200px; /* Atur lebar navbar sesuai kebutuhan */
  position: fixed; /* Membuat navbar tetap di posisi, jika Anda ingin navbar selalu terlihat */
  top: 0; /* Atur posisi navbar di bagian atas */
  left: 0; /* Atur posisi navbar di bagian kiri */
  bottom: 0; /* Jika ingin navbar menyentuh bagian bawah */
  background-color: #f8f9fa; /* Warna latar belakang navbar */
  padding: 20px; /* Atur padding untuk ruang di dalam navbar */
}

.navbar-brand {
  font-size: 24px; /* Atur ukuran teks untuk brand */
  margin-bottom: 20px; /* Atur jarak antara brand dan menu */
}

.navbar-nav {
  list-style-type: none; /* Hapus bullet point dari daftar menu */
  padding: 0; /* Hapus padding default dari daftar menu */
}

.nav-item {
  margin-bottom: 10px; /* Atur jarak antara setiap item menu */
}

.nav-link {
  text-decoration: none; /* Hapus dekorasi tautan */
  color: blue; /* Warna teks untuk tautan */
  display: block; /* Atur agar tautan menempati lebar penuh */
}



    </style>
</head>
<body>

        <nav class="navbar">
  <div class="container">
    <a class="navbar-brand" >Artikelku</a>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="login.php">Login</a> 
        </li>
      </ul>
    </div>
  </div>
</nav>
    <div class="container">
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM crud";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo '<div class="card">';
                echo '<a href="detail_artikel.php?id='.$row['id'].'">';
                echo '<img src="uploads/'.$row['gambar'].'" alt="'.$row['judul'].'">';
                echo '</a>';
                echo '<center><h3>'.$row['judul'].'</h3></center>';
                echo '</div>';
            }
        } else {
            echo "Tidak ada data yang tersimpan.";
        }

        $conn->close();
        ?>
    </div>
    
</body>
</html>

<