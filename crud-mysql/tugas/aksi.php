<?php

include('../database/database.php');

if (isset($_POST['action'])) {
    $nama_tugas = $_POST['nama_tugas'];
    $mapel = $_POST['mapel'];
    $tanggal_tugas = $_POST['tanggal_tugas'];
    $tanggal_dikumpulkan = $_POST['tanggal_dikumpulkan'];
    $status = $_POST['status'];

    if ($_POST['action'] == 'tambah') {
        $query = mysqli_query($connect, "INSERT INTO siswa SET nama_tugas='$nama_tugas',
                                                                mapel='$mapel',
                                                                tanggal_tugas='$tanggal_tugas',
                                                                tanggal_dikumpulkan='$tanggal_dikumpulkan',
                                                                status='$status',
                                                ");

        if ($query) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else if ($_POST['action'] == 'edit') {
        $id = $_POST['id'];

        $query = mysqli_query($connect, "UPDATE siswa SET nama='$nama',
                                                    alamat='$alamat',
                                                    tanggal_lahir='$tanggal_lahir',
                                                    tempat_lahir='$tempat_lahir'
                                                    WHERE id='$id'
                                                ");

        if ($query) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    }
} else {
    if ($_GET['action'] == 'delete') {
        $id = $_GET['id'];

        $query = mysqli_query($connect, "DELETE FROM siswa WHERE id = '$id'");

        if ($query) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    }
}
