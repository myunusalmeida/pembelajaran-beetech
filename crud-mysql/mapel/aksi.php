<?php

include('../database/database.php');

if (isset($_POST['action'])) {
    $nama_mapel = $_POST['nama_mapel'];
    $hari = $_POST['hari'];
    $jam = $_POST['jam'];
    $nama_guru = $_POST['nama_guru'];

    if ($_POST['action'] == 'tambah') {
        $query = mysqli_query($connect, "INSERT INTO mapel SET nama_mapel='$nama_mapel',
                                                    hari='$hari',
                                                    jam='$jam',
                                                    nama_guru='$nama_guru'
                                                ");

        if ($query) {
            header('Location: index.php?status=sukses');
        } else {
            header('Location: index.php?status=gagal');
        }
    } else if ($_POST['action'] == 'edit') {
        $id = $_POST['id'];

        $query = mysqli_query($connect, "UPDATE siswa SET nama_mapel='$nama_mapel',
                                                            hari='$hari',
                                                            jam='$jam',
                                                            nama_guru='$nama_guru'
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
