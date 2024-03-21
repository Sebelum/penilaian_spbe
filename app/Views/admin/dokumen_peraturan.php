<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <ol class="row g-2 mr-0 pl-3 justify-content-between">
                <div class="ml-0">
                    <h2 class="mt-1"><?php echo $templateAtas ?></h2>
                </div>
                <div class="mt-2 mr-1">
                    <a href="<?php echo site_url('admin/tambah_dokumen') ?>" class="btn btn-success ms-auto me-3 me-lg-4 p-2">
                        tambah
                    </a>
                </div>
            </ol>

            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active"><?php echo $templateJudul ?></li>
            </ol>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table me-1"></i>
                    <?php echo $templateJudul ?>
                    
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Id peraturan</th>
                                    <th>Tanggal upload</th>
                                    <th>Kategori</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>No</th>
                                    <th>Id peraturan</th>
                                    <th>Tanggal upload</th>
                                    <th>Kategori</th>
                                    <th>Title</th>
                                    <th>Content</th>
                                    <th>File</th>
                                    <th>Action</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>Id peraturan</td>
                                    <td>Tanggal upload</td>
                                    <td>Peraturan Presiden</td>
                                    <td>Sistem Pemerintahan Berbasis Elektronik</td>
                                    <td>Peraturan Presiden Nomor 95 Tahun 2018 tentang Sistem Pemerintahan Berbasis Elektronik</td>
                                    <td>File</td>
                                    <td>
                                    <div class="modal-footer">
                                        <a href="<?php echo site_url('admin/edit_dokumen') ?>" class="btn btn-warning" data-bs-toggle="" data-bs-target=""><i class="bi bi-pencil-square"></i></a>
                                        <a href="<?= base_url('admin/delete_dokumen') ?>" type="button" class="btn btn-danger" data-bs-dismiss="modal" data-toggle="modal" data-target="#deleteModal"><i class="bi bi-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
