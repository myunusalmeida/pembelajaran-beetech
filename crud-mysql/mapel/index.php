<?php include('../templates/header.php') ?>

<div class="container py-5">
    <h3 class="mb-5">Data Mata Pelajaran</h3>

    <div class="card border-0 mt-3">
        <div class="card-body">
            <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mapel Baru</a>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Nama Mata Pelajaran</th>
                            <th>Hari</th>
                            <th>Jam</th>
                            <th>Nama Guru Pengajar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('../database/database.php');
                        $query = mysqli_query($connect, "SELECT * FROM mapel");
                        $no = 1;
                        while ($data = mysqli_fetch_array($query)) {
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nama_mapel'] ?></td>
                                <td><?= $data['hari'] ?></td>
                                <td><?= $data['jam'] ?></td>
                                <td><?= $data['nama_guru'] ?></td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="edit.php?id=<?= $data['id'] ?>" class="btn btn-sm btn-warning">Edit</a>
                                        <a href="aksi.php?action=delete&id=<?= $data['id'] ?>" class="btn btn-sm btn-danger">Hapus</a>
                                    </div>
                                </td>
                            </tr>
                        <?php
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>