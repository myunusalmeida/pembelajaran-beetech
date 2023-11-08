<?php

include('../database/database.php');

if (isset($_POST['action'])) {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];

    if ($_POST['action'] == 'tambah') {
        $query = mysqli_query($connect, "INSERT INTO siswa SET nama='$nama',
                                                    alamat='$alamat',
                                                    tanggal_lahir='$tanggal_lahir',
                                                    tempat_lahir='$tempat_lahir'
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
