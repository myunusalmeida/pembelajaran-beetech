<?php

include('../database/database.php');

$gambar = $_FILES['gambar']['name'];
$temp = $_FILES['gambar']['tmp_name'];

$angka = mysqli_num_rows(mysqli_query($connect, "SELECT * FROM galeri"));
$gambar_file = 'gambar-' . $angka + 1 . '.jpg';

$query = mysqli_query($connect, "INSERT INTO galeri SET gambar='$gambar_file'");
copy($temp, "gambar/" . $gambar_file);

if ($query) {
    header('Location: index.php?status=sukses');
} else {
    header('Location: index.php?status=gagal');
}
