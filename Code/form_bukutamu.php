<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
</head>
<body>
    <h2>Buku Tamu</h2>
    <form action="proses_bukutamu.php" method="post">
        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" maxlength="200" required><br><br>
        
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" maxlength="50" required><br><br>
        
        <label for="isi">Isi Pesan:</label><br>
        <textarea id="isi" name="isi" rows="5" required></textarea><br><br>
        
        <button type="submit">Kirim</button>
    </form>
</body>
</html>
