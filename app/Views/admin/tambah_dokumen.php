<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?= base_url('admin/dokumen_peraturan') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('admin/dokumen_peraturan') ?>"><?= $templateAtas ?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?= $templateJudul ?>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('admin/dokumen_peraturan') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row g-3">
                            <div class="col-md-3">
                                <label for="id_peraturan" class="form-label">Id Peraturan :</label>
                                <input type="text" id="id_peraturan" name="id_peraturan" class="form-control" readonly>
                            </div>

                            <div class="col-md-3">
                                <label for="tanggal" class="form-label">Tanggal :</label>
                                <input type="text" id="tanggal" name="tanggal" class="form-control" readonly>
                            </div>
                        
                            <div class="col-md-6">
                                <label for="kategori" class="form-label">Kategori: <small style="color: red;">*</small></label>
                                <input type="text" id="kategori" name="kategori" class="form-control">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="judul" class="form-label">Judul :</label>
                            <textarea class="form-control" name="judul" id="judul" rows="3"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="konten" class="form-label">Konten :</label>
                            <textarea class="form-control" name="konten" id="konten" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="file_peraturan" class="form-label">File Peraturan :</label>
                            <div class="input-group custom-file-button">
                                <label class="input-group-text"  for="inputGroupFile"><i class="bi bi-file-pdf-fill" style="color: red;"></i></label>
                                <input type="file" class="form-control" id="inputGroupFile" >
                            </div>
                        </div>


                          </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('admin/tambah_dokumen') ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-toggle="modal" data-target="#cancelModal">tutup</a>
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
