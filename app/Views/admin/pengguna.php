<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- Page Heading -->
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
    <!-- Content Row -->
    <div class="row">
        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExample1" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExample1">
                    <h6 class="m-0 font-weight-bold text-primary">Permintaan</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExample1">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable" id="dataTablePermintaan" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Instansi</th>
                                        <th>Nama Instansi</th>
                                        <th>Asal Kota</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td style="border: none;">1</td>
                                        <td style="border: none;">1020</td>
                                        <td style="border: none;">Kominfo Metro</td>
                                        <td style="border: none;">Metro</td>
                                        <td style="border: none;">op_kominfo</td>
                                        <td style="border: none;">kominfo@gmail.com</td>
                                        <td style="border: none;">staff</td>
                                        <td style="border: none;">
                                            <a href="#" class="btn btn-success btn-circle">
                                                <i class="fas fa-check"></i>
                                            </a>
                                            <a href="#" class="btn btn-danger btn-circle">
                                                <i class="bi bi-x-lg"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Content Column -->
        <div class="col-xl-12 col-lg-12 mb-4">
            <!-- Area Chart -->
            <div class="card shadow mb-4">
                <!-- Card Header - Accordion -->
                <a href="#collapseCardExamplePengguna" class="d-block card-header py-3" data-toggle="collapse"
                    role="button" aria-expanded="true" aria-controls="collapseCardExamplePengguna">
                    <h6 class="m-0 font-weight-bold text-success">Daftar Pengguna</h6>
                </a>
                <!-- Card Content - Collapse -->
                <div class="collapse show" id="collapseCardExamplePengguna">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table dataTable" id="dataTableDaftarPengguna" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Kode Instansi</th>
                                        <th>Nama Instansi</th>
                                        <th>Asal Kota</th>
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Role</th>
                                        <th>Status</th>
                                        <th>Aksi</th>

                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                        <th></th>

                                    </tr>
                                </tfoot>
                                <tbody>
                                    <tr>
                                        <td style="border: none;">1</td>
                                        <td style="border: none;">1020</td>
                                        <td style="border: none;">Kominfo Metro</td>
                                        <td style="border: none;">Metro</td>
                                        <td style="border: none;">op_kominfo</td>
                                        <td style="border: none;">kominfo@gmail.com</td>
                                        <td style="border: none;">staff</td>
                                        <td style="border: none;" class="aktif">Aktif</td>
                                        <td>
                                        <a href="#" class="btn btn-danger btn-circle">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        </td>
                                    </tr>
                                </tbody>
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
        $('#dataTablePermintaan').DataTable();
        $('#dataTableDaftarPengguna').DataTable();
    });
</script>
