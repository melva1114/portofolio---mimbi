<!DOCTYPE html>
<html>
<head>
    <title>Tampil Data</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 3px;
        }
        .btn-delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>

<nav class="navbar">
    <div class="container">
      <a class="logout-btn" href="logout.php">Logout</a> 
    </div>
  </nav>

    <a href="form_tambah_data.html">+ Tambah Data</a>
<center><h1></h1></center>   
 <table>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Judul</th>
            <th>Gambar</th>
            <th>Isi</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';

        $sql = "SELECT * FROM crud";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            $no = 1;
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>".$no."</td>";
                echo "<td>".$row['nama']."</td>";
                echo "<td>".$row['judul']."</td>";
                echo "<td><img src='uploads/".$row['gambar']."' alt='".$row['judul']."' style='max-width: 100px; max-height: 100px;'></td>";
                echo "<td>".$row['isi']."</td>";
                echo "<td>";
                echo "<a href='update_data.php?id=".$row['id']."' class='btn'>Update</a>";
                echo "<a href='delete_data.php?id=".$row['id']."' class='btn btn-delete'>Delete</a>";
                echo "</td>";
                echo "</tr>";
                $no++;
            }
        } else {
            echo "<tr><td colspan='6'>Tidak ada data yang tersimpan.</td></tr>";
        }

        $conn->close();
        ?>
    </table>
</body>
</html>

