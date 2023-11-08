<?php include('../templates/header.php') ?>

<div class="container py-5">
    <h3 class="mb-5">Tambah Siswa Baru</h3>

    <form action="aksi.php" method="post">
        <input type="hidden" name="action" value="tambah">

        <div class="mb-3">
            <label for="nama">Nama Siswa</label>
            <input type="text" name="nama" id="nama" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" cols="30" rows="10" class="form-control" required></textarea>
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir">Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" id="tanggal_lahir" class="form-control" required>
        </div>
        <div class="mb-3">
            <label for="tempat_lahir">Tempat Lahir</label>
            <input type="text" name="tempat_lahir" id="tempat_lahir" class="form-control" required>
        </div>

        <div class="d-flex gap-2">
            <button type="submit" class="btn btn-primary">Simpan Baru</button>
            <a href="." class="btn btn-secondary">Kembali</a>
        </div>
    </form>
</div>
<?php include('../templates/footer.php') ?>