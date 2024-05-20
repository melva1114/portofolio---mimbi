<?php
include 'koneksi.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $sql = "SELECT * FROM crud WHERE id=$id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head>
    <title>Detail Artikel: <?php echo htmlspecialchars($row['judul']); ?></title>
    <style>

        body {
            font-family: 'Times New Roman', serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }
        .article {
            max-width: 800px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .article img {
            width: 100%;
            height: auto;
            border-radius: 5px;
        }
        .article h1 {
            text-align: center;
            font-size: 34px;
            color: #333;
        }
        .article p {
            font-size: 16px;
            line-height: 1.6;
            margin-top: 20px;
            text-align: justify;
        }
        .author {
            font-style: italic;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    <div class="article">
        <h1><?php echo htmlspecialchars($row['judul']); ?></h1>
        <img src="uploads/<?php echo htmlspecialchars($row['gambar']); ?>" alt="<?php echo htmlspecialchars($row['judul']); ?>">
        <p class="author"><strong>Nama Penulis:</strong> <?php echo htmlspecialchars($row['nama']); ?></p>
        <p><?php echo nl2br(htmlspecialchars($row['isi'])); ?></p>
    </div>
</body>
</html>
<?php
    } else {
        echo "Data tidak ditemukan.";
    }
} else {
    echo "ID tidak ditemukan.";
}

$conn->close();
?><?php
