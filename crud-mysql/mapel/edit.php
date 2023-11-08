<?php
include('../database/database.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM mapel WHERE id='$id'");
    $data = mysqli_fetch_array($query);
} else {
    header('Location: .');
}
?>

<?php include('../templates/header.php') ?>

<div class="container py-5">
    <h3 class="mb-5">Edit Data Mapel</h3>

    <form action="aksi.php" method="post">
        <input type="hidden" name="action" value="edit">
        <input type="hidden" name="id" value="<?= $id ?>">

        <div class="mb-3">
            <label for="nama_mapel">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama_mapel" class="form-control" value="<?= $data['nama_mapel'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="hari">Hari</label>
            <select name="hari" id="hari" class="form-control">
                <option value="Senin" <?= $data['hari'] == 'Senin' ? 'SELECTED' : '' ?>>Senin</option>
                <option value="Selasa" <?= $data['hari'] == 'Selasa' ? 'SELECTED' : '' ?>>Selasa</option>
                <option value="Rabu" <?= $data['hari'] == 'Rabu' ? 'SELECTED' : '' ?>>Rabu</option>
                <option value="Kamis" <?= $data['hari'] == 'Kamis' ? 'SELECTED' : '' ?>>Kamis</option>
                <option value="Jumat" <?= $data['hari'] == 'Jumat' ? 'SELECTED' : '' ?>>Jumat</option>
                <option value="Sabtu" <?= $data['hari'] == 'Sabtu' ? 'SELECTED' : '' ?>>Sabtu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jam">Jam</label>
            <input type="time" name="jam" id="jam" class="form-control" value="<?= $data['jam'] ?>" required>
        </div>
        <div class="mb-3">
            <label for="nama_guru">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru" class="form-control" value="<?= $data['nama_guru'] ?>" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
            <a href="siswa.php" class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<?php include('../templates/footer.php') ?>