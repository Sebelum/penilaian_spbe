<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?= base_url('staff/indikator_spbe') ?>" class="btn btn-light ms-auto me-3 me-lg-4 p-1" data-bs-toggle="modal">
                        <i class="bi bi-box-arrow-in-left" style="font-size: 20px;"></i>
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="<?= base_url('staff/indikator_spbe') ?>"><?= $templateAtas ?></a></li>
                <li class="breadcrumb-item active"><?= $templateJudul ?></li>
            </ol>

            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?= $templateJudul ?>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('staff/indikator_spbe') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="row g-3">
                        <div class="col-md-6">
                            <label for="nama_pasien" class="form-label">Id pendukung :</label>
                            <input type="text" id="nama_pasien" name="nama_pasien" class="form-control" readonly>
                        </div>

                        <div class="col-md-6">
                            <label for="aspek" class="form-label">Aspek: <small style="color: red;">*</small></label>
                            <select id="aspek" name="aspek" class="form-control">
                                <option value="1">Kebijakan Internal Tata Kelola SPBE</option>
                                <option value="2">Perencanaan Strategis SPBE</option>
                                <option value="3">Teknologi Informasi dan Komunikasi</option>
                                <option value="4">Penyelenggara SPBE</option>                            </select>
                        </div>
                        
                        </div>

                        <div class="mb-6">
                            <label for="id_title" class="form-label">Penanggung Jawab :</label>
                            <Input class="form-control" name="id_title" id="id_title" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="aspek" class="form-label">Nama Indikator Domain Kebijakan SPBE: <small style="color: red;">*</small></label>
                            <textarea id="aspek" name="aspek" class="form-control">           
                            </textarea>
                        </div>
                        
                        
                        <div class="mb-3">
                            <label for="id_content" class="form-label">Penjelasan :</label>
                            <textarea class="form-control" name="id_content" id="id_content" rows="5"></textarea>
                        </div>

                        <div class="mb-3">
                            <label for="formFile" class="form-label">Data Pendukung :</label>
                            <input class="form-control" type="file" id="formFile">
                        </div>
                        <div class="modal-footer">
                            <a href="<?= base_url('staff/indikator_spbe') ?>" type="button" class="btn btn-secondary" data-bs-dismiss="modal" data-toggle="modal" data-target="#cancelModal">cancel</a>
                            <button type="submit" class="btn btn-primary">save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
