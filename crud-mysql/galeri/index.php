<?php include('../templates/header.php') ?>

<div class="container py-5">
    <h3 class="mb-5">Galeri</h3>
    <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addModal">
        Tambah Gambar
    </button>

    <div class="row mt-5"></div>

    <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Gambar</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="aksi.php" method="post" enctype="multipart/form-data">
                        <div class="mb-3">
                            <input type="file" class="form-control" name="gambar" accept="image/*">
                        </div>
                        <button class="btn btn-primary" type="submit">Simpan Gambar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include('../templates/footer.php') ?>