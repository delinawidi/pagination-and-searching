<?php
require 'fung.php';

// variabel untuk navigasi serta penomoran terhadap $jumlahHalaman, $halamanAktif, dan $awalData
$jumlahHalaman = jumlahHalaman();
$halamanAktif = halamanAktif();
$awalData = awalData();

$books = pagination();

if (isset($_POST["cari"]))
{
    setcookie('keyword', $_POST["keyword"]);
    setcookie('cari', true);
    setcookie('jumlahHalamanCari', $_POST["keyword"]);
    header("Location: search.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>pagination+cari</title>
</head>

<body>

    <h1>Daftar Buku</h1>

    <!-- tombol cari -->
    <form action="" method="POST">
        <input type="text" name="keyword" size="30" placeholder="Masukkan keyword pencarian.." autocomplete="off" autofocus>
        <button type="submit" name="cari">Cari</button>
    </form>
    <br>
    <!-- Akhir tombol cari -->

    <!-- tanda << untuk navigasi -->
    <?php if ($halamanAktif > 1) : ?>
        <a href="?halaman=<?= $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>
    <!-- Akhir tanda << untuk navigasi -->

    <!-- Navigasi -->
    <?php for ($i = 1; $i <= $jumlahHalaman; $i++) : ?>
        <!-- kondisi halaman Aktif -->
        <?php if ($i == $halamanAktif) : ?>
            <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i; ?></a>
        <?php else : ?>
            <a href="?halaman=<?= $i; ?>"><?= $i; ?></a>
        <?php endif; ?>
        <!-- Akhir kondisi halaman Aktif -->
    <?php endfor; ?>
    <!-- Akhir Navigasi -->

    <!-- tanda >> untuk navigasi -->
    <?php if ($halamanAktif < $jumlahHalaman) : ?>
        <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
    <!-- Akhir tanda >> untuk navigasi -->

    <table border="1" cellspacing="0" cellpadding="10">
        <tr>
            <td>No</td>
            <td>Gambar</td>
            <td>Penulis</td>
            <td>Kategori</td>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($books as $book) : ?>
            <tr>
                <td><?= $i + $awalData; ?></td>
                <td>
                    <img src="../img/<?= $book["gambar"]; ?>">
                </td>
                <td><?= $book["penulis"]; ?></td>
                <td><?= $book["kategori"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>

</body>

</html>