<?php include('../templates/header.php') ?>

<div class="container py-5">
    <h3 class="mb-5">Tambah Tugas Baru</h3>

    <form action="aksi.php" method="post">
        <input type="hidden" name="action" value="tambah">

        <div class="mb-3">
            <label for="nama_tugas">Nama Tugas</label>
            <input type="text" name="nama_tugas" id="nama_tugas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="mapel">Mata Pelajaran</label>
            <input type="text" name="mapel" id="mapel" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_tugas">Tanggal Tugas</label>
            <input type="date" name="tanggal_tugas" id="tanggal_tugas" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="tanggal_dikumpulkan">Tanggal Dikumpulkan</label>
            <input type="text" name="tanggal_dikumpulkan" id="tanggal_dikumpulkan" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="status">Status</label>
            <select name="status" id="status" class="form-select">
                <option value="Belum Selesai">Belum Selesai</option>
                <option value="Selesai">Selesai</option>
            </select>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan Baru</button>
            <a href="." class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
<?php include('../templates/footer.php') ?>