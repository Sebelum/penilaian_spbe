<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
    <ol class="row g-2 mr-0 pl-3 justify-content-between">
        <div class="ml-0">
            <h2 class="mt-1"><?php echo $templateAtas ?></h2>
        </div>
        <div class="mt-2 mr-1"></div>
    </ol>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                    <h6 class="m-0 font-weight-bold text-primary">Domain</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample1">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="<?php echo site_url('reviewer/domain_tambah') ?>" type="button" class="btn btn-sm btn-success float-left mr-2">
                                <i class="bi bi-plus-circle"></i>&nbsp;&nbsp;Domain
                            </a>

                            <table class="table table-bordered dataTable" id="dataTableDomain" width="100%" cellspacing="0">
                                <!-- Table Headings -->
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No Domain</th>
                                        <th style="text-align: center;">Nama Domain</th>
                                        <th style="text-align: center;">Bobot (%)</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kebijakan Internal SPBE</td>
                                        <td style="text-align: right;">13,00</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="<?php echo site_url('reviewer/edit_domain') ?>" class="btn btn-warning mx-1" data-bs-toggle="" data-bs-target="">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('reviewer/delete_domain') ?>" type="button" class="btn btn-danger" data-bs-dismiss="modal" data-toggle="modal" data-target="#deleteModal">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Total Row -->
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td style="text-align: right;">100,00</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExamplePengguna" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExamplePengguna">
                    <h6 class="m-0 font-weight-bold text-warning">Aspek</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExamplePengguna">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="<?= site_url('reviewer/aspek_tambah') ?>" class="btn btn-sm btn-success float-left mr-2">
                                <i class="bi bi-plus-circle"></i>&nbsp;&nbsp;Aspek
                            </a>

                            <table class="table table-bordered dataTable" id="dataTableAkses" width="100%" cellspacing="0">
                                <!-- Table Headings -->
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No Aspek</th>
                                        <th style="text-align: center;">Nama Aspek</th>
                                        <th style="text-align: center;">Bobot (%)</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kebijakan Internal SPBE</td>
                                        <td style="text-align: right;">13,00</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="<?php echo site_url('reviewer/edit_aspek') ?>" class="btn btn-warning mx-1" data-bs-toggle="" data-bs-target="">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('reviewer/delete_aspek') ?>" type="button" class="btn btn-danger" data-bs-dismiss="modal" data-toggle="modal" data-target="#deleteModal">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Total Row -->
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td style="text-align: right;">100,00</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExamplePengguna2" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExamplePengguna2">
                    <h6 class="m-0 font-weight-bold text-success">Indikator</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExamplePengguna2">
                    <div class="card-body">
                        <div class="table-responsive">
                            <a href="<?php echo site_url('reviewer/indikator_tambah') ?>" type="button" class="btn btn-sm btn-success float-left mr-2">
                                <i class="bi bi-plus-circle"></i>&nbsp;&nbsp;Indikator
                            </a>

                            <table class="table table-bordered dataTable" id="dataTableIndikator" width="100%" cellspacing="0">
                                <!-- Table Headings -->
                                <thead>
                                    <tr>
                                        <th style="text-align: center;">No Indikator</th>
                                        <th style="text-align: center;">Nama Indikator</th>
                                        <th style="text-align: center;">Bobot (%)</th>
                                        <th style="text-align: center;">Aksi</th>
                                    </tr>
                                </thead>
                                <!-- Table Body -->
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Kebijakan Internal Tata Kelola SPBE</td>
                                        <td style="text-align: right;">1,30</td>
                                        <td class="text-center">
                                            <div class="d-flex justify-content-center">
                                                <a href="<?php echo site_url('reviewer/edit_indikator') ?>" class="btn btn-warning mx-1" data-bs-toggle="" data-bs-target="">
                                                    <i class="bi bi-pencil-square"></i>
                                                </a>
                                                <a href="<?= base_url('reviewer/delete_indikator') ?>" type="button" class="btn btn-danger" data-bs-dismiss="modal" data-toggle="modal" data-target="#deleteModal">
                                                    <i class="bi bi-trash"></i>
                                                </a>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                                <!-- Total Row -->
                                <tfoot>
                                    <tr>
                                        <td></td>
                                        <td>Total</td>
                                        <td style="text-align: right;">100,00</td>
                                        <td></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- DataTables -->
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

<!-- DataTables Bootstrap 4 Integration -->
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>

<script>
    $(document).ready(function() {
        // Initialize DataTable
        $('#dataTableDomain').DataTable();
        $('#dataTableAkses').DataTable();
        $('#dataTableIndikator').DataTable();
    });
</script>
