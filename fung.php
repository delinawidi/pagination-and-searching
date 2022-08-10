<?php
// Koneksi Ke Database
$conn = mysqli_connect("Localhost", "root", "", "bookstore");

// global variabel untuk $jumlahDataPerHalaman
$totalDataPerHalaman = 2;
function jumlahlDataPerHalaman() 
{
    global $totalDataPerHalaman;
    $jumlahDataPerHalaman = $totalDataPerHalaman;
    return $jumlahDataPerHalaman;
}

// fungsi tampilkan Data
function query($query)
{
    global $conn;
    $boxs = [];
    $result = mysqli_query($conn, $query);
    while ($box = mysqli_fetch_assoc($result)) {
        $boxs[] = $box;
    }
    return $boxs;
}

// fungsi tampil data yang sudah di konfigurasi untuk halaman index.php
function pagination()
{
    global $totalDataPerHalaman;
    // konfigurasi pagination
    $jumlahDataPerHalaman = $totalDataPerHalaman;
    $jumlahData = count(query("SELECT * FROM books"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    return query("SELECT * FROM books LIMIT $awalData, $jumlahDataPerHalaman");
}

// untuk $jumlahHalaman di halaman index.php
function jumlahHalaman()
{
    global $totalDataPerHalaman;
    $jumlahDataPerHalaman = $totalDataPerHalaman;
    $jumlahData = count(query("SELECT * FROM books"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);

    return $jumlahHalaman;
}

// untuk $halamanAktif di halaman index.php
function halamanAktif()
{
    global $totalDataPerHalaman;
    $jumlahDataPerHalaman = $totalDataPerHalaman;
    $jumlahData = count(query("SELECT * FROM books"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    return $halamanAktif;
}

// untuk $awalData di halaman index.php
function awalData()
{
    global $totalDataPerHalaman;
    $jumlahDataPerHalaman = $totalDataPerHalaman;
    $jumlahData = count(query("SELECT * FROM books"));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
    $awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;

    return $awalData;
}

// function menampilkan jumlah halaman link setelah tekan cari pada halaman search.php
function linkPaginationCari($keyword)
{
    global $totalDataPerHalaman;
    $jumlahDataPerHalaman = $totalDataPerHalaman;

    $cari = "SELECT * FROM books
                WHERE
                penulis LIKE '%$keyword%' OR
                kategori LIKE '%$keyword%' 
            ";

    $jumlahData = count(query($cari));
    $jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
    $halamanAktifCari = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1;


    return $jumlahHalaman;
}
