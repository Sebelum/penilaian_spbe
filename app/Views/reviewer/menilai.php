<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <div class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h1 class="mt-1"><?= $templateAtas ?></h1>
                </div>
            </div>

            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-4">
                    <li class="breadcrumb-item"><a href="<?php echo site_url('reviewer/belum_dinilai')?>"><?= $templateHal?></a></li>
                    <li class="breadcrumb-item active"><?= $templateJudul ?></li>
                </ol>
            </nav>

            <div class="card mb-4">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <div><?php echo $templateJudul?></div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="<?= site_url('reviewer/rekap_nilai') ?>" method="POST" enctype="multipart/form-data">
                        <?= csrf_field() ?>

                        <div class="info" style="font-size: 15px;">
                            <div class="table-responsive">
                                <table class="table" width="100%" cellspacing="0">
                                    <tbody>
                                        <tr>
                                            <td style="border: none;">Kode Instansi :</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Instansi :</td>
                                        </tr>
                                        <tr>
                                            <td>Domain :</td>
                                        </tr>
                                        <tr>
                                            <td>Aspek :</td>
                                        </tr>
                                        <tr>
                                            <td>Indikator :</td>
                                        </tr>
                                        <tr>
                                            <td>Data Pendukung : 
                                                <a href=" " type="button" class="btn btn-danger"><i class="bi bi-filetype-pdf"></i></a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                        </tr>
                                    </tbody>                                
                                </table>
                            </div>

                                <ol class="breadcrumb mb-4 " style="background-color: #D0F0C0;">
                                    <li class="breadcrumb-item active " style="font-weight: bold; ">Tabel Penilaian</li>
                                </ol>

                            <div class="table-responsive">
                                <table class="table table-bordered" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center;">Tingkat</th>
                                            <th>Kriteria</th>
                                            <th style="text-align: center;">Tingkat Kematangan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td style="text-align: center;">1</td>
                                            <td>Tingkat kematangan kebijakan internal arsitektur SPBE Instansi Pusat/Pemerintah Daerah</td>
                                            <td style="text-align: center;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tingkat_kematangan_1" id="tingkat_kematangan_1_1" value="rendah">
                                                    <label class="form-check-label" for="tingkat_kematangan_1_1"></label>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="text-align: center;">2</td>
                                            <td>Tingkat kematangan kebijakan internal peta rencana SPBE Instansi Pusat/Pemerintah Daerah</td>
                                            <td style="text-align: center;">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="tingkat_kematangan_2" id="tingkat_kematangan_2_1" value="rendah">
                                                    <label class="form-check-label" for="tingkat_kematangan_2_1"></label>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                            <div class="col-md-14">
                                <label for="" class="form-label">Penjelasan :</label>
                                <textarea type="text" id="" name="" class="form-control"></textarea>
                            </div>

                            <div class="modal-footer">
                                <a href="<?= base_url('reviewer/belum_dinilai') ?>" type="button" class="btn btn-secondary">tutup</a>
                                <button type="submit" class="btn btn-primary">simpan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
</div>
