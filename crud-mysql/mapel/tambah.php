<?php include('../templates/header.php') ?>

<div class="container py-5">
    <h3 class="mb-5">Tambah Mata Pelajaran Baru</h3>

    <form action="aksi.php" method="post">
        <input type="hidden" name="action" value="tambah">

        <div class="mb-3">
            <label for="nama_mapel">Nama Mata Pelajaran</label>
            <input type="text" name="nama_mapel" id="nama_mapel" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="hari">Hari</label>
            <select name="hari" id="hari" class="form-control">
                <option value="Senin">Senin</option>
                <option value="Selasa">Selasa</option>
                <option value="Rabu">Rabu</option>
                <option value="Kamis">Kamis</option>
                <option value="Jumat">Jumat</option>
                <option value="Sabtu">Sabtu</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="jam">Jam</label>
            <input type="time" name="jam" id="jam" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="nama_guru">Nama Guru</label>
            <input type="text" name="nama_guru" id="nama_guru" class="form-control" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan Baru</button>
            <a href="." class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>

<?php include('../templates/footer.php') ?>