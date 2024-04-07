<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateHal ?></h1>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?= base_url('reviewer/bobot_penilaian') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('reviewer/bobot_penilaian') ?>"><?= $templateAtas ?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?= $templateJudul ?>
                </div>
                <div class="card-body">
                    <form action="<?= base_url('reviewer/bobot_penilaian') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row g-3">
                            <div class="col-md-6">
                                <label for="" class="form-label">No Aspek :</label>
                                <input type="text" id="" name="" class="form-control">
                            </div>

                            <div class="col-md-6">
                                <label for="" class="form-label">Domain :</label>
                                <select type="text" id="" name="" class="form-control"></select>
                            </div>

                            <div class="col-md-6">
                                <label for="" class="form-label">Nama Aspek :</label>
                                <input type="text" id="" name="" class="form-control">
                            </div>
                        
                            <div class="col-md-6">
                                <label for="" class="form-label">Bobot (%) : <small style="color: red;">*</small></label>
                                <input type="text" id="" name="" class="form-control">
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="<?= base_url('reviewer/bobot_penilaian') ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-toggle="modal" data-target="#cancelModal">tutup</a>
                            <button type="submit" class="btn btn-primary">simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
